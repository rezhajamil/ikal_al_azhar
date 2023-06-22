<!-- ====== Navbar Section Start -->
<header x-data="{
    navbarOpen: false
}" class="flex items-center w-full bg-white">
    <div class="container px-6 mx-auto">
        <div class="relative flex items-center justify-between -mx-4 ">
            <div class="max-w-full px-4 w-60">
                <a href="{{ route('home') }}" class="block w-full">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-24 h-24 aspect-square" />
                </a>
            </div>
            <div class="flex items-center justify-between w-full px-4">
                <div>
                    <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                        id="navbarToggler"
                        class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-emerald-600 focus:ring-2 lg:hidden">
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-emerald-600"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-emerald-600"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-emerald-600"></span>
                    </button>
                    <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                        class="absolute right-4 top-full w-full max-w-[250px] z-50 rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                        <ul class="block lg:flex">
                            <li>
                                <a href="{{ route('home') }}#hero"
                                    class="flex py-2 text-base font-medium text-dark hover:text-emerald-600 lg:ml-12 lg:inline-flex">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#sejarah"
                                    class="flex py-2 text-base font-medium text-dark hover:text-emerald-600 lg:ml-12 lg:inline-flex">
                                    Sejarah
                                </a>
                            </li>
                            <li>
                                <a href="#profil"
                                    class="flex py-2 text-base font-medium text-dark hover:text-emerald-600 lg:ml-12 lg:inline-flex">
                                    Profil
                                </a>
                            </li>
                            <li>
                                <a href="#struktur"
                                    class="flex py-2 text-base font-medium text-dark hover:text-emerald-600 lg:ml-12 lg:inline-flex">
                                    Struktur
                                </a>
                            </li>
                            <li>
                                <a href="#kontak"
                                    class="flex py-2 text-base font-medium text-dark hover:text-emerald-600 lg:ml-12 lg:inline-flex">
                                    Kontak
                                </a>
                            </li>
                            <hr class="h-1">
                            <li>
                                <a href="{{ route('login') }}"
                                    class="flex py-2 text-base font-medium sm:hidden text-dark hover:text-emerald-600 lg:ml-12">
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}"
                                    class="flex px-2 py-2 -mx-2 text-base font-medium text-white sm:hidden text-dark bg-emerald-600 lg:ml-12">
                                    Register
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
                    <a href="{{ route('login') }}"
                        class="py-3 text-base font-medium px-7 text-dark hover:text-emerald-600">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                        class="py-3 text-base font-medium text-white rounded-lg bg-emerald-600 px-7 hover:bg-opacity-90">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->
