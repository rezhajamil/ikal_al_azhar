@extends('layouts.app')
@section('content')
    <section id="kegiatan"
        class="px-1 pt-12 pb-10 sm:px-6 bg-gradient-to-br from-emerald-300 via-20% via-emerald-200 to-emerald-400">
        <div class="container">
            <div class="flex justify-between">
                <div class="w-full text-center">
                    <h2 class="m-4 text-2xl font-bold leading-snug text-gray-700 sm:text-4xl sm:mb-8 wow fadeInUp"
                        data-wow-delay="1s">
                        KEGIATAN AL-AZHAR CENTRE
                    </h2>
                    <div class="grid grid-cols-1 gap-6 my-10 sm:grid-cols-2">
                        @foreach ($news as $key => $data)
                            <div aria-label="cards"
                                class="flex-shrink-0 w-full overflow-hidden bg-white rounded-lg shadow-md">
                                <div class="relative w-full 2">
                                    <img tabindex="0"
                                        class="object-cover object-center w-full h-48 rounded-t shadow focus:outline-none"
                                        src="{{ asset('storage/' . $data->image) }}" alt="" />
                                </div>
                                <div class="w-full px-5 pt-2 pb-6 xl:px-7">
                                    <div class="w-full ">
                                        <h2
                                            class="mb-3 text-lg font-bold tracking-normal text-gray-900 sm:text-xl xl:mb-0 xl:mr-4">
                                            {{ $data->title }}</h2>
                                        <p tabindex="0"
                                            class="mt-2 mb-4 text-sm leading-5 tracking-normal text-gray-600 focus:outline-none xl:text-left">
                                            {{ $data->headline }}
                                        </p>
                                        <a href="{{ route('news.detail', $data->id) }}"
                                            class="inline-block mt-auto mb-2 font-semibold text-gray-500 underline cursor-pointer">Baca
                                            Selengkapnya <i class="ml-2 fa-solid fa-up-right-from-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection
