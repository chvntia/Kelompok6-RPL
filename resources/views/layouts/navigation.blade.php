<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0 border">
    <div class="py-4">
        <a class="ml-6 text-lg font-bold" href="{{ route('dashboard') }}">
            Desa Wisata Asri
        </a>

        <ul class="mt-6">

            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-lime-100 {{ request()->routeIs('dashboard') ? 'bg-lime-100 rounded-md' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <span class="inline-flex items-center w-full text-sm font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span class="ml-4 text-gray-800">Timeline</span>
                    </span>
                </a>
            </li>

            <li x-data="{ isPagesMenuOpen: true }" class="relative px-6 py-3">
                <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 ease-in-out rounded-md" @click="isPagesMenuOpen = !isPagesMenuOpen" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                            </path>
                        </svg>
                        <span class="ml-4">Berita</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-50 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md" aria-label="submenu">
                        <li class="{{ request()->routeIs('berita.show') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="{{ route('berita.show') }}">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                    <span class="ml-4 text-gray-800">Lihat Berita</span>
                                </span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('berita.add') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="{{ route('berita.add') }}">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h18v18H3zM12 8v8m-4-4h8"/></svg>
                                    <span class="ml-4 text-gray-800">Tambah Berita</span>
                                </span>
                            </a>
                        </li>
                        @can('admin')
                        <li class="{{ request()->routeIs('berita.approval') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="{{ route('berita.approval') }}">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span class="ml-4 text-gray-800">Approval Berita</span>
                                </span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                    <span class="ml-4 text-gray-800">Tambah Kategori</span>
                                </span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </template>
            </li>
            @can('admin')
            <li x-data="{ isPagesMenuOpen: true }" class="relative px-6 py-3">
                <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 ease-in-out rounded-md" @click="isPagesMenuOpen = !isPagesMenuOpen" aria-haspopup="true">
                    <span class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span class="ml-4">Pengguna</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-50 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md" aria-label="submenu">
                        <li class="{{ request()->routeIs('user.index') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="{{ route('user.index') }}">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                                    <span class="ml-4 text-gray-800">Tambah Pengguna</span>
                                </span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('user.approval') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="{{ route('user.approval') }}">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                                    <span class="ml-4 text-gray-800">Approval Pengguna</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </template>
            </li>
            @endcan

            <li x-data="{ isPagesMenuOpen: true }" class="relative px-6 py-3">
                <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 ease-in-out rounded-md" @click="isPagesMenuOpen = !isPagesMenuOpen" aria-haspopup="true">
                    <span class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11.5" cy="8.5" r="5.5"/><path d="M11.5 14v7"/></svg>
                        <span class="ml-4">Kegiatan Desa</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-50 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md" aria-label="submenu">
                        <li class="{{ request()->routeIs('desa.show') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="{{ route('desa.show') }}">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M16.2 7.8l-2 6.3-6.4 2.1 2-6.3z"/></svg>
                                    <span class="ml-4 text-gray-800">Lihat Kegiatan</span>
                                </span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('desa.kegiatan') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="{{ route('desa.kegiatan') }}">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h18v18H3zM12 8v8m-4-4h8"/></svg>
                                    <span class="ml-4 text-gray-800">Tambah Kegiatan</span>
                                </span>
                            </a>
                        </li>
                        @can('admin')
                        <li class="{{ request()->routeIs('desa.approval') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="{{ route('desa.approval') }}">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span class="ml-4 text-gray-800">Approval Kegiatan</span>
                                </span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </template>
            </li>

            <li x-data="{ isPagesMenuOpen: true }" class="relative px-6 py-3">
                <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 ease-in-out rounded-md" @click="isPagesMenuOpen = !isPagesMenuOpen" aria-haspopup="true">
                    <span class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span class="ml-4">Layanan Desa</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-50 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md" aria-label="submenu">
                        <li class="{{ request()->routeIs('layanan.show') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="{{ route('layanan.show') }}">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    <span class="ml-4 text-gray-800">Lihat Layanan</span>
                                </span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('layanan.add') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="{{ route('layanan.add') }}">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    <span class="ml-4 text-gray-800">Request Layanan</span>
                                </span>
                            </a>
                        </li>
                        @can('admin')
                        <li class="{{ request()->routeIs('layanan.approval') ? 'bg-lime-100 rounded-md' : '' }}">
                            <a href="{{ route('layanan.approval') }}">
                                <span class="inline-flex items-center w-full text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span class="ml-4 text-gray-800">Approval Layanan</span>
                                </span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </template>
            </li>
        </ul>
    </div>
</aside>