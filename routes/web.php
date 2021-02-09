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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('/', 'PageController');

Auth::routes(["register" => false]);

Route::get('/home', 'HomeController@index')->name('home');

//Administrador
//Gestión de normas CONVENIN
Route::resource('comites_tecnicos', 'CommitteController');
Route::resource('doc_comites', 'DocumentController');
//Gestión de leyes
Route::resource('regulaciones', 'RegulationController');
Route::resource('doc_legales', 'LegalDocumentController');
