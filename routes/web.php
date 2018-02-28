<?php

Route::get('xyz', function () {
    return view('welcome');
});

Route::get('controller', 'ShowController@index');