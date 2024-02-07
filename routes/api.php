<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    echo 'first place';
    return 'first place';
});

Route::post('/tokens/create', function (Request $request) {
    var_dump($request->user());
    exit();
    $token = $request->user()->createToken($request->token_name);
 
    return ['token' => $token->plainTextToken];
});

