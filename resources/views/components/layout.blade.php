{{-- resources/views/components/layout.blade.php --}}
@props(['title' => config('app.name')])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Add AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-text {
            background: linear-gradient(90deg, #8B5CF6 0%, #EC4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #8B5CF6 0%, #EC4899 100%);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-950 text-gray-200">

<div class="min-h-full">
    <nav class="bg-gray-900 border-b border-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
          <div class="flex items-center">
            <div class="shrink-0">
              <img class="size-10" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-6">
                <a href="/" class="nav-link px-3 py-2 text-sm font-medium text-white hover:text-purple-300 transition-colors duration-300">Home</a>
                <a href="/about" class="nav-link px-3 py-2 text-sm font-medium text-gray-300 hover:text-purple-300 transition-colors duration-300">About</a>
                <a href="/contact" class="nav-link px-3 py-2 text-sm font-medium text-gray-300 hover:text-purple-300 transition-colors duration-300">Contact</a>
                <a href="/jobs" class="nav-link px-3 py-2 text-sm font-medium text-gray-300 hover:text-purple-300 transition-colors duration-300">Jobs List</a>
                <a href="/employees" class="nav-link px-3 py-2 text-sm font-medium text-gray-300 hover:text-purple-300 transition-colors duration-300">Employee list</a>
                <a href="/students" class="nav-link px-3 py-2 text-sm font-medium text-gray-300 hover:text-purple-300 transition-colors duration-300">Student list</a>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              @guest
                <!-- Login Button for Guests -->
                <a href="{{ route('login') }}">
                  <button type="button" class="relative rounded-full bg-gray-800 p-2 text-gray-400 hover:text-white focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-900 transition-colors duration-300">
                    <span class="sr-only">Log in</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                  </button>
                </a>
              @endguest
              @auth
                <!-- Logout Link for Authenticated Users -->
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="text-gray-400 hover:text-white font-medium">Log Out</button>
                </form>
              @endauth

              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 p-2 text-sm focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-900 transition-all duration-300 hover:ring-2 hover:ring-purple-400 hover:ring-offset-2 hover:ring-offset-gray-900">
                  <span class="sr-only">Open user menu</span>
                  <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <header class="bg-gray-900 py-12">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold tracking-tight gradient-text">{{ $heading ?? 'Welcome' }}</h1>
      </div>
    </header>
    
    <main class="py-10">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
    
    <footer class="bg-gray-900 border-t border-gray-800 py-12">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div>
            <img class="size-10 mb-4" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
            <p class="text-gray-400 text-sm">Making the web a better place since 2025.</p>
          </div>
          <div>
            <h4 class="text-white font-semibold mb-4">Product</h4>
            <ul class="space-y-2 text-sm">
              <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">Features</a></li>
              <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">Pricing</a></li>
              <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">Documentation</a></li>
              <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">Resources</a></li>
            </ul>
          </div>
          <div>
            <h4 class="text-white font-semibold mb-4">Company</h4>
            <ul class="space-y-2 text-sm">
              <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">About</a></li>
              <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">Careers</a></li>
              <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">Contact</a></li>
              <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">Press</a></li>
            </ul>
          </div>
          <div>
            <h4 class="text-white font-semibold mb-4">Legal</h4>
            <ul class="space-y-2 text-sm">
              <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">Privacy</a></li>
              <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">Terms</a></li>
              <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">Cookies</a></li>
            </ul>
          </div>
        </div>
        <div class="mt-12 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
          <p class="text-gray-400 text-sm">© 2025 Your Company. All rights reserved.</p>
          <div class="flex space-x-6 mt-4 md:mt-0">
            <a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">
              <span class="sr-only">Facebook</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">
              <span class="sr-only">Instagram</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-purple-400 transition-colors duration-300">
              <span class="sr-only">Twitter</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        delay: 100
    });
</script>

</body>
</html>