<?php

namespace App\Http\Livewire;

use App\Models\Blog;
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
        $news = Blog::latest()->take(3)->get();
        return view('livewire.home-component',['sliders' =>$sliders, 'consullers'=>$consullers, 'services'=>$services, 'reviews'=>$reviews, 'news'=>$news])->layout('layouts.base');
    }
}
