<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;
use Livewire\WithPagination;

class Approval extends Component
{
    use WithPagination;

    public function mount(){
        if (!(auth()->user()->role == 'Admin' || auth()->user()->role == 'Pengurus Desa')) {
            abort(403, 'Kamu bukan Admin atau Pengurus Desa!');
        }
    }

    public function Approve($id){
        $berita = Berita::findOrFail($id);
        $berita->status= "Verified";
        $berita->save();

        return redirect(request()->header('Referer'));
    }

    public function Reject($id){
        $berita = Berita::findOrFail($id);
        $berita->status= "Rejected";
        $berita->save();

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        $berita = Berita::where('status','Menunggu Approval')->with('user')->paginate(10);
        return view('livewire.berita.approval', compact('berita'));
    }
}