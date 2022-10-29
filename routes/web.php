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

Route::get('/', function () {
    return view('auth/login-page');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login.page');
Route::get('login/{driverProvider}', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('social.login');
Route::get('login/{driverProvider}/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback'])->name('social.callback');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register.page');

Route::get('/auth/resetPassword', [App\Http\Controllers\Auth\ResetPasswordController::class, 'index'])->name('resetPassword.page');

