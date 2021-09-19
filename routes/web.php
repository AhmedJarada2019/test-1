<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use app\Http\Controllers\PageController;


Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/news_detalse', [HomeController::class,'news_detalse'])->name('news_detalse');
Route::get('/contact_us', [HomeController::class,'contact_us'])->name('contact_us');

Auth::routes();
