<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/odoo',function ()
{
    # code...
    $odoo = new \Edujugon\Laradoo\Odoo();
    $version = $odoo->version();
    return $version;

});
Route::get('test','DeliveryController@sessionodoo');
Route::get('/delivery/{nodo}','DeliveryController@show');
Route::get('/delivery','DeliveryController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
