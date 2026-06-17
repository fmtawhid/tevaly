<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Tevaly</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-red-700 to-red-900 text-white shadow-lg h-screen sticky top-0">
            <!-- Logo -->
            <div class="p-6 border-b border-red-600">
                <h1 class="text-2xl font-bold">Tevaly Admin</h1>
                <p class="text-red-200 text-sm mt-1">MLM Management</p>
            </div>

            <!-- Admin Info -->
            <div class="p-6 border-b border-red-600">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center font-bold text-lg">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div class="ml-3">
                        <p class="font-semibold text-sm">{{ Auth::user()->name }}</p>
                        <p class="text-red-200 text-xs">Administrator</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="p-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 rounded-lg bg-red-600 hover:bg-red-700 transition">
                    <span class="text-xl">📊</span>
                    <span class="ml-3 font-medium">Dashboard</span>
                </a>

                <a href="{{ route('admin.users') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition">
                    <span class="text-xl">👥</span>
                    <span class="ml-3 font-medium">All Users</span>
                </a>

                <a href="{{ route('admin.tree') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition">
                    <span class="text-xl">🌳</span>
                    <span class="ml-3 font-medium">Network Tree</span>
                </a>

                <div class="pt-4 mt-4 border-t border-red-600">
                    <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition">
                        <span class="text-xl">⚙️</span>
                        <span class="ml-3 font-medium">Settings</span>
                    </a>

                    <form method="POST" action="{{ route('logout') }}" class="mt-2">
                        @csrf
                        <button type="submit" class="w-full flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition text-left">
                            <span class="text-xl">🚪</span>
                            <span class="ml-3 font-medium">Logout</span>
                        </button>
                    </form>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b sticky top-0 z-40">
                <div class="px-8 py-6 flex justify-between items-center">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Admin Dashboard</h2>
                        <p class="text-gray-600 text-sm mt-1">Monitor and manage your entire MLM network</p>
                    </div>
                    <div class="text-right text-sm text-gray-600">
                        <div class="font-semibold">{{ now()->format('l, F j, Y') }}</div>
                        <div class="text-xs">{{ now()->format('H:i A') }}</div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-8">
                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Total Users -->
                    <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-red-500">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-600 text-sm font-medium">Total Users</p>
                                <p class="text-3xl font-bold text-gray-800 mt-2">{{ \App\Models\User::count() }}</p>
                            </div>
                            <span class="text-3xl">👥</span>
                        </div>
                    </div>

                    <!-- Active Today -->
                    <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-600 text-sm font-medium">Active Today</p>
                                <p class="text-3xl font-bold text-gray-800 mt-2">{{ \App\Models\User::whereDate('updated_at', today())->count() }}</p>
                            </div>
                            <span class="text-3xl">✓</span>
                        </div>
                    </div>

                    <!-- Agents -->
                    <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-600 text-sm font-medium">Agents</p>
                                <p class="text-3xl font-bold text-gray-800 mt-2">{{ \App\Models\User::where('role', 'agent')->count() }}</p>
                            </div>
                            <span class="text-3xl">🎯</span>
                        </div>
                    </div>

                    <!-- Regular Users -->
                    <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-600 text-sm font-medium">Regular Users</p>
                                <p class="text-3xl font-bold text-gray-800 mt-2">{{ \App\Models\User::where('role', 'user')->count() }}</p>
                            </div>
                            <span class="text-3xl">📱</span>
                        </div>
                    </div>
                </div>

                <!-- Action Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <a href="{{ route('admin.users') }}" class="bg-gradient-to-br from-red-500 to-red-700 text-white rounded-lg shadow-md p-8 hover:shadow-lg transition block">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-2xl font-bold mb-2">View All Users</h3>
                                <p class="text-red-100">Manage and monitor user accounts</p>
                            </div>
                            <span class="text-5xl opacity-50">👥</span>
                        </div>
                    </a>

                    <a href="{{ route('admin.tree') }}" class="bg-gradient-to-br from-green-500 to-green-700 text-white rounded-lg shadow-md p-8 hover:shadow-lg transition block">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-2xl font-bold mb-2">Network Tree</h3>
                                <p class="text-green-100">View complete MLM structure</p>
                            </div>
                            <span class="text-5xl opacity-50">🌳</span>
                        </div>
                    </a>
                </div>

                <!-- Recent Registrations Table -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Recent Registrations</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="border-b bg-gray-50">
                                <tr>
                                    <th class="text-left py-3 px-4 text-gray-700 font-semibold">Name</th>
                                    <th class="text-left py-3 px-4 text-gray-700 font-semibold">Phone</th>
                                    <th class="text-left py-3 px-4 text-gray-700 font-semibold">Role</th>
                                    <th class="text-left py-3 px-4 text-gray-700 font-semibold">Joined</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse(\App\Models\User::latest()->limit(5)->get() as $user)
                                    <tr class="border-b hover:bg-gray-50 transition">
                                        <td class="py-3 px-4 font-semibold text-gray-800">{{ $user->name }}</td>
                                        <td class="py-3 px-4 text-gray-600">{{ $user->phone }}</td>
                                        <td class="py-3 px-4">
                                            <span class="px-3 py-1 rounded-full text-xs font-semibold {{ 
                                                $user->role === 'admin' ? 'bg-red-100 text-red-800' : 
                                                ($user->role === 'agent' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800')
                                            }}">
                                                {{ ucfirst($user->role) }}
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-gray-600 text-sm">{{ $user->created_at->format('M d, Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="py-8 px-4 text-center text-gray-500">No users yet</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-gray-100 border-t text-center py-4 text-gray-600 text-xs">
                <p>&copy; 2026 Tevaly MLM System. All rights reserved.</p>
            </footer>
        </div>
    </div>
</body>
</html>
