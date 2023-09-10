@extends('layout.main')

@section('title', 'Task List')

@section('content')

    <div class="w-80 mt-0 mb-5 mx-auto px-2 py-1 bg-contain bg-gray-800 text-center
     text-gray-200 rounded-lg cursor-pointer hover:opacity-90">
        <a href=" {{ route('tasks.create') }} ">CREATE NEW TASK</a>
    </div>

    @forelse($tasks as $task)

    <div class="text-xl text-center hover:bg-gray-300">
        <a @class(['line-through' => $task->status])  
        href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->task }}</a>
    </div>
    @empty
        <div>EMPTY</div>

    @endforelse

    <div class="mt-5">
        @if($tasks->count())
            {{ $tasks->links() }}
        @endif
    </div>

@endsection