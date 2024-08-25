<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{

    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:3|max:255',
        'email' => 'required|email|min:3|max:255',
        'message' => 'required|string|min:3|max:1000',
    ];

    public function render()
    {
        return view('contact');
    }
    
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function send(){
        $validatedDate = $this->validate();

        Session()->flash('success','Message sent successfully!');

        $this->reset();
    }
}
