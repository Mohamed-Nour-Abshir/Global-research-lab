<?php

namespace App\Http\Livewire\Admin\HomeSlider;

use App\Models\HomeSlider;
use Livewire\Component;

class HomeSliderComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.home-slider.home-slider-component',['sliders'=>$sliders])->layout('layouts.admin');
    }
}
