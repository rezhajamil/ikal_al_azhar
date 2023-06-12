<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majors = Major::with(['faculty'])->orderBy('name')->get();

        return view('dashboard.major.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculty = Faculty::orderBy('name')->get();

        return view('dashboard.major.create', compact('faculty'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'faculty' => ['required'],
            'name' => ['required', 'unique:majors,name'],
            'description' => ['string', 'nullable'],
        ]);

        Major::create([
            'faculty_id' => $request->faculty,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.major.index')->with('success', 'Berhasil Menambahkan Jurusan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function show(Major $major)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
    {
        $faculty = Faculty::orderBy('name')->get();

        return view('dashboard.major.edit', compact('major', 'faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Major $major)
    {
        $request->validate([
            'faculty' => ['required'],
            'name' => ['required', Rule::unique('faculties', 'name')->ignore($major->id)],
            'description' => ['string', 'nullable'],
        ]);

        $major->faculty_id = $request->faculty;
        $major->name = $request->name;
        $major->description = $request->description;
        $major->save();

        return redirect()->route('admin.major.index')->with('success', 'Berhasil Mengedit Jurusan ' . $major->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function destroy(Major $major)
    {
        $major->delete();

        return redirect()->route('admin.major.index')->with('success', 'Berhasil Menghapus Jurusan ' . $major->name);
    }

    public function get_majors(Request $request)
    {
        $majors = Major::where('faculty_id', $request->faculty)->orderBy('name')->get();

        return response()->json($majors);
    }
}
