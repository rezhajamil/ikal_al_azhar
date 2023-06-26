<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculty = Faculty::orderBy('name')->get();

        return view('dashboard.faculty.index', compact('faculty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.faculty.create');
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
            'name' => ['required', 'unique:faculties,name'],
            'description' => ['string', 'nullable'],
        ]);

        Faculty::create($request->all());

        return redirect()->route('admin.faculty.index')->with('success', 'Berhasil Menambahkan Fakultas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        return view('dashboard.faculty.edit', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        $request->validate([
            'name' => ['required', Rule::unique('faculties', 'name')->ignore($faculty->id)],
            'description' => ['string', 'nullable'],
        ]);

        $faculty->name = $request->name;
        $faculty->description = $request->description;
        $faculty->save();

        return redirect()->route('admin.faculty.index')->with('success', 'Berhasil Mengedit Fakultas ' . $faculty->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        $majors = Major::where('faculty_id', $faculty->id)->delete();
        $faculty->delete();

        return redirect()->route('admin.faculty.index')->with('success', 'Berhasil Menghapus Fakultas ' . $faculty->name);
    }
}
