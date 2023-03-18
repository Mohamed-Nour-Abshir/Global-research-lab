<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use App\Models\Team;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::all();
        $consullers = Team::all();
        return view('livewire.home-component',['sliders' =>$sliders,'consullers'=>$consullers])->layout('layouts.base');
    }
}
