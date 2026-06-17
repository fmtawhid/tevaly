@props(['header' => 'Dashboard', 'description' => ''])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Tevaly') }} - User Panel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50">
        <div class="min-h-screen flex flex-col">
            <!-- Navigation -->
            <nav class="bg-gradient-to-r from-blue-600 to-blue-800 text-white shadow-lg">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-16">
                        <div class="flex items-center">
                            <h1 class="text-2xl font-bold">Tevaly</h1>
                            <span class="ml-3 text-blue-200 text-sm">MLM Network</span>
                        </div>

                        <div class="hidden md:flex items-center space-x-8">
                            <a href="{{ route('dashboard') }}" class="hover:text-blue-200 transition {{ request()->routeIs('dashboard') ? 'text-white font-bold' : '' }}">
                                📊 Dashboard
                            </a>
                            <a href="{{ route('tree.show') }}" class="hover:text-blue-200 transition {{ request()->routeIs('tree.show') ? 'text-white font-bold' : '' }}">
                                🌳 My Tree
                            </a>
                        </div>

                        <div class="relative group">
                            <button class="flex items-center gap-2 px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                <span class="w-8 h-8 bg-blue-300 rounded-full flex items-center justify-center text-blue-900 font-bold text-sm">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </span>
                                <span class="hidden sm:inline text-sm font-medium">{{ Auth::user()->name }}</span>
                                <span class="text-lg">▼</span>
                            </button>

                            <div class="absolute right-0 mt-0 w-48 bg-white text-gray-800 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition z-50">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-3 hover:bg-blue-50 first:rounded-t-lg">
                                    ⚙️ Settings
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-3 hover:bg-blue-50 last:rounded-b-lg border-t">
                                        🚪 Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Header Section -->
            @if($header)
                <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-4 sm:px-6 lg:px-8 py-6">
                    <div class="max-w-7xl mx-auto">
                        <h2 class="text-3xl font-bold">{{ $header }}</h2>
                        @if($description)
                            <p class="text-blue-100 mt-2">{{ $description }}</p>
                        @endif
                    </div>
                </div>
            @endif

            <!-- Main Content -->
            <main class="flex-1">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    {{ $slot }}
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-gray-800 text-gray-300 border-t border-gray-700">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <h3 class="text-white font-bold mb-3">Tevaly MLM</h3>
                            <p class="text-sm">Build your network, grow your income.</p>
                        </div>
                        <div>
                            <h3 class="text-white font-bold mb-3">Your Code</h3>
                            <p class="text-sm font-mono bg-gray-700 px-3 py-1 rounded inline-block">
                                {{ Auth::user()->referral_code }}
                            </p>
                        </div>
                        <div>
                            <h3 class="text-white font-bold mb-3">Support</h3>
                            <p class="text-sm">Email: support@tevaly.com</p>
                        </div>
                    </div>
                    <div class="mt-8 pt-8 border-t border-gray-700 text-center text-sm">
                        <p>&copy; 2026 Tevaly MLM System. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
