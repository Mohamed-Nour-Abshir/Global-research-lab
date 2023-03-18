<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        $blogs = Blog::latest()->paginate(10);
        $recents = Blog::all();
        return view('livewire.blog-component',['blogs'=>$blogs, 'recents'=>$recents])->layout('layouts.base');
    }
}
