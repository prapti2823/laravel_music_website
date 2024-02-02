<?php

use App\Http\Controllers\a_artistController;
use App\Http\Controllers\a_indexController;
use App\Http\Controllers\a_songController;
use App\Http\Controllers\a_userController;
use App\Http\Controllers\c_ArtistController;
use App\Http\Controllers\c_feedbackController;
use App\Http\Controllers\c_homeController;
use App\Http\Controllers\c_playlistController;
use App\Http\Controllers\c_SongController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\a_adminLogin;
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

//Authentication Routes
Route::get('/register', [registrationController::class, 'index']);
Route::post('/register/store', [registrationController::class, 'store']);
Route::get('/loginPage', [loginController::class, 'index']);
Route::post('/auth', [loginController::class, 'auth']);
Route::get('/logout', [loginController::class, 'logout']);


//Client side Routes
Route::get('/', [c_homeController::class, 'index']);
Route::get('/playlist', [c_playlistController::class, 'index']);
Route::get('/artist', [c_ArtistController::class, 'index']);
Route::get('/feedback', [c_feedbackController::class, 'index']);
Route::get('/songs', [c_SongController::class, 'index']);
Route::get('/creator', function () {
    return view('Client Side.about');
});
Route::post('/feedback/store', [c_feedbackController::class, 'store']);

//admin index page and user records
Route::post('/adminlogin/auth',[a_adminLogin::class,'auth']);
Route::get('/adminlogin',[a_adminLogin::class,'index']);
Route::get('/adminPage', [a_indexController::class, 'index']);
Route::get('/user', [a_userController::class, 'index']);
Route::get('/adminartist', [a_artistController::class, 'index']);
Route::get('/delete/{userid}', [a_userController::class, 'delete']);
Route::post('/store', [a_songController::class, 'store']);
Route::get('/feedbackdata', [c_feedbackController::class, 'feedbackdata']);


//Admin side song details and crud operations
Route::get('/song', [a_songController::class, 'index']);
Route::get('/add', function () {
    return view('Admin Side.Song.add');
});
Route::get('/delete/{id}', [a_songController::class, 'delete']);
Route::get('/edit/{id}', [a_songController::class, 'edit']);
Route::post('/update', [a_songController::class, 'update']);

//Admin side Artist details and crud operations
Route::post('/astore', [a_artistController::class, 'store']);
Route::get('/delete/{id}', [a_artistController::class, 'delete']);
Route::get('/edit/{id}', [a_artistController::class, 'edit']);
Route::post('/a_update', [a_artistController::class, 'update']);
Route::get('/add/artist', function () {
    return view('Admin Side.Artist.add');
});