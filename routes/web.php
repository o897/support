<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\LoginController;
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
// */
Route::get('/', function () {
    return view('welcome');
});



// register routes
Route::get('/signup',[RegisterController::class,'registerForm'])->name('register.form');

Route::post('/register',[RegisterController::class,'register'])->name('register');
// login routes
Route::get('/signin',[LoginController::class,'loginForm'])->name('login.form');
Route::post('/authenticate',[LoginController::class,'authenticate'])->name('authenticate');

Route::post('/logout',[LoginController::class,'logout'])->name('logout');

// User routes
Route::resource('user',UserController::class)->middleware('role:user');
Route::resource('admin',AdminController::class)->middleware('role:admin');;

Route::delete('/task/{id}',[AdminController::class,'removeTask']);
Route::post('/task',[AdminController::class,'task']);

// I know it looks bad was having trouble with the template's css and Js
Route::get('/new',[AdminController::class,'create']);
// 
Route::resource('agent',AgentController::class)->middleware('role:agent');
 



//Comments and replies
Route::get('/comments', [HomeController::class, 'index'])->name('comments');
Route::get('/replies/{id}', [HomeController::class, 'replies'])->name('replies');
Route::delete('/reply/{id}',[HomeController::class,'destroy'])->name('reply.destroy');
Route::post('/reply/{id}',[HomeController::class,'store'])->name('reply.store');

// Auth::routes();

