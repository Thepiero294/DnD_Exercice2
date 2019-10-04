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

/** Fichier des routes du programme
 *
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */

// Pour afficher la page principale
Route::get('/', 'PersonnageController@index');

// Pour afficher la page des personnages
Route::get('/personnages', 'PersonnageController@index');

// Pour afficher la page de création d'un personnage
Route::get('/personnages/creer', 'PersonnageController@create');

// Pour afficher un personnage
Route::get('/personnages/editer/{personnage}', 'PersonnageController@show')->name('personnages.show');

// Pour stocker un personnage
Route::post('/personnages', 'PersonnageController@store')->name('personnages.store');

// Pour ajout d'un équipement à un personnage
Route::post('/personnages/update/{personnage}', 'PersonnageController@update')->name('personnages.update');
