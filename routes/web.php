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

Route::post('/auth/login', [LoginController::class, 'login'])->middleware('guest');
Route::get('/auth/register', [RegisterController::class, 'index']);
Route::get('/auth/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/auth/register', [RegisterController::class, 'regis']);
