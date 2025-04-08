<x-layout title="Employees">
    <x-slot:heading>Employee List</x-slot:heading>

    <div class="min-h-screen bg-gray-900 text-white py-12" style="font-family: 'Roboto', sans-serif;">
        <h1 class="text-4xl font-bold text-center my-8 text-blue-500" data-aos="fade-up" data-aos-duration="1000">Employee List</h1>

        <p class="text-gray-400 text-lg text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="1200">
            Browse through our list of employees below.
        </p>

        <!-- Employee Table -->
        <div class="overflow-x-auto mt-10 max-w-7xl mx-auto">
            <table class="min-w-full bg-gray-800 border border-gray-700 rounded-lg" data-aos="fade-up" data-aos-duration="1500">
                <thead>
                    <tr class="text-gray-300 bg-gray-700">
                        <th class="px-6 py-3 text-left">Employee No</th>
                        <th class="px-6 py-3 text-left">Name</th>
                        <th class="px-6 py-3 text-left">Gender</th>
                        <th class="px-6 py-3 text-left">Phone</th>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                        <tr class="border-b border-gray-600 hover:bg-gray-700 transition-all duration-300" data-aos="fade-up" data-aos-duration="1600">
                            <td class="px-6 py-4 text-gray-200">{{ $employee['no'] }}</td>
                            <td class="px-6 py-4 text-gray-200">{{ $employee['name'] }}</td>
                            <td class="px-6 py-4 text-gray-200">{{ $employee['gender'] }}</td>
                            <td class="px-6 py-4 text-gray-200">{{ $employee['phone'] }}</td>
                            <td class="px-6 py-4 text-gray-200">{{ $employee['email'] }}</td>
                            <td class="px-6 py-4 text-center">
                                <!-- Button to view employee details -->
                                <a href="{{ route('employee.show', ['no' => $employee['no']]) }}" 
                                   class="inline-block px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                                    View Details
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
