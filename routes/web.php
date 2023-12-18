<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\resourceController;
use Illuminate\Support\Facades\Route;






Route::get('/',[homeController::class,'display'])->name('home');

Route::get('/home/addProduct',[homeController::class,'addProduct'])->name('home.add');

Route::get('/home/updateProduct',[homeController::class,'update'])->name('home.update');

Route::get('/home/deleteProduct',[homeController::class,'delete'])->name('home.delete');
