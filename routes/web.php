<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/login', [UserController::class,'login'])->name('login')->middleware(['alreadyLoggedIn','preventBackHistory']);
Route::post('/login', [UserController::class,'doLogin']);

Route::get('/register', [UserController::class,'register'])->middleware(['alreadyLoggedIn','preventBackHistory']);
Route::post('/register', [UserController::class,'doRegister']);

Route::get('/', function () {
    return view('user.dashboard');
})->middleware('auth');

Route::get('/logout', [UserController::class,'logout']);
