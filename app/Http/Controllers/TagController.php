<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Newpost;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function tag(Tag $tag)
    {   
        return view('frontend.news.news')->with([
            'tag' => $tag,
            'news' => Newpost::where('news_id', $tag->id)->paginate(6),
            'recent_languages' => Language::latest()->get()->take(4),
            'categories' => Category::all(),
            'posts' => Post::latest()->get()->take(6),
            'tags' => Tag::all(),
        ]);
    }
}
