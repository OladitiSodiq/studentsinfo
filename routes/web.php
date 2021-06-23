<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('download/{id}',[
  'as' => 'download', 'uses' => 'stimetable@downloadImage']);
Route::resource('download','stimetable');

Route::get('/', 'account@home');




Route::get('/register', function () {

  return view('register');
})->name('register');

Route::post('/register', 'account@register');


Route::get('/login', function () {
  if (Session::get('logged_in')) {
    return redirect('/');
  }
  return view('login');
})->name('login');

Route::post('/login', 'account@login');
// Route::get('stimetable', 'stimetable@pickTimetable');
Route::get('stimetable', 'stimetable@pickTimetable');
Route::get('lecturerTimetable', 'stimetable@lecturerTimetable');


  Route::get('/enter_timetable', 'stimetable@enter_timetablev');
  Route::post('/enter_timetable', 'stimetable@insertTimetable');
  // Route::get('stimetable', 'stimetable@pickTimetable');
  

  Route::get('/uploadMaterial', 'stimetable@uploadMaterialv');
  Route::post('/uploadMaterial', 'stimetable@uploadMaterial');

  Route::get('/profile', 'account@profile');
  // Route::post('/uploadMaterial', 'stimetable@uploadMaterial');
  Route::get('/viewMaterial', 'stimetable@viewMaterialst');

  Route::get('/viewMaterial/{id}', 'stimetable@downloadImage');

  Route::get('/viewMaterialstl', 'stimetable@viewMaterialstl');
  
  
  // Route::get('stimetable', 'stimetable@pickTimetable');
  
  Route::post('/viewMaterial', 'stimetable@viewMaterialst');

  Route::get('viewMaterial/{id}',[
    'as' => 'viewMaterial', 'uses' => 'stimetable@downloadImage']);
// Route::resource('books','BookController');
  // Route::get('/enter_timetable', 'stimetable@enter_timetablev');
  // Route::post('/enter_timetable', 'stimetable@insertTimetable');

// Route::get('/viewMaterial', 'stimetable@downloadImage')->middleware('isStudent');

Route::get('/logout', 'account@logout');
