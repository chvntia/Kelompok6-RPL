<div class="p-4 mt-4 bg-white rounded-lg shadow-xs border">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs border">
        <div class="w-full overflow-x-auto shadow-xs">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-bold tracking-wide text-left text-gray-500 bg-lime-200 border">
                        <th class="px-4 py-3">Id</th>
                        <th class="px-4 py-3">Tanggal</th>
                        <th class="px-4 py-3">Judul</th>
                        <th class="px-4 py-3">Deskripsi</th>
                        <th class="px-4 py-3">Kategori</th>
                        <th class="px-4 py-3">Isi</th>
                        <th class="px-4 py-3">Link Berita</th>
                        <th class="px-4 py-3">Foto</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-300 dark:bg-gray-50 text-sm">
                    @foreach ($berita as $berita)
                    <tr class="text-gray-700 dark:text-gray-600">
                        <td class="px-4 py-3">{{$berita->id}}</td>
                        <td class="px-4 py-3">{{$berita->user->name}}</td>
                        <td class="px-4 py-3">{{$berita->judul}}</td>
                        <td class="px-4 py-3">{{$berita->deskripsi}}</td>
                        <td class="px-4 py-3">{{$berita->deskripsi}}</td>
                        <td class="px-4 py-3">{{$berita->isi}}</td>
                        <td class="px-4 py-3">{{$berita->link}}</td>
                        <td class="px-4 py-2">
                            <img src="{{ asset('storage/'.$berita->path_image_berita)}}" alt="Image" class="h-16 w-auto">
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center space-x-2 text-sm">
                                <button wire:click.prevent="Approve({{ $berita->id }})" class="p-2 text-xs font-medium text-white bg-green-500 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">
                                    Approve
                                </button>
                                <button wire:click.prevent="Reject({{ $berita->id }})" class="p-2 text-xs font-medium text-white bg-red-900 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">
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