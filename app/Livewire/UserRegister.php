<?php

namespace App\Livewire;

use App\Models\file;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use WithPagination;
class UserRegister extends Component
{

    use WithFileUploads;

    #[Rule('required|min:5|email|unique:users')]
    public $email;

    #[Rule('required|min:5|max:50')]
    public $name;

    #[Rule('required|min:5')]
    public $password;

    public $search;

    #[Rule('nullable|sometimes|image|max:1024')]
    public $image;

    public function CreateUser() {

        $validate =  $this->validate();

        if($this->image){
            $upload =  $this->image->store('uploads','public');
            $file =  file::create([
                'name' => $upload
            ]);
        }

        $user =  User::create($validate);

       $this->reset('email', 'name', 'password');
       request()->session()->flash('success', 'Create user success');

       $this->dispatch('user-created', $user);

    }

    public function reload() {
        $this->dispatch('user-created');
    }

    public function render()
    {
        return view('livewire.user-register');
    }
}
