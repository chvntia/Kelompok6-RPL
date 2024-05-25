<?php

namespace App\Livewire\Desa;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Desa;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Kegiatan extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $kegiatan;
    public $deskripsi;
    public $images = [];
    public $path_image;

    protected $listeners = [
        'confirmed'
    ];

    public function mount(){
        if (auth()->user()->status == 'NA' && auth()->user()->role == 'Pengguna'){
            abort(403, 'Kamu Belum di Verifikasi!');
        } else if (auth()->user()->status == 'Rejected' && auth()->user()->role == 'Pengguna'){
            abort(403, 'Status Pengguna Rejected!');
        }
    }

    public function addKegiatan(){
        $this->validate([
            'kegiatan' => 'required|string',
            'deskripsi' => 'required|string',
            'images.*' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $this->alert('info', 'Add Kegiatan', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Yes',
            'text' => 'Are you sure to add Berita '.$this->kegiatan.'?',
            'cancelButtonText' => 'Cancel',
            'width' => '480',
            'height' => '480',
        ]);
    }

    public function confirmed(){
        $desa = Desa::create([
            'kegiatan' => $this->kegiatan,
            'deskripsi' => $this->deskripsi,
            'status' => 'Menunggu Approval',
        ]);

        foreach ($this->images as $image){
            if ($image->isValid()) {
                $path_image = $image->store('image_kegiatan','public');
                $desa->kegiatanImages()->create(['path_image_kegiatan' => $path_image]);
            } else {
                return redirect()->back()->with('error', 'Image Error!');
            }
        }

        $this->flash('success', 'Kegiatan ' . $this->kegiatan . ' Added!', [
            'position' => 'center',
            'timer' => '3000',
            'toast' => false,
            'timerProgressBar' => true,
        ]);

        $this->reset();

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.desa.kegiatan');
    }
}
