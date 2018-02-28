<?php

function view($blade) {
    echo file_get_contents(__DIR__.'/../resource/views/'.$blade.'.blade.php');
}

function dd($value) {
    dump($value);
    die();
}

function dump($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}