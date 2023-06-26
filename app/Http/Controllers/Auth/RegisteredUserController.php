<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $faculty = Faculty::orderBy('name')->get();

        return view('auth.register', compact('faculty'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
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

        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended();
    }
}
