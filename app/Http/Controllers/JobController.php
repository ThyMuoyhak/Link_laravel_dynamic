<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('user')->get(); // Eager load the user relationship for displaying user name
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
        ]);

        Job::create(array_merge($request->all(), [
            'id_user' => Auth::id(), // Associate the logged-in user's ID
        ]));

        return redirect()->route('jobs.index')->with('success', 'ការងារត្រូវបានបង្កើតដោយជោគជ័យ។');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        // Check if the logged-in user is the creator of the job
        if ($job->id_user !== Auth::id()) {
            return redirect()->route('jobs.index')->with('error', 'អ្នកមិនមានសិទ្ធិកែសម្រួលការងារនេះទេ។');
        }

        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        // Check if the logged-in user is the creator of the job
        if ($job->id_user !== Auth::id()) {
            return redirect()->route('jobs.index')->with('error', 'អ្នកមិនមានសិទ្ធិកែសម្រួលការងារនេះទេ។');
        }

        $request->validate([
            'position' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
        ]);

        $job->update($request->only(['position', 'salary'])); // Update only position and salary, preserve original id_user

        return redirect()->route('jobs.index')->with('success', 'ការងារត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ។');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        // Check if the logged-in user is the creator of the job
        if ($job->id_user !== Auth::id()) {
            return redirect()->route('jobs.index')->with('error', 'អ្នកមិនមានសិទ្ធិលុបការងារនេះទេ។');
        }

        $job->delete();

        return redirect()->route('jobs.index')->with('success', 'ការងារត្រូវបានលុបដោយជោគជ័យ។');
    }
}