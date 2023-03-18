<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $consullers = Team::all();
        return view('livewire.about-component',['consullers' => $consullers])->layout('layouts.base');
    }
}
