<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $user = User::where('nim', $request->nim)->first();

        if ($user) {
            if ($user->status == 0) {
                throw ValidationException::withMessages([
                    'nim' => 'Akun anda tidak aktif. Hubungi administrator untuk mengaktifkan.',
                ]);
            }
        } else {
            throw ValidationException::withMessages([
                'nim' => 'Akun tidak ditemukan / NIM Salah',
            ]);
        }

        $request->authenticate($request);

        $request->session()->regenerate();

        if ($user->role == 'admin') {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        return redirect()->intended();
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
