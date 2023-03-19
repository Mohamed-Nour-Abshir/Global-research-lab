<?php

namespace App\Http\Livewire\Admin\Assesments;

use App\Models\Assesment;
use Livewire\Component;

class AssesmentComponent extends Component
{
    public function render()
    {
        $assesments = Assesment::all();
        return view('livewire.admin.assesments.assesment-component',['assesments' =>$assesments])->layout('layouts.admin');
    }

    public function deleteAssesment($id){
        $assesment = Assesment::find($id);
        $assesment->delete();
        return redirect()->back()->with('message','Request has been deleted successfully!');
    }
}
