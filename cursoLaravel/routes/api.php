<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::get('/v1', function () {
    $retorno = json_decode( file_get_contents("http://sandbox-api.lomadee.com/v3/15919060171233dcd2be1/offer/_search?sourceId=36589281&keyword=pesquisa%20") );
    return [$retorno];
});