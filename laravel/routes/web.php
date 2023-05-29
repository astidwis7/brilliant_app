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

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function () {
    return view('soal');
})->name('student.test')->middleware('login_auth');;

Route::get('/journey', function () {
    return view('index3');
})->name('participan.journey');

Route::get('/teaching', function () {
    return view('index2');
})->name('participan.teaching');

Route::get('/about', function () {
    return view('index4');
})->name('participan.about');

Route::get('/account', function () {
    return view('index6');
})->name('participan.account');

Route::get('/account_', function () {
    return view('index7');
})->name('participan.account_');

Route::get('/pemula', function () {
    return view('course-detail-1');
})->name('student.test_1');

Route::get('/menengah', function () {
    return view('course-detail-2');
})->name('student.test_2');

Route::get('/mahir', function () {
    return view('course-detail-3');
})->name('student.test_3');

Route::get('/participan/create', 'ParticipanController@create')->name('participan.create_');
Route::post('/participan', 'ParticipanController@store')->name('participan.store');
Route::get('/participan', 'ParticipanController@index')->name('participan.index');
// Route::get('/participan/journey', 'ParticipanController@journey')->name('participan.journey');
// Route::get('/participan/teaching', 'ParticipanController@teaching')->name('participan.teaching');
// Route::get('/participan/about', 'ParticipanController@about')->name('participan.about');
Route::get('/participan_', 'ParticipanController@index_')->name('participan.index_')->middleware('login_auth');
Route::get('/participan/{participan}', 'ParticipanController@show')->name('participan.show');
Route::get('/participan/{participan}/edit', 'ParticipanController@edit')->name('participan.edit');
Route::patch('/participan/{participan}', 'ParticipanController@update')->name('participan.update');
Route::delete('/participan/{participan}', 'ParticipanController@destroy')->name('participan.destroy');

Route::get('/login', 'ParticipanController@login')->name('login.index');
Route::get('/logout', 'ParticipanController@logout')->name('login.logout');
Route::post('/login__', 'ParticipanController@process')->name('login.process');

// Route::get('/student/test', 'StudentController@test')->name('student.test');
Route::post('/student/store', 'StudentController@store')->name('student.store');
Route::get('/student/test_', 'StudentController@test_')->name('student.test_');






