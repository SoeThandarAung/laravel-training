<?php

Route::get('/', 'PagesController@home');

Route::get('/about',[
 	'as' => 'home',
 	'uses' => 'PagesController@about'
]);