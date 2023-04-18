<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses()
    {
        return view('frontend.courses.courses')->with([
            'courses' => Course::latest()->paginate(6),
            'recent_languages' => Language::latest()->get()->take(4),
            'categories' => Category::all(),
            'posts' => Post::latest()->get()->take(6),
            'tags' => Tag::all(),
        ]);;
    }

    public function show(Course $course)
    {
        return view('frontend.courses.show')->with([
            'course' => $course,
            'recent_languages' => Language::latest()->get()->take(4),
            'categories' => Category::all(),
            'posts' => Post::latest()->get()->take(6),
            'tags' => Tag::all(),
        ]);
    }
}
