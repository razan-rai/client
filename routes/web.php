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
// client routers
$router->group(['namespace' => 'client'], function () use ($router)
	{
	
	
	//client resource
	Route::resource('client', 'ClientController', ['only' => ['index', 'store', 'update', 'destroy']]);
});