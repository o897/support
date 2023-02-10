<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;


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
    return view('welcome');
});

Route::get('/comment',[UserController::class,'index']);

// register routes
Route::get('/signup',[RegisterController::class,'registerForm'])->name('register.form');
Route::post('register',[RegisterController::class,'register'])->name('register');
// login routes
Route::get('/signin',[LoginController::class,'loginForm'])->name('login.form');
Route::post('/authenticate',[LoginController::class,'authenticate'])->name('authenticate');

Route::post('/logout',[LoginController::class,'logout'])->name('logout');

// User routes
Route::resource('user',UserController::class);
Route::resource('admin',AdminController::class);
Route::resource('agent',AgentController::class);


Route::resource('profile', ProfileController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
