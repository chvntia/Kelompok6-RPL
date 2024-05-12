<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Berita;

class Add extends Component
{
    public $id;
    public $judul;
    public $deskripsi;
    public $kategori;
    public $isi;
    public $link;
    public $image;
    public $path_image;

    use WithFileUploads;

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
            $this->path_image = $this->image->store('image_berita`','public');
        } else {
            return redirect()->back()->with('error', 'Image Error!');
        }

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

        $this->reset();

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.berita.add');
    }
}