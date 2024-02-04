@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-between items-center py-6">
        <h2 class="text-2xl font-semibold">Projects</h2>
        <a href="{{ route('admin.projects.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Add New Project</a>
    </div>
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul class="divide-y divide-gray-200">
            @foreach ($projects as $project)
            <li>
                <a href="{{ route('admin.projects.show', $project) }}" class="block hover:bg-gray-50">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-indigo-600 truncate">{{ $project->name }}</p>
                            <div class="ml-2 flex-shrink-0 flex">
                                <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</p>
                            </div>
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                            <div class="sm:flex">
                                <p class="flex items-center text-sm text-gray-500">{{ $project->description }}</p>
                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                <!-- Additional info here -->
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
