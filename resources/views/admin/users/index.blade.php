<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users - Tevaly Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-red-700 to-red-900 text-white shadow-lg h-screen sticky top-0">
            <div class="p-6 border-b border-red-600">
                <h1 class="text-2xl font-bold">Tevaly Admin</h1>
                <p class="text-red-200 text-sm mt-1">MLM Management</p>
            </div>
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
            <nav class="p-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition">
                    <span class="text-xl">📊</span><span class="ml-3 font-medium">Dashboard</span>
                </a>
                <a href="{{ route('admin.users') }}" class="flex items-center px-4 py-3 rounded-lg bg-red-600 hover:bg-red-700 transition">
                    <span class="text-xl">👥</span><span class="ml-3 font-medium">All Users</span>
                </a>
                <a href="{{ route('admin.tree') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition">
                    <span class="text-xl">🌳</span><span class="ml-3 font-medium">Network Tree</span>
                </a>
                <div class="pt-4 mt-4 border-t border-red-600">
                    <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition">
                        <span class="text-xl">⚙️</span><span class="ml-3 font-medium">Settings</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="mt-2">
                        @csrf
                        <button type="submit" class="w-full flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition text-left">
                            <span class="text-xl">🚪</span><span class="ml-3 font-medium">Logout</span>
                        </button>
                    </form>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <header class="bg-white shadow-sm border-b sticky top-0 z-40">
                <div class="px-8 py-6 flex justify-between items-center">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">All Users</h2>
                        <p class="text-gray-600 text-sm mt-1">Manage all users in the system</p>
                    </div>
                    <div class="text-right text-sm text-gray-600">
                        <div class="font-semibold">{{ now()->format('l, F j, Y') }}</div>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-8">
                <!-- Role Filter -->
                <div class="mb-6 flex gap-2">
                    <a href="{{ route('admin.users') }}" class="px-4 py-2 rounded-lg {{ !request('role') ? 'bg-red-600 text-white' : 'bg-white text-gray-800 border' }} font-medium transition">
                        All Users ({{ \App\Models\User::count() }})
                    </a>
                    <a href="{{ route('admin.users', ['role' => 'admin']) }}" class="px-4 py-2 rounded-lg {{ request('role') === 'admin' ? 'bg-red-600 text-white' : 'bg-white text-gray-800 border' }} font-medium transition">
                        Admins ({{ \App\Models\User::where('role', 'admin')->count() }})
                    </a>
                    <a href="{{ route('admin.users', ['role' => 'agent']) }}" class="px-4 py-2 rounded-lg {{ request('role') === 'agent' ? 'bg-red-600 text-white' : 'bg-white text-gray-800 border' }} font-medium transition">
                        Agents ({{ \App\Models\User::where('role', 'agent')->count() }})
                    </a>
                    <a href="{{ route('admin.users', ['role' => 'user']) }}" class="px-4 py-2 rounded-lg {{ request('role') === 'user' ? 'bg-red-600 text-white' : 'bg-white text-gray-800 border' }} font-medium transition">
                        Users ({{ \App\Models\User::where('role', 'user')->count() }})
                    </a>
                </div>

                <!-- Users Table -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-100 border-b">
                                <tr>
                                    <th class="text-left py-4 px-6 font-semibold text-gray-700">ID</th>
                                    <th class="text-left py-4 px-6 font-semibold text-gray-700">Name</th>
                                    <th class="text-left py-4 px-6 font-semibold text-gray-700">Phone</th>
                                    <th class="text-left py-4 px-6 font-semibold text-gray-700">Code</th>
                                    <th class="text-left py-4 px-6 font-semibold text-gray-700">Role</th>
                                    <th class="text-left py-4 px-6 font-semibold text-gray-700">Downline</th>
                                    <th class="text-left py-4 px-6 font-semibold text-gray-700">Joined</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr class="border-b hover:bg-gray-50 transition">
                                        <td class="py-4 px-6 text-gray-800 font-bold">#{{ $user->id }}</td>
                                        <td class="py-4 px-6 font-semibold text-gray-800">{{ $user->name }}</td>
                                        <td class="py-4 px-6 text-gray-600">{{ $user->phone }}</td>
                                        <td class="py-4 px-6 font-mono text-blue-600 font-bold">{{ $user->referral_code }}</td>
                                        <td class="py-4 px-6">
                                            <span class="px-3 py-1 rounded-full text-xs font-bold {{ 
                                                $user->role === 'admin' 
                                                    ? 'bg-red-100 text-red-800' 
                                                    : ($user->role === 'agent' 
                                                        ? 'bg-blue-100 text-blue-800' 
                                                        : 'bg-gray-100 text-gray-800')
                                            }}">
                                                {{ ucfirst($user->role) }}
                                            </span>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div>
                                                <p class="text-sm font-semibold text-gray-800">{{ $user->countDownline() }}</p>
                                                <p class="text-xs text-gray-500">{{ $user->children()->count() }} direct</p>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-600">{{ $user->created_at->format('M d, Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="py-8 text-center text-gray-500">No users found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    @if($users->hasPages())
                        <div class="px-6 py-4 bg-gray-50 border-t flex justify-center">
                            {{ $users->links() }}
                        </div>
                    @endif
                </div>
            </main>

            <footer class="bg-gray-100 border-t text-center py-4 text-gray-600 text-xs">
                <p>&copy; 2026 Tevaly MLM System. All rights reserved.</p>
            </footer>
        </div>
    </div>
</body>
</html>
