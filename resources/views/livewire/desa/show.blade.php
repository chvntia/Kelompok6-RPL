<section>
    <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-sm font-medium text-gray-500 text-balance">
            @foreach ($desas as $desa)
            <div class="border rounded-xl">
                @foreach ($imageKegiatans as $imageKegiatan)
                <div class="p-12 overflow-hidden">
                    <img src="{{asset('storage/'.$imageKegiatan->path_image_kegiatan)}}" alt="#_" width="480" height="480" class="w-full h-full mx-auto">
                </div>
                @endforeach
                <div class="flex flex-col justify-between px-4 mt-4 overflow-hidden">
                    <div>
                        <p class="text-gray-900 text-base">{{$desa->kegiatan}}</p>
                        <p class="text-gray-900 text-xs text-base">{{$desa->deskripsi}}</p>
                        <p class="text-gray-900 text-xs text-base">{{$desa->created_at}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>