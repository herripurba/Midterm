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
//     return view('welcome');
// });


Route::get('/', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/registration', 'RegisController@create');
Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/teacher', 'TeachersController@index');
    Route::get('/teacher/create', 'TeachersController@create');
    Route::get('/teacher/{teacher}','TeachersController@show');
    Route::post('/teacher', 'TeachersController@store');
    Route::delete('/teacher/{teacher}', 'TeachersController@destroy');
    Route::get('/teacher/{teacher}/edit', 'TeachersController@edit');
    Route::patch('/teacher/{teacher}', 'TeachersController@update');
    Route::get('/students', 'StudentsController@index');
    Route::get('/students/create', 'StudentsController@create');
    Route::get('/students/{student}','StudentsController@show');
    Route::post('/students', 'StudentsController@store');
    Route::delete('/students/{student}', 'StudentsController@destroy');
    Route::get('/students/{student}/edit', 'StudentsController@edit');
    Route::patch('/students/{student}', 'StudentsController@update');
    Route::get('/kelas', 'KelasController@index');
    Route::get('/kelas/create', 'KelasController@create');
    Route::post('/kelas', 'KelasController@store');
});