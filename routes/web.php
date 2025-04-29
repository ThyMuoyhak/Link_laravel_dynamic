<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\StudentController;
use App\Models\Employee;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Students Routes
Route::resource('students', StudentController::class)->except(['destroy']); // Exclude destroy to avoid conflict
Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

// Basic Pages
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Jobs Routes
Route::resource('jobs', JobController::class)->except(['show']); // Exclude show to avoid conflict
Route::get('/jobs/detail/{id}', function ($id) {
    $job = Job::find($id) ?? abort(404); // Use Eloquent instead of getJobs()
    return view('job-detail', compact('job'));
})->name('job.detail');

// Employees Routes
Route::resource('employees', EmployeeController::class)->except(['show']); // Exclude show to avoid conflict
Route::get('/employees/no/{no}', function ($no) {
    $employee = Employee::where('no', $no)->first() ?? abort(404); // Use Eloquent query
    return view('employees.show', compact('employee'));
})->name('employee.show');