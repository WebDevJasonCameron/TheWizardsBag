<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return 'The bag';
});

Route::get('/about', function() {
    return [
        'name'=>'John Doe',
        'email'=>'johndoe@example.com',
    ];
});
