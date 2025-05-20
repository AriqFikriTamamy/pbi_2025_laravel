<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Application;

class AddJobApplicationController extends Controller
{
    public function index()
    {
        return view('add-job-application');
    }
}