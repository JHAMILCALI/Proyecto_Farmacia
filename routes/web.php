<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nombre = "J M";
    return view('welcome',['nombre' => $nombre]);	
});
