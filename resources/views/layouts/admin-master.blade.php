<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Tevaly') }} - Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50">
        <div class="min-h-screen flex">
            <!-- Sidebar Navigation -->
            <div class="w-64 bg-gradient-to-b from-red-700 to-red-900 text-white shadow-lg">
                <div class="p-6 border-b border-red-600">
                    <h1 class="text-2xl font-bold">Tevaly Admin</h1>
                    <p class="text-red-200 text-sm mt-1">MLM Management System</p>
                </div>

                <!-- Admin Info -->
                <div class="p-6 border-b border-red-600">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center font-bold text-lg">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div class="ml-3">
                            <p class="font-semibold">{{ Auth::user()->name }}</p>
                            <p class="text-red-200 text-xs">Administrator</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Menu -->
                <nav class="p-6 space-y-3">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-red-600' : 'hover:bg-red-600' }} transition">
                        <span class="text-xl">📊</span>
                        <span class="ml-3 font-medium">Dashboard</span>
                    </a>

                    <a href="{{ route('admin.users') }}" class="flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('admin.users') ? 'bg-red-600' : 'hover:bg-red-600' }} transition">
                        <span class="text-xl">👥</span>
                        <span class="ml-3 font-medium">All Users</span>
                    </a>

                    <a href="{{ route('admin.tree') }}" class="flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('admin.tree') ? 'bg-red-600' : 'hover:bg-red-600' }} transition">
                        <span class="text-xl">🌳</span>
                        <span class="ml-3 font-medium">Network Tree</span>
                    </a>

                    <a href="{{ route('admin.reports') }}" class="flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('admin.reports') ? 'bg-red-600' : 'hover:bg-red-600' }} transition">
                        <span class="text-xl">📈</span>
                        <span class="ml-3 font-medium">Reports</span>
                    </a>

                    <div class="pt-3 mt-3 border-t border-red-600">
                        <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition">
                            <span class="text-xl">⚙️</span>
                            <span class="ml-3 font-medium">Settings</span>
                        </a>

                        <form method="POST" action="{{ route('logout') }}" class="mt-3">
                            @csrf
                            <button type="submit" class="w-full flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition text-left">
                                <span class="text-xl">🚪</span>
                                <span class="ml-3 font-medium">Logout</span>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col">
                <!-- Top Header -->
                <header class="bg-white shadow-sm border-b">
                    <div class="px-8 py-6 flex justify-between items-center">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">{{ $header ?? 'Dashboard' }}</h2>
                            <p class="text-gray-600 text-sm mt-1">{{ $description ?? '' }}</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-right">
                                <p class="text-sm text-gray-600">{{ now()->format('l, F j, Y') }}</p>
                                <p class="text-xs text-gray-500">{{ now()->format('H:i A') }}</p>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Page Content -->
                <main class="flex-1 overflow-y-auto p-8">
                    {{ $slot }}
                </main>

                <!-- Footer -->
                <footer class="bg-gray-100 border-t text-center py-4 text-gray-600 text-sm">
                    <p>&copy; 2026 Tevaly MLM System. All rights reserved.</p>
                </footer>
            </div>
        </div>
    </body>
</html>
