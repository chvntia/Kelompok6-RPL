<section>
    <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-sm font-medium text-gray-500 text-balance">
            @foreach ($berita as $berita)
            <div class="border rounded-xl">
                <div class="p-12 overflow-hidden">
                    <img src="{{asset('storage/'.$berita->path_image_berita)}}" alt="#_" width="480" height="480" class="w-full h-full mx-auto">
                </div>
                <div class="flex flex-col justify-between px-4 mt-4 overflow-hidden">
                    <div>
                        <p class="text-gray-900 text-base">{{$berita->judul}}</p>
                        <p class="text-gray-900 text-xs text-base">{{$berita->kategori}}</p>
                        <p class="text-gray-900 text-xs text-base">{{$berita->link}}</p>
                        <p class="mt-2">{{$berita->deskripsi}}</p>
                    </div>
                    <div class="flex mt-8">
                        <a href="#" class="mb-5 inline-flex items-center justify-center text-sm font-semibold text-black duration-200 hover:text-blue-500 focus:outline-none" aria-label="Read more about the topic">
                            <span>Read more</span>
                            <svg aria-hidden="true" focusable="false" class="size-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="{{ route('berita.update',$berita->id) }}" class="mb-5 ml-4 inline-flex items-center justify-center text-sm font-semibold text-black duration-200 hover:text-red-500 focus:outline-none">
                            <span>Edit</span>
                        </a>
                        <button wire:click="deleteBerita({{ $berita->id }})" class="mb-5 ml-4 inline-flex items-center justify-center text-sm font-semibold text-black duration-200 hover:text-red-500 focus:outline-none" aria-label="Delete news">
                            <span>Delete</span>
                            <svg aria-hidden="true" focusable="false" class="size-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>