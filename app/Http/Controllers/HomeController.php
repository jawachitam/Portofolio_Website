<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $highlights = Project::where('is_highlight', true)->latest('date')->get();

        return view('home', compact('highlights'));
    }
}