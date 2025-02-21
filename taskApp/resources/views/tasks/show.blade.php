@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Task Details</h1>

    <div class="card p-4">
        <div class="mb-3">
            <strong>Task Name:</strong> 
            <div class="border p-2 rounded">{{ $task->task_name }}</div>
        </div>

        <div class="mb-3">
            <strong>Location:</strong> 
            <div class="border p-2 rounded">{{ $task->task_location }}</div>
        </div>

        <div class="mb-3">
            <strong>Time Complexity:</strong> 
            <div class="border p-2 rounded">{{ $task->time_complexity }}</div>
        </div>

        <div class="mb-3">
            <strong>Materials Required:</strong> 
            <div class="border p-2 rounded">{{ $task->materials_required }}</div>
        </div>

        <div class="mb-3">
            <strong>Deadline:</strong> 
            <div class="border p-2 rounded">{{ $task->deadline }}</div>
        </div>

        <div class="mb-3">
            <strong>Priority:</strong> 
            <div class="border p-2 rounded">{{ $task->priority }}</div>
        </div>

        <div class="mb-3">
            <strong>Category:</strong> 
            <div class="border p-2 rounded">{{ $task->category }}</div>
        </div>

        <div class="mt-4">
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
