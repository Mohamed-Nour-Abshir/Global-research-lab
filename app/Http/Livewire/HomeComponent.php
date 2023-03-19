<?php

namespace App\Http\Livewire;

use App\Models\Assesment;
use App\Models\Blog;
use App\Models\HomeSlider;
use App\Models\Review;
use App\Models\Service;
use App\Models\Team;
use Livewire\Component;

class HomeComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $study_level;
    public $country;

    public function render()
    {
        $sliders = HomeSlider::all();
        $consullers = Team::all();
        $services = Service::all();
        $reviews = Review::all();
        $news = Blog::latest()->take(3)->get();
        return view('livewire.home-component',['sliders' =>$sliders, 'consullers'=>$consullers, 'services'=>$services, 'reviews'=>$reviews, 'news'=>$news])->layout('layouts.base');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'study_level' => 'required',
            'country' => 'required'
        ]);
    }

    public function requestAssisment(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'study_level' => 'required',
            'country' => 'required'
        ]);
        $assesment = new Assesment();
        $assesment->name = $this->name;
        $assesment->email = $this->email;
        $assesment->phone = $this->phone;
        $assesment->study_level = $this->study_level;
        $assesment->country = $this->country;
        $assesment->save();
        
        session()->flash('message','Thanks for requesting our assesment one of our consullers will contact you soon!');
        $this->reset(['name', 'email', 'phone','study_level','country']);
        return redirect()->back();
    }
}
