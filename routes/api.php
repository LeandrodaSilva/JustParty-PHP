<?php

use Illuminate\Http\Request;
//
///*
//|--------------------------------------------------------------------------
//| API Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register API routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| is assigned the "api" middleware group. Enjoy building your API!
//|
//*/
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//
//Route::middleware('auth:api')->get('/login', function (Request $request) {
//    return $request->user();
//});


use Illuminate\Support\Facades\Route;

Route::apiResource('dogs', 'api\DogController');
Route::get('/login', function (Request $request){
    return [
        'usarname' => 'Álvaro YmaGay',
        'password' => 'FullStack DevOps'
    ];
});
