<div class="overflow-x-auto">
    <table class="table-auto w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">User Created</th>
                <th class="px-4 py-2">Judul</th>
                <th class="px-4 py-2">Deskripsi</th>
                <th class="px-4 py-2">Kategori</th>
                <th class="px-4 py-2">Isi</th>
                <th class="px-4 py-2">Link Berita</th>
                <th class="px-4 py-2">Image</th>
                <th class="px-4 py-2">
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($berita as $berita)
            <tr class="text-center">
                <td class="border px-4 py-2">{{$berita->id}}</td>
                <td class="border px-4 py-2">{{$berita->user->name}}</td>
                <td class="border px-4 py-2">{{$berita->judul}}</td>
                <td class="border px-4 py-2">{{$berita->deskripsi}}</td>
                <td class="border px-4 py-2">{{$berita->kategori}}</td>
                <td class="border px-4 py-2">{{$berita->isi}}</td>
                <td class="border px-4 py-2">{{$berita->link}}</td>
                <td class="border px-4 py-2">
                    <img src="{{ asset('storage/'.$berita->path_image_berita)}}" alt="Image" class="h-16 w-auto">
                </td>
                <td class="border px-4 py-2">
                    <button wire:click.prevent="Approve({{$berita->id}})" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Approve
                    </button>
                    <button wire:click.prevent="Reject({{$berita->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                        Reject
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>