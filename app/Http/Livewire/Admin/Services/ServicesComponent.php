<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('livewire.admin.services.services-component',['services' => $services])->layout('layouts.admin');
    }
}
