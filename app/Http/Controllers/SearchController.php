<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $courses = Course::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('title', 'LIKE', '%' . $search . '%')
                        ->orWhere('title', 'LIKE', '%' . $search . '%')
                        ->get();
                }
            }]
        ])->paginate(4);

        return view('frontend.courses.courses', compact('courses'))->with([
            'recent_languages' => Language::latest()->get()->take(4),
            'categories' => Category::all(),
            'posts' => Post::latest()->get()->take(6),
            'tags' => Tag::all(),
        ]);
    }
}
