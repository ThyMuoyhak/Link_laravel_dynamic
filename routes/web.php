<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Basic Pages
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

// Jobs Listing
Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::getJobs()]); // Use the static method from the model
})->name('jobs.list');

// Job Detail
Route::get('/jobs/{id}', function ($id) {
    $job = collect(Job::getJobs())->firstWhere('id', $id) ?? abort(404);
    return view('job-detail', compact('job'));
})->name('job.detail');
