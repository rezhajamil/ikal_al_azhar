<section id="kegiatan"
    class="px-1 pt-12 pb-10 sm:px-6 bg-gradient-to-br from-green-400 via-20% via-emerald-400 to-green-400">
    <div class="container">
        <div class="flex flex-col justify-between">
            <div class="w-full text-center">
                <h2 class="m-4 text-4xl font-bold leading-snug text-gray-700 sm:mb-8 wow fadeInUp" data-wow-delay="1s">
                    Kegiatan Terbaru
                </h2>
            </div>
            <div class="grid w-full grid-cols-1 gap-4 sm:grid-cols-2">
                @foreach ($news as $key => $data)
                    <div aria-label="cards" class="flex-shrink-0 w-full overflow-hidden bg-white rounded-lg shadow-md">
                        <div class="relative w-full 2">
                            <img tabindex="0"
                                class="object-cover object-center w-full h-48 rounded-t shadow focus:outline-none"
                                src="{{ asset('storage/' . $data->image) }}" alt="" />
                        </div>
                        <div class="w-full px-5 pt-2 pb-6 xl:px-7">
                            <div class="w-full ">
                                <h2 class="mb-3 text-xl font-bold tracking-normal text-gray-900 xl:mb-0 xl:mr-4">
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
            @if (count($news) > 4)
                <a href="{{ route('news.list') }}"
                    class="px-4 py-2 mx-auto mt-8 mb-2 text-sm font-bold transition-all bg-white rounded-full text-emerald-600 w-fit aspect-auto hover:bg-gray-300">
                    Lihat Semua Kegiatan
                    <i class="ml-2 fa-solid fa-angles-right"></i>
                </a>
            @endif
            {{-- <a href="{{ route('news.list') }}"
                class="px-4 py-2 mx-auto mt-8 mb-2 text-sm font-bold transition-all bg-white rounded-full text-emerald-600 w-fit aspect-auto hover:bg-gray-300">
                Lihat Semua Kegiatan
                <i class="ml-2 fa-solid fa-angles-right"></i>
            </a> --}}
        </div>
    </div>
</section>
