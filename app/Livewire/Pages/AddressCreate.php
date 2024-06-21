<?php

namespace App\Livewire\Pages;

use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddressCreate extends Component
{

    public $name;
    public $phone_number;
    public $city;
    public $province;
    public $zip_code;
    public $address;

    public function rules()
    {
        return [
            'name' => 'required',
            'phone_number' => 'required',
            'city' => 'required',
            'province' => 'required',
            'zip_code' => 'required',
            'address' => 'required',
        ];
    }

    public function addAddress()
    {
        $this->validate();

        Address::create([
            'user_id' => Auth::user()->id,
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'city' => $this->city,
            'province' => $this->province,
            'zip_code' => $this->zip_code,
            'address' => $this->address
        ]);

        $this->redirect('/my-profile');
    }
    public function render()
    {
        return view('livewire.pages.address-create');
    }
}
