<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Application;

class DashboardController extends Controller
{
    public function index()
    {
        $applications = Application::orderBy('created_at', 'desc')->get();

        return view('dashboard', compact('applications'));
        // $applications = Application::all();
        // return view('dashboard', compact('applications'));
    }
}