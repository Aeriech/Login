<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm']);

// Handle login form submission
Route::post('/login', [LoginController::class, 'login']);

// Show registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm']);

// Handle registration form submission
Route::post('/register', [RegisterController::class, 'register']);


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

