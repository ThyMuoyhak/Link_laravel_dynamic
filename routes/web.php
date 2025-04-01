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
        ['id' => 1, 'position' => 'Manager', 'salary' => '$1,200'],
        ['id' => 2, 'position' => 'Software Engineer', 'salary' => '$2,500'],
        ['id' => 3, 'position' => 'Data Analyst', 'salary' => '$2,000'],
        ['id' => 4, 'position' => 'Marketing Specialist', 'salary' => '$1,800'],
        ['id' => 5, 'position' => 'Sales Executive', 'salary' => '$1,500'],
        ['id' => 6, 'position' => 'HR Officer', 'salary' => '$1,400'],
        ['id' => 7, 'position' => 'Graphic Designer', 'salary' => '$1,600'],
        ['id' => 8, 'position' => 'Customer Support', 'salary' => '$1,200'],
        ['id' => 9, 'position' => 'IT Support', 'salary' => '$1,300'],
        ['id' => 10, 'position' => 'Accountant', 'salary' => '$1,700'],
    ];

    return view('jobs', ['jobs' => $jobs]); // Pass $jobs to the view
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        ['id' => 1, 'position' => 'Manager', 'salary' => '$1,200'],
        ['id' => 2, 'position' => 'Software Engineer', 'salary' => '$2,500'],
        ['id' => 3, 'position' => 'Data Analyst', 'salary' => '$2,000'],
        ['id' => 4, 'position' => 'Marketing Specialist', 'salary' => '$1,800'],
        ['id' => 5, 'position' => 'Sales Executive', 'salary' => '$1,500'],
        ['id' => 6, 'position' => 'HR Officer', 'salary' => '$1,400'],
        ['id' => 7, 'position' => 'Graphic Designer', 'salary' => '$1,600'],
        ['id' => 8, 'position' => 'Customer Support', 'salary' => '$1,200'],
        ['id' => 9, 'position' => 'IT Support', 'salary' => '$1,300'],
        ['id' => 10, 'position' => 'Accountant', 'salary' => '$1,700'],
    ];

    // Find the job by ID
    $job = collect($jobs)->firstWhere('id', $id);

    // If not found, return a 404 page
    if (!$job) {
        abort(404);
    }

    return view('job-detail', ['job' => $job]);
})->name('job.detail');


