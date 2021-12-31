<?php

    Route::get('/', 'MovieController@index');
    Route::get('/movies/create', 'MovieController@create');
    Route::get('/movies/{movie}', 'MovieController@show');
    Route::post('/movies', 'MovieController@store');
