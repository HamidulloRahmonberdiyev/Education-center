<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Joincourse;
use App\Models\Language;
use App\Models\Newpost;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard')->with([
            'comments' => Comment::all(),
            'courses' => Course::all(),
            'languages' => Language::all(),
            'joincourses' => Joincourse::all(),
        ]);
    }
}
