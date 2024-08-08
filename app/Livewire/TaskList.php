<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskList extends Component
{
    public $tasks;

    public function mount()
    {
        // Fetch all tasks from the database
        $this->tasks = Task::all();
    }

    public function render()
    {
        return view('livewire.task-list')
            ->layout('layouts.app');
    }
}
