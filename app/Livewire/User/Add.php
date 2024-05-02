<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Add extends Component
{
    public $name;
    public $email;
    public $no_hp;
    public $alamat;
    public $role;
    public $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'no_hp' => 'required|min:8',
        'alamat' => 'required',
        'role' => 'required',
        'password' => 'required'
    ];

    public function mount(){
        if (!(auth()->user()->role == 'Admin')) {
            abort(403, 'Kamu bukan Admin!');
        }
    }

    public function addUser(){
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'no_hp' => $this->no_hp,
            'alamat' => $this->alamat,
            'role' => $this->role,
            'password' => Hash::make($this->password),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.user.add');
    }
}
