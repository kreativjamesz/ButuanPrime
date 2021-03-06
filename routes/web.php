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
    return view('bp_index');
});

Auth::routes();
Route::post('/goRegister','Auth/CustomAuthController@goRegister');
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('dashboard')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function() {
  	Route::get('/', 'AdminDashboardController@index')->name('dashboard');
  	Route::resource('/property', 'AdminDashboardPropertyController');
  	Route::resource('/product', 'AdminDashboardProductController');
  	Route::resource('/category','SettingsCategoryController');
  	Route::resource('/marketplace','SettingsMarketplaceController');
});