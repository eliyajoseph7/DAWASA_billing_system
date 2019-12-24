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
Route::get('/activities', function () {
    return view('activities');
});

// Route::get('/1', function () {
//     return view('billshome');
// });
Route::get('/addStaff', function () {
    return view('addStaff');
});
Route::get('/addCustomer', function () {
    return view('addCustomer');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
// Route::get('/1', 'RegionsController@index2');

Route::any('/search', 'searchController@search')->name('search');
Route::any('/staff', 'staffsController@staffs')->name('staffs');
Route::get('/customer', 'customerController@customer')->name('customer');
Route::post('/insertstf', 'staffsController@add');
Route::get('/delete/{id}', 'staffsController@delete');
Route::get('/edit/{id}', 'staffsController@edit');
Route::get('/view/{id}', 'staffsController@view');
Route::put('/update/{id}', 'StaffsController@update');

Route::post('/insert', 'customerController@add');
Route::get('/kinondoni', 'regionsController@kino');
Route::get('/ilala', 'regionsController@ilala');
Route::get('/temeke', 'regionsController@tmk');
Route::get('/kibaha', 'regionsController@kiba');
Route::get('/bagamoyo', 'regionsController@baga');
Route::get('/tasks', 'TasksController@display');
Route::post('/task', 'TasksController@add');
Route::post('/task/{id}', 'TasksController@delete');

Route::get('/quality', 'QualityController@quality');
Route::get('/addConsumer', 'ConsumerController@add');

