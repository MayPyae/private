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
Route::get('/', 'FrontendController@index')->name('main');
Route::get('about', 'PageController@about') -> name('about');
Route::get('post', 'PageController@post') -> name('post');
Route::get('contact', 'PageController@contact') -> name('contact');
Route::get('dashboard','BackendController@dashboard') -> name('dashboard');

Route::resource('mentors','MentorController');
Route::resource('teachers','TeacherController');
Route::resource('feedbacks','FeedbackController');
Route::resource('preregisters', 'PreRegisterController');
Route::resource('students', 'StudentController');


ROute::resource('degrees','DegreeController');
ROute::resource('subjects','SubjectController');
ROute::resource('grades','GradeController');
ROute::resource('guardians','GuardianController');

ROute::resource('students','StudentController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
