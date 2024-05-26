<?php

namespace App\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Show extends Component
{
    use LivewireAlert;

    public $idKategori;

    protected $listeners = [
        'confirmedDelete',
        'cancelledDelete'
    ];

    public function mount()
    {
        if (!(auth()->user()->role == 'Admin' || auth()->user()->role == 'Pengurus Desa')) {
            abort(403, 'Kamu bukan Admin atau Pengurus Desa!');
        }
    }

    public function deleteKategori($idKategori)
    {
        $this->idKategori = $idKategori;

        $kategori = Kategori::where('id', $idKategori)->first(['kategori']);

        $this->alert('info', 'Delete Kategori', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmedDelete',
            'showCancelButton' => true,
            'onDismissed' => 'cancelledDelete',
            'confirmButtonText' => 'Yes',
            'text' => 'Are you sure to delete ' . $kategori->kategori . '?',
            'cancelButtonText' => 'Cancel',
            'width' => '480',
            'height' => '480',
        ]);
    }

    public function cancelledDelete()
    {
        $this->idKategori = null;
    }

    public function confirmedDelete()
    {
        $Kategori = Kategori::findOrFail($this->idKategori);
        $Kategori->delete();

        $this->flash('success', 'Kategori deleted!', [
            'position' => 'center',
            'timer' => '3000',
            'toast' => false,
            'timerProgressBar' => true,
        ]);

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        $kategoris = Kategori::all();
        return view('livewire.kategori.show', compact('kategoris'));
    }
}