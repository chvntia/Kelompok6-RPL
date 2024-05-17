<div class="container mx-auto py-8">
    <h1 class="text-xl font-bold mb-4 text-center">Tambahkan Berita</h1>
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
            <label for="layanan" class="block text-gray-700 font-bold mb-2">Layanan</label>
            <select id="layanan" name="layanan" wire:model="layanan" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" required>
                <option value="" hidden>Select layanan</option>
                <option value="lapangan basket">Lapangan Basket</option>
                <option value="lapangan bola">Lapangan Bola</option>
                <option value="gedung serba guna">Gedung Serba Guna</option>
                <option value="billiard">Billiard</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="keterangan" class="block text-gray-700 font-bold mb-2">Keterangan</label>
            <textarea id="keterangan" name="keterangan" wire:model="keterangan" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-400" placeholder="Enter the deskripsi" rows="4" required></textarea>
        </div>
        <div class="flex justify-end">
            <button type="button" wire:click="addLayanan" data-confirm-delete class="bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded">Submit</button>
        </div>
    </form>
</div>
