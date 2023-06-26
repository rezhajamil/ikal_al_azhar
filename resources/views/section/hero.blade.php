<!-- ====== Hero Section Start -->
<section id="hero" class="relative bg-white pt-[30px] sm:pt-[80px] pb-[110px] px-6">
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 lg:w-6/12">
                <div class="hero-content">
                    <h1
                        class="mb-3 text-2xl sm:text-3xl font-bold leading-snug text-black sm:text-[42px] lg:text-[40px] xl:text-[42px]">
                        Ikatan Alumni <br>
                        Universitas Al-Azhar Mesir <br>
                        Medan-Sumatera Utara
                    </h1>
                    <p class="mb-8 max-w-[480px] text-base text-gray-600">
                        Al-Azhar Centre (AC) merupakan ikatan alumni Universitas Al-Azhar Mesir yang telah berdiri
                        selama 4 tahun, resmi dilantik pada tanggal 15 Juli 2012 dan telah banyak mengalami perkembangan
                        seiring perjalanan waktu.
                    </p>
                    <ul class="flex flex-wrap items-center gap-y-3 gap-x-3">
                        <li>
                            <a href="#sejarah"
                                class="inline-flex items-center justify-center px-3 py-3 text-base font-normal text-center text-white rounded-lg whitespace-nowrap sm:py-4 bg-emerald-600 hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10">
                                Lebih Lengkap
                            </a>
                        </li>
                        @if (!auth()->user())
                            <li>
                                <a href="{{ route('register') }}"
                                    class="inline-flex items-center justify-center py-4 text-base font-normal text-center text-gray-800 whitespace-nowrap hover:text-emerald-600 sm:px-10 lg:px-8 xl:px-10">
                                    <i class="mr-2 text-lg fa-solid fa-circle-arrow-up text-emerald-600"></i>
                                    Upload Data Diri
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="w-full sm:px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                    <div class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img src="{{ asset('images/hero.png') }}" alt="hero"
                            class="max-w-full rounded lg:ml-auto" />
                        {{-- <img src="https://picsum.photos/800/800" alt="hero"
                                class="object-cover object-center w-full rounded w lg:ml-auto max-h-96" /> --}}
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                            <svg width="93" height="93" viewBox="0 0 93 93" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2.5" cy="2.5" r="2.5" fill="#059669" />
                                <circle cx="2.5" cy="24.5" r="2.5" fill="#059669" />
                                <circle cx="2.5" cy="46.5" r="2.5" fill="#059669" />
                                <circle cx="2.5" cy="68.5" r="2.5" fill="#059669" />
                                <circle cx="2.5" cy="90.5" r="2.5" fill="#059669" />
                                <circle cx="24.5" cy="2.5" r="2.5" fill="#059669" />
                                <circle cx="24.5" cy="24.5" r="2.5" fill="#059669" />
                                <circle cx="24.5" cy="46.5" r="2.5" fill="#059669" />
                                <circle cx="24.5" cy="68.5" r="2.5" fill="#059669" />
                                <circle cx="24.5" cy="90.5" r="2.5" fill="#059669" />
                                <circle cx="46.5" cy="2.5" r="2.5" fill="#059669" />
                                <circle cx="46.5" cy="24.5" r="2.5" fill="#059669" />
                                <circle cx="46.5" cy="46.5" r="2.5" fill="#059669" />
                                <circle cx="46.5" cy="68.5" r="2.5" fill="#059669" />
                                <circle cx="46.5" cy="90.5" r="2.5" fill="#059669" />
                                <circle cx="68.5" cy="2.5" r="2.5" fill="#059669" />
                                <circle cx="68.5" cy="24.5" r="2.5" fill="#059669" />
                                <circle cx="68.5" cy="46.5" r="2.5" fill="#059669" />
                                <circle cx="68.5" cy="68.5" r="2.5" fill="#059669" />
                                <circle cx="68.5" cy="90.5" r="2.5" fill="#059669" />
                                <circle cx="90.5" cy="2.5" r="2.5" fill="#059669" />
                                <circle cx="90.5" cy="24.5" r="2.5" fill="#059669" />
                                <circle cx="90.5" cy="46.5" r="2.5" fill="#059669" />
                                <circle cx="90.5" cy="68.5" r="2.5" fill="#059669" />
                                <circle cx="90.5" cy="90.5" r="2.5" fill="#059669" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Hero Section End -->
