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



php artisan make:controller name
php artisan serve
*/

Route::get('/blog','HomeController@blogpage')->name('x');
Route::get('/viewData','DashBoardController@viewData')->name('viewData');
Route::get('/viewOne','DashBoardController@viewOne')->name('viewOne');
Route::get('/order','HomeController@orderpage')->name('order');
Route::get('/dashboard','DashBoardController@Dashboard')->name('dashboard');
Route::get('/create','DashBoardController@create')->name('createForm');
Route::post('/dataCreate','DashBoardController@dataCreate');
Route::post('/dataUpdate','DashBoardController@dataUpdate');
Route::get('/data_delete/{id}','DashBoardController@data_delete')->name('data_delete');
Route::get('/data_update/{id}','DashBoardController@data_update')->name('data_update');
Route::get('/data_view/{id}','DashBoardController@data_view')->name('data_view');












