<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
    }

    public function Contacts(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->save();
        return redirect()->route('contacts')->with('message','Thanks for your contact we will reply you soon!');
    }


    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
