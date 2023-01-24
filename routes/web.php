<?php

use Illuminate\Support\Facades\Route;
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
*/

// Route('/',[UserController::class,'index']);

// Route User
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[UserController::class, 'userHome'])->name("home");
});


// register routes
Route::get('/signup',[RegisterController::class,'registerForm'])->name('signup.form');
Route::post('register',[RegisterController::class,'register'])->name('register');
// login routes
Route::get('/signin',[LoginController::class,'loginForm'])->name('login');
Route::post('/authenticate',[LoginController::class,'authenticate'])->name('authenticate');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

 

Route::resource('user',UserController::class);
Route::resource('admin',AdminController::class);
Route::resource('agent',AgentController::class);


Route::get('/', function () {
    return view('welcome');
});
