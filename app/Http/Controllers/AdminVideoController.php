<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.videos.index')->with([
            'videos' => Video::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoRequest $request)
    {
        if($request->hasFile('video')) {
            $path = $request->file('video')->store('videos', 'public');  
        }

        $video = Video::create([
            'title' => $request->title,
            'content' => $request->content,
            'video' => $path,
        ]);

        return redirect()->route('videos.index')->with('success', 'Post muvaffaqiyatli qo\'shildi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('backend.videos.edit')->with([
            'video' => $video,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVideoRequest $request, Video $video)
    {
        if ($request->hasFile('video')) {
            if (isset($video->video)) {
                Storage::delete('public/' . $video->video);
            }
            $path = $request->file('video')->store('videos', 'public');  
        }

        $video->update([
            'title' => $request->title,
            'content' => $request->content,
            'video' => $path,
        ]);

        return redirect()->route('videos.index')->with('success', 'Post muvaffaqiyatli qo\'shildi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        if(isset($video->video)) {
            Storage::delete('public/' . $video->video);
        }
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Post muvaffaqiyatli o\'chirildi!');
    }
}
