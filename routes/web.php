<?php

Route::get('/', 'HomeController@actionIndex');
Route::get('/{slug}', 'NewsController@actionIndex');
Route::get('/archives', 'ArchiveController@actionIndex');
Route::get('/category/{categoryName}', 'NewsController@actionCategory');
Route::get('/tag/{tagName}', 'NewsController@actionTag');
