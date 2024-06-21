<?php

namespace App\Livewire\Pages;

use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{

    public function useAddress($id)
    {
        $dataNo = Address::where(['user_id' => Auth::user()->id])->get();
        foreach ($dataNo as $dt) {
            $dt->update(['status' => 'no']);
        }

        $data = Address::find($id);
        $data->update(['status' => 'yes']);
    }

    public function render()
    {
        return view('livewire.pages.profile', [
            'addresses' => Address::where('user_id', Auth::user()->id)->get()
        ]);
    }
}
