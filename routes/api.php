<?php

use App\Services\TokenService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/tokenize', [\App\Http\Controllers\TokenController::class, 'tokenize']);

Route::post('/detokenize', [\App\Http\Controllers\TokenController::class, 'detokenize']);
