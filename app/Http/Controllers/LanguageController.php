<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use App\Models\Newpost;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function languages()
    {
        return view('frontend.languages.languages')->with([
            'languages' => Language::latest()->paginate(6),
            'recent_courses' => Course::latest()->get()->take(4),
            'categories' => Category::all(),
            'news' => Newpost::latest()->get()->take(6),
            'tags' => Tag::all(),
        ]);
    }

    public function show(Language $language)
    {
        return view('frontend.languages.show')->with([
            'language' => $language,
            'recent_courses' => Course::latest()->get()->take(4),
            'categories' => Category::all(),
            'news' => Newpost::latest()->get()->take(6),
            'tags' => Tag::all(),
        ]);
    }

    public function change_locale($locale)
    {
        App::setLocale($locale);

        Session::put('locale', $locale);
        
        return redirect()->back();
    }
}
