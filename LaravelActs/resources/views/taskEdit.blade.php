@extends('taskTemplate')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Edit Task</h2>

    <form action="/tasks/{{ $task->id }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold">Title</label>
            <input type="text" id="title" name="title" value="{{ $task->title }}" 
                class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold">Description</label>
            <input type="text" id="description" name="description" value="{{ $task->description }}" 
                class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4 flex items-center">
            <input type="checkbox" id="is_completed" name="is_completed" 
                class="w-4 h-4 text-blue-500 border-gray-300 rounded focus:ring focus:ring-blue-300"
                {{ $task->is_completed ? 'checked' : '' }}>
            <label for="is_completed" class="ml-2 text-gray-700">Completed</label>
        </div>

        <div class="flex space-x-3">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update Task</button>
            <a href="/tasks" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Cancel</a>
        </div>

    </form>
@endsection
