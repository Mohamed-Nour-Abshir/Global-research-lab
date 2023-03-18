<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditBlogComponent extends Component
{
    use WithFileUploads;

    public $image;
    public $name;
    public $description;
    public $date;
    public $newimage;
    public $blog_id;

    public function mount($id){
        $news = Blog::find($id);
        $this->name = $news->name;
        $this->description = $news->description;
        $this->date = $news->date;
        $this->image = $news->image;
        $this->blog_id = $news->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' =>' required',
            'description' =>' required',
            'date' =>' required',
            'image' =>' required'
        ]);
    }

    public function editNews(){
        $this->validate([
            'name' =>' required',
            'description' =>' required',
            'date' =>' required',
            'image' =>' required'
        ]);
        $news = Blog::find($this->blog_id);
        $news->name = $this->name;
        $news->description = $this->description;
        $news->date = $this->date;

        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Blogs',$imagename);
            $news->image = $imagename;
        }
        $news->save();

        return redirect()->route('admin.news')->with('message','News has been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.blog.edit-blog-component')->layout('layouts.admin');
    }
}
