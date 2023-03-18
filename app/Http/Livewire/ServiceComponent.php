<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceComponent extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('livewire.service-component',['services'=>$services])->layout('layouts.base');
    }
}
