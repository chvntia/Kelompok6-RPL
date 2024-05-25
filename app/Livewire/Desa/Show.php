<?php

namespace App\Livewire\Desa;

use Livewire\Component;
use App\Models\Desa;
use App\Models\imageKegiatan;

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
        $imageKegiatans = imageKegiatan::all();
        $desas = Desa::where('status','Verified')->paginate(10);

        return view('livewire.desa.show', compact('desas','imageKegiatans'));
    }
}
