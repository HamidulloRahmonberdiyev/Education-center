<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Newpost;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function news()
    {
        return view('frontend.news.news')->with([
            'news' => Newpost::latest()->paginate(6),
            'recent_courses' => Course::latest()->get()->take(4),
            'categories' => Category::all(),
            'posts' => Post::latest()->get()->take(6),
            'tags' => Tag::all(),
        ]);
    }

    public function show(Newpost $new)
    {
        return view('frontend.news.show')->with([
            'new' => $new,
            'recent_courses' => Course::latest()->get()->take(4),
            'categories' => Category::all(),
            'posts' => Post::latest()->get()->take(6),
            'tags' => Tag::all(),
        ]);
    }
}
