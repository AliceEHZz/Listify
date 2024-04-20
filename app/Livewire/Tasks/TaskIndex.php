<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Task;
use Livewire\Attributes\Rule;

class TaskIndex extends Component
{
    public $tasks;

    #[Rule('required|max:40|string')]
    public $name;

    public function mount()
    {
        $this->tasks = Task::with('user')->get();
    }

    public function save()
    {
        $this->validate();
        
        Task::create([
            'user_id' => 1,
            'name' => $this->name,
        ]);

        session()->flash('message', 'Task created successfully.'); 

        $this->dispatch('task-updated'); 

        return $this->redirect(route('tasks')); // in web.php we have named the route "/" as 'tasks'
    }

    public function removeTaskItem(int $id)
    {
        Task::where('id', $id)->delete();
        session()->flash('message', 'Task item removed successfully.');
        return $this->redirect(route('tasks'));
    }

    public function render()
    {
        return view('livewire.tasks.task-index')->title('Task List')->with([
            'button' => 'New Task',
        ]);      
    }
}
