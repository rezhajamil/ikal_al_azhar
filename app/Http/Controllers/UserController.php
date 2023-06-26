<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = User::with(['faculty', 'major'])->where('role', 'alumni')->where('status', 1)->orderBy('name')->get();
        // ddd($alumni);

        return view('dashboard.alumni.index', compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculty = Faculty::orderBy('name')->get();

        return view('dashboard.alumni.create', compact('faculty'));
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
            'nim' => ['required', 'numeric', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'faculty' => ['required',],
            'major' => ['required',],
            'address' => ['nullable', 'string'],
            'year' => ['required',],
            'job' => ['nullable', 'string', 'max:255'],
            'avatar' => ['nullable', 'file', 'max:10240'],
            'facebook' => ['nullable', 'url'],
            'instagram' => ['nullable', 'url'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar->store('avatar');

            $user = User::create([
                'nim' => $request->nim,
                'name' => ucwords($request->name),
                'phone' => $request->phone,
                'email' => $request->email,
                'faculty_id' => $request->faculty,
                'major_id' => $request->major,
                'address' => ucwords($request->address),
                'year' => date('Y', strtotime($request->year)),
                'job' => ucwords($request->job),
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'avatar' => $avatar,
                'role' => 'alumni',
                'status' => 1,
                'password' => bcrypt($request->password),
            ]);
        }

        return redirect()->route('admin.alumni.index')->with('success', 'Berhasil Menambahkan Alumni');
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
    public function edit($id)
    {
        $alumni = User::find($id);
        $faculty = Faculty::orderBy('name')->get();
        $majors = Major::where('faculty_id', $alumni->faculty_id)->get();

        return view('dashboard.alumni.edit', compact('alumni', 'faculty', 'majors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => ['required', 'numeric', Rule::unique('users')->ignore($id)],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', Rule::unique('users')->ignore($id)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'faculty' => ['required',],
            'major' => ['required',],
            'address' => ['nullable', 'string'],
            'year' => ['required',],
            'job' => ['nullable', 'string', 'max:255'],
            'avatar' => ['nullable', 'file', 'max:10240'],
            'facebook' => ['nullable', 'url'],
            'instagram' => ['nullable', 'url'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::find($id);

        $user->name = ucwords($request->name);
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->faculty_id = $request->faculty;
        $user->major_id = $request->major;
        $user->year = date('Y', strtotime($request->year));
        $user->address = ucwords($request->address);
        $user->job = ucwords($request->job);
        $user->facebook = $request->facebook;
        $user->instagram = $request->instagram;

        if ($request->hasFile('avatar')) {
            Storage::disk('public')->delete($user->avatar);
            $avatar = $request->avatar->store('avatar');

            $user->avatar = $avatar;
        }

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('admin.alumni.index')->with('success', "Berhasil Mengubah Data $user->name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function edit_profile()
    {
        $user = User::find(auth()->user()->id);

        $faculty = Faculty::orderBy('name')->get();
        $majors = Major::where('faculty_id', $user->faculty_id)->get();

        return view('edit_profile', compact('user', 'faculty', 'majors'));
    }

    public function update_profile(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', Rule::unique('users')->ignore($user->id)],
            'faculty' => ['required',],
            'major' => ['required',],
            'address' => ['nullable', 'string'],
            'year' => ['required',],
            'job' => ['nullable', 'string', 'max:255'],
            'avatar' => ['nullable', 'file', 'max:10240'],
            'facebook' => ['nullable', 'url'],
            'instagram' => ['nullable', 'url'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);


        $user->name = ucwords($request->name);
        $user->phone = $request->phone;
        $user->faculty_id = $request->faculty;
        $user->major_id = $request->major;
        $user->year = date('Y', strtotime($request->year));
        $user->address = ucwords($request->address);
        $user->job = ucwords($request->job);
        $user->facebook = $request->facebook;
        $user->instagram = $request->instagram;

        if ($request->hasFile('avatar')) {
            Storage::disk('public')->delete($user->avatar);
            $avatar = $request->avatar->store('avatar');

            $user->avatar = $avatar;
        }

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('home');
    }
}
