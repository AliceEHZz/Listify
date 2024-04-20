<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use Livewire\Attributes\Title;

class TaskCreate extends Component
{
    public function render()
    {
        return view('livewire.tasks.task-create')->title('Create Task');
    }
}
