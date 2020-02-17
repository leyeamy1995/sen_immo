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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
   return view('layout.default');
});

Route::get('/index', function () {
   return view('clients.index');
});

Route::get('/create', function () {
   return view('gestionnaires.create');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//definir les routes pour le client
Route::get('/clients/create','ClientController@create')->name('clients.create');
Route::get('/clients/edit/{id}','ClientController@edit')->name('clients.edit');
Route::post('/clients/update','ClientController@update')->name('clients.update');
Route::get('/clients/delete/{id}','ClientController@delete')->name('clients.delete');
Route::post('/clients/persist','ClientController@persist')->name('clients.persist');
Route::get('/clients/list','ClientController@list')->name('clients.list');
Route::resource('clients', 'ClientController');


Route::get('/users/create','UserController@create')->name('users.create');
Route::get('/users/edit/{id}','UserController@edit')->name('users.edit');
Route::post('users/update','UserController@update')->name('users.update');
Route::get('/users/delete/{id}','UserController@delete')->name('users.delete');
Route::post('/users/persist','UserController@persist')->name('users.persist');
Route::get('/users/list','UserController@list')->name('users.list');
Route::resource('users', 'UserController');


Route::get('/gestionnaires/create','GestionnaireController@create')->name('gestionnaires.create');
Route::get('/gestionnaires/edit/{id}','GestionnaireController@edit')->name('gestionnaires.edit');
Route::post('gestionnaires/update','GestionnaireController@update')->name('gestionnaires.update');
Route::get('/gestionnaires/delete/{id}','GestionnaireController@delete')->name('gestionnaires.delete');
Route::post('/gestionnaires/persist','GestionnaireController@persist')->name('gestionnaires.persist');
Route::get('/gestionnaires/list','GestionnaireController@list')->name('gestionnaires.list');
Route::resource('gestionnaires', 'GestionnaireController');


Route::get('/biens/create','BienController@create')->name('biens.create');
Route::get('/biens/edit/{id}','BienController@edit')->name('biens.edit');
Route::post('/biens/update','BienController@update')->name('biens.update');
Route::get('/biens/delete/{id}','BienController@delete')->name('biens.delete');
Route::post('/biens/persist','BienController@persist')->name('biens.persist');
Route::get('/biens/list','BienController@list')->name('biens.list');
Route::resource('biens', 'BienController');

Route::get('/terrains/create','TerrainController@create')->name('terrains.create');
Route::get('/terrains/edit/{id}','TerrainController@edit')->name('terrains.edit');
Route::post('/terrains/update','TerrainController@update')->name('terrains.update');
Route::get('/terrains/delete/{id}','TerrainController@delete')->name('terrains.delete');
Route::post('/terrains/persist','TerrainController@persist')->name('terrains.persist');
Route::get('/terrains/list','TerrainController@list')->name('terrains.list');
Route::resource('terrains', 'TerrainController');

Route::get('/maisons/create','MaisonController@create')->name('maisons.create');
Route::get('/maisons/edit/{id}','MaisonController@edit')->name('maisons.edit');
Route::post('/maisons/update','MaisonController@update')->name('maisons.update');
Route::get('/maisons/delete/{id}','MaisonController@delete')->name('maisons.delete');
Route::post('/maisons/persist','MaisonController@persist')->name('maisons.persist');
Route::get('/maisons/list','MaisonController@list')->name('maisons.list');
Route::resource('maisons', 'MaisonController');


Route::get('/appartements/create','AppartementController@create')->name('appartements.create');
Route::get('/appartements/edit/{id}','AppartementController@edit')->name('appartements.edit');
Route::post('/appartements/update','AppartementController@update')->name('appartements.update');
Route::get('/appartements/delete/{id}','AppartementController@delete')->name('appartements.delete');
Route::post('/appartements/persist','AppartementController@persist')->name('appartements.persist');
Route::get('/appartements/list','AppartementController@list')->name('appartements.list');
Route::resource('appartements', 'AppartementController');

Route::get('/ventes/create','VenteController@create')->name('ventes.create');
Route::get('/ventes/edit/{id}','VenteController@edit')->name('ventes.edit');
Route::post('/ventes/update','VenteController@update')->name('ventes.update');
Route::get('/ventes/delete/{id}','VenteController@delete')->name('ventes.delete');
Route::post('/ventes/persist','VenteController@persist')->name('ventes.persist');
Route::get('/ventes/list','VenteController@list')->name('ventes.list');
Route::resource('ventes', 'VenteController');

Route::get('/locations/create','LocationController@create')->name('locations.create');
Route::get('/locations/edit/{id}','LocationController@edit')->name('locations.edit');
Route::post('/locations/update','LocationController@update')->name('locations.update');
Route::get('/locations/delete/{id}','LocationController@delete')->name('locations.delete');
Route::post('/locations/persist','LocationController@persist')->name('locations.persist');
Route::get('/locations/list','LocationController@list')->name('locations.list');
Route::resource('locations', 'LocationController');

Route::resource('reglements', 'ReglementController');