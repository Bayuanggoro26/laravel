<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/create', [PostController::class, 'create']);

Route::post('/', [PostController::class, 'store']);

Route::get('/',[PostController::class,'index']);

Route::get('/{id}/edit',[PostController::class,'edit']);
 
Route::put('/{id}',[PostController::class,'update']);

Route::delete('/{id}', [PostController::class, 'destroy']);