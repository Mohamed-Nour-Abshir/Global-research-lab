<?php

namespace App\Http\Livewire\Admin\Reviews;

use App\Models\Review;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddReviewsComponent extends Component
{
    use WithFileUploads;
    public $image;
    public $name;
    public $destination;
    public $comment;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'destination' => 'required',
            'comment' => 'required',
            'image' => 'required'
        ]);
    }

    public function addReview(){
        $this->validate([
            'name' => 'required',
            'destination' => 'required',
            'comment' => 'required',
            'image' => 'required'
        ]);
        $review = new Review();
        $review->name = $this->name;
        $review->destination = $this->destination;
        $review->comment = $this->comment;

        $imagename = Carbon::now()->timestamp.'.'. $this->image->extension();
        $this->image->storeAs('Reviews',$imagename);
        $review->image = $imagename;

        $review->save();
        return redirect()->route('admin.reviews')->with('message','Review has been added successfully');
    }


    public function render()
    {
        return view('livewire.admin.reviews.add-reviews-component')->layout('layouts.admin');
    }
}
