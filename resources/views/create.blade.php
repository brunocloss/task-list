@extends('layout.main')

@section('title', 'Create new task')

@section('content')

    {{-- <div class="flex flex-col items-center justify-items-center"> --}}

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label class="block" for="task">Task:</label>
            <input class="appearance-none border w-full shadow-sm p-2" type="text" name="task" id="task" value="{{ old('task') }}">
            @error('task')
                <p class="text-red-500 font-bold">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mt-5" for="description">Description:</label>
            <textarea class="appearance-none border w-full shadow-sm p-3" name="description" id="description" rows="7">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 font-bold">{{ $message }}</p>
            @enderror
        </div>

        <div class="w-60 mx-auto mt-5 px-4 py-1 bg-gray-800 text-center
                text-gray-200 rounded-lg cursor-pointer hover:opacity-90">
            <button type="submit" id="submit-btn">CREATE</button>
        </div>

        <div
            class="w-28 mx-auto mt-10 px-4 py-1 bg-contain bg-gray-800 text-center
        text-gray-200 rounded-lg cursor-pointer hover:opacity-90">
            <a href="{{ route('tasks.index') }}">BACK</a>
        </div>

    </form>

    {{-- </div> --}}

@endsection