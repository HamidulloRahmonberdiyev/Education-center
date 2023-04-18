<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Teacher;
use App\Models\Video;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function about()
    {
        return view('frontend.about.about')->with([
            'posts' => Post::latest()->get()->take(3),
            'courses' => Course::all(),
            'categories' => Category::all(),
            'teachers' => Teacher::all(),
            'videos' => Video::latest()->get()->take(1),
        ]);
    }

    public function show(Post $post)
    {
        return view('frontend.about.show')->with([
            'post' => $post,
            'recent_courses' => Course::latest()->get()->take(4),
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }

    public function viewAll()
    {
        $posts = Post::latest()->paginate(6);

        return view('frontend.about.viewAll')->with([
            'posts' => $posts,
        ]);
    }
}
