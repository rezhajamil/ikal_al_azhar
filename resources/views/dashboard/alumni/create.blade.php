@extends('layouts.dashboard.app')
@section('body')
    <div class="w-full mx-4">
        <div class="flex flex-col">
            <div class="mt-4">
                <a href="{{ route('admin.alumni.index') }}"
                    class="inline-block px-3 py-2 mb-4 font-semibold text-white transition-all bg-gray-500 rounded-md hover:bg-gray-600"><i
                        class="mr-2 fa-solid fa-arrow-left-long"></i>Kembali</a>
                <h4 class="text-xl font-bold text-gray-600 align-baseline">Tambah Data Alumni</h4>

                <div class="px-6 py-4 mx-auto overflow-auto bg-white rounded-md shadow sm:mx-0 w-fit">
                    <form action="{{ route('admin.alumni.store') }}" method="POST" class=""
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div>
                                <label class="text-gray-700" for="nim">NIM*</label>
                                <input class="w-full rounded-md form-input focus:border-indigo-600" type="number"
                                    name="nim" value="{{ old('nim') }}">
                                @error('nim')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="text-gray-700" for="email">Email*</label>
                                <input class="w-full rounded-md form-input focus:border-indigo-600" type="email"
                                    name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="text-gray-700" for="phone">Telepon*</label>
                                <input class="w-full rounded-md form-input focus:border-indigo-600" type="number"
                                    name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="text-gray-700" for="name">Nama Lengkap*</label>
                                <input class="w-full rounded-md form-input focus:border-indigo-600" type="text"
                                    name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label class="block text-gray-700" for="faculty">Fakultas*</label>
                                <select name="faculty" id="faculty" class="w-full rounded-md">
                                    <option value="" selected disabled>Pilih Fakultas</option>

                                    @foreach ($faculty as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('faculty') == $item->id ? 'selected' : '' }}>
                                            {{ strtoupper($item->name) }}</option>
                                    @endforeach
                                </select>
                                @error('faculty')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label class="block text-gray-700" for="major">Jurusan* </label>
                                <select name="major" id="major" class="w-full rounded-md">
                                    <option value="" selected disabled>Pilih Jurusan</option>
                                </select>
                                @error('major')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="text-gray-700" for="year">Tahun Masuk*</label>
                                <input class="w-full rounded-md form-input focus:border-indigo-600" type="date"
                                    name="year" value="{{ old('year') }}">
                                @error('year')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="text-gray-700" for="address">Alamat</label>
                                <input class="w-full rounded-md form-input focus:border-indigo-600" type="text"
                                    name="address" value="{{ old('address') }}">
                                @error('address')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="text-gray-700" for="job">Pekerjaan</label>
                                <input class="w-full rounded-md form-input focus:border-indigo-600" type="text"
                                    name="job" value="{{ old('job') }}">
                                @error('job')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex items-center">
                                <label
                                    class="px-3 py-2 mt-6 font-bold text-white transition-all rounded bg-emerald-600 hover:bg-emerald-800"
                                    for="avatar">
                                    <i class="mr-2 fa-solid fa-images"></i>
                                    <span id="file-name">Upload Foto</span>
                                </label>
                                <input class="hidden w-full rounded-md form-input focus:border-indigo-600" type="file"
                                    name="avatar" value="{{ old('avatar') }}" id="avatar"
                                    accept="image/jpg, image/png, image/gif, image/jpeg">
                                @error('avatar')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="text-gray-700" for="facebook">URL Facebook</label>
                                <input class="w-full rounded-md form-input focus:border-indigo-600" type="url"
                                    name="facebook" value="{{ old('facebook') }}">
                                @error('facebook')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="text-gray-700" for="instagram">URL Instagram</label>
                                <input class="w-full rounded-md form-input focus:border-indigo-600" type="url"
                                    name="instagram" value="{{ old('instagram') }}">
                                @error('instagram')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="text-gray-700" for="password">Password</label>
                                <input class="w-full rounded-md form-input focus:border-indigo-600" type="password"
                                    name="password" value="{{ old('password') }}">
                                @error('password')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="text-gray-700" for="password_confirmation">Konfirmasi Password</label>
                                <input class="w-full rounded-md form-input focus:border-indigo-600" type="password"
                                    name="password_confirmation" value="{{ old('password_confirmation') }}">
                                @error('password_confirmation')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>

                        <div class="flex justify-end mt-4">
                            <button
                                class="w-full px-4 py-2 font-bold text-white rounded-md bg-emerald-600 hover:bg-green-600 focus:outline-none focus:bg-green-600">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
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
