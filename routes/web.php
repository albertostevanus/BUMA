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
    return view('auth/login');
});

Auth::routes();

Route::resource('employees', 'EmployeesController');
Route::post('/employee/create', 'EmployeesController@create');
Route::get('/employee/{id}/edit', 'EmployeesController@edit');
Route::post('/employee/{id}/update', 'EmployeesController@update');