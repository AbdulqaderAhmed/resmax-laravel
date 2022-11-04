<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ClientsController;
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

Route::controller(AdminsController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/login', 'customeLogin')->name('user.login');
    Route::post('/register', 'customRegister')->name('user.register');
});



Route::controller(AdminsController::class)->middleware('auth')->group(function () {

    Route::controller(ClientsController::class)->group(function () {
        Route::get('/', 'index')->middleware('noBack');
    });

    Route::get('/logout', 'logout')->name('logout');
});
