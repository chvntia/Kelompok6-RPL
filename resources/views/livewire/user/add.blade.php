<div class="p-4 mt-4 bg-white rounded-lg shadow-xs border">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
        <div class="flex flex-col md:flex-row sm:flex-col sm:gap-10">
            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2 mx-auto border rounded-lg shadow">
                <div class="w-full">
                    <h1 class="mb-4 text-xl font-semibold text-gray-700">
                        Daftarkan Pengguna
                    </h1>

                    <form wire:submit="addUser">
                        <!-- Name -->
                        <div class="">
                            <label for="name" class="block mb-1">Name:</label>
                            <input type="text" wire:model="name" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm mb-4">
                            @error('name') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <!-- Email -->
                        <div class="">
                            <label for="email" class="block mb-1">Email:</label>
                            <input type="email" wire:model="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm mb-4">
                            @error('email') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <!-- Phone Number -->
                        <div class="">
                            <label for="no_hp" class="block mb-1">No Handphone:</label>
                            <input type="phone" wire:model="no_hp" class="border p-2 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm mb-4">
                            @error('no_hp') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <!-- Address -->
                        <div class="">
                            <label for="alamat" class="block mb-1">Alamat:</label>
                            <input type="text" wire:model="alamat" class="border p-2 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm mb-4">
                            @error('alamat') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <!-- Role -->
                        <div class="">
                            <label for="role" class="block mb-1">Role:</label>
                            <select wire:model="role" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm mb-4">
                                <option hidden>Silahkan Pilih Role!</option>
                                <option value="Admin">Admin</option>
                                <option value="Pengurus Desa">Pengurus Desa</option>
                                <option value="Pengguna">Pengguna</option>
                            </select>
                            @error('role') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <!-- Password -->
                        <div class="">
                            <label for="password" class="block mb-1">Password:</label>
                            <input type="password" wire:model="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm mb-4">
                            @error('password') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-lime-600 hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500">
                                Tambahkan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>