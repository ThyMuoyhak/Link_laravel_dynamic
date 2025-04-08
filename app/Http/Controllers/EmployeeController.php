<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the employees.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch all employees from the database
        $employees = Employee::all();

        // Pass the employee data to the view
        return view('employees.index', compact('employees'));
    }

    /**
     * Display the details of a specific employee.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Fetch the employee details by ID
        $employee = Employee::findOrFail($id);

        // Pass the employee data to the view
        return view('employees.show', compact('employee'));
    }
}
