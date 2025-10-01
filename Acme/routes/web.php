<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanosController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' =>'dashboard'],function(){
    Route::get('/', function () {
        return view('Admin.dashboard');
    });
    Route::get('/planos',[PlanosController::class,'getPlanos']);
    Route::post('/planos',[PlanosController::class,'store']);
    Route::delete('/planos/{id}',[PlanosController::class,'destroy']);
});