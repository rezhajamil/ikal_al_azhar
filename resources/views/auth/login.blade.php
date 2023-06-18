@extends('layouts.dashboard.app', ['plain' => true])
@section('body')
    <div
        class="flex flex-col justify-center min-h-screen px-6 py-12 bg-gradient-to-br from-green-600 to-emerald-700 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <div
                class="flex items-center mx-auto justify-center p-3 rounded-full bg-gradient-to-tr from-white from-20% to-gray-200 h-fit w-fit aspect-square ">
                <img class="h-32" src="{{ asset('images/logo.png') }}" alt="Ikal AL Azhar">
            </div>
            <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-center text-white">Masuk ke Akun Anda
            </h2>
        </div>

        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="nim" class="block text-sm font-semibold leading-6 text-white">NIM</label>
                    <div class="mt-2">
                        <input id="nim" name="nim" type="number" value="{{ old('nim') }}" required autofocus
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-emerald-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('nim')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-semibold leading-6 text-white">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-emerald-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('password')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <input id="remember" name="remember" type="checkbox" autocomplete="remember"
                        class="inline-block  mr-1 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset checked:bg-emerald-600 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-emerald-600 sm:leading-6">
                    <label for="remember" class="inline-block text-sm font-semibold leading-6 text-white">Remember
                        Me</label>
                </div>
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-emerald-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-emerald-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Sign
                        in</button>
                </div>
            </form>
            <p class="mt-10 text-sm text-center text-gray-200">
                Belum memiliki akun?
                <a href="{{ route('register') }}" class="font-semibold leading-6 text-white hover:underline">
                    Daftar disini
                </a>
            </p>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // $('form').on('submit', function(event) {
            //     event.preventDefault();
            //     console.log('object');
            // })
        })
    </script>
@endsection
