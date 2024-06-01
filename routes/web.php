<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
// Route::get('/', function () {
//     return view('test');
// });

Route::get('home', [MyController::class,'home'])->name('home');
Route::get('aboutUs', [MyController::class,'about'])->name('about');
Route::get('shop', [MyController::class,'shop'])->name('shop');
Route::get('blog', [MyController::class,'blog'])->name('blog');
