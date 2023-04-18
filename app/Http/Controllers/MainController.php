<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use App\Models\Teacher;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('main')->with([
            'categories' => Category::all(),
            'courses' => Course::all(),
            'recent_courses' => Course::latest()->get()->take(3),
            'recent_languages' => Language::latest()->get()->take(3),
            'teachers' => Teacher::all(),
        ]);
    }
}
