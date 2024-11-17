<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class,'index'])->name('product.index');
Route::post('/store',[ProductController::class,'store'])->name('product.store');
Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('/{id}',[ProductController::class,'update'])->name('product.update');
Route::delete('/delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');
