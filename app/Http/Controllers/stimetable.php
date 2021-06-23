<?php

namespace App\Http\Controllers;
use App\monday;
use App\tuesday;
use App\wedsday;
use App\thursday;
use App\friday;
use App\materials;
use Session;

use Illuminate\Http\Request;

class stimetable extends Controller
{
    //
    public function pickTimetable(Request $req)
    {
     
  
      $class = session()->get('class');
      $monday = monday::where('class', $class)->get();
      $tuesday = tuesday::where('class', $class)->get();
      $wedsday = wedsday::where('class', $class)->get();
      $thursday = thursday::where('class', $class)->get();
      $friday = friday::where('class', $class)->get();
     
      return view('timetable', compact('monday', 'tuesday', 'wedsday', 'thursday', 'friday'));
    }
    public function lecturerTimetable(Request $req)
    {
     
  
      $class = session()->get('name');
      $monday = monday::where('lecturerName', $class)->get();
      $tuesday = tuesday::where('lecturerName', $class)->get();
      $wedsday = wedsday::where('lecturerName', $class)->get();
      $thursday = thursday::where('lecturerName', $class)->get();
      $friday = friday::where('lecturerName', $class)->get();
     
      return view('lectuerTimetable', compact('monday', 'tuesday', 'wedsday', 'thursday', 'friday'));
    }

    public function insertTimetable(Request $request)
    {
     
  
      $this->validate($request, [
        'class' => 'required ',
        'satrt' => 'required | unique:' . $request->day .'',
        'end' => 'required  | unique:' . $request->day .'',
      
        'course' => 'required | unique:' . $request->day .'',
      ]);
  
    
    

        if  ( $request->day == "monday"){
          $students = new monday();
     
          $students->class = $request->class;
          $students->satrt = $request->satrt;
          $students->end = $request->end;
          $students->lecturerName =session()->get('name');
          $students->course = $request->course;
        
          if ($students->save()) {
            Session::flash('flash', 'Registration successful');
            return redirect('/enter_timetable');
          } else {
            Session::flash('flash', 'Registration Un successful');
            return redirect('/enter_timetable');
          }
        }
        elseif( $request->day == "tuesday"){
          $students = new tuesday();
     
          $students->class = $request->class;
          $students->satrt = $request->satrt;
          $students->end = $request->end;
           $students->lecturerName = session()->get('name');
          $students->course = $request->course;
         
          if ($students->save()) {
            Session::flash('flash', 'Registration successful');
            return redirect('/enter_timetable');
          } else {
            Session::flash('flash', 'Registration Un successful');
            return redirect('/enter_timetable');
          }
        }
     
        elseif( $request->day == "wedsday"){
          $students = new wedsday();
     
          $students->class = $request->class;
          $students->satrt = $request->satrt;
          $students->end = $request->end;
           $students->lecturerName = session()->get('name');
          $students->course = $request->course;
         
          if ($students->save()) {
            Session::flash('flash', 'Registration successful');
            return redirect('/enter_timetable');
          } else {
            Session::flash('flash', 'Registration Un successful');
            return redirect('/enter_timetable');
          }
        }
        elseif( $request->day == "thursday"){
          $students = new thursday();
     
          $students->class = $request->class;
          $students->satrt = $request->satrt;
          $students->end = $request->end;
           $students->lecturerName = session()->get('name');
          $students->course = $request->course;
         
          if ($students->save()) {
            Session::flash('flash', 'Registration successful');
            return redirect('/enter_timetable');
          } else {
            Session::flash('flash', 'Registration Un successful');
            return redirect('/enter_timetable');
          }
        }
        elseif( $request->day == "friday"){
          $students = new friday();
     
          $students->class = $request->class;
          $students->satrt = $request->satrt;
          $students->end = $request->end;
           $students->lecturerName =session()->get('name');
          $students->course = $request->course;
         
          if ($students->save()) {
            Session::flash('flash', 'Registration successful');
            return redirect('/enter_timetable');
          } else {
            Session::flash('flash', 'Registration Un successful');
            return redirect('/enter_timetable');
          }
        }

      
    }

    public function enter_timetablev(Request $request)
    {
      return view('enter_timetable');
    }
    
    
    public function uploadMaterialv(Request $request)
    {
      return view('uploadMaterial');
    }

    public function uploadMaterial(Request $request)
    {
     
  
      $this->validate($request, [
       
        'course' => 'required ',
        'level' => 'required ',
        // 'file' => 'required|mimes:pdf,docx,mp4|max:8589934592 ',
        
       
      ]);
  
          $material = new materials();
     
          $uploadedFile = $request->file('file');
          $extension = $uploadedFile->getClientOriginalExtension();
          $filename  = $request->course . time() . '.' . $extension;
          $destination = public_path('public/uploads');
          $uploadedFile->move($destination, $filename);


          $material->lecturerName = session()->get('username');
          $material->course = $request->course;
          $material->level = $request->level;
          $material->file = $filename ;
        
          if ($material->save()) {
            Session::flash('flash', 'file uploaded successful');
            return view('/uploadMaterial');
          } else {
            Session::flash('flash', 'file uploaded Un successful');
            return redirect('/uploadMaterial');
          }
        
       
      
    }
    
    public function viewMaterialst(Request $request)
    {
    
      $level = session()->get('class');
      $mymaterials = materials::where('level', $level)->get();
    
      return view('viewMaterial', compact('mymaterials'));
    }

    public function viewMaterialstl(Request $request)
    {
    
      $level = session()->get('name');
      $mymaterials = materials::where('lecturerName', $level)->get();
    
      return view('viewMaterial', compact('mymaterials'));
    }


  //   public function downloadImage($imageId){

  //     $book_cover = materials::where('id', $imageId)->firstOrFail();
  //     $path =  public_path('public/uploads'). $book_cover->file;
  //     return response()->download($path, $book_cover
  //              ->original_filename, ['Content-Type' => 'pdf']);
  //  }


   public function downloadImage($imageId){
    $book_cover = materials::where('id', $imageId)->firstOrFail();
    $path = public_path('public/uploads/'). $book_cover->file;
    return response()->download($path, $book_cover
             ->original_filename, ['Content-Type' => $book_cover->mime]);
 }
}
