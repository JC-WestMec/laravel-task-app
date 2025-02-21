@extends('layouts.app')
@section('content')
<h1 class="text-2xl font-bold mb-4 text-stone-600">All Tasks</h1>
{{-- search and sort form --}}
<form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
<!-- Search Field -->
<input
type="text"
name="search"
value="{{ request('search') }}"
placeholder="Search tasks..."
class="border border-gray-300 px-2 py-1 rounded"
>
<!-- Sort Options -->
<select name="sort" class="border border-gray-300 px-2 py-1 rounded">
<option value="task_name" {{ request('sort') === 'task_name' ? 'selected' : '' }}>
        Alphabetical
</option>
<option value="deadline" {{ request('sort') === 'deadline' ? 'selected' : '' }}>
        Deadline
</option>
<option value="category" {{ request('sort') === 'category' ? 'selected' : '' }}>
        Category
</option>
</select>
<button type="submit" class="bg-stone-600 text-white px-4 py-2 ml-2 rounded hover:bg-stone-400">
Search & Sort
</button>
</form>
<ul>
@forelse($tasks as $task)
<li class="mb-2">
{{ $task->task_name }}
<!-- Link to the show page -->
<a href="{{ route('tasks.show', $task->id) }}" class="text-stone-400 underline ml-2">
View
</a>
</li>
@empty
<li>No tasks yet.</li>
@endforelse
</ul>
<div class="mt-4">
<a href="{{ route('tasks.create') }}"
class="bg-stone-600 text-white px-4 py-2 rounded hover:bg-stone-400">
Create a New Task
</a>
</div>
@endsection