<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Carbon\Carbon;
use Livewire\Component;
use livewire\WithFileUploads;
class EditServicesComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;
    public $newimage;
    public $service_id;

    public function mount($id){
        $service = Service::find($id);
        $this->name = $service->name;
        $this->description = $service->description;
        $this->image = $service->image;
        $this->service_id = $service->id;
    }
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
        $service = Service::find($this->service_id);
        $service->name = $this->name;
        $service->description = $this->description;
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Services',$imagename);
            $service->image = $imagename;
        }

        $service->save();
        return redirect()->route('admin.services')->with('message','Service has been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.services.edit-services-component')->layout('layouts.admin');
    }
}
