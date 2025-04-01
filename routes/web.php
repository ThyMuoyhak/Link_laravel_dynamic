<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    $jobs = [
        ['position' => 'Manager', 'salary' => '$1,200'],
        ['position' => 'Software Engineer', 'salary' => '$2,500'],
        ['position' => 'Data Analyst', 'salary' => '$2,000'],
        ['position' => 'Marketing Specialist', 'salary' => '$1,800'],
        ['position' => 'Sales Executive', 'salary' => '$1,500'],
        ['position' => 'HR Officer', 'salary' => '$1,400'],
        ['position' => 'Graphic Designer', 'salary' => '$1,600'],
        ['position' => 'Customer Support', 'salary' => '$1,200'],
        ['position' => 'IT Support', 'salary' => '$1,300'],
        ['position' => 'Accountant', 'salary' => '$1,700'],
    ];

    return view('jobs', ['jobs' => $jobs]); // Pass $jobs to the view
});


