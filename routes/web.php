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
require 'admin.php';

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/electshop', 'ElectController@index')->name('electshop');
Route::get('/electshopgrid', 'ShopgridController@index')->name('electshopgrid');
//Products Controller


// This route conflict with Admin/ProductController 
Route::resource('productdetails', 'ProductDetailsController');
//Admin Route
// Route::get('/admin', 'AdminAreaController@index')->name('admin' );
Route::resource('users', 'UserManagementController');
Route::resource('profile', 'UserProfileController');
