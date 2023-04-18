<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLanguageRequest;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.languages.index')->with([
            'languages' => Language::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.languages.create')->with([
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLanguageRequest $request)
    {
        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('language-photos', 'public');  
        }

        $language = Language::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path
        ]);

        return redirect()->route('languages.index')->with('success', 'Post muvaffaqiyatli qo\'shildi!');
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
    public function edit(Language $language)
    {
        return view('backend.languages.edit')->with([
            'language' => $language,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLanguageRequest $request, Language $language)
    {
        if ($request->hasFile('photo')) {
            if (isset($language->photo)) {
                Storage::delete('public/' . $language->photo);
            }
            $path = $request->file('photo')->store('language-photos', 'public');  
        }

        $language->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path ?? null
        ]);

        return redirect()->route('languages.index')->with('success', 'O\'zgarishlar saqlandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        if(isset($language->photo)) {
            Storage::delete('public/' . $language->photo);
        }
        $language->delete();

        return redirect()->route('languages.index')->with('success', 'Post o\'chirildi!');
    }
}
