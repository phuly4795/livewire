<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'First Post';
    public $posts = [
        ['id' => 1, 'name' => 'John'],
        ['id' => 2, 'name' => 'Alice'],
        ['id' => 3, 'name' => 'Bob']
    ];
    
    public function render()
    {
        return view('livewire.create-post')->with([
            'author' => Auth::user()->name ?? "Phú",
        ]);
    }
}
