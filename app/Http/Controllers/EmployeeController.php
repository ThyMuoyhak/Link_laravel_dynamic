<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no' => 'required|unique:employees,no',
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female,Other',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:employees,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee created successfully');
    }

    public function show($no)
    {
        $employee = Employee::findOrFail($no);
        return view('employees.show', compact('employee'));
    }

    public function edit($no)
    {
        $employee = Employee::findOrFail($no);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $no)
    {
        $employee = Employee::findOrFail($no);

        $validator = Validator::make($request->all(), [
            'no' => 'required|unique:employees,no,' . $employee->no . ',no',
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female,Other',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:employees,email,' . $employee->no . ',no',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully');
    }

    public function destroy($no)
    {
        $employee = Employee::findOrFail($no);
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully');
    }
}