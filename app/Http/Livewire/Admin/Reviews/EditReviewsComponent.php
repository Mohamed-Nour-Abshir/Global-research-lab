<?php

namespace App\Http\Livewire\Admin\Reviews;

use App\Models\Review;
use Carbon\Carbon;
use Livewire\Component;
use livewire\WithFileUploads;
class EditReviewsComponent extends Component
{

    use WithFileUploads;
    public $image;
    public $name;
    public $destination;
    public $comment;
    public $newimage;
    public $review_id;

    public function mount($id){
        $review = Review::find($id);
        $this->name = $review->name;
        $this->destination = $review->destination;
        $this->comment = $review->comment;
        $this->image = $review->image;
        $this->review_id = $review->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'destination' => 'required',
            'comment' => 'required',
            'image' => 'required'
        ]);
    }

    public function updateReview(){
        $this->validate([
            'name' => 'required',
            'destination' => 'required',
            'comment' => 'required',
            'image' => 'required'
        ]);
        $review = Review::find($this->review_id);
        $review->name = $this->name;
        $review->destination = $this->destination;
        $review->comment = $this->comment;

        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Reviews',$imagename);
            $review->image = $imagename;
        }

        $review->save();
        return redirect()->route('admin.reviews')->with('message','Review has been updated successfully');
    }


    public function render()
    {
        return view('livewire.admin.reviews.edit-reviews-component')->layout('layouts.admin');
    }
}
