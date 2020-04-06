<?php

use Illuminate\Support\Facades\Auth;
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
    return view('dashboard');
});

Route::get('/auth/login', function () {
    return redirect('/');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::group(['prefix' => 'admin'], function () {

        // Role Group
        Route::group(['prefix' => 'role'], function () {
            Route::get('/', 'AdminController@role');

        });

    });
});
