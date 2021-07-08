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
//đường dẫn đến trang chủ localhost.../
Route::get('/', function () {
    return view('welcome');
});
//đường dẫn đến trang quản lý sách localhost.../book
Route::get('/book', function () {
    return view('ManageBook.index');
});
//đường dẫn đến trang quản lý người mượn localhost.../user
Route::get('/user', function () {
    return view('ManageUser.index');
});
//đường dẫn đến trang thống kê localhost.../showdata
Route::get('/showdata', function () {
    return view('ShowData.index');
});
