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

Route::group(['prefix' => 'manage', 'middleware' => ['auth', 'admin']], function () {

    Route::post('products/variants', 'Admin\ProductController@variants');
    Route::resource('administrators', 'Admin\AdministratorController');
    Route::resource('products', 'Admin\ProductController');
    Route::resource('customers', 'Admin\CustomerController');

    Route::get('/', 'Admin\DashboardController@index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        echo 'user';
    });
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
