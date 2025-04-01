<x-layout title="Jobs">
    <x-slot:heading>Jobs List</x-slot:heading>

    <div class="min-h-screen bg-gray-900 text-white py-10">
        <h1 class="text-4xl font-bold text-center my-6 text-blue-400">Welcome to My Job List</h1>

        <p class="text-gray-400 text-lg text-center max-w-3xl mx-auto">
            Browse through our latest job openings and find the perfect position for you!
        </p>

        <!-- 2 Column Grid for Job Cards -->
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-3xl mx-auto">
            @foreach($jobs as $job)
                <div class="bg-gray-800 shadow-lg rounded-lg p-6 border border-gray-700 hover:shadow-2xl hover:bg-gray-700 transition-all duration-300">
                    <h3 class="text-xl text-gray-300">Salary: {{ $job['salary'] }}</h3>

                    <!-- Button to view details -->
                    <a href="{{ route('job.detail', ['id' => $job['id']]) }}" 
                       class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded-lg 
                              hover:bg-blue-600 hover:shadow-blue-500/50 transition-all duration-300">
                        View Details
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
