<?php

Route::group(['namespace' => 'MoinDhattiwala\CountryStateCity\Http\Controllers'], function () {
    Route::get('/csc', 'CountryStateCityController@index');
    Route::get('/country', 'CountryStateCityController@country');
    Route::get('/state/{id}', 'CountryStateCityController@state');
    Route::get('/city/{id}', 'CountryStateCityController@city');
});
