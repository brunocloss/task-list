@extends('layout.main')

@section('title', $task->task)

@section('content')

    <div class="flex flex-col items-center justify-items-center">

        <div
            class="w-60 mb-10 px-4 py-1 bg-contain bg-gray-800 text-center
        text-gray-200 rounded-lg cursor-pointer hover:opacity-90">
            <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">EDIT</a>
        </div>

        <label for="completed-checkbox" class="text-lg text-center cursor-pointer">
            <span class="{{ $task->status ? 'line-through' : '' }}">{{ $task->description }}</span>
        </label>

        <div class="my-7 text-center">
            <p class="text-opacity-50">Created {{ $task->created_at->diffForHumans() }}</p>
            <p>Updated {{ $task->updated_at->diffForHumans() }}</p>
        </div>

        <div>
            <form method="POST" action="{{ route('tasks.complete', ['task' => $task]) }}">
                @csrf
                @method('PUT')
                <label class="mx-2">Mark as  </label>
                <button type="submit" class="text-gray-800 border border-gray-800 px-2 py-1 
                rounded-lg hover:bg-gray-800 hover:text-gray-200">{{ $task->status ? 'UNCOMPLETED' : 'COMPLETED' }}</button>
            </form>
        </div>

        <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
            <div
                class="w-60 mt-5 px-4 py-1 bg-gray-800 text-center
                text-gray-200 rounded-lg cursor-pointer hover:opacity-90">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </div>
        </form>

        <div
            class="w-28 mt-10 px-4 py-1 bg-contain bg-gray-800 text-center
        text-gray-200 rounded-lg cursor-pointer hover:opacity-90">
            <a href="{{ route('tasks.index') }}">BACK</a>
        </div>
    </div>


@endsection
