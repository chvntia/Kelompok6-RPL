<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;

class Show extends Component
{
    public function render()
    {
        $berita = Berita::where('status','Verified')->get();

        return view('livewire.berita.show', compact('berita'));
    }
}