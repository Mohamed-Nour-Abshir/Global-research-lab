<?php

namespace App\Http\Livewire\Admin\HomeSlider;

use App\Models\HomeSlider;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $image;

    public function addSlider(){
        $this->validate([
            'title' =>'required',
            'image' =>'required',
        ]);

        $slider = new HomeSlider();
        $slider->title = $this->title;

        $imagename = Carbon::now()->timestamp.'.'. $this->image->extension();
        $this->image->storeAs('Sliders',$imagename);
        $slider->image = $imagename;

        $slider->save();
        return redirect()->route('admin.homeslider')->with('message','Sldier has been added successfully');
    }
    public function render()
    {
        return view('livewire.admin.home-slider.add-home-slider-component')->layout('layouts.admin');
    }
}
