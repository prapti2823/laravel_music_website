<?php

use App\Http\Controllers\a_artistController;
use App\Http\Controllers\a_indexController;
use App\Http\Controllers\a_songController;
use App\Http\Controllers\a_userController;
use App\Http\Controllers\c_ArtistController;
use App\Http\Controllers\c_feedbackController;
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
Route::get('/loginPage', [loginController::class, 'index']);
Route::post('/auth',[loginController::class,'auth']);

Route::get('/', [c_homeController::class, 'index']);
Route::get('/playlist', [c_playlistController::class, 'index']);
Route::get('/artist', [c_ArtistController::class, 'index']);
Route::get('/feedback', [c_feedbackController::class, 'index']);

Route::get('/adminPage', [a_indexController::class, 'index']);
Route::get('/user', [a_userController::class, 'index']);
Route::get('/song', [a_songController::class, 'index']);
Route::get('/admin/artist', [a_artistController::class, 'index']);
Route::get('/delete/{id}', [a_userController::class, 'delete']);
Route::post('/store',[a_songController::class,'store']);
Route::get('/add',function(){
    return view('Admin Side.Song.add');
      
});
Route::get('/delete/{id}', [a_songController::class, 'delete']);

Route::get('/edit/{id}',[a_songController::class,'edit']);

Route::post('/update',[a_songController::class,'update']);
Route::get('/songs',function(){
    return view('Client Side.song');
});