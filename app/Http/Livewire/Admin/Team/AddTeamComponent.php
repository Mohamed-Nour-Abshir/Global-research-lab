<?php

namespace App\Http\Livewire\Admin\Team;

use App\Models\Team;
use Illuminate\Support\Carbon;
use Livewire\Component;
use livewire\WithFileUploads;
class AddTeamComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $destination;
    public $image;
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'destination' => 'required',
            'image' => 'required'
        ]);
    }
    public function addConsuller(){
        $this->validate([
            'name' => 'required',
            'destination' => 'required',
            'image' => 'required'
        ]);
        $consuller = new Team();
        $consuller->name = $this->name;
        $consuller->destination = $this->destination;
        $imagename = Carbon::now()->timestamp.'.'. $this->image->extension();
        $this->image->storeAs('Team',$imagename);
        $consuller->image = $imagename;

        $consuller->save();
        return redirect()->route('admin.team')->with('message','Consuller has been added successfully');
    }
    public function render()
    {
        return view('livewire.admin.team.add-team-component')->layout('layouts.admin');
    }
}
