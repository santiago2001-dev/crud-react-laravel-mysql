<?php

use App\Http\Controllers\Api\productController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/product',[productController::class,'index']);  
Route::get('/product/{id}',[productController::class,'show']);
Route::post('product',[productController::class,'store']);
Route::put('/product/{id}',[productController::class,'update']);
Route::delete('product/{id}',[productController::class,'destroy']);