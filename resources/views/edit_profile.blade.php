@extends('layouts.dashboard.app', ['plain' => true])
@section('body')
    <main class="mt-0 transition-all duration-200 ease-in-out">
        <section>
            <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
                <div class="container z-1">
                    <div class="flex flex-wrap justify-end -mx-3">
                        <div
                            class="absolute top-0 left-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
                            <div
                                class="relative flex flex-col justify-center h-full px-24 m-4 overflow-hidden bg-cover bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-xl">
                                <span
                                    class="absolute top-0 left-0 w-full h-full bg-center bg-cover opacity-0 bg-gradient-to-tl from-premier to-red-800"></span>
                                <img src="{{ asset('images/logo.png') }}" alt="" class="object-contain">
                            </div>
                        </div>
                        <div
                            class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-6/12">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 rounded-2xl bg-clip-border">
                                <div class="p-6 pb-0 mb-0">
                                    <h4 class="font-bold">Edit Profile</h4>
                                    <p class="mb-0">Ubah Data Akun Anda</p>
                                </div>
                                <div class="flex-auto p-6">
                                    <img src="{{ asset('storage/' . $user->avatar) }}" alt=""
                                        class="h-32 mb-2 rounded">
                                    <form role="form" action="{{ route('update_profile') }}" method="POST"
                                        enctype="multipart/form-data" class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                                        @csrf
                                        @method('put')
                                        <div class="">
                                            <input type="number" placeholder="NIM*" name="nim"
                                                value="{{ old('nim', $user->nim) }}" disabled
                                                class="focus:shadow-primary-outline text-sm bg-gray-200 leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            @error('nim')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <input type="text" placeholder="Nama Lengkap*" name="name"
                                                value="{{ old('name', $user->name) }}"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            @error('name')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <input type="email" placeholder="Email*" name="email"
                                                value="{{ old('email', $user->email) }}" disabled
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-gray-200 bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            @error('email')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <input type="number" placeholder="Nomor Telepon*" name="phone"
                                                value="{{ old('phone', $user->phone) }}"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            @error('phone')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <select name="faculty" id="faculty"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                                <option value="" selected disabled>Pilih Fakultas*</option>
                                                @foreach ($faculty as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ old('faculty', $user->faculty_id) ? 'selected' : '' }}>
                                                        {{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('faculty')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <select name="major" id="major"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                                <option value="" selected disabled>Pilih Jurusan*</option>
                                                @foreach ($majors as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ old('major', $user->major_id) ? 'selected' : '' }}>
                                                        {{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('major')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <input type="date" placeholder="Tahun Masuk" name="year"
                                                value="{{ old('year', $user->year) . '-01-01' }}"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            <span class="text-sm text-slate-400">Tahun Masuk*</span>
                                            @error('year')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <input type="text" placeholder="Alamat*" name="address"
                                                value="{{ old('address', $user->address) }}"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            @error('address')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <input type="text" placeholder="Pekerjaan*" name="job"
                                                value="{{ old('job', $user->job) }}"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            @error('job')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex items-center">
                                            <label
                                                class="px-3 py-2 font-bold text-white transition-all rounded bg-emerald-600 hover:bg-emerald-800"
                                                for="avatar">
                                                <i class="mr-2 fa-solid fa-images"></i>
                                                <span id="file-name" class="truncate">Upload Foto</span>
                                            </label>
                                            <input class="hidden w-full rounded-md form-input focus:border-indigo-600"
                                                type="file" name="avatar" value="{{ old('avatar') }}" id="avatar"
                                                accept="image/jpg, image/png, image/gif, image/jpeg">
                                            @error('avatar')
                                                <span
                                                    class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <input type="url" placeholder="URL Akun Facebook" name="facebook"
                                                value="{{ old('facebook', $user->facebook) }}"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            @error('facebook')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <input type="url" placeholder="URL Akun Instagram" name="instagram"
                                                value="{{ old('instagram', $user->instagram) }}"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            @error('instagram')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <input type="password" placeholder="Password*" name="password"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            <span class="text-sm text-slate-400">Min:8 karakter</span>
                                            @error('password')
                                                <span class="block text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <input type="password" placeholder="Konfirmasi Password*"
                                                name="password_confirmation"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                            @error('password_confirmation')
                                                <span class="text-sm text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="text-center col-span-full">
                                            <button type="submit"
                                                class="inline-block w-full px-16 py-3.5 mt-6 mb-0 uppercase font-bold leading-normal text-center text-white align-middle transition-all !bg-emerald-700 hover:bg-emerald-800  border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#faculty").on('input', () => {
                var faculty = $("#faculty").val();
                $.ajax({
                    url: "{{ route('get_majors') }}",
                    method: "GET",
                    dataType: "JSON",
                    data: {
                        faculty: faculty,
                        _token: "{{ csrf_token() }}"
                    }

                    ,
                    success: (data) => {
                        console.log(data);
                        $("#major").html(
                            "<option selected disabled>Pilih Jurusan</option>" +
                            data.map((item) => {
                                return `
                            <option value="${item.id}">${item.name}</option>
                            `
                            })

                        )
                    },
                    error: (e) => {
                        console.log(e)
                    }
                })
            })

            $("#avatar").change(function(e) {

                var fileName = e.target.files[0].name;
                $('#file-name').text(fileName);
            });
        })
    </script>
@endsection
