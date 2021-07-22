<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'ShowBookController@welcome')->name('home');
Route::get('/welcome', 'ShowBookController@welcome')->name('welcome');
Route::get('/welcome/singlebook/{id}', 'ShowBookController@singlebook')->name('welcome.singlebook');
Route::post('/upload', 'UploadController@index')->name('upload');

Auth::routes();

Route::prefix('admin/')
    ->name('admin.')
    ->group(function () {
        Route::get('/login', 'AdminController@showLoginForm')->name('login');
        Route::post('/login', 'AdminController@loginPost')->name('loginPost');
        Route::get('/logout', function () {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        })->name('admin.logout');

        Route::middleware('admin')->group(function () {
        });
        Route::resource("book", "BookController");
        Route::resource("user", "UserController");
        Route::resource("data", "DataController");

        Route::resource("order", "OrderAdminController");
        Route::post('order/changestatus', "OrderAdminController@changeStatusToBorrowing");
    });
