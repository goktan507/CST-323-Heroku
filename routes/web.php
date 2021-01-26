<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('loginForm');
});

Route::get('/register', function () {
    return view('registerForm');
});
Route::get('/products', function () {
    return view('products');
});

Route::post('/onRegister', 'registerController@index');

Route::post('/onLogin', 'loginController@index');

Route::post('/logout', 'loginController@logout');
