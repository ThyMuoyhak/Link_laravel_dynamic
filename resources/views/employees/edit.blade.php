<x-layout title="Edit Employee">
    <x-slot name="heading">
        <div class="flex items-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-100">Edit Employee</h1>
            <span class="ml-4 px-3 py-1 rounded-full text-xs font-medium bg-gray-700 text-gray-300">ID: {{ $employee->no }}</span>
        </div>
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

        <form action="{{ route('employees.update', $employee->no) }}" method="POST" class="bg-gray-800 p-6 rounded-xl shadow-md ring-1 ring-gray-700">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="no" class="block text-sm font-medium text-gray-300">Employee No</label>
                    <div class="relative rounded-md shadow-sm">
                        <input type="text" name="no" id="no" 
                            class="block w-full bg-gray-700 border border-gray-600 rounded-lg py-2.5 px-4 text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                            value="{{ old('no', $employee->no) }}" 
                            required>
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <span class="text-xs text-gray-400 bg-gray-600 rounded px-2 py-1">ID</span>
                        </div>
                    </div>
                    <p class="text-xs text-amber-400 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                        Changing employee ID may affect existing records
                    </p>
                </div>
                
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-gray-300">Name</label>
                    <div class="relative rounded-md shadow-sm">
                        <input type="text" name="name" id="name" 
                            class="block w-full bg-gray-700 border border-gray-600 rounded-lg py-2.5 px-4 text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                            value="{{ old('name', $employee->name) }}" 
                            required>
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label for="gender" class="block text-sm font-medium text-gray-300">Gender</label>
                    <div class="relative rounded-md shadow-sm">
                        <select name="gender" id="gender" 
                            class="block w-full bg-gray-700 border border-gray-600 rounded-lg py-2.5 px-4 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent appearance-none" 
                            required>
                            <option value="Male" {{ old('gender', $employee->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender', $employee->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Other" {{ old('gender', $employee->gender) == 'Other' ? 'selected' : '' }}>Other</option>
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
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                        </div>
                        <input type="text" name="phone" id="phone" 
                            class="block w-full bg-gray-700 border border-gray-600 rounded-lg py-2.5 pl-10 pr-4 text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                            value="{{ old('phone', $employee->phone) }}" 
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
                            value="{{ old('email', $employee->email) }}" 
                            required>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 flex flex-col md:flex-row md:justify-between items-center gap-4">
                <div class="self-start">
                    <form action="{{ route('employees.destroy', $employee->no) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this employee? This action cannot be undone.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex items-center justify-center bg-rose-600/70 text-white px-4 py-2 rounded-lg font-medium transition-all duration-200 hover:bg-rose-600 hover:shadow-sm focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            Delete Employee
                        </button>
                    </form>
                </div>
                
                <div class="flex justify-end space-x-3">
                    <a href="{{ route('employees.index') }}" class="inline-flex items-center justify-center bg-gray-700 text-gray-300 px-5 py-2.5 rounded-lg border border-gray-600 transition-colors duration-200 hover:bg-gray-600 hover:text-white">
                        Cancel
                    </a>
                    <button type="submit" class="inline-flex items-center justify-center bg-indigo-600 text-white px-5 py-2.5 rounded-lg font-medium transition-all duration-200 hover:bg-indigo-700 hover:shadow-lg hover:shadow-indigo-600/20 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Update Employee
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-layout>