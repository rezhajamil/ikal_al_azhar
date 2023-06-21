@extends('layouts.app')
@section('content')
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
                        <ul class="flex items-center">
                            <li>
                                <a href="#sejarah"
                                    class="inline-flex items-center justify-center px-3 py-3 text-base font-normal text-center text-white rounded-lg sm:py-4 bg-emerald-600 hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10">
                                    Lebih Lengkap
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}"
                                    class="inline-flex items-center justify-center px-3 py-4 text-base font-normal text-center text-gray-800 whitespace-nowrap hover:text-emerald-600 sm:px-10 lg:px-8 xl:px-10">
                                    <i class="mr-2 text-lg fa-solid fa-circle-arrow-up text-emerald-600"></i>
                                    Upload Data Diri
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-6/12">
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
    <section id="sejarah" class="px-1 pt-12 pb-10 sm:px-6 bg-emerald-200">
        <div class="container">
            <div class="flex justify-between">
                <div class="w-full text-center">
                    <h2 class="m-4 text-4xl font-bold leading-snug text-gray-700 sm:mb-8 wow fadeInUp"
                        data-wow-delay="1s">
                        SEJARAH BERDIRI
                    </h2>
                    <div class="mb-10 text-justify wow fadeInUp" data-wow-delay="1.2s">
                        <p class="text-sm sm:text-base ">
                            <span class="block my-4 indent-4">Kedatangan pelajar dan Mahasiswa Sumatra Utara di negeri
                                kinanah
                                Mesir
                                telah lama
                                dimulai. Sejak beberapa dasawarsa yang lalu, putra-putri terbaik daerah, silih berganti
                                datang
                                ke seantero wilayah Mesir, dengan niat menuntut ilmu.
                            </span>
                            <span class="block my-4 indent-4">Setiap tahun secara kwantitas
                                terus
                                bertambah, dan kemudian banyak yang telah kembali dan mengabdikan ilmu kepada
                                masyarakat. Sehingga, pada akhirnya membutuhkan suatu wadah silaturrahmi dalam bentuk
                                organisasi para alumni, guna menyamakan langkah penyebaran dakwah dalam ruang lingkup
                                pengabdian agama.
                            </span>
                            <span class="block my-4 indent-4">
                                Kemudian, didirikan suatu wadah organisasi. Wadah ini bernama Al-Azhar Center. Awalnya
                                bermula dari keinginan beberapa alumni untuk membuat wadah sebagai "rumah" bagi para
                                alumni
                                dalam peran menyebarkan dakwah Islam, karena banyak alumni yang melakukan pengabdian
                                dakwah
                                di Sumut. Keinginan ini didukung penuh oleh berbagai alumni Lintas Periode, sehingga
                                akhirnya wadah ini dapat dibentuk dengan bantuan baik moril maupun materil dari semua
                                alumni.
                            </span>
                            <span class="block my-4 indent-4">
                                Wadah ini terus menerus berlangsung dan tetap eksis untuk menjalankan misi dalam
                                mencapai
                                cita-citanya hingga sekarang. Tentu saja dalam menjalankan roda organisasi ini, yang
                                namanya
                                halangan dan rintangan pastilah ada, datangnya pun silih berganti. Sehingga agar
                                semangat
                                kebersamaan ini tidak pupus dibutuhkanlah sebuah pengorbanan dan motivasi yang jelas
                                sebagai
                                modal utama.
                            </span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="profil" class="px-1 pt-12 pb-10 overflow-hidden sm:px-6">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center justify-between -mx-4">
                <div class="w-full px-4 lg:w-6/12">
                    <div class="flex items-center -mx-3 sm:-mx-4">
                        <div class="w-full px-3 sm:px-4 xl:w-1/2">
                            <div class="py-3 sm:py-4">
                                <img src="{{ asset('images/profile-1.jpg') }}" alt=""
                                    class="w-full rounded-2xl" />
                            </div>
                            <div class="py-3 sm:py-4">
                                <img src="{{ asset('images/profile-3.jpg') }}" alt=""
                                    class="w-full rounded-2xl" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:px-4 xl:w-1/2">
                            <div class="relative z-10 my-4">
                                <img src="{{ asset('images/profile-2.jpg') }}" alt=""
                                    class="w-full rounded-2xl" />
                                <span class="absolute -right-7 -bottom-7 z-[-1]">
                                    <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="1.66667" cy="104" r="1.66667"
                                            transform="rotate(-90 1.66667 104)" fill="#059669" />
                                        <circle cx="16.3333" cy="104" r="1.66667"
                                            transform="rotate(-90 16.3333 104)" fill="#059669" />
                                        <circle cx="31" cy="104" r="1.66667"
                                            transform="rotate(-90 31 104)" fill="#059669" />
                                        <circle cx="45.6667" cy="104" r="1.66667"
                                            transform="rotate(-90 45.6667 104)" fill="#059669" />
                                        <circle cx="60.3334" cy="104" r="1.66667"
                                            transform="rotate(-90 60.3334 104)" fill="#059669" />
                                        <circle cx="88.6667" cy="104" r="1.66667"
                                            transform="rotate(-90 88.6667 104)" fill="#059669" />
                                        <circle cx="117.667" cy="104" r="1.66667"
                                            transform="rotate(-90 117.667 104)" fill="#059669" />
                                        <circle cx="74.6667" cy="104" r="1.66667"
                                            transform="rotate(-90 74.6667 104)" fill="#059669" />
                                        <circle cx="103" cy="104" r="1.66667"
                                            transform="rotate(-90 103 104)" fill="#059669" />
                                        <circle cx="132" cy="104" r="1.66667"
                                            transform="rotate(-90 132 104)" fill="#059669" />
                                        <circle cx="1.66667" cy="89.3333" r="1.66667"
                                            transform="rotate(-90 1.66667 89.3333)" fill="#059669" />
                                        <circle cx="16.3333" cy="89.3333" r="1.66667"
                                            transform="rotate(-90 16.3333 89.3333)" fill="#059669" />
                                        <circle cx="31" cy="89.3333" r="1.66667"
                                            transform="rotate(-90 31 89.3333)" fill="#059669" />
                                        <circle cx="45.6667" cy="89.3333" r="1.66667"
                                            transform="rotate(-90 45.6667 89.3333)" fill="#059669" />
                                        <circle cx="60.3333" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 60.3333 89.3338)" fill="#059669" />
                                        <circle cx="88.6667" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 88.6667 89.3338)" fill="#059669" />
                                        <circle cx="117.667" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 117.667 89.3338)" fill="#059669" />
                                        <circle cx="74.6667" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 74.6667 89.3338)" fill="#059669" />
                                        <circle cx="103" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 103 89.3338)" fill="#059669" />
                                        <circle cx="132" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 132 89.3338)" fill="#059669" />
                                        <circle cx="1.66667" cy="74.6673" r="1.66667"
                                            transform="rotate(-90 1.66667 74.6673)" fill="#059669" />
                                        <circle cx="1.66667" cy="31.0003" r="1.66667"
                                            transform="rotate(-90 1.66667 31.0003)" fill="#059669" />
                                        <circle cx="16.3333" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 16.3333 74.6668)" fill="#059669" />
                                        <circle cx="16.3333" cy="31.0003" r="1.66667"
                                            transform="rotate(-90 16.3333 31.0003)" fill="#059669" />
                                        <circle cx="31" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 31 74.6668)" fill="#059669" />
                                        <circle cx="31" cy="31.0003" r="1.66667"
                                            transform="rotate(-90 31 31.0003)" fill="#059669" />
                                        <circle cx="45.6667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 45.6667 74.6668)" fill="#059669" />
                                        <circle cx="45.6667" cy="31.0003" r="1.66667"
                                            transform="rotate(-90 45.6667 31.0003)" fill="#059669" />
                                        <circle cx="60.3333" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 60.3333 74.6668)" fill="#059669" />
                                        <circle cx="60.3333" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 60.3333 30.9998)" fill="#059669" />
                                        <circle cx="88.6667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 88.6667 74.6668)" fill="#059669" />
                                        <circle cx="88.6667" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 88.6667 30.9998)" fill="#059669" />
                                        <circle cx="117.667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 117.667 74.6668)" fill="#059669" />
                                        <circle cx="117.667" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 117.667 30.9998)" fill="#059669" />
                                        <circle cx="74.6667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 74.6667 74.6668)" fill="#059669" />
                                        <circle cx="74.6667" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 74.6667 30.9998)" fill="#059669" />
                                        <circle cx="103" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 103 74.6668)" fill="#059669" />
                                        <circle cx="103" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 103 30.9998)" fill="#059669" />
                                        <circle cx="132" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 132 74.6668)" fill="#059669" />
                                        <circle cx="132" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 132 30.9998)" fill="#059669" />
                                        <circle cx="1.66667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 1.66667 60.0003)" fill="#059669" />
                                        <circle cx="1.66667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 1.66667 16.3333)" fill="#059669" />
                                        <circle cx="16.3333" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 16.3333 60.0003)" fill="#059669" />
                                        <circle cx="16.3333" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 16.3333 16.3333)" fill="#059669" />
                                        <circle cx="31" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 31 60.0003)" fill="#059669" />
                                        <circle cx="31" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 31 16.3333)" fill="#059669" />
                                        <circle cx="45.6667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 45.6667 60.0003)" fill="#059669" />
                                        <circle cx="45.6667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 45.6667 16.3333)" fill="#059669" />
                                        <circle cx="60.3333" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 60.3333 60.0003)" fill="#059669" />
                                        <circle cx="60.3333" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 60.3333 16.3333)" fill="#059669" />
                                        <circle cx="88.6667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 88.6667 60.0003)" fill="#059669" />
                                        <circle cx="88.6667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 88.6667 16.3333)" fill="#059669" />
                                        <circle cx="117.667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 117.667 60.0003)" fill="#059669" />
                                        <circle cx="117.667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 117.667 16.3333)" fill="#059669" />
                                        <circle cx="74.6667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 74.6667 60.0003)" fill="#059669" />
                                        <circle cx="74.6667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 74.6667 16.3333)" fill="#059669" />
                                        <circle cx="103" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 103 60.0003)" fill="#059669" />
                                        <circle cx="103" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 103 16.3333)" fill="#059669" />
                                        <circle cx="132" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 132 60.0003)" fill="#059669" />
                                        <circle cx="132" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 132 16.3333)" fill="#059669" />
                                        <circle cx="1.66667" cy="45.3333" r="1.66667"
                                            transform="rotate(-90 1.66667 45.3333)" fill="#059669" />
                                        <circle cx="1.66667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 1.66667 1.66683)" fill="#059669" />
                                        <circle cx="16.3333" cy="45.3333" r="1.66667"
                                            transform="rotate(-90 16.3333 45.3333)" fill="#059669" />
                                        <circle cx="16.3333" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 16.3333 1.66683)" fill="#059669" />
                                        <circle cx="31" cy="45.3333" r="1.66667"
                                            transform="rotate(-90 31 45.3333)" fill="#059669" />
                                        <circle cx="31" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 31 1.66683)" fill="#059669" />
                                        <circle cx="45.6667" cy="45.3333" r="1.66667"
                                            transform="rotate(-90 45.6667 45.3333)" fill="#059669" />
                                        <circle cx="45.6667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 45.6667 1.66683)" fill="#059669" />
                                        <circle cx="60.3333" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 60.3333 45.3338)" fill="#059669" />
                                        <circle cx="60.3333" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 60.3333 1.66683)" fill="#059669" />
                                        <circle cx="88.6667" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 88.6667 45.3338)" fill="#059669" />
                                        <circle cx="88.6667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 88.6667 1.66683)" fill="#059669" />
                                        <circle cx="117.667" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 117.667 45.3338)" fill="#059669" />
                                        <circle cx="117.667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 117.667 1.66683)" fill="#059669" />
                                        <circle cx="74.6667" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 74.6667 45.3338)" fill="#059669" />
                                        <circle cx="74.6667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 74.6667 1.66683)" fill="#059669" />
                                        <circle cx="103" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 103 45.3338)" fill="#059669" />
                                        <circle cx="103" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 103 1.66683)" fill="#059669" />
                                        <circle cx="132" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 132 45.3338)" fill="#059669" />
                                        <circle cx="132" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 132 1.66683)" fill="#059669" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                    <div class="mt-10 lg:mt-0">
                        <span class="block mb-2 text-lg font-semibold text-emerald-600">
                            Profil
                        </span>
                        <h2 class="mb-8 text-3xl font-bold text-dark sm:text-4xl">
                            VISI & MISI
                        </h2>
                        <p class="mb-8 text-base text-gray-800">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima nemo accusamus repellat animi
                            similique architecto veniam iusto pariatur adipisci, iste ullam aspernatur nisi ex sed rem, vel
                            vitae officiis voluptatem aut quis esse facilis. Consectetur accusamus molestias magnam
                            quibusdam dolorem.
                        </p>
                        <p class="mb-12 text-base text-gray-800">
                            A domain name is one of the first steps to establishing your
                            brand. Secure a consistent brand image with a domain name that
                            matches your business.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
