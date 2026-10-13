<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        $experiences = Experience::when($category, fn ($q) => $q->where('category', $category))
            ->orderByDesc('year')
            ->get();

        $categories = Experience::select('category')->distinct()->whereNotNull('category')->pluck('category');

        return view('experience', compact('experiences', 'category', 'categories'));
    }
}