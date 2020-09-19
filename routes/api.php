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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/delivery/{nodo}','DeliveryController@show');
Route::put('/delivery/{id}','DeliveryController@update');
// get stock opname header
Route::get('/stockopname','StockOpnameController@index');
Route::post('/stockopname','StockOpnameController@store');
//create kkso
Route::get('/createadjustment','StockOpnameController@createkkso');















Route::get('/siswa','SiswaController@index');
Route::get('/siswa/{id}','SiswaController@getid');
Route::post('/siswa','SiswaController@create');
Route::put('/siswa/{id}','SiswaController@update');
Route::delete('/siswa/{id}','SiswaController@delete');