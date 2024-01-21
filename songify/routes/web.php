<?php

use App\Http\Controllers\a_artistController;
use App\Http\Controllers\a_indexController;
use App\Http\Controllers\a_songController;
use App\Http\Controllers\a_userController;
use App\Http\Controllers\c_homeController;
use App\Http\Controllers\c_playlistController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', [registrationController::class, 'index']);
Route::post('/register/store', [registrationController::class, 'store']);
Route::get('/login', [loginController::class, 'index']);

Route::get('/', [c_homeController::class, 'index']);
Route::get('/playlist', [c_playlistController::class, 'index']);

Route::get('/admin',[a_indexController::class,'index']);
Route::get('/admin/user',[a_userController::class,'index']);
Route::get('/admin/song',[a_songController::class,'index']);
Route::get('/admin/artist',[a_artistController::class,'index']);
Route::get('/delete/{id}',[a_userController::class,'delete']);