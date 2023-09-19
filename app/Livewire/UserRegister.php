<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserRegister extends Component
{
    public $email;
    public $name;
    public $password;


    public function CreateUser() {

        $this->validate([
            'email' => 'required|min:5|email',
            'name' => 'required|min:5|max:50',
            'password' => 'required|min:5',

        ]);

       User::create([
        'email' => $this->email,
        'name' => $this->name,
        'password' => md5($this->password),
       ]);
    }

    public function render()
    {
        $listUser = User::all();
        return view('livewire.user-register', compact('listUser'));
    }
}
