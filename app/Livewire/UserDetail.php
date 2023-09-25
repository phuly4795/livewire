<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


class UserDetail extends Component
{

    public $user;

    public function mount(User $user) {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.user-detail');
    }
}
