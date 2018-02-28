<?php
$url = parse_url('//'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$request = explode('/', trim(str_replace($_SERVER['SCRIPT_NAME'], '',$url['path']),'/'));

Route::process($request);