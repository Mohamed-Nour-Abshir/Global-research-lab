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

    public function deleteService($id){
        $reviews = Service::find($id);
        $reviews->delete();
        return redirect()->route('admin.services')->with('message','Review has been deleted successfully');
    }
}
