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
Route::get('/template', function () {
    return view('First');
});
Route::get('/', function () {
    return view('create');
});
Route::get('/view_client', function () {
    return view('view_client');
});
Route::post('/actioncreate','ClientController@createClient');
Route::post('/editServer','ServerController@EditServer');
Route::post('/saveUpdate','ServerController@saveUpdate');
Route::post('/NewServer','ServerController@NewServer');
Route::post('/createServer','ServerController@createServer');
Route::get('/ok', function () {
    return view('Begin');
});