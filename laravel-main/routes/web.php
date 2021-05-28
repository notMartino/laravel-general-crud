<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@indexView') -> name('indexLink');
Route::get('/match/{id}', 'MainController@matchView') -> name('matchLink');

Route::get('/create/match', 'MainController@createMatchView') -> name('createMatchLink');
Route::post('/store/match', 'MainController@storeMatch') -> name('storeMatchLink');

Route::get('/edit/match/{id}', 'MainController@editMatchView') -> name('editMatchLink');
Route::post('/update/match/{id}', 'MainController@updateMatch') -> name('updateMatchLink');

Route::get('/delete/match/{id}', 'MainController@deleteMatch') -> name('deleteMatchLink');