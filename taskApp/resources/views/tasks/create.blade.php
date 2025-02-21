@extends('layouts.app')
@section('content')

<div class="mx-auto max-w-2xl bg-gradient-to-bl from-emerald-700 to-lime-100 p-4">
  <div class="mx-auto max-w-2xl rounded-4xl bg-lime-50/70 p-4">
    <h1 class="mb-4 text-2xl font-bold text-stone-600">Create New Task</h1>
    <form action="{{ route('tasks.store')}}" method="POST ">
      @csrf {{-- Task Name --}}
      <div class="mb-4 text-stone-600">
        <label for="task_name" class="block font-semibold text-stone-500">Task Name</label>
        <input type="text" name="task_name" id="task_name" class="w-full rounded border p-2" placeholder="e.g., Take out trash" required />
      </div>

      {{-- Task Location --}}
      <div class="mb-4 text-stone-600">
        <label for="task_location" class="block font-semibold text-stone-500">Location</label>
        <input type="text" name="task_location" id="task_location" class="w-full rounded border p-2" placeholder="Kitchen, Garage, etc." />
      </div>

      {{-- Time Estimate --}}
      <div class="mb-4 text-stone-600">
        <label for="time_complexity" class="block font-semibold text-stone-500">Time Estimate</label>
        <select name="time_complexity" id="time_complexity" class="w-full rounded border p-2">
          <option value="10">10 min</option>
          <option value="30">30 min</option>
          <option value="60">1 hour</option>
          <option value="120">2 hours</option>
          <option value="300">5 hours</option>
        </select>
      </div>

      {{-- Materials Required --}}
      <div class="mb-4 text-stone-600">
        <label for="materials_required" class="block font-semibold text-stone-500">Materials Required (Optional)</label>
        <input type="text" name="materials_required" id="materials_required" class="w-full rounded border p-2" placeholder="e.g., Trash Bags, Broom" />
      </div>

      {{-- Deadline --}}
      <div class="mb-4 text-stone-600">
        <label for="deadline" class="block font-semibold text-stone-500">Deadline (Optional)</label>
        <input type="datetime-local" name="deadline" id="deadline" class="w-full rounded border p-2" />
      </div>

      {{-- Priority --}}
      <div class="mb-4 text-stone-600">
        <label for="priority" class="block font-semibold text-stone-500">Priority</label>
        <select name="priority" id="priority" class="w-full rounded border p-2">
          <option value="1">Low (1)</option>
          <option value="2">Medium (2)</option>
          <option value="3">High (3)</option>
        </select>
      </div>

      {{-- Category --}}
      <div class="mb-4 text-stone-600">
        <label for="category" class="block font-semibold text-stone-500">Category (Optional)</label>
        <input type="text" name="category" id="category" class="w-full rounded border p-2" placeholder="e.g., chores, work, health" />
      </div>

      {{-- Submit and Cancel Buttons --}}
      <div class="flex gap-4">
        <button type="submit" class="rounded bg-stone-600 px-4 py-2 font-bold text-white">Create Task</button>
        <a href="{{ url('/') }}" class="rounded bg-stone-400 px-4 py-2 text-white">Cancel</a>
      </div>
    </form>
  </div>
</div>
@endsection