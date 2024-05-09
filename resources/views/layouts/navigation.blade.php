<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0 border bg-lime-50">
    <div class="py-4 font-bold">
        <a class="ml-6 text-lg font-bold" href="{{ route('dashboard') }}">
            Selamat Datang!
        </a>

        <ul class="mt-6">
            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-lime-200 {{ request()->routeIs('dashboard') ? 'bg-lime-200 rounded-md' : '' }}">
                <x-nav-link href="{{ route('dashboard') }}">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-lime-200 {{ request()->routeIs('user.index') ? 'bg-lime-100 rounded-md' : '' }}">
                <x-nav-link href="{{ route('user.index') }}">
                    {{ __('Tambah Pengguna') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-lime-200 {{ request()->routeIs('user.approval') ? 'bg-lime-100 rounded-md' : '' }}">
                <x-nav-link href="{{ route('user.approval') }}">
                    {{ __('Approval Pengguna') }}
                </x-nav-link>
            </li>
            
            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-lime-200 {{ request()->routeIs('user.approval') ? 'bg-lime-100 rounded-md' : '' }}">
                <x-nav-link href="{{ route('berita.show') }}">
                    {{ __('Berita') }}
                </x-nav-link>
            </li>
            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-lime-200 {{ request()->routeIs('user.approval') ? 'bg-lime-100 rounded-md' : '' }}">
                <x-nav-link href="{{ route('berita.add') }}">
                    {{ __('Add Berita') }}
                </x-nav-link>
            </li>   

            
            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-lime-200 {{ request()->routeIs('user.approval') ? 'bg-lime-100 rounded-md' : '' }}">
                <x-nav-link href="{{ route('berita.approval') }}">
                    {{ __('Berita Approval') }}
                </x-nav-link>
            </li>  
        </ul>
    </div>
</aside>