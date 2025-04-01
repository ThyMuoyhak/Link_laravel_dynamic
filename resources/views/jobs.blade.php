<x-layout title="Jobs">
    <x-slot:heading>Jobs List</x-slot:heading>

    <h1 class="text-4xl font-bold text-center my-6">Welcome to My Job List</h1>

    <p class="text-gray-600 text-lg text-center max-w-3xl mx-auto">
        Browse through our latest job openings and find the perfect position for you!
    </p>

    <div class="mt-8 space-y-6">
        @foreach($jobs as $job)
            <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200">
                <h2 class="text-2xl font-semibold text-blue-600">Position: {{ $job['position'] }}</h2>
                <h3 class="text-xl text-gray-800">Salary: {{ $job['salary'] }}</h3>
            </div>
        @endforeach
    </div>
</x-layout>
