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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teacher/login', 'Auth\LoginController@showTeacherLoginForm');
Route::get('/student/login', 'Auth\LoginController@showStudentLoginForm');
Route::view('/teacher/index', 'teacher.index');
Route::view('/student/index', 'student.index');
//Route::get('/login/blogger', 'Auth\LoginController@showBloggerLoginForm');
//Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
//Route::get('/register/blogger', 'Auth\RegisterController@showBloggerRegisterForm');

Route::post('/teacher/login', 'Auth\LoginController@teacherLogin');
Route::post('/student/login', 'Auth\LoginController@studentLogin');
//Route::post('/login/blogger', 'Auth\LoginController@bloggerLogin');
//Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
//Route::post('/register/blogger', 'Auth\RegisterController@createBlogger');


