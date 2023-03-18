<?php

namespace App\Http\Livewire\Admin\Team;

use App\Models\Team;
use Illuminate\Support\Carbon;
use Livewire\Component;
use livewire\WithFileUploads;
class EditTeamComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $destination;
    public $image;
    public $newimage;
    public $consuller_id;

    public function mount($id){
        $consuller = Team::find($id);
        $this->name = $consuller->name;
        $this->destination = $consuller->destination;
        $this->image = $consuller->image;
        $this->consuller_id = $consuller->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'destination' => 'required',
            'image' => 'required'
        ]);
    }

    public function editConsuller(){
        $this->validate([
            'name' => 'required',
            'destination' => 'required',
            'image' => 'required'
        ]);
        $consuller = Team::find($this->consuller_id);
        $consuller->name = $this->name;
        $consuller->destination = $this->destination;

        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Team',$imagename);
            $consuller->image = $imagename;
        }

        $consuller->save();
        return redirect()->route('admin.team')->with('message','Consuller has been added successfully');
    }
    public function render()
    {
        return view('livewire.admin.team.edit-team-component')->layout('layouts.admin');
    }
}
