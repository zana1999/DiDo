<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/Students', 'StudentController@index')->name('students')->middleware('auth');
Route::Delete('/posts/{post}','PostsController@destroy');
Route::post('/Students','StudentController@store')->name('a');
Route::post('/Studentsfile','StudentController@import')->name('addstdfile');
Route::get('/Regroup','StudentController@grpedit');
Route::post('/Regroup','StudentController@grpupdate');

