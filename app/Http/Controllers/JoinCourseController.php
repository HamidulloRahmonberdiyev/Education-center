<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJoinCourseRequest;
use App\Models\Joincourse;
use Illuminate\Http\Request;

class JoinCourseController extends Controller
{
    public function joincourses(StoreJoinCourseRequest $request)
    {
       
        $joincourse = Joincourse::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->back();

    }
}
