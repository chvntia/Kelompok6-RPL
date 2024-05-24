<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Berita;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $id;
    public $judul;
    public $deskripsi;
    public $kategori;
    public $isi;
    public $link;
    public $image;
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

    public function addBerita(){
        $this->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori' => 'required',
            'isi' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        
        if ($this->image->isValid()) {
            $this->path_image = $this->image->store('image_berita','public');
        } else {
            return redirect()->back()->with('error', 'Image Error!');
        }

        $this->alert('info', 'Add Berita', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Yes',
            'text' => 'Are you sure to add Berita '.$this->judul.'?',
            'cancelButtonText' => 'Cancel',
            'width' => '480',
            'height' => '480',
        ]);

    }

    public function confirmed(){
        Berita::create([
            'user_id' => $this->id,
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'kategori' => $this->kategori,
            'isi' => $this->isi,
            'link' => $this->link,
            'status' => 'Menunggu Approval',
            'path_image_berita' => $this->path_image
        ]);

        $this->flash('success', 'Berita ' . $this->judul . ' Added!', [
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
        return view('livewire.berita.add');
    }
}