@extends('layouts.dashboard.app')
@section('body')
    <div class="w-full mx-4">
        <div class="flex flex-col">
            <div class="mt-4">
                <div class="w-full px-6 py-4 mx-auto overflow-auto rounded-md shadow bg-emerald-600 sm:mx-0">
                    <span class="inline-block w-full text-2xl font-bold text-center text-white sm:text-5xl md:text-3xl">
                        {{ $news->title }}
                    </span>
                    <div class="w-full mx-auto overflow-hidden rounded-lg sm:w-10/12 h-64 sm:h-[500px] mt-8 mb-4">
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}"
                            class="object-cover object-center w-full h-full">
                    </div>
                    <div class="flex justify-between w-full py-1 mx-auto border-b-2 border-white sm:w-10/12">
                        <div class="flex items-center text-sm font-semibold text-white gap-x-2">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span class="">{{ date('d M Y', strtotime($news->created_at)) }}</span>
                        </div>
                        <div class="flex items-center text-sm font-semibold text-white gap-x-2">
                            <i class="fa-solid fa-pencil"></i>
                            <span class="">{{ $news->author->name }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between w-full py-2 mx-auto text-white sm:w-10/12">
                        {!! $news->caption !!}
                    </div>
                    <div class="w-full py-2 mx-auto mt-12 text-white sm:w-10/12">
                        <span class="inline-block w-full mb-4 font-bold text-white border-b-2 border-white">Komentar</span>
                        @foreach ($news->comments as $comment)
                            <div
                                class="flex justify-between w-full px-3 py-3 space-x-3 text-white rounded-t bg-teal-500/40">
                                <div class="">
                                    <span class="block text-xs">111 | Rezha Jamil Nasution</span>
                                    <span class="block text-lg">Halo <br> Gaes</span>
                                </div>
                                <form action="{{ route('admin.comment.destroy', $comment->id) }}" method="POST"
                                    class="flex items-center">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="px-2 py-2 font-bold text-white transition-all bg-red-700 rounded-md hover:bg-red-900">Hapus</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
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
