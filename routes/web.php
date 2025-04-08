<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

use App\Models\Employee;

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


Route::get('/employees', function () {
    $employees = Employee::getEmployees();  // Fetch the data from the Employee model
    return view('employees.index', compact('employees'));  // Pass data to the view
});

Route::get('/employees/{no}', function ($no) {
    // Get the employee by their employee number
    $employee = collect(Employee::getEmployees())->firstWhere('no', $no) ?? abort(404);
    return view('employees.show', compact('employee')); // Pass the employee data to the view
})->name('employee.show');