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

Route::get('/', 'VehiculeController@index');


Route::get('/vehicules', 'VehiculeController@index');
Route::get('/vehicules/{vehicule}', 'VehiculeController@show');
Route::get('/addVehicule', 'VehiculeController@create');
Route::post('/addVehicule', 'VehiculeController@store');
Route::post('/editVehicule/{id}', 'VehiculeController@update');
Route::get('/editVehicule/{id}', 'VehiculeController@edit');
Route::get('/deleteVehicule/{id}', 'VehiculeController@delete');

Route::get('/marques', 'MarqueController@index');
Route::get('/marques/{marque}', 'MarqueController@show');
Route::get('/addMarque', 'MarqueController@create');
Route::post('/addMarque', 'MarqueController@store');
Route::post('/editMarque/{id}', 'MarqueController@update');
Route::get('/editMarque/{id}', 'MarqueController@edit');
Route::get('/deleteMarque/{id}', 'MarqueController@delete');

Route::get('/modeles', 'ModeleController@index');
Route::get('/modeles/{modele}', 'ModeleController@show');
Route::get('/addModele', 'ModeleController@create');
Route::post('/addModele', 'ModeleController@store');
Route::get('/editModele/{id}', 'ModeleController@edit');
Route::post('/editModele/{id}', 'ModeleController@update');
Route::get('/deleteModele/{id}', 'ModeleController@delete');

