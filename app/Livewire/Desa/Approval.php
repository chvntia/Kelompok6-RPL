<?php

namespace App\Livewire\Desa;

use Livewire\Component;
use App\Models\Desa;
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
        $desa = Desa::findOrFail($id);
        $desa->status= "Verified";
        $desa->save();

        return redirect(request()->header('Referer'));
    }

    public function Reject($id){
        $desa = Desa::findOrFail($id);
        $desa->status= "Rejected";
        $desa->save();

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        $imageKegiatans = imageKegiatan::all();
        $desas = Desa::where('status','Menunggu Approval')->paginate(10);
        return view('livewire.desa.approval',compact('desas','imageKegiatans'));
    }
}