<?php

namespace App\Livewire\Pages;

use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddressEdit extends Component
{
    public $data;
    public $id;

    public $name;
    public $phone_number;
    public $city;
    public $province;
    public $zip_code;
    public $address;



    public function mount($id)
    {
        $this->id = $id;
        $this->data = Address::find($id);

        $this->name = $this->data->name;
        $this->phone_number = $this->data->phone_number;
        $this->city = $this->data->city;
        $this->province = $this->data->province;
        $this->zip_code = $this->data->zip_code;
        $this->address = $this->data->address;
    }


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


    public function updateAddress()
    {
        $this->validate();
        $data = Address::where('id', $this->id)->first();

        $data->update([
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
        return view('livewire.pages.address-edit', [
            'data' => $this->data
        ]);
    }
}
