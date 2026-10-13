<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        $projects = Project::when($category, fn ($q) => $q->where('category', $category))
            ->latest('date')
            ->get();

        $categories = Project::select('category')->distinct()->whereNotNull('category')->pluck('category');

        return view('projects', compact('projects', 'category', 'categories'));
    }
}