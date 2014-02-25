<?php

Route::get('/', 'HomeController@index');
Route::resource('home', 'HomeController@create');

?> 