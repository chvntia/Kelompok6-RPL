<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4 text-center">Add News</h1>
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
            <label for="judul" class="block text-gray-700 font-bold mb-2">Judul</label>
            <input type="text" id="judul" name="judul" wire:model="judul" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter the title" required>
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" wire:model="deskripsi" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter the deskripsi" rows="4" required></textarea>
        </div>
        <div class="mb-4">
            <label for="kategori" class="block text-gray-700 font-bold mb-2">Kategori</label>
            <select id="kategori" name="kategori" wire:model="kategori" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" required>
                <option value="" hidden>Select Kategori</option>
                <option value="politik">Politik</option>
                <option value="teknologi">Teknologi</option>
                <option value="olahraga">Olahraga</option>
                <option value="entertainment">Entertainment</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="isi" class="block text-gray-700 font-bold mb-2">Isi</label>
            <textarea id="isi" name="isi" wire:model="isi" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter the deskripsi" rows="4" required></textarea>
        </div>
        <div class="mb-4">
            <label for="link" class="block text-gray-700 font-bold mb-2">Link Berita</label>
            <textarea id="link" name="link" wire:model="link" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter the deskripsi" rows="4" required></textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Image URL</label>
            <input type="file" id="image" name="image" wire:model="image" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter the image URL">
        </div>
        <div class="flex justify-end">
            <button type="button" wire:click="addBerita" data-confirm-delete class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Submit</button>
        </div>
    </form>
</div>