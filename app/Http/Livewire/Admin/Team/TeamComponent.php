<?php

namespace App\Http\Livewire\Admin\Team;

use App\Models\Team;
use Livewire\Component;

class TeamComponent extends Component
{
    public function render()
    {
        $team = Team::all();
        return view('livewire.admin.team.team-component',['team' =>$team])->layout('layouts.admin');
    }

    public function deleteConsuller($id){
        $consuller = Team::find($id);
        $consuller->delete();
        return redirect()->route('admin.team')->with('message','Consuller has been deleted successfully');
    }

}
