<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use App\Models\Review;
use App\Models\Service;
use App\Models\Team;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::all();
        $consullers = Team::all();
        $services = Service::all();
        $reviews = Review::all();
        return view('livewire.home-component',['sliders' =>$sliders,'consullers'=>$consullers,'services'=>$services,'reviews'=>$reviews])->layout('layouts.base');
    }
}
