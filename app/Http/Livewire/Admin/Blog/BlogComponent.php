<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Blog;
use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        $news = Blog::all();
        return view('livewire.admin.blog.blog-component',['news' =>$news])->layout('layouts.admin');
    }

    public function deleteBlog($id){
        $news = Blog::find($id);
        $news->delete();
        return redirect()->route('admin.news')->with('message','News has been deleted successfully');
    }
}
