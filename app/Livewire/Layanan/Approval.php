<?php

namespace App\Livewire\Layanan;

use Livewire\Component;
use App\Models\Layanan;
use App\Models\imageKegiatan;
use Livewire\WithPagination;

class Approval extends Component
{
    use WithPagination;

    public function mount()
    {
        if (!(auth()->user()->role == 'Admin' || auth()->user()->role == 'Pengurus Desa')) {
            abort(403, 'Kamu bukan Admin atau Pengurus Desa!');
        }
    }

    public function Approve($id){
        $layanan = Layanan::findOrFail($id);
        $layanan->status= "Verified";
        $layanan->save();

        return redirect(request()->header('Referer'));
    }

    public function Reject($id){
        $layanan = Layanan::findOrFail($id);
        $layanan->status= "Rejected";
        $layanan->save();

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        $layanans = Layanan::with('user')->where('status','Menunggu Verifikasi')->paginate(10);
        return view('livewire.layanan.approval', compact('layanans'));
    }
}