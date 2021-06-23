<?php

namespace App\Http\Controllers;
use Session;
use DB;
use App\accounts;

use Illuminate\Http\Request;

class account extends Controller
{
    //

    public function profile(Request $req)
    {
  
      if (!Session::get('logged_in')) {
        return redirect('/login');
      }
  
      $user = DB::table('students')->where('name', Session::get('name'))->first();
      // dd($user);
      return view('profile', compact('user'));
    }

    public function home(Request $request)
    {
      Session::put('home', 'home');
      return view('index');

    }
    
  public function logout()
  {
    Session::flush();
    return redirect('/');
  }



    public function login(Request $request)
    {
  

    $this->validate($request, [
      'matricNo' => 'required',
      'password' => 'required'
    ]);

    $username = $request['matricNo'];
    $form_password = $request['password'];

    // dd($username);

    $students = DB::table('students')
      ->where('matricNo', $username)
      ->first();

    // dd($user);
    if ($students == '') {
      Session::flash('flash', 'Invalid email/password combination');
      return redirect()->route('login');
    }
  
    $db_password = $students->password;

    $password_match = password_verify($form_password, $db_password);

    if ($password_match) {
      Session::put('logged_in', true);
    
        Session::put('role',$students->role);
     


      
      Session::put('name', $students->name);
      Session::put('username', $students->name);
      Session::put('user_id', $students->id);
      Session::put('class', $students->level);
      
      return redirect('/');
    } else {
      Session::flash('flash', 'Invalid username/password combination');
      return redirect()->route('login');
    }
  }

  public function register(Request $request)
  {
    $this->validate($request, [
      'name' => 'required ',
      'mobileNo' => 'required ',
      'matricNo' => 'required  | unique:students',
      'email' => 'required',
      'password' => 'required | same:password2',
      'level' => 'required',
      'address' => 'required',
      'image' => 'required',
      
    ]);


    $uploadedFile = $request->file('image');
    $extension = $uploadedFile->getClientOriginalExtension();
    $filename  = $request->matricNo . time() . '.' . $extension;
    $destination = public_path('public/uploads');
    $uploadedFile->move($destination, $filename);
    
    $students = new accounts();
    $students->name = $request->name;
    $students->mobileNo = $request->mobileNo;
    $students->matricNo = $request->matricNo;
    $students->email = $request->email;
    $students->password = password_hash($request->password, PASSWORD_BCRYPT);
    $students->level = $request->level;
    $students->address = $request->address;


    
  

    $students->image = $filename;
    $students->role = 1000;
    if ($students->save()) {
      Session::flash('flash', 'Registration successful, You can now login.');
      Session::put('name', $students->name);
      Session::put('role', $students->role);
      return redirect('/login');
    } else {
      Session::flash('flash', 'Registration Un successful');
      return redirect('/');
    }
  }
  }
