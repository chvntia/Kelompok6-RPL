<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $no_hp;
    public $alamat;
    public $role;
    public $password;

    protected $listeners = [
        'confirmed'
    ];

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'no_hp' => 'required|min:8',
        'alamat' => 'required',
        'role' => 'required',
        'password' => 'required'
    ];

    public function mount(){
        if (!(auth()->user()->role == 'Admin' || auth()->user()->role == 'Pengurus Desa')) {
            abort(403, 'Kamu bukan Admin atau Pengurus Desa!');
        }
    }

    public function addUser(){
        $this->validate();

        $this->alert('info', 'Add User', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Yes',
            'text' => 'Are you sure to add user '.$this->name.'?',
            'cancelButtonText' => 'Cancel',
            'width' => '480',
            'height' => '480',
        ]);
    }

    public function confirmed(){
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'no_hp' => $this->no_hp,
            'alamat' => $this->alamat,
            'role' => $this->role,
            'password' => Hash::make($this->password),
        ]);

        $this->flash('success', 'User ' . $this->name . ' Added!', [
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
        return view('livewire.user.add');
    }
}
