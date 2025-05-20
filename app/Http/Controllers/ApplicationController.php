<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Application;

class ApplicationController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'status' => 'nullable|string',
            'job_description' => 'nullable|string',
            'job_link' => 'nullable|url',
            'resume' => 'nullable|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('resume')) {
            // $resumePath = $request->file('resume')->store('resumes', 'public');
            // $validated['resume'] = $resumePath;

            $validated['resume_path'] = $request->file('resume')->store('resumes', 'public');
        }

        $validated['tracked_since'] = now(); // default to now if not provided

        Application::create($validated);

        return redirect()->route('dashboard')->with('success', 'Application successfully added.');

        // return redirect()->route('applications.index')->with('success', 'Application added.');
    }
}