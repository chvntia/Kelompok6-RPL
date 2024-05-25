<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Show extends Component
{
    use LivewireAlert;

    public $idBerita;

    protected $listeners = [
        'confirmedDelete',
        'cancelledDelete'
    ];

    public function mount()
    {
        // if (!(auth()->user()->role == 'Admin' || auth()->user()->role == 'Pengurus Desa')) {
        //     abort(403, 'Kamu bukan Admin atau Pengurus Desa!');
        // }
    }

    public function render()
    {
        $berita = Berita::where('status', 'Verified')->get();

        return view('livewire.berita.show', compact('berita'));
    }

    public function deleteBerita($idBerita)
    {
        $this->idBerita = $idBerita;

        $judulBerita = Berita::where('status', 'Verified')
            ->where('id', $idBerita)->first(['judul']);

        $this->alert('info', 'Delete Berita', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmedDelete',
            'showCancelButton' => true,
            'onDismissed' => 'cancelledDelete',
            'confirmButtonText' => 'Yes',
            'text' => 'Are you sure to delete ' . $judulBerita->judul . '?',
            'cancelButtonText' => 'Cancel',
            'width' => '480',
            'height' => '480',
        ]);
    }

    public function cancelledDelete()
    {
        $this->idBerita = null;
    }

    public function confirmedDelete()
    {
        $berita = Berita::findOrFail($this->idBerita);

        Storage::disk('public')->delete($berita->path_image_berita);
        $berita->delete();

        $this->flash('success', 'Berita deleted!', [
            'position' => 'center',
            'timer' => '3000',
            'toast' => false,
            'timerProgressBar' => true,
        ]);

        return redirect(request()->header('Referer'));
    }
}