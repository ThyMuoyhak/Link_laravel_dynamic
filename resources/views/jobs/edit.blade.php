<x-layout title="Edit Job">
    <x-slot name="heading">
        <h1 class="text-3xl font-bold tracking-tight text-gray-100">Edit Job</h1>
    </x-slot>

    <div class="p-6 bg-gray-900 rounded-lg shadow-xl">
        <form action="{{ route('jobs.update', $job) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="position" class="block text-sm font-medium text-gray-300">Position</label>
                <input type="text" name="position" id="position" class="mt-1 block w-full bg-gray-800 text-gray-200 border-gray-700 rounded-lg py-2.5 px-4 focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('position', $job->position) }}" required>
                @error('position')
                    <p class="mt-1 text-sm text-rose-400">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="salary" class="block text-sm font-medium text-gray-300">Salary</label>
                <input type="text" name="salary" id="salary" class="mt-1 block w-full bg-gray-800 text-gray-200 border-gray-700 rounded-lg py-2.5 px-4 focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('salary', $job->salary) }}" required>
                @error('salary')
                    <p class="mt-1 text-sm text-rose-400">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex gap-4">
                <button type="submit" class="bg-indigo-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition-all duration-200">Update Job</button>
                <a href="{{ route('jobs.index') }}" class="bg-gray-700 text-gray-200 px-5 py-2.5 rounded-lg font-medium hover:bg-gray-600 transition-all duration-200">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>