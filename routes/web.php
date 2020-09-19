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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','bsp\bspprofile@index');
Route::get('/aboutme','bsp\bspprofile@aboutus');
Route::get('/service','bsp\bspprofile@service');
Route::get('/partner','bsp\bspprofile@partner');
Route::get('/products','bsp\bspprofile@products');
Route::get('/contactus','bsp\bspprofile@contactus');


Route::get('/odoo',function ()
{
    # code...
    $odoo = new \Edujugon\Laradoo\Odoo();
    $version = $odoo->version();
    return $version;

});
Route::get('/odoosession','odoosessionController@index');
Route::get('/session','odoosessionController@getsession');

Route::get('test','DeliveryController@sessionodoo');
Route::get('/delivery/{nodo}','DeliveryController@show');
Route::get('/delivery','DeliveryController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
