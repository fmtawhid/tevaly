<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Tree - Tevaly Admin</title>
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
                <a href="{{ route('admin.users') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition">
                    <span class="text-xl">👥</span><span class="ml-3 font-medium">All Users</span>
                </a>
                <a href="{{ route('admin.tree') }}" class="flex items-center px-4 py-3 rounded-lg bg-red-600 hover:bg-red-700 transition">
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
                        <h2 class="text-3xl font-bold text-gray-900">Network Tree</h2>
                        <p class="text-gray-600 text-sm mt-1">View complete MLM network structure</p>
                    </div>
                    <div class="text-right text-sm text-gray-600">
                        <div class="font-semibold">{{ now()->format('l, F j, Y') }}</div>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-8">
                <!-- Tree Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-600">
                        <p class="text-gray-600 text-sm">Total Members</p>
                        <p class="text-3xl font-bold text-gray-800 mt-2">{{ \App\Models\User::count() }}</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-600">
                        <p class="text-gray-600 text-sm">Root User</p>
                        <p class="text-lg font-bold text-gray-800 mt-2">Admin - TEVALY100</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-600">
                        <p class="text-gray-600 text-sm">Network Depth</p>
                        <p class="text-3xl font-bold text-gray-800 mt-2">{{ optional($root)->children()->count() }} levels</p>
                    </div>
                </div>

                <!-- Tree Display -->
                <div class="bg-white rounded-lg shadow-md p-8">
                    <h3 class="text-lg font-bold text-gray-800 mb-6">🌳 MLM Binary Tree Structure</h3>
                    
                    <div class="space-y-4 pl-4 border-l-2 border-red-300">
                        <!-- Root User -->
                        @if($root)
                            <div class="p-6 bg-gradient-to-r from-red-50 to-red-100 rounded-lg border-l-4 border-red-600">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="font-bold text-gray-800 text-xl">{{ $root->name }} (ROOT)</h4>
                                        <p class="text-sm text-gray-600">📱 {{ $root->phone }}</p>
                                        <p class="text-xs font-mono text-gray-500 mt-1">Code: {{ $root->referral_code }}</p>
                                    </div>
                                    <span class="px-4 py-2 bg-red-600 text-white text-sm font-bold rounded-full">Admin</span>
                                </div>
                                <p class="text-sm text-red-700 font-bold mt-3">Total Network: {{ $root->countDownline() }} members</p>
                            </div>

                            <!-- Children Display -->
                            @if($root->children()->count() > 0)
                                @php $children = $root->children()->get(); @endphp
                                
                                <div class="pl-8 space-y-4 mt-6">
                                    @foreach($children as $child)
                                        <div class="p-4 bg-{{ $child->position === 'left' ? 'green' : 'yellow' }}-50 rounded-lg border-l-4 border-{{ $child->position === 'left' ? 'green' : 'yellow' }}-600">
                                            <div class="flex justify-between items-start">
                                                <div class="flex-1">
                                                    <h5 class="font-bold text-gray-800">{{ $child->name }}</h5>
                                                    <p class="text-sm text-gray-600">📱 {{ $child->phone }}</p>
                                                    <p class="text-xs font-mono text-gray-500 mt-1">{{ $child->referral_code }}</p>
                                                </div>
                                                <span class="px-2 py-1 text-xs font-bold rounded whitespace-nowrap ml-2 {{ 
                                                    $child->position === 'left' 
                                                        ? 'bg-green-200 text-green-800' 
                                                        : 'bg-yellow-200 text-yellow-800' 
                                                }}">{{ ucfirst($child->position) }}</span>
                                            </div>
                                            <div class="mt-2 flex gap-4 text-xs text-gray-600">
                                                <span>Direct: {{ $child->children()->count() }}</span>
                                                <span>Total: {{ $child->countDownline() }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-6 text-gray-500">
                                    <p>📭 No direct members in tree</p>
                                </div>
                            @endif
                        @else
                            <div class="text-center py-8 text-gray-500">
                                <p>⚠️ Root user not found</p>
                            </div>
                        @endif
                    </div>
                </div>
            </main>

            <footer class="bg-gray-100 border-t text-center py-4 text-gray-600 text-xs">
                <p>&copy; 2026 Tevaly MLM System. All rights reserved.</p>
            </footer>
        </div>
    </div>
</body>
</html>
