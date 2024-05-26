<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Update extends Component
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
        'confirmed',
    ];

    public function mount()
    {
        if (!(auth()->user()->role == 'Admin' || auth()->user()->role == 'Pengurus Desa')) {
            abort(403, 'Kamu bukan Admin atau Pengurus Desa!');
        }

        $berita = Berita::findOrFail($this->id);

        $this->judul = $berita->judul;
        $this->deskripsi = $berita->deskripsi;
        $this->kategori = $berita->kategori;
        $this->isi = $berita->isi;
        $this->link = $berita->link;
    }

    public function render()
    {
        $berita = Berita::findOrFail($this->id);

        return view('livewire.berita.update', compact('berita'));
    }

    public function updateBerita()
    {
        $this->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori' => 'required',
            'isi' => 'required',
            'link' => 'required',
        ]);

        $this->alert('info', 'Update Berita', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Yes',
            'text' => 'Are you sure to update Berita ' . $this->judul . '?',
            'cancelButtonText' => 'Cancel',
            'width' => '480',
            'height' => '480',
        ]);
    }

    public function confirmed()
    {
        $berita = Berita::findOrFail($this->id);

        if ($this->image) {
            if ($this->image->isValid()) {
                if ($berita->path_image_berita) {
                    Storage::disk('public')->delete($berita->path_image_berita);
                }
    
                $this->path_image = $this->image->store('image_berita', 'public');
            } else {
                return redirect()->back()->with('error', 'Image Error!');
            }
        } else {
            $this->path_image = $berita->path_image_berita;
        }

        $berita->update([
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'kategori' => $this->kategori,
            'isi' => $this->isi,
            'link' => $this->link,
            'status' => $berita->status,
            'path_image_berita' => $this->path_image,
        ]);

        $this->flash('success', 'Berita ' . $this->judul . ' Updated!', [
            'position' => 'center',
            'timer' => '3000',
            'toast' => false,
            'timerProgressBar' => true,
        ]);

        return redirect(request()->header('Referer'));
    }
}
