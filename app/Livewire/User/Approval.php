<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Approval extends Component
{
    use WithPagination;

    public function mount(){
        if (!(auth()->user()->role == 'Admin')) {
            abort(403, 'Kamu bukan Admin!');
        }
    }

    public function Approve($id){
        $user = User::findOrFail($id);
        $user->status= "Verified";
        $user->save();

        return redirect(request()->header('Referer'));
    }

    public function Reject($id){
        $user = User::findOrFail($id);
        $user->status= "Rejected";
        $user->save();

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        $dataUser = User::where('status','NA')->where('role','Pengguna')->paginate(10);

        return view('livewire.user.approval', compact('dataUser'));
    }
}
