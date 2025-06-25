<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return [
        'message' => 'Welcome to the dashboard',
        'status' => 'success'
    ];
});

Route::get('/profile', function () {
    return [
        'name' => 'John Doe',
        'email' => 'johndoe@test.com'
    ];
});