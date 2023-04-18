<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use App\Models\Newpost;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Category $category)
    {   
        return view('frontend.languages.languages')->with([
            'category' => $category,
            'languages' => Language::where('category_id', $category->id)->latest()->paginate(6),
            'recent_courses' => Course::latest()->get()->take(4),
            'categories' => Category::all(),
            'news' => Newpost::latest()->get()->take(6),
            'tags' => Tag::all(),
        ]);
    }
}
