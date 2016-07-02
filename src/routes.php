<?php

Route::group(['namespace' => 'Marvision\Laravel\Controllers','prefix' => 'marvision'],function(){
	Route::get('/','MarvisionController@index')->name('marvision_home_path');
});