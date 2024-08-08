<div class="container mt-5">
    <h2 class="text-2xl font-semibold mb-4">Create New Task</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="createTask">
        <div class="mb-3">
            <label for="taskName" class="form-label">Task Name</label>
            <input type="text" id="taskName" class="form-control" wire:model="taskName">
            @error('taskName') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="taskDescription" class="form-label">Task Description</label>
            <textarea id="taskDescription" class="form-control" wire:model="taskDescription"></textarea>
            @error('taskDescription') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="dueDate" class="form-label">Due Date</label>
            <input type="date" id="dueDate" class="form-control" wire:model="dueDate">
            @error('dueDate') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
</div>
