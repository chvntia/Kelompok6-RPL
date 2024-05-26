<div class="p-4 mt-4 bg-white rounded-lg shadow-xs border">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs border">
        <div class="w-full overflow-x-auto shadow-xs">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-bold tracking-wide text-left text-gray-500 bg-lime-200 border">
                        <th class="px-4 py-3">Id</th>
                        <th class="px-4 py-3">Kegiatan</th>
                        <th class="px-4 py-3">Deskripsi</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Tanggal Input</th>
                        <th class="px-4 py-3">Image</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-300 dark:bg-gray-50 text-sm">
                    @foreach ($desas as $desa)
                    <tr class="text-gray-700 dark:text-gray-600">
                        <td class="px-4 py-3">{{$desa->id}}</td>
                        <td class="px-4 py-3">{{$desa->kegiatan}}</td>
                        <td class="px-4 py-3">{{$desa->deskripsi}}</td>
                        <td class="px-4 py-3">{{$desa->status}}</td>
                        <td class="px-4 py-3">{{$desa->created_at}}</td>
                        <td class="px-4 py-2">
                            <div class="carousel w-full">
                                @foreach ($imageKegiatans->where('desa_id', $desa->id) as $imageKegiatan)
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/'.$imageKegiatan->path_image_kegiatan)}}" alt="Image" class="h-16 w-auto rounded-md">
                                </div>
                                @endforeach
                            </div>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center space-x-2 text-sm">
                                <button wire:click.prevent="Approve({{ $desa->id }})" class="p-2 text-xs font-medium text-white bg-green-500 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">
                                    Approve
                                </button>
                                <button wire:click.prevent="Reject({{ $desa->id }})" class="p-2 text-xs font-medium text-white bg-red-900 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">
                                    Reject
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>