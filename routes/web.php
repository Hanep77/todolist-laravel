<?php

use App\Http\Controllers\TodoController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TodoController::class, 'index'])->middleware('auth');

Route::get('/login', [User::class, 'login'])->middleware('guest');
Route::post('/login', [User::class, 'authentication'])->middleware('guest');
Route::get('/register', [User::class, 'register'])->midleware('guest');
Route::post('/register', [User::class, 'makeUser'])->middleware('guest');
