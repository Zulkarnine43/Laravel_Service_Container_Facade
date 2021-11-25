<?php

use Illuminate\Support\Facades\Route;

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
Add::test();
    //return view('welcome');
});


Route::get('/Scontainer', function () {

 app()->bind('hello',function (){
        return 'world';
 });
	return app()->make('hello');
});