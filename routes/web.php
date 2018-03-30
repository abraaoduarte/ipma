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



Route::group([ 'prefix' => 'admin', 'middleware' => ['auth', 'needsRole:admin']], function() {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::group([ 'prefix' => 'admin/users', 'middleware' => ['auth', 'needsRole:Administrador']], function() {
    Route::get('dashborad', 'Manage\DashboardController@index')
        ->name('dashboard.usuarios');
});

Route::get('admin/inicio', function () {
    return view('site.admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
