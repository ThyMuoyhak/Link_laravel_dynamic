<x-layout title="Student Details">
    <x-slot name="heading">
        <h1 class="text-3xl font-bold tracking-tight text-gray-100">Student Details</h1>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-gray-800 shadow-md rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Photo -->
                @if ($student->photo)
                                    <img src="{{ asset($student->photo) }}" alt="{{ $student->name }}'s Photo" class="h-12 w-12 object-cover rounded-full">
                                @else
                                    <span class="text-gray-400">No Photo</span>
                                @endif

                <!-- Name -->
                <div>
                    <h3 class="text-sm font-medium text-gray-300">Name</h3>
                    <p class="mt-1 text-lg text-gray-200">{{ $student->name }}</p>
                </div>

                <!-- Gender -->
                <div>
                    <h3 class="text-sm font-medium text-gray-300">Gender</h3>
                    <p class="mt-1 text-lg text-gray-200">{{ $student->gender ?? 'N/A' }}</p>
                </div>

                <!-- Phone -->
                <div>
                    <h3 class="text-sm font-medium text-gray-300">Phone</h3>
                    <p class="mt-1 text-lg text-gray-200">{{ $student->phone ?? 'N/A' }}</p>
                </div>

                <!-- Email -->
                <div>
                    <h3 class="text-sm font-medium text-gray-300">Email</h3>
                    <p class="mt-1 text-lg text-gray-200">{{ $student->email ?? 'N/A' }}</p>
                </div>

                <!-- Address -->
                <div class="md:col-span-2">
                    <h3 class="text-sm font-medium text-gray-300">Address</h3>
                    <p class="mt-1 text-lg text-gray-200">{{ $student->address ?? 'N/A' }}</p>
                </div>

                <!-- Note -->
                <div class="md:col-span-2">
                    <h3 class="text-sm font-medium text-gray-300">Note</h3>
                    <p class="mt-1 text-lg text-gray-200">{{ $student->note ?? 'N/A' }}</p>
                </div>
            </div>

            <div class="mt-6 flex justify-end space-x-4">
                <a href="{{ route('students.edit', $student) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">
                    Edit
                </a>
                <form action="{{ route('students.destroy', $student) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-rose-600 hover:bg-rose-700 text-white font-semibold py-2 px-4 rounded"
                            onclick="return confirm('Are you sure you want to delete this student?')">
                        Delete
                    </button>
                </form>
                <a href="{{ route('students.index') }}" class="bg-gray-600 hover:bg-gray-500 text-white font-semibold py-2 px-4 rounded">
                    Back to List
                </a>
            </div>
        </div>
    </div>
</x-layout>