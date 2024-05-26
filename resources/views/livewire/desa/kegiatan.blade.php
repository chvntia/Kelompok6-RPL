<div class="container mx-auto py-8">
    <h1 class="text-xl font-bold mb-4 text-center">Tambahkan Kegiatan</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <div class="mb-4">
            <label for="kegiatan" class="block text-gray-700 font-bold mb-2">Kegiatan</label>
            <input type="text" id="kegiatan" name="kegiatan" wire:model="kegiatan" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" placeholder="Masukan Judul Kegiatan" required>
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" wire:model="deskripsi" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" placeholder="Masukan Deskripsi Kegiatan" rows="4" required></textarea>
        </div>
        <div class="mb-4">
            <label for="images" class="block text-gray-700 font-bold mb-2">Gambar</label>
            <input type="file" id="images" name="images" wire:model="images" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" multiple placeholder="Tambahkan Gambar">
        </div>
        <div class="flex justify-end">
            <button type="button" wire:click="addKegiatan" data-confirm-delete class="bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded">Submit</button>
        </div>
        
    </form>
</div>