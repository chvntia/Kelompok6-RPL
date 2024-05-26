<?php

namespace App\Livewire\Desa;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Desa;
use App\Models\imageKegiatan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Storage;

class Show extends Component
{
    use WithPagination, LivewireAlert;

    public $idDesa;

    protected $listeners = [
        'confirmedDelete',
        'cancelledDelete'
    ];

    public function mount()
    {
        if (auth()->user()->status == 'NA' && auth()->user()->role == 'Pengguna'){
            abort(403, 'Kamu Belum di Verifikasi!');
        } else if (auth()->user()->status == 'Rejected' && auth()->user()->role == 'Pengguna'){
            abort(403, 'Status Pengguna Rejected!');
        }
    }

    public function deleteDesa($idDesa)
    {
        $this->idDesa = $idDesa;

        $desa = Desa::find($idDesa);

        $this->alert('info', 'Delete Desa', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmedDelete',
            'showCancelButton' => true,
            'onDismissed' => 'cancelledDelete',
            'confirmButtonText' => 'Yes',
            'text' => 'Are you sure to delete ' . $desa->kegiatan . '?',
            'cancelButtonText' => 'Cancel',
        ]);
    }

    public function cancelledDelete()
    {
        $this->idDesa = null;
    }

    public function confirmedDelete()
    {
        $desa = Desa::findOrFail($this->idDesa);

        // Delete related images from storage
        $images = imageKegiatan::where('desa_id', $this->idDesa)->get();
        foreach ($images as $image) {
            Storage::disk('public')->delete($image->path_image_kegiatan);
            $image->delete();
        }

        $desa->delete();

        $this->flash('success', 'Kegiatan deleted successfully!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'timerProgressBar' => true,
        ]);

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        $imageKegiatans = imageKegiatan::all();
        $desas = Desa::where('status', 'Verified')->paginate(10);

        return view('livewire.desa.show', compact('desas', 'imageKegiatans'));
    }
}