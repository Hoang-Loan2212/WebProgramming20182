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

Route::get('/', function () {
    return view('index');
});


Route::get('db', function () {
	$dbQ = DB::table("users") -> get();
	return json_encode($dbQ);
});
Route::post('dangnhap','LoginController@dangnhap')->name('dangnhap');

/*
* Get view 
*/
Route::get("login", function(){
	return view('login');
	// return File::get(public_path() . '/views/login.html'); 
});
Route::get('register',['as'=>'register','uses'=>'Auth\RegisterController@test']);
Route::get("register", function(){
	return view('register');
	// return File::get(public_path() . '/views/register.html'); 
});

Route::get("userAdmin", function(){
	return view('Users');
});

Route::get("courseAdmin", function(){
	return view('Courses');
});

/*
* signin and signup using JWT 
*/
Route::post('auth/register', 'UserController@register');
Route::post('auth/login', 'UserController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user-info', 'UserController@getUserInfo');
});


Route::get('/profile', function(){
	return view("userprofile");
	// return File::get(public_path() . '/views/profile.blade.php');
});
Route::get('/index', function(){
	return view("userindex");
});

//Route::get('courses',['as'=>'courses','uses'=>'UserController@courses']);
//Route Admin
Route::get('index',['as'=>'index','uses'=>'AdminController@index']);
Route::get('user',['as'=>'user','uses'=>'AdminController@user']);
Route::get('course',['as'=>'course','uses'=>'AdminController@course']);

