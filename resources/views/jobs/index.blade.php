<x-layout title="Jobs">
    <x-slot name="heading">
        <h1 class="text-3xl font-bold tracking-tight text-gray-100">Jobs</h1>
    </x-slot>

    <div class="p-6 bg-gray-900 rounded-lg shadow-xl">
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('jobs.create') }}" class="flex items-center gap-2 bg-indigo-600 text-white px-5 py-2.5 rounded-lg font-medium transition-all duration-200 hover:bg-indigo-700 hover:shadow-lg hover:shadow-indigo-600/20 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add New Job
            </a>
        </div>

        <!-- Debug Routes -->
        <div class="mb-4 text-gray-300">
            <p>Debug: {{ Route::has('jobs.edit') ? 'jobs.edit exists' : 'jobs.edit does not exist' }}</p>
            <p>Debug: {{ Route::has('jobs.destroy') ? 'jobs.destroy exists' : 'jobs.destroy does not exist' }}</p>
        </div>

        <div class="overflow-x-auto rounded-xl ring-1 ring-gray-700 shadow-lg">
            <table class="w-full bg-gray-800 text-sm">
                <thead>
                    <tr class="bg-gray-700/80 text-gray-300 text-left">
                        <th class="px-6 py-4 font-medium">ID</th>
                        <th class="px-6 py-4 font-medium">Position</th>
                        <th class="px-6 py-4 font-medium">Salary</th>
                        <th class="px-6 py-4 font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @foreach ($jobs as $job)
                        <tr class="hover:bg-gray-700/70 transition-colors duration-200">
                            <td class="px-6 py-4 text-gray-300">{{ $job->id }}</td>
                            <td class="px-6 py-4 text-gray-200 font-medium">{{ $job->position }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $job->salary }}</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <a href="{{ route('jobs.show', $job) }}" class="inline-flex items-center justify-center bg-blue-600/80 hover:bg-blue-600 text-white px-3 py-1.5 rounded-md transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        View
                                    </a>
                                    <a href="{{ route('jobs.edit', $job) }}" class="inline-flex items-center justify-center bg-amber-600/80 hover:bg-amber-600 text-white px-3 py-1.5 rounded-md transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('jobs.destroy', $job) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center justify-center bg-rose-600/80 hover:bg-rose-600 text-white px-3 py-1.5 rounded-md transition-colors duration-200" onclick="return confirm('Are you sure you want to delete this job?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>