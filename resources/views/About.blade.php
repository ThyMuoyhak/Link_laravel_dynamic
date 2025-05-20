{{-- resources/views/about.blade.php --}}
<x-layout title="aboutpage">
    <x-slot:heading>Welcome to my Aboutpage</x-slot:heading>
    
    <div class="bg-gray-800 rounded-xl p-8 shadow-lg" data-aos="fade-up">
        <h1 class="text-3xl font-bold mb-6 text-white">Welcome to my Aboutpage</h1>
        <p class="text-gray-300 leading-relaxed mb-8">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolorem quam similique ipsam veniam possimus quo consequatur, doloribus nemo nihil tenetur ipsum fugiat, eum sequi minus aut, reprehenderit quasi porro? In nisi recusandae consequuntur nam. Unde corporis laborum architecto ipsa, temporibus laudantium est, ipsam suscipit expedita voluptas, pariatur quia natus.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
            <div class="bg-gray-700 rounded-lg p-6" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-purple-500 bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white">Our Mission</h3>
                </div>
                <p class="text-gray-300">To provide innovative solutions that empower our clients to achieve their goals with confidence and ease.</p>
            </div>
            
            <div class="bg-gray-700 rounded-lg p-6" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-pink-500 bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white">Our Vision</h3>
                </div>
                <p class="text-gray-300">To be recognized as industry leaders, known for excellence, innovation, and unwavering commitment to our clients' success.</p>
            </div>
        </div>
        
        <div class="mt-10 border-t border-gray-700 pt-10" data-aos="fade-up" data-aos-delay="300">
            <h2 class="text-2xl font-bold mb-6 gradient-text">Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-700 rounded-lg p-5 text-center">
                    <div class="w-24 h-24 bg-gray-600 rounded-full mx-auto mb-4"></div>
                    <h4 class="text-lg font-semibold text-white">Jane Doe</h4>
                    <p class="text-purple-300 text-sm mb-3">Founder & CEO</p>
                    <p class="text-gray-400 text-sm">With over 15 years of experience in the industry.</p>
                </div>
                
                <div class="bg-gray-700 rounded-lg p-5 text-center">
                    <div class="w-24 h-24 bg-gray-600 rounded-full mx-auto mb-4"></div>
                    <h4 class="text-lg font-semibold text-white">John Smith</h4>
                    <p class="text-purple-300 text-sm mb-3">CTO</p>
                    <p class="text-gray-400 text-sm">Expert in cutting-edge technology solutions.</p>
                </div>
                
                <div class="bg-gray-700 rounded-lg p-5 text-center">
                    <div class="w-24 h-24 bg-gray-600 rounded-full mx-auto mb-4"></div>
                    <h4 class="text-lg font-semibold text-white">Sarah Johnson</h4>
                    <p class="text-purple-300 text-sm mb-3">Lead Designer</p>
                    <p class="text-gray-400 text-sm">Creating beautiful, intuitive user experiences.</p>
                </div>
            </div>
        </div>
        
        <div class="mt-10 text-center" data-aos="fade-up" data-aos-delay="400">
            <button class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg text-white font-medium hover:from-purple-700 hover:to-pink-700 transition-colors duration-300">Contact Us</button>
        </div>
    </div>
</x-layout>