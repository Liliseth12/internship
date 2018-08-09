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

Route::resource('countries','CountryController');

Route::resource('brands','BrandController');

Route::resource('customers','CustomerController');

Route::resource('employees','EmployeeController');

Route::resource('departments','DepartmentController');

Route::resource('projects', 'ProjectController');

Route::resource('positions', 'PositionController');