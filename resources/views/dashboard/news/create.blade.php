@extends('layouts.dashboard.app')
@section('body')
    <div class="w-full mx-4">
        <div class="flex flex-col">
            <div class="mt-4">
                <h4 class="text-xl font-bold text-gray-600 align-baseline">Tambah Data Fakultas</h4>

                <div class="px-6 py-4 mx-auto overflow-auto bg-white rounded-md shadow sm:mx-0 w-fit sm:w-1/2">
                    <form action="{{ route('admin.news.store') }}" method="POST" class="" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div class="w-full">
                                <label class="block text-gray-700" for="title">Judul</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}"
                                    placeholder="" class="w-full rounded-md">
                                @error('title')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label class="block text-gray-700" for="headline">Headline (max:80 karakter)</label>
                                <input type="text" name="headline" id="headline" value="{{ old('headline') }}"
                                    placeholder="" class="w-full rounded-md">
                                @error('headline')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full col-span-full">
                                <label class="block text-gray-700" for="caption">Caption</label>
                                <textarea name="caption" id="caption" cols="30" rows="10" class="hidden">{!! old('caption') !!}</textarea>
                                <div class="mt-2 col-span-full">
                                    <trix-editor input="caption"></trix-editor>
                                </div>
                                @error('caption')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label
                                    class="block px-3 py-2 text-white transition-all rounded-md w-fit bg-emerald-600 hover:bg-emerald-800"
                                    for="image"><i class="mr-2 fa-solid fa-image"></i><span id="file-name">Tambah
                                        Gambar</span></label>
                                <input type="file" name="image" id="image" value="{{ old('image') }}"
                                    placeholder="" class="hidden w-full rounded-md"
                                    accept="image/jpg, image/png, image/gif, image/jpeg">
                                @error('image')
                                    <span class="block mt-1 text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full" id="image-preview">
                            </div>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type="submit"
                                class="w-full px-4 py-2 font-bold text-white rounded-md bg-emerald-600 hover:bg-emerald-800 focus:outline-none focus:bg-emerald-800">Submit</button>
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
            $("#image").change(function(e) {
                previewImages(this);

                var fileName = e.target.files[0].name;
                $('#file-name').text(fileName);
            });
        });

        function previewImages(input) {
            var preview = $('#image-preview');
            // console.log(input.files);
            preview.show()

            if (input.files) {
                for (var i = 0; i < input.files.length; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var cover = Math.floor(Math.random() * 51);
                        // console.log(e.target.result);
                        // console.log(input.files);
                        preview.prepend(
                            `<img src="${e.target.result}" class="object-cover w-full h-64"/>`
                        );
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }
        }
    </script>
@endsection
