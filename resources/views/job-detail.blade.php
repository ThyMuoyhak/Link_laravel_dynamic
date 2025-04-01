<x-layout title="Job Details">
    <x-slot:heading>Job Detail</x-slot:heading>

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <div class="max-w-2xl mx-auto mt-10 bg-gray-800 shadow-lg rounded-lg p-6 border border-gray-700"
        data-aos="fade-up" data-aos-duration="800">
        
        <h2 class="text-3xl font-semibold text-blue-400">{{ $job['position'] }}</h2>
        <h3 class="text-xl text-gray-300 mt-2">Salary: {{ $job['salary'] }}</h3>
        

        <!-- Back Button -->
        <a href="{{ url('/jobs') }}" 
            class="mt-6 inline-block px-4 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-600 transition-all duration-300"
            data-aos="fade-right" data-aos-delay="400">
            Back to Job List
        </a>
    </div>

    <!-- AOS Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

</x-layout>
