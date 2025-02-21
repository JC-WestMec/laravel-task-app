@extends('layouts.app') 
@section('content')
<div class="mx-auto max-w-2xl bg-gradient-to-bl from-emerald-600 to-lime-100 p-4">
      <div class="mx-auto max-w-2xl rounded-4xl bg-lime-50/70 p-4">
    <h1 class="mb-4 text-2xl font-bold text-stone-600">Edit  Task</h1>
  <form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf @method('PUT') {{-- Important for updating (PUT/PATCH) --}}
    <div class="mb-4">
      <label for="task_name">Task Name:</label>
      <input type="text" name="task_name" id="task_name" class="w-full rounded border p-2"value="{{ old('task_name', $task->task_name) }}" />
      @error('task_name')
      <div style="color: #713f12;">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-4">
      <label for="task_location">Location:</label>
      <input type="text" name="task_location" id="task_location" class="w-full rounded border p-2" value="{{ old('task_location', $task->task_location) }}" />
      @error('task_location')
      <div style="color:#713f12;">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-4">
      <label for="time_complexity">Time Complexity:</label>
      <input type="number" name="time_complexity" id="time_complexity" class="w-full rounded border p-2" value="{{ old('time_complexity', $task->time_complexity) }}" min="1" max="5" />
      @error('time_complexity')
      <div style="color: #713f12;">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-4">
      <label for="materials_required">Materials Required:</label>
      <input type="text" name="materials_required" id="materials_required"  class="w-full rounded border p-2"value="{{ old('materials_required', $task->materials_required) }}" />
      @error('materials_required')
      <div style="color: #713f12;">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-4">
      <label for="deadline">Deadline:</label>
      <input type="date" name="deadline" id="deadline" class="w-full rounded border p-2" value="{{ old('deadline', $task->deadline) }}" />
      @error('deadline')
      <div style="color: #713f12;">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-4">
      <label for="priority">Priority:</label>
      <input type="number" name="priority" id="priority"  class="w-full rounded border p-2"value="{{ old('priority', $task->priority) }}" min="1" max="3" />
      @error('priority')
      <div style="color: #713f12;">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-4">
      <label for="category">Category:</label>
      <input type="text" name="category" id="category" class="w-full rounded border p-2" value="{{ old('category', $task->category) }}" />
      @error('category')
      <div style="color: #713f12;">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit">Update Task</button>
  </form>
  <br />
    <div class="flex gap-4">
  <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
    @csrf @method('DELETE')
      <button type="submit" class="rounded bg-stone-600 px-4 py-2 font-bold text-white">Delete Task</button>
    </div>
  </form>
      </div>
</div>
@endsection