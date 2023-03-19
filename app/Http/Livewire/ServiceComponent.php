<?php

namespace App\Http\Livewire;

use App\Models\Assesment;
use App\Models\Service;
use Livewire\Component;

class ServiceComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $study_level;
    public $country;


    public function render()
    {
        $services = Service::all();
        return view('livewire.service-component',['services'=>$services])->layout('layouts.base');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'study_level' => 'required',
            'country' => 'required'
        ]);
    }

    public function requestAssisment(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'study_level' => 'required',
            'country' => 'required'
        ]);
        $assesment = new Assesment();
        $assesment->name = $this->name;
        $assesment->email = $this->email;
        $assesment->phone = $this->phone;
        $assesment->study_level = $this->study_level;
        $assesment->country = $this->country;
        $assesment->save();

        session()->flash('message','Thanks for requesting our assesment one of our consullers will contact you soon!');
        $this->reset(['name', 'email', 'phone','study_level','country']);
        return redirect()->back();
    }
}
