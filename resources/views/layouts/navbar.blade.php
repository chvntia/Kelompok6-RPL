<nav>
    <div class="justify-center w-full mx-auto bg-green-200">
        <div class="flex flex-col w-full px-8 py-2 mx-auto md:px-12 md:items-center md:justify-between md:flex-row lg:px-32 max-w-7xl">
            <div class="flex flex-row items-center justify-between text-black">
                <a class="inline-flex items-center gap-3 text-lg font-bold tracking-tight text-lime-800" href="/">
                    <span>Desa Wisata Asri</span>
                </a>
            </div>
            <div class="flex-col items-center text-sm gap-12 text-sm font-semibold text-lime-800 md:flex md:flex-row lg:p-0 md:mt-0">
                <a class="hover:text-lime-500 focus:outline-none focus:text-gray-500 md:ml-auto" href="#_">Beranda</a>
                <a class="hover:text-lime-500 focus:outline-none focus:text-gray-500 md:ml-auto" href="#_">Profile Desa</a>
                <a class="hover:text-lime-500 focus:outline-none focus:text-gray-500 md:ml-auto" href="#_">Berita</a>
                <a class="hover:text-lime-500 focus:outline-none focus:text-gray-500 md:ml-auto" href="#_">Kegiatan</a>
                <a class="hover:text-lime-500 focus:outline-none focus:text-gray-500 md:ml-auto" href="{{route('register')}}">Register</a>
                <a href="{{route('login')}}">
                    <button type="button" class="rounded bg-teal-800 px-6 py-1.5 text-xs font-semibold text-white shadow-sm hover:bg-lime-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Login
                    </button>
                </a>
            </div>
        </div>
    </div>
</nav>