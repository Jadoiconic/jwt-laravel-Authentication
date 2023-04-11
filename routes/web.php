<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Tymon\JWTAuth\Http\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('auth.register');
});
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::post('/register', 'RegisterController@register')->name('register');



Route::post('/token', [JwtController::class, 'generateToken']);
Route::post('/token/refresh', [JwtController::class, 'refreshToken']);

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::middleware([Authenticate::class])->group(function () {
    // Routes that require authentication
    
});

