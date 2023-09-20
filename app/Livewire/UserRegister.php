<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;
use WithPagination;
class UserRegister extends Component
{
    #[Rule('required|min:5|email|unique:users')]
    public $email;

    #[Rule('required|min:5|max:50')]
    public $name;

    #[Rule('required|min:5')]
    public $password;


    public function CreateUser() {

        $validate =  $this->validate();

       User::create([
        'email' => $validate['email'],
        'name' => $validate['name'],
        'password' => Hash::make($validate['password']),
       ]);

       $this->reset('email', 'name', 'password');
       request()->session()->flash('success', 'Create user success');
    }

    public function render()
    {
        $listUser = User::paginate(5);
        return view('livewire.user-register', compact('listUser'));
    }
}
