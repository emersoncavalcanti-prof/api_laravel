<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//pode ser dessa forma tbm com uma única chamada
Route::apiResource('produtos',ProductController::class);

// Route::get('/produtos',[ProductController::class,'index']);
// Route::post('/produtos',[ProductController::class,'store']);
// Route::delete('/produtos/{id}',[ProductController::class,'destroy']);
// Route::post('/produtos/detalhes',[ProductController::class,'show']);
// Route::put('/produtos/{id}',[ProductController::class,'update']);
