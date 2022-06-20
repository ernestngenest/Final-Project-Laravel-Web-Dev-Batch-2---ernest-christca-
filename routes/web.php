<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;

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
    Route::post('/register', [RegisterController::class, 'regis'])->middleware('guest');
    Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
});
