<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/produtos',[ProductController::class,'index']);
Route::post('/produtos',[ProductController::class,'store']);
Route::delete('/produtos/{id}',[ProductController::class,'destroy']);
Route::post('/produtos/detalhes',[ProductController::class,'show']);
Route::put('/produtos/{id}',[ProductController::class,'update']);
