<?php

namespace App\Http\Livewire\Admin\Reviews;

use App\Models\Review;
use Livewire\Component;

class ReviewsComponent extends Component
{
    public function render()
    {
        $reviews = Review::all();
        return view('livewire.admin.reviews.reviews-component',['reviews'=>$reviews])->layout('layouts.admin');
    }
    public function deleteReview($id){
        $reviews = Review::find($id);
        $reviews->delete();
        return redirect()->route('admin.reviews')->with('message','Review has been deleted successfully');
    }
}
