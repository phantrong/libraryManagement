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

Route::prefix('user/')
    ->name('user.')
    ->group(function () {
        Route::get('/register', 'UserController@showRegisterForm')->name('register');
        Route::post('/register', 'UserController@registerPost')->name('registerPost');
        Route::get('/login', 'UserController@showLoginForm')->name('login');
        Route::post('/login', 'UserController@loginPost')->name('loginPost');
        Route::get('/logout', function () {
            Auth::logout();
            return redirect()->route('user.login');
        })->name('logout');

        Route::get('/profile', 'UserController@viewProfile')->name('profile');
        Route::get('/order', 'UserController@viewListOrder')->name('order');
        Route::post('/addcart', 'ShowBookController@addCart')->name("add.cart");
        Route::post('/deletecart', 'ShowBookController@deleteCart')->name("delete.cart");
        Route::post('/changecart', 'ShowBookController@changeCart')->name("change.cart");
        Route::post('/saveorder', 'ShowBookController@saveOrder')->name("save.order");
    });

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
        Route::resource("user", "ManageUserController");
        Route::resource("data", "DataController");
        Route::resource("contact", "AdminContactController");
        Route::resource("order", "OrderAdminController");
        Route::post('order/changestatus', "OrderAdminController@changeStatusToBorrowing");
    });
