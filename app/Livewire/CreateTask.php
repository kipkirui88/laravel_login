<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class CreateTask extends Component
{
    public $taskName;
    public $taskDescription;
    public $dueDate;

    protected $rules = [
        'taskName' => 'required|string|max:255',
        'taskDescription' => 'nullable|string',
        'dueDate' => 'nullable|date',
    ];

    public function createTask()
{
    $this->validate();

    // Use mass assignment to create a new task
    Task::create([
        'name' => $this->taskName,
        'description' => $this->taskDescription,
        'due_date' => $this->dueDate,
    ]);

    // Redirect to the task list page with a success message
    session()->flash('message', 'Task created successfully.');

    return redirect()->route('tasks');
}


    public function render()
    {
        return view('livewire.create-task')
            ->layout('layouts.app');
    }
}
