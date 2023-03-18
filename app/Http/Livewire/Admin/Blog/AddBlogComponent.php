<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddBlogComponent extends Component
{
    use WithFileUploads;
    public $image;
    public $name;
    public $description;
    public $date;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' =>' required',
            'description' =>' required',
            'date' =>' required',
            'image' =>' required'
        ]);
    }

    public function addNews(){
        $this->validate([
            'name' =>' required',
            'description' =>' required',
            'date' =>' required',
            'image' =>' required'
        ]);
        $news = new Blog();
        $news->name = $this->name;
        $news->description = $this->description;
        $news->date = $this->date;

        $imagename = Carbon::now()->timestamp.'.'. $this->image->extension();
        $this->image->storeAs('Blogs',$imagename);
        $news->image = $imagename;
        $news->save();

        return redirect()->route('admin.news')->with('message','News has been uploaded successfully');
    }
    public function render()
    {
        return view('livewire.admin.blog.add-blog-component')->layout('layouts.admin');
    }
}
