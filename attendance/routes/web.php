<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('day5', function () {
    return view('day5/index');
});

Route::get('/greet', function () {
    $name = 'Andrew';
    return view('greet', ['name' => $name, 'course' => 'Laravel']); 
});