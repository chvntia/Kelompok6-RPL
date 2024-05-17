<?php

namespace App\Livewire\Layanan;

use Livewire\Component;
use App\Models\Layanan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use LivewireAlert;

    public $layanan;
    public $keterangan;


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

    public function addLayanan(){
        $this->validate([
            'layanan' => 'required|string',
            'keterangan' => 'required|string'
        ]);

        $this->alert('info', 'Gunakan Layanan', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Yes',
            'text' => 'Are you sure to use '.$this->layanan.'?',
            'cancelButtonText' => 'Cancel',
            'width' => '480',
            'height' => '480',
        ]);
    }

    public function confirmed(){
        Layanan::create([
            'user_id' => auth()->user()->id,
            'layanan' => $this->layanan,
            'keterangan' => $this->keterangan,
            'status' => 'Menunggu Verifikasi',
        ]);

        $this->flash('success', 'Layanan ' . $this->layanan . ' Requested!', [
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
        return view('livewire.layanan.add');
    }
}