<x-layout title="Employee Details">
    <x-slot:heading>Employee Details</x-slot:heading>

    <div class="min-h-screen bg-gray-800 text-white py-12" data-aos="fade-up" data-aos-duration="1500">
        <h1 class="text-5xl font-bold text-center my-6 text-indigo-400" data-aos="fade-up" data-aos-duration="1200">Employee Profile</h1>

        <div class="max-w-4xl mx-auto bg-gray-900 shadow-lg rounded-lg p-10 border border-gray-700" data-aos="fade-up" data-aos-duration="1300">
            <!-- Employee Details Section -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                <div class="sm:w-1/2" data-aos="fade-right" data-aos-duration="1400">
                    <h2 class="text-3xl font-semibold text-indigo-500 mb-4">Employee No: <span class="text-white">{{ $employee['no'] }}</span></h2>
                    <h3 class="text-2xl text-gray-300 font-medium mb-2">Name: <span class="text-white">{{ $employee['name'] }}</span></h3>
                    <p class="text-lg text-gray-400 mb-2">Gender: <span class="text-white">{{ $employee['gender'] }}</span></p>
                    <p class="text-lg text-gray-400 mb-2">Phone: <span class="text-white">{{ $employee['phone'] }}</span></p>
                    <p class="text-lg text-gray-400 mb-2">Email: <span class="text-white">{{ $employee['email'] }}</span></p>
                </div>

                <!-- Profile Picture Placeholder -->
                <div class="sm:w-1/3 sm:ml-10 mt-6 sm:mt-0" data-aos="fade-left" data-aos-duration="1400">
                    <div class="bg-gray-600 w-full h-40 sm:h-48 rounded-lg flex justify-center items-center text-gray-300">
                        <span class="text-3xl">📷</span> <!-- Placeholder icon for profile picture -->
                    </div>
                </div>
            </div>

            <!-- Skills Section -->
            <div class="mb-8" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="text-2xl text-indigo-400 font-semibold mb-4">Skills:</h3>
                <div class="flex flex-wrap gap-4">
                    @foreach($employee['skills'] as $skill)
                        <span class="bg-indigo-500 text-white text-sm px-4 py-2 rounded-full">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>

            <!-- Action Button -->
            <div class="mt-8 text-center" data-aos="fade-up" data-aos-duration="1600">
                <a href="{{ route('jobs.list') }}" 
                   class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 hover:shadow-lg transition-all duration-300">
                    Back to Employee List
                </a>
            </div>
        </div>
    </div>
</x-layout>
