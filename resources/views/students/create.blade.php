<x-layout title="Add New Student">
    <x-slot name="heading">
        <h1 class="text-3xl font-bold tracking-tight text-gray-100">Add New Student</h1>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-gray-800 shadow-md rounded-lg p-6">
            <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                               class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gender -->
                    <div>
                        <label for="gender" class="block text-sm font-medium text-gray-300">Gender</label>
                        <select name="gender" id="gender"
                                class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('gender') border-red-500 @enderror">
                            <option value="">Select Gender</option>
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('gender')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-300">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                               class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('phone') border-red-500 @enderror">
                        @error('phone')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                               class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Address -->
                    <div class="md:col-span-2">
                        <label for="address" class="block text-sm font-medium text-gray-300">Address</label>
                        <textarea name="address" id="address"
                                  class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('address') border-red-500 @enderror">{{ old('address') }}</textarea>
                        @error('address')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Photo -->
                    <div>
                        <label for="photo" class="block text-sm font-medium text-gray-300">Photo</label>
                        <input type="file" name="photo" id="photo"
                               class="mt-1 block w-full text-gray-200">
                        @error('photo')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Note -->
                    <div class="md:col-span-2">
                        <label for="note" class="block text-sm font-medium text-gray-300">Note</label>
                        <textarea name="note" id="note"
                                  class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('note') border-red-500 @enderror">{{ old('note') }}</textarea>
                        @error('note')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-4">
                    <a href="{{ route('students.index') }}" class="bg-gray-600 hover:bg-gray-500 text-white font-semibold py-2 px-4 rounded">
                        Cancel
                    </a>
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">
                        Create Student
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>