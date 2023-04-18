<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function videos()
    {
        return view('frontend.videos.videos')->with([
            'videos' => Video::latest()->paginate(6),
            'categories' => Category::all(),
            'recent_courses' => Course::latest()->get()->take(4),
            'tags' => Tag::all(),
            'posts' => Post::latest()->get()->take(4),
        ]);
    }

    public function download($video)
    {
        $data = DB::table('videos')->where('id', $video)->first();
        $path = public_path('storage/'. $data->video);
        return response()->download($path);   
    }
}
