<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
    class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
    class="fixed inset-y-0 left-0 z-30 overflow-y-auto transition duration-300 transform w-fit bg-emerald-600 lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center px-3 mt-8">
        <div class="flex items-center">
            <span class="mx-2 text-xl font-semibold text-white">IKAL AL-AZHAR <br /> Dashboard</span>
        </div>
    </div>

    <nav class="mt-10" x-data="{ sales: false, direct: false, school: false, broadcast: false, content: false, event: false, market: false, location: false }">
        <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-opacity-25 bg-emerald-800"
            href="{{ route('dashboard') }}">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
            </svg>

            <span class="mx-3">Dashboard</span>
        </a>

        <a href="{{ route('admin.alumni.index') }}"
            class="flex items-center px-6 py-2 mt-4 text-white transition-all cursor-pointer hover:bg-emerald-800 hover:bg-opacity-25 hover:text-gray-100"
            x-on:click="alumni=!alumni">
            <i class="fa-solid fa-user-group"></i>
            <span class="mx-3 text-white select-none">Data Alumni</span>
        </a>

        <a href="{{ route('admin.faculty.index') }}"
            class="flex items-center px-6 py-2 mt-4 text-white transition-all cursor-pointer hover:bg-emerald-800 hover:bg-opacity-25 hover:text-gray-100"
            x-on:click="faculty=!faculty">
            <i class="fa-solid fa-school"></i>
            <span class="mx-3 text-white select-none">Data Fakultas</span>
        </a>

        <a href="{{ route('admin.major.index') }}"
            class="flex items-center px-6 py-2 mt-4 text-white transition-all cursor-pointer hover:bg-emerald-800 hover:bg-opacity-25 hover:text-gray-100"
            x-on:click="major=!major">
            <i class="fa-solid fa-school"></i>
            <span class="mx-3 text-white select-none">Data Jurusan</span>
        </a>

    </nav>
</div>
