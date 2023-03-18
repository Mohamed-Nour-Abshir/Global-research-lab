<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddServicesComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
    }
    public function addService(){
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        $service = new Service();
        $service->name = $this->name;
        $service->description = $this->description;
        $imagename = Carbon::now()->timestamp.'.'. $this->image->extension();
        $this->image->storeAs('Services',$imagename);
        $service->image = $imagename;
        $service->save();
        return redirect()->route('admin.services')->with('message','Service has been added successfully');
    }
    public function render()
    {
        return view('livewire.admin.services.add-services-component')->layout('layouts.admin');
    }
}
