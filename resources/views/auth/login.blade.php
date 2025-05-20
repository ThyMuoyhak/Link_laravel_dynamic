<x-layout title="Login">
    <x-slot:heading>Log In</x-slot:heading>

    <div class="max-w-md mx-auto bg-gray-800 p-8 rounded-lg shadow-lg">
        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-sm text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="mb-4 text-sm text-red-400">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                       class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white p-2 focus:ring-2 focus:ring-blue-500"
                       required autofocus autocomplete="email">
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-400">Password</label>
                <input id="password" type="password" name="password"
                       class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white p-2 focus:ring-2 focus:ring-blue-500"
                       required autocomplete="current-password">
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
                <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-800">
                    Log In
                </button>
            </div>
        </form>

        <p class="mt-4 text-center text-sm text-gray-400">
            Don't have an account? <a href="{{ route('register') }}" class="text-blue-400 hover:text-blue-300">Register</a>
        </p>
    </div>
</x-layout>