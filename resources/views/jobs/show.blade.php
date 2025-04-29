<x-layout title="Job Details">
    <x-slot name="heading">
        <h1 class="text-3xl font-bold tracking-tight text-gray-100">Job Details</h1>
    </x-slot>

    <div class="p-6 bg-gray-900 rounded-lg shadow-xl">
        <div class="bg-gray-800 rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-200 mb-4">{{ $job->position }}</h2>
            <p class="text-gray-300 mb-2"><strong>Salary:</strong> {{ $job->salary }}</p>
            <p class="text-gray-300 mb-4"><strong>ID:</strong> {{ $job->id }}</p>
            <a href="{{ route('jobs.index') }}" class="bg-indigo-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition-all duration-200">Back to List</a>
        </div>
    </div>
</x-layout>