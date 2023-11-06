<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//pode ser dessa forma tbm com uma única chamada

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function(){

    Route::delete('/logout', [UserController::class, 'logout']);
    Route::apiResource('/produtos',ProductController::class);

});


// Route::get('/produtos',[ProductController::class,'index']);
// Route::post('/produtos',[ProductController::class,'store']);
// Route::delete('/produtos/{id}',[ProductController::class,'destroy']);
// Route::post('/produtos/{id}',[ProductController::class,'show']);
// Route::put('/produtos/{id}',[ProductController::class,'update']);
