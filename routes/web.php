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

Route::get('/', 'NavController@home');
Route::get('/list', 'NavController@list');
Route::get('/addnewanimal', 'NavController@addnewanimal');
Route::get('/listspecies', 'NavController@listspecies');
Route::get('/addnewspecies', 'NavController@addnewspecies');

Route::post('/addnewanimalbdd', 'ActionController@addnewanimalbdd');
Route::post('/deleteanimal', 'ActionController@deleteanimal');
Route::post('/updateanimal','NavController@updateanimal');
Route::post('/updateanimalbdd','ActionController@updateanimalbdd');

Route::post('/addnewspeciesbdd', 'ActionController@addnewspeciesbdd');
Route::post('/deletespecie', 'ActionController@deletespecie');
Route::post('/updatespecie','NavController@updatespecie');
Route::post('/updatespeciebdd','ActionController@updatespeciebdd');
