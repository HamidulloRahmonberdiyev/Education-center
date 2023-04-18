<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewRequest;
use App\Models\Newpost;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.news.index')->with([
            'news' => Newpost::latest()->paginate(10),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create')->with([
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewRequest $request)
    {
        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('new-photos', 'public');  
        }

        $news = Newpost::create([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path
        ]);

        if (isset($request->tags)) {
            foreach ($request->tags as $tag) {
                $news->tags()->attach($tag);
            }
        }

        return redirect()->route('news.index')->with('success', 'Post muvaffaqiyatli qo\'shildi!');
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
    public function edit(Newpost $news)
    {
        return view('backend.news.edit')->with([
            'news' => $news,
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNewRequest $request, Newpost $news)
    {
        if ($request->hasFile('photo')) {
            if (isset($news->photo)) {
                Storage::delete('public/' . $news->photo);
            }
            $path = $request->file('photo')->store('new-photos', 'public');

        }

        $news->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path ?? null
        ]);

        if (isset($request->tags)) {
            foreach ($request->tags as $tag) {
                $news->tags()->attach($tag);
            }
        }

        return redirect()->route('news.index')->with('success', 'O\'zgarishlar saqlandi!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newpost $news)
    {
        if(isset($news->photo)) {
            Storage::delete('public/' . $news->photo);
        }
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Post o\'chirildi!');
    }
}
