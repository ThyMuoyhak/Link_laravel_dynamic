<x-layout title="Students List">
    <x-slot name="heading">
        <h1 class="text-3xl font-bold tracking-tight text-gray-100">Students</h1>
    </x-slot>

    <div class="p-6 bg-gray-900 rounded-lg shadow-xl">
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('students.create') }}" class="flex items-center gap-2 bg-indigo-600 text-white px-5 py-2.5 rounded-lg font-medium transition-all duration-200 hover:bg-indigo-700 hover:shadow-lg hover:shadow-indigo-600/20 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add New Student
            </a>
        </div>

        @if (session('success'))
            <div class="bg-emerald-900/60 border-l-4 border-emerald-500 text-emerald-300 p-4 mb-6 rounded-lg flex items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <div class="overflow-x-auto rounded-xl ring-1 ring-gray-700 shadow-lg">
            <table class="w-full bg-gray-800 text-sm">
                <thead>
                    <tr class="bg-gray-700/80 text-gray-300 text-left">
                        <th class="px-6 py-4 font-medium">Photo</th>
                        <th class="px-6 py-4 font-medium">Name</th>
                        <th class="px-6 py-4 font-medium">Email</th>
                        <th class="px-6 py-4 font-medium">Phone</th>
                        <th class="px-6 py-4 font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @forelse ($students as $student)
                        <tr class="hover:bg-gray-700/70 transition-colors duration-200">
                            <td class="px-6 py-4">
                                @if ($student->photo)
                                    <img src="{{ asset($student->photo) }}" alt="{{ $student->name }}'s Photo" class="h-12 w-12 object-cover rounded-full">
                                @else
                                    <span class="text-gray-400">No Photo</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-gray-200 font-medium">{{ $student->name }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $student->email ?? 'N/A' }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $student->phone ?? 'N/A' }}</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <a href="{{ route('students.show', $student) }}" class="inline-flex items-center justify-center bg-blue-600/80 hover:bg-blue-600 text-white px-3 py-1.5 rounded-md transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        View
                                    </a>
                                    <a href="{{ route('students.edit', $student) }}" class="inline-flex items-center justify-center bg-amber-600/80 hover:bg-amber-600 text-white px-3 py-1.5 rounded-md transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 22" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('students.destroy', $student) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center justify-center bg-rose-600/80 hover:bg-rose-600 text-white px-3 py-1.5 rounded-md transition-colors duration-200" onclick="return confirm('Are you sure you want to delete this student?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-300">No students found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>