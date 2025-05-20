{{-- resources/views/welcome.blade.php --}}
<x-layout title="Homepage">
    <x-slot:heading>Welcome to my Homepage</x-slot:heading>
    
    <div class="bg-gray-800 rounded-xl p-8 shadow-lg" data-aos="fade-up">
        <h1 class="text-3xl font-bold mb-6 text-white">Welcome to my Homepage</h1>
        <p class="text-gray-300 leading-relaxed">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolorem quam similique ipsam veniam 
            possimus quo consequatur, doloribus nemo nihil tenetur ipsum fugiat, eum sequi minus aut, reprehenderit 
            quasi porro? In nisi recusandae consequuntur nam. Unde corporis laborum architecto ipsa, temporibus 
            laudantium est, ipsam suscipit expedita voluptas, pariatur quia natus.
        </p>
        
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-700 p-6 rounded-lg" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-semibold mb-3 text-purple-300">Feature One</h3>
                <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            
            <div class="bg-gray-700 p-6 rounded-lg" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-semibold mb-3 text-pink-300">Feature Two</h3>
                <p class="text-gray-400">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            
            <div class="bg-gray-700 p-6 rounded-lg" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-semibold mb-3 text-purple-300">Feature Three</h3>
                <p class="text-gray-400">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            </div>
        </div>
        
        <div class="mt-10 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
            <button class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg text-white font-medium hover:from-purple-700 hover:to-pink-700 transition-colors duration-300">Get Started</button>
            <button class="px-6 py-3 border border-purple-500 rounded-lg text-purple-400 font-medium hover:bg-purple-500 hover:bg-opacity-10 transition-colors duration-300">Learn More</button>
        </div>
    </div>
</x-layout>