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

Route::get('/','App\Http\Controllers\IndexController@index')->name('index');

Route::get('/publication','App\Http\Controllers\PublicationController@index')->name('publication');

Route::get('/member','App\Http\Controllers\MemberController@index')->name('member');

Route::get('/login','App\Http\Controllers\LoginController@index')->name('login');

Route::post('/login','App\Http\Controllers\LoginController@login');

Route::get('/logout','App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('/manager','App\Http\Controllers\ManagerController@index')->name('manager');

Route::get('/albumdir','App\Http\Controllers\ManagerController@albumdir')->name('albumdir');

Route::get('/albumupload','App\Http\Controllers\ManagerController@albumupload')->name('albumupload');

Route::post('/albumupload','App\Http\Controllers\ManagerController@albumupload_db');

Route::post('/albumdelete','App\Http\Controllers\ManagerController@albumdelete_db');

Route::post('/albumupdate_preview','App\Http\Controllers\ManagerController@albumupdate')->name('albumupdate');

Route::post('/albumupdate','App\Http\Controllers\ManagerController@albumupdate_db');

Route::get('/yeardir','App\Http\Controllers\ManagerController@yeardir')->name('yeardir');

Route::get('/yearcreate','App\Http\Controllers\ManagerController@yearcreate')->name('yearcreate');

Route::post('/yearcreate','App\Http\Controllers\ManagerController@yearcreate_db');

Route::post('/yearupdate_preview','App\Http\Controllers\ManagerController@yearupdate')->name('yearupdate');

Route::post('/yearupdate','App\Http\Controllers\ManagerController@yearupdate_db');

Route::post('/yeardelete','App\Http\Controllers\ManagerController@yeardelete_db')->name('yeardelete');

Route::get('/memberdir','App\Http\Controllers\ManagerController@memberdir')->name('memberdir');

Route::get('/membercreate','App\Http\Controllers\ManagerController@membercreate')->name('membercreate');

Route::post('/membercreate','App\Http\Controllers\ManagerController@membercreate_db');

Route::post('/memberupdate_preview','App\Http\Controllers\ManagerController@memberupdate')->name('memberupdate');

Route::post('/memberupdate','App\Http\Controllers\ManagerController@memberupdate_db');

Route::post('/memberdelete','App\Http\Controllers\ManagerController@memberdelete_db');

Route::get('/publicationdir','App\Http\Controllers\ManagerController@publicationdir')->name('publicationdir');

Route::get('/publicationcreate','App\Http\Controllers\ManagerController@publicationcreate')->name('publicationcreate');

Route::post('/publicationcreate','App\Http\Controllers\ManagerController@publicationcreate_db');

Route::post('/publicationupdate_preview','App\Http\Controllers\ManagerController@publicationupdate')->name('publicationupdate');

Route::post('/publicationupdate','App\Http\Controllers\ManagerController@publicationupdate_db');

Route::post('/publicationdelete','App\Http\Controllers\ManagerController@publicationdelete_db');