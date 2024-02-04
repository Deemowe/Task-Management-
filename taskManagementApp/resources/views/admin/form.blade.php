@php
$isEdit = isset($project);
$actionUrl = $isEdit ? route('admin.projects.update', $project) : route('admin.projects.store');
@endphp

@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto px-4 py-8">
    <h2 class="text-2xl font-semibold mb-6">{{ $isEdit ? 'Edit Project' : 'Create Project' }}</h2>
    <form method="POST" action="{{ $actionUrl }}" class="space-y-4">
        @csrf
        @if($isEdit) @method('PUT') @endif
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Project Name</label>
            <input type="text" name="name" id="name" value="{{ $isEdit ? $project->name : '' }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $isEdit ? $project->description : '' }}</textarea>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">{{ $isEdit ? 'Update' : 'Create' }}</button>
        </div>
    </form>
</div>
@endsection
