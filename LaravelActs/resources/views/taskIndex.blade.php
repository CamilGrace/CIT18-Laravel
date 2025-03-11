@extends('taskTemplate')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Task List</h2>

    <a href="/tasks/create" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mb-4 inline-block">
        Create Task
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="py-3 px-6 text-left">Title</th>
                    <th class="py-3 px-6 text-left">Description</th>
                    <th class="py-3 px-6 text-center">Completed</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr class="border-b">
                        <td class="py-3 px-6">{{ $task->title }}</td>
                        <td class="py-3 px-6">{{ $task->description }}</td>
                        <td class="py-3 px-6 text-center">
                            <span class="px-2 py-1 rounded-md {{ $task->is_completed ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                                {{ $task->is_completed ? 'Yes' : 'No' }}
                            </span>
                        </td>
                        <td class="py-3 px-6 text-center flex justify-center space-x-2">
                            <a href="/tasks/{{ $task->id }}/edit" class="bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600">
                                Edit
                            </a>
                            <form action="/tasks/{{ $task->id }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
