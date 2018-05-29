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

Route::get('/mangas','MangaController@getAllMangas');
Route::get('/mangas/search','MangaController@searchMangas');
Route::get('/mangas/searchByAuthors','MangaController@searchMangasByAuthors');
Route::get('/mangas/{id}','MangaController@showManga');

Route::get('/sellers','SellerController@getAllSellers');
Route::get('/sellers/{id}','SellerController@showInformations');
Route::get('/sellers/{id}/mangas','SellerController@getAllMangas');

Route::get('/types','TypeController@getAllTypes');
Route::get('/types/{id}','TypeController@showInformations');
Route::get('/types/{id}/mangas','TypeController@getAllMangas');
