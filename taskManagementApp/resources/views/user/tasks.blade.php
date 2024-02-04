@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-end">
        <a href="{{ route('tasks.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create New Task</a>
    </div>
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            @foreach ($tasks as $task)
            <div class="p-6">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('tasks.show', $task->id) }}" class="underline text-gray-900 dark:text-white">{{ $task->title }}</a></div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        {{ $task->description }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
