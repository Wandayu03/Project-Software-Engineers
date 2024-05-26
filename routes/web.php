<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DescProController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register/page', [RegisterController::class, 'Register'])->name('register');
Route::post('/make/account', [RegisterController::class, 'MakeAccount']);
Route::get('/login/page', [LoginController::class, 'Login'])->name('login');;
Route::post('/submit/login', [LoginController::class, 'authenticate'])->name('submitlogin');
Route::get('/home/page', [HomeController::class, 'Home'])->name('home');
Route::get('/cart/page', [CartController::class, 'Cart'])->name('cart');

Route::get('/fashion/category', [CategoryController::class, 'Fashion'])->name('fashion');
Route::get('/furniture/category', [CategoryController::class, 'Furniture'])->name('furniture');
Route::get('/plant/category', [CategoryController::class, 'Plant'])->name('plant');
Route::get('/recycle/category', [CategoryController::class, 'Recycle'])->name('recycle');
Route::get('/free/category', [CategoryController::class, 'Free'])->name('free');

Route::get('/desc/pro/1', [DescProController::class, 'DescPro1'])->name('descpro1');
Route::get('/desc/pro/2', [DescProController::class, 'DescPro2'])->name('descpro2');
Route::get('/desc/pro/3', [DescProController::class, 'DescPro3'])->name('descpro3');
Route::get('/desc/pro/4', [DescProController::class, 'DescPro4'])->name('descpro4');
Route::get('/desc/pro/5', [DescProController::class, 'DescPro5'])->name('descpro5');
Route::get('/desc/pro/6', [DescProController::class, 'DescPro6'])->name('descpro6');

Route::get('/profile/account', [ProfileController::class, 'Profile'])->name('profile');