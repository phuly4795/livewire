<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contact')]
class Contact extends Component
{

    #[Rule('required|min:5|max:50')]
    public $name;

    #[Rule('required|min:5|email|unique:users')]
    public $email;

    #[Rule('required|min:5|max:50')]
    public $subject;


    public function submitForm()
    {
        $this->validate();

        session()->flash('success', 'form submited !!!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
