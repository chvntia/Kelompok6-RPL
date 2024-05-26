<div class="container mx-auto py-8">
    <h1 class="text-xl font-bold mb-4 text-center">Tambahkan Kategori Berita</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form wire:submit.prevent="addKategori" enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <div class="mb-4">
            <label for="kategori" class="block text-gray-700 font-bold mb-2">Kategori</label>
            <input id="kategori" type='text' name="kategori" wire:model="kategori" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" required>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded">Submit</button>
        </div>
    </form>
</div>