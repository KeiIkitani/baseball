<?php
Auth::routes();
Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'MovieController@index');
    Route::post('/movies', 'MovieController@store');
    Route::get('/movies/create', 'MovieController@create');
    Route::get('/movies/{movie}', 'MovieController@show');
    Route::put('/movies/{movie}', 'MovieController@update');
    Route::delete('/movies/{movie}', 'MovieController@delete');
    Route::get('/movies/{movie}/edit', 'MovieController@edit');
    Route::post('/comments', 'CommentController@store');
});   
    Route::get('/home', 'HomeController@index')->name('home');
    




