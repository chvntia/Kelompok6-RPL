<div>
    <form wire:submit="addUser">
        <label for="name">Name:</label><br>
        <input type="text" wire:model="name"><br>
        @error('name') <span class="error">{{ $message }}</span> @enderror
        <label for="email">Email:</label><br>
        <input type="email" wire:model="email"><br>
        @error('email') <span class="error">{{ $message }}</span> @enderror
        <label for="no_hp">No Handphone</label><br>
        <input type="no_hp" wire:model="no_hp"><br>
        @error('no_hp') <span class="error">{{ $message }}</span> @enderror
        <label for="alamat">Alamat</label><br>
        <input type="alamat" wire:model="alamat"><br>
        @error('alamat') <span class="error">{{ $message }}</span> @enderror
        <label for="role">Role</label><br>
        <select wire:model="role">
            <option hidden>Silahkan Pilih Role!</option>
            <option value="Admin">Admin</option>
            <option value="Pengurus Desa">Pengurus Desa</option>
            <option value="Pengguna">Pengguna</option>
        </select><br>
        @error('role') <span class="error">{{ $message }}</span> @enderror
        <label for="password">Password:</label><br>
        <input type="password" wire:model="password"><br>
        @error('password') <span class="error">{{ $message }}</span> @enderror
        <button type="submit">Add</button>
    </form>
</div>