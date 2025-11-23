<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', 
    ['name' => '<b>Damiano</b>']
); // passing data to view
});

Route::get('/welcome', function () {
    return view('welcome'); // return a view
});

Route::get('/hello', function () {
    return 'Hello';
})->name('hello'); // named route

Route::get('/hallo', function () {
    return redirect()->route('hello'); // redirect to named route
}); 

Route::get('/greet/{name}', function ($name) {
    return "Hello, {$name}!"; // route with parameter
});

// php artisan route:list to get all routes

Route::fallback(function () {
    return 'The page you are looking for does not exist.'; // fallback route catch all unmatched routes
});