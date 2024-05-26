<?php

namespace App\Livewire\Layanan;

use Livewire\Component;
use App\Models\Layanan;

class Show extends Component
{
    public function mount()
    {
        if (auth()->user()->status == 'NA' && auth()->user()->role == 'Pengguna'){
            abort(403, 'Kamu Belum di Verifikasi!');
        } else if (auth()->user()->status == 'Rejected' && auth()->user()->role == 'Pengguna'){
            abort(403, 'Status Pengguna Rejected!');
        }
    }

    public function render()
    {
        $layanans = Layanan::where('status','Verified')->paginate(10);
        return view('livewire.layanan.show', compact('layanans'));
    }
}