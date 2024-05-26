<section>
    <div class="px-4 py-6 mx-auto md:px-12 lg:px-6 max-w-7xl">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-sm font-medium text-gray-500 text-balance">
            @foreach ($desas as $desa)
            <div class="border rounded-xl">
                <div class="p-12 overflow-hidden">
                    @foreach ($imageKegiatans as $imageKegiatan)
                        @if ($imageKegiatan->desa_id == $desa->id)
                            <img src="{{ asset('storage/' . $imageKegiatan->path_image_kegiatan) }}" alt="#_" width="480" height="480" class="w-full h-full mx-auto">
                            @break
                        @endif
                    @endforeach
                </div>
                <div class="flex flex-col justify-between px-4 mt-4 overflow-hidden">
                    <div>
                        <p class="text-gray-900 text-base">{{ $desa->kegiatan }}</p>
                        <p class="text-gray-900 text-xs text-base">{{ $desa->deskripsi }}</p>
                        <p class="text-gray-900 text-xs text-base">{{ \Carbon\Carbon::parse($desa->created_at)->format('l, d F Y H:i:s') }}</p>
                    </div>
                    @can('admin')
                    <div class="flex mt-8">
                        <button wire:click="deleteDesa({{ $desa->id }})" class="mb-5 ml-4 inline-flex items-center justify-center text-sm font-semibold text-black duration-200 hover:text-red-500 focus:outline-none" aria-label="Delete activity">
                            <span>Delete</span>
                            <svg aria-hidden="true" focusable="false" class="size-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>
                    @endcan
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>