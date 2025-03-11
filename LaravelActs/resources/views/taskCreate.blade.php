@extends('taskTemplate')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Create Task</h2>

    @if(isset($id))
        <form method="POST" action="/tasks/{{ $id }}" class="bg-white p-6 rounded-lg shadow-md">
        @method('PUT')
    @else
        <form method="POST" action="/tasks" class="bg-white p-6 rounded-lg shadow-md">
    @endif

        @csrf

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold">Title</label>
            <input type="text" id="title" name="title" value="{{ $title ?? '' }}" 
                class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold">Description</label>
            <textarea id="description" name="description" 
                class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">{{ $description ?? '' }}</textarea>
        </div>

        <div class="flex space-x-3">
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Save Task</button>
            <a href="/tasks" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Cancel</a>
        </div>

    </form>
@endsection
