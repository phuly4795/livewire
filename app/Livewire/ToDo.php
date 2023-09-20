<?php

namespace App\Livewire;

use App\Models\ToDo as ModelsToDo;
use Exception;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class ToDo extends Component
{
    use WithPagination;

    #[Rule('required|min:3|max:50')]
    public $name;
    public $search;

    public $edittingToDoId;

    #[Rule('required|min:3|max:50')]
    public $edittingToDoName;

    public function create() {

        $validated =  $this->validateOnly('name');
      
        ModelsToDo::create($validated);

        $this->reset('name');

        session()->flash('success', 'Create success.');

        $this->resetPage();
    }

    // public function delete(ModelsToDo $todo ) {
    //     $todo->delete();
    // }

    public function delete( $id ) {

        try {
            ModelsToDo::findOrFail($id)->delete();
        } catch (Exception $e) {
            session()->flash('error', 'Failed to delete todo!');
            return;
        }
    }

    public function toggle( $id ) {
        $toDo = ModelsToDo::find($id);
        $toDo->completed = !$toDo->completed;
        $toDo->save();
    }

    public function edit( $id ) {
        $this->edittingToDoId = $id;
        $this->edittingToDoName =  ModelsToDo::find($id)->name;
    }

    public function cancel() {
        $this->reset('edittingToDoId', 'edittingToDoName');
    }

    public function update() {
        $this->validateOnly('edittingToDoName');

        ModelsToDo::find($this->edittingToDoId)->update([
            'name' => $this->edittingToDoName
        ]);
        
        $this->cancel();
    }

    public function close() {
        session()->forget('error');
    }

    public function render()
    {
        $data = ModelsToDo::latest()->where('name', 'like', '%'.$this->search.'%')->paginate(5);

        return view('livewire.to-do', compact('data'));
    }
}
