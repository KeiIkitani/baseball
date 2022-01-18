<?php

    Route::get('/', 'MovieController@index'); 
    Route::post('/movies', 'MovieController@store');
    Route::get('/movies/create', 'MovieController@create');
    Route::get('/movies/{movie}', 'MovieController@show');
    Route::post('/comments', 'CommentController@store');
    
   
    
