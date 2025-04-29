<x-layout title="Create Employee">
    <x-slot name="heading">
        <h1 class="text-3xl font-bold tracking-tight text-gray-100">Create Employee</h1>
    </x-slot>

    <div class="p-6 bg-gray-900 rounded-lg shadow-xl">
        <div class="mb-6">
            <a href="{{ route('employees.index') }}" class="inline-flex items-center gap-2 bg-gray-700 text-gray-200 px-4 py-2.5 rounded-lg font-medium transition-all duration-200 hover:bg-gray-600 hover:text-white focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Back to Employees
            </a>
        </div>

        @if ($errors->any())
            <div class="bg-rose-900/60 border-l-4 border-rose-500 text-rose-300 p-4 mb-6 rounded-lg" role="alert">
                <div class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-medium">Please fix the following errors:</span>
                </div>
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('employees.store') }}" method="POST" class="bg-gray-800 p-6 rounded-xl shadow-md ring-1 ring-gray-700">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="no" class="block text-sm font-medium text-gray-300">Employee No</label>
                    <div class="relative rounded-md shadow-sm">
                        <input type="text" name="no" id="no" 
                            class="block w-full bg-gray-700 border border-gray-600 rounded-lg py-2.5 px-4 text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                            value="{{ old('no') }}" 
                            placeholder="Enter employee number"
                            required>
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-gray-300">Name</label>
                    <div class="relative rounded-md shadow-sm">
                        <input type="text" name="name" id="name" 
                            class="block w-full bg-gray-700 border border-gray-600 rounded-lg py-2.5 px-4 text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                            value="{{ old('name') }}" 
                            placeholder="Enter full name"
                            required>
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label for="gender" class="block text-sm font-medium text-gray-300">Gender</label>
                    <div class="relative rounded-md shadow-sm">
                        <select name="gender" id="gender" 
                            class="block w-full bg-gray-700 border border-gray-600 rounded-lg py-2.5 px-4 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent appearance-none" 
                            required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label for="phone" class="block text-sm font-medium text-gray-300">Phone</label>
                    <div class="relative rounded-md shadow-sm">
                        <input type="text" name="phone" id="phone" 
                            class="block w-full bg-gray-700 border border-gray-600 rounded-lg py-2.5 px-4 text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                            value="{{ old('phone') }}" 
                            placeholder="Enter phone number"
                            required>
                    </div>
                </div>
                
                <div class="space-y-2 md:col-span-2">
                    <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </div>
                        <input type="email" name="email" id="email" 
                            class="block w-full bg-gray-700 border border-gray-600 rounded-lg py-2.5 pl-10 pr-4 text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                            value="{{ old('email') }}" 
                            placeholder="employee@example.com"
                            required>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 flex justify-end space-x-3">
                <a href="{{ route('employees.index') }}" class="inline-flex items-center justify-center bg-gray-700 text-gray-300 px-5 py-2.5 rounded-lg border border-gray-600 transition-colors duration-200 hover:bg-gray-600 hover:text-white">
                    Cancel
                </a>
                <button type="submit" class="inline-flex items-center justify-center bg-indigo-600 text-white px-5 py-2.5 rounded-lg font-medium transition-all duration-200 hover:bg-indigo-700 hover:shadow-lg hover:shadow-indigo-600/20 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    Save Employee
                </button>
            </div>
        </form>
    </div>
</x-layout>