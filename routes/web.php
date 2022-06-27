<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeDesignController;
use App\Http\Controllers\InterriorDesignController;

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
    return view('Components/Home', [
        'status' => 'Home'
    ]);
})->name('home');

Route::prefix('/auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::post('/login', [LoginController::class, 'login']);
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::get('/register', [RegisterController::class, 'index']);
        Route::post('/register', [RegisterController::class, 'regis']);
    });
    Route::middleware('auth')->group(function () {
        Route::get('/Home', [DashboardController::class, 'index']);
        Route::post('/logout', [LoginController::class, 'logout']);
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::prefix('dashboard')->group(function () {
            Route::get('/materials/{id}', [MaterialController::class, 'show']);
            Route::get('/interrior/{id}', [InterriorDesignController::class, 'show']);
            Route::get('/home_designs/{id}', [HomeDesignController::class, 'show']);
        });
        Route::get('/cart/{id}', [CartController::class, 'show']);
    });
});
Route::get('/material', [MaterialController::class, 'index']);
