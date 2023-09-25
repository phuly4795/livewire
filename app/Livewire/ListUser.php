<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Layout('layouts.app')]
#[Title('Danh sách người dùng')]
class ListUser extends Component
{
    use WithPagination;

    #[On('user-created')]
    public function updateList($user = null) {
      
    }
    
    public $search;
    
    public function placeholder() {
        return view('placeholder');
    }

    public function render()
    {
        sleep(2);
        $listUser = User::where('name', "like", '%'.$this->search.'%')->latest()->paginate(10);
        return view('livewire.list-user', compact('listUser'));
    }
}
