<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManController;
use App\Http\Controllers\WomanController;
use App\Http\Controllers\PartnerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('men',[ManController::class,'index']);
Route::get('women',[WomanController::class,'index']);
Route::get('partners',[PartnerController::class,'index']);



