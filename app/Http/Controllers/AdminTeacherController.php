<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTeacherController extends Controller  
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.teachers.index')->with([
            'teachers' => Teacher::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('teacher-photos', 'public');  
        }

        $teacher = Teacher::create([
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $path ?? null
        ]);

        return redirect()->route('teachers.index')->with('success', 'Ustoz muvaffaqiyatli qo\'shildi!');
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
    public function edit(Teacher $teacher)
    {
        return view('backend.teachers.edit')->with([
            'teacher' => $teacher,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTeacherRequest $request, Teacher $teacher)
    {
        if ($request->hasFile('photo')) {
            if (isset($teacher->photo)) {
                Storage::delete('public/' . $teacher->photo);
            }
            $path = $request->file('photo')->store('teacher-photos', 'public');  
        }

        $teacher->update([
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $path ?? null
        ]);

        return redirect()->route('teachers.index')->with('success', 'O\'zgarishlar saqlandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        if(isset($teacher->photo)) {
            Storage::delete('public/' . $teacher->photo);
        }
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
