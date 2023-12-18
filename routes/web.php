<?php

use App\Http\Controllers\homeController;

use Illuminate\Support\Facades\Route;






Route::get('/home',[homeController::class,'display'])->name('home');

Route::get('/home/addProduct',[homeController::class,'addProduct'])->name('home.add');

Route::get('/home/updateProduct/{id?}',[homeController::class,'update'])->name('home.update');

Route::delete('/home/deleteProduct/{id}',[homeController::class,'delete'])->name('home.delete');

Route::get('/home/sellProduct/{id?}',[homeController::class,'sell'])->name('home.sell');

//store a new product
Route::post('/home/store',[homeController::class,'store'])->name('home.store');

//update Existing Product
Route::post('/home/update/{id}',[homeController::class,'updateProduct'])->name('home.store')->name('product.update');
