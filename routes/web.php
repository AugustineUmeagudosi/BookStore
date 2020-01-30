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

Auth::routes();

//dashboards
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/author', 'AuthorController@index')->name('author')->middleware('author');
Route::get('/user', 'UserController@index')->name('user')->middleware('user');

//resources
Route::resources([
    'admin' => 'AdminController',
    'author' => 'AuthorController',
    'user' => 'UserController'
]);
