<?php

namespace App\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use LivewireAlert;

    public $id;
    public $kategori;

    protected $listeners = [
        'confirmed'
    ];

    public function mount()
    {
        if (!(auth()->user()->role == 'Admin' || auth()->user()->role == 'Pengurus Desa')) {
            abort(403, 'Kamu bukan Admin atau Pengurus Desa!');
        }
    }

    public function addKategori()
    {
        $this->validate([
            'kategori' => 'required',
        ]);

        $this->alert('info', 'Add Kategori', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Yes',
            'text' => 'Are you sure to add Kategori ' . $this->kategori . '?',
            'cancelButtonText' => 'Cancel',
            'width' => '480',
            'height' => '480',
        ]);
    }

    public function confirmed()
    {
        $exception = false;
        try {
            Kategori::create([
                'kategori' => $this->kategori,
            ]);
        } catch (\Exception $e) {
            $this->alert('error', 'Duplicate Entry Kategori '.$this->kategori.'!', [
                'position' => 'center',
                'timer' => '3000',
                'toast' => false,
                'timerProgressBar' => true,
            ]);
            $exception = true;
        }
        if (!$exception){
            $this->flash('success', 'Kategori ' . $this->kategori . ' Added!', [
                'position' => 'center',
                'timer' => '3000',
                'toast' => false,
                'timerProgressBar' => true,
            ]);

            $this->reset();
            
            return redirect(request()->header('Referer'));
        }
    }

    public function render()
    {
        return view('livewire.kategori.add');
    }
}