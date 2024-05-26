<x-app-layout>
    <div class="container">
        <div class="mb-8">
            <h2 class="mt-5 text-2xl font-bold mb-4">Berita Terbaru</h2>
            <div class="bg-white shadow-md rounded-lg p-4">
                @livewire('berita.show')
            </div>
        </div>
        <div>
            <h2 class="text-2xl font-bold mb-4">Kegiatan Terbaru</h2>
            <div class="bg-white shadow-md rounded-lg p-4">
                @livewire('desa.show')
            </div>
        </div>
    </div>
</x-app-layout>
