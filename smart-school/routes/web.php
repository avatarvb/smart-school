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
    return view('welcome');
});

Auth::routes();


// all routes with auth middleware
Route::group(['middleware' => ['auth']], function () {
    //routes permission-denied
    Route::get('/permission-denied', 'UserController@permissionDenied')->name('nopermission');


    // user  routes with authentication
    Route::get('/home', 'HomeController@index')->name('user-home');


    // admin routes check-admin
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/admin', 'AdminController@index')->name('admin-home');
    });
});
