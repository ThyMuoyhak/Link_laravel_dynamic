<x-layout title="Employee Details">
    <x-slot name="heading">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold tracking-tight text-gray-100">Employee Details</h1>
            <div class="flex space-x-2">
                <a href="{{ route('employees.edit', $employee->no) }}" class="inline-flex items-center justify-center bg-amber-600/80 hover:bg-amber-600 text-white px-3 py-1.5 rounded-md transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit
                </a>
                <form action="{{ route('employees.destroy', $employee->no) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-flex items-center justify-center bg-rose-600/80 hover:bg-rose-600 text-white px-3 py-1.5 rounded-md transition-colors duration-200" onclick="return confirm('Are you sure you want to delete this employee?')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Delete
                    </button>
                </form>
            </div>
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

        <div class="bg-gray-800 rounded-xl shadow-md ring-1 ring-gray-700 overflow-hidden">
            <div class="p-6 border-b border-gray-700">
                <div class="flex items-center">
                    <div class="bg-indigo-600/20 rounded-full p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-2xl font-bold text-gray-100">{{ $employee->name }}</h2>
                        <div class="flex items-center mt-1">
                            <span class="bg-gray-700 text-gray-300 text-xs px-2 py-1 rounded-full">ID: {{ $employee->no }}</span>
                            <span class="inline-flex items-center ml-2 text-xs text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Last updated: {{ $employee->updated_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
                <div class="space-y-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wider">Personal Information</h3>
                        <div class="mt-3 bg-gray-700/30 rounded-lg overflow-hidden">
                            <dl>
                                <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-700">
                                    <dt class="text-sm font-medium text-gray-400">Full name</dt>
                                    <dd class="mt-1 text-sm text-gray-200 sm:mt-0 sm:col-span-2">{{ $employee->name }}</dd>
                                </div>
                                <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-700">
                                    <dt class="text-sm font-medium text-gray-400">Employee ID</dt>
                                    <dd class="mt-1 text-sm text-gray-200 sm:mt-0 sm:col-span-2">{{ $employee->no }}</dd>
                                </div>
                                <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-400">Gender</dt>
                                    <dd class="mt-1 text-sm text-gray-200 sm:mt-0 sm:col-span-2">{{ $employee->gender }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wider">Contact Information</h3>
                        <div class="mt-3 bg-gray-700/30 rounded-lg overflow-hidden">
                            <dl>
                                <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-700">
                                    <dt class="text-sm font-medium text-gray-400">Email address</dt>
                                    <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                                        <a href="mailto:{{ $employee->email }}" class="text-indigo-400 hover:text-indigo-300">{{ $employee->email }}</a>
                                    </dd>
                                </div>
                                <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-400">Phone number</dt>
                                    <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                                        <a href="tel:{{ $employee->phone }}" class="text-indigo-400 hover:text-indigo-300">{{ $employee->phone }}</a>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 px-6 py-4">
                <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">System Information</h3>
                <div class="flex flex-wrap gap-x-8 gap-y-2 text-sm text-gray-400">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>Created: {{ $employee->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        <span>Last Updated: {{ $employee->updated_at->format('d/m/Y H:i') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('employees.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-700 text-gray-300 rounded-md hover:bg-gray-600 hover:text-white transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Back to List
            </a>
            <a href="{{ route('employees.edit', $employee->no) }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
                Edit Employee
            </a>
        </div>
    </div>
</x-layout>