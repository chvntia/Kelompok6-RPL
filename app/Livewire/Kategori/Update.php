<?php

namespace App\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Update extends Component
{
    use LivewireAlert;

    public $id;
    public $kategori;

    protected $listeners = [
        'confirmed',
    ];

    public function mount()
    {
        if (!(auth()->user()->role == 'Admin' || auth()->user()->role == 'Pengurus Desa')) {
            abort(403, 'Kamu bukan Admin atau Pengurus Desa!');
        }

        $kategori = Kategori::findOrFail($this->id);

        $this->kategori = $kategori->kategori;
    }

    public function render()
    {
        $kategoris = Kategori::findOrFail($this->id);
        return view('livewire.kategori.update', compact('kategoris'));
    }

    public function updateKategori()
    {
        $kategori = Kategori::where('id',$this->id)->first(['kategori']);

        $this->validate([
            'kategori' => 'required'
        ]);

        $this->alert('info', 'Update Kategori', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Yes',
            'text' => 'Are you sure to update Kategori ' .$kategori->kategori. '?',
            'cancelButtonText' => 'Cancel',
            'width' => '480',
            'height' => '480',
        ]);
    }

    public function confirmed()
    {
        $Kategori = Kategori::findOrFail($this->id);

        $Kategori->update([
            'kategori' => $this->kategori,
        ]);

        $this->flash('success', 'Kategori ' . $this->kategori . ' Updated!', [
            'position' => 'center',
            'timer' => '3000',
            'toast' => false,
            'timerProgressBar' => true,
        ]);

        return redirect(request()->header('Referer'));
    }
}