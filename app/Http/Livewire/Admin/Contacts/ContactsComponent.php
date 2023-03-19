<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\Contact;
use Livewire\Component;

class ContactsComponent extends Component
{
    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.admin.contacts.contacts-component',['contacts'=>$contacts])->layout('layouts.admin');
    }

    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('message','Contact has been deleted successfully');
    }
}
