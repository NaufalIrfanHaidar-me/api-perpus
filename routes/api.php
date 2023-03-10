<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthC;
use App\Http\Controllers\BukuC;
use App\Http\Controllers\UserC;
use App\Http\Controllers\PeminjamanC;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/buku', BukuC::class)->middleware(['auth:sanctum']);
Route::apiResource('/peminjaman', PeminjamanC::class)->middleware(['auth:sanctum']);
Route::apiResource('/user', UserC::class);
Route::post('/login',[AuthC::class,'login']);

Route::get('/about', function(){
    return 'Naufal Dan Ilyas';
});

