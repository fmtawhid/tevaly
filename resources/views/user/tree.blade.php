<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Tree - Tevaly MLM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation Bar -->
        <nav class="bg-gradient-to-r from-blue-600 to-blue-800 text-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold">Tevaly</h1>
                        <span class="ml-3 text-blue-200 text-sm">MLM Network</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="{{ route('dashboard') }}" class="hover:text-blue-200 transition">📊 Dashboard</a>
                        <a href="{{ route('tree.show') }}" class="hover:text-blue-200 transition font-bold">🌳 My Tree</a>
                    </div>
                    <div class="relative group">
                        <button class="flex items-center gap-2 px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            <span class="w-8 h-8 bg-blue-300 rounded-full flex items-center justify-center text-blue-900 font-bold text-sm">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </span>
                            <span class="hidden sm:inline text-sm font-medium">{{ Auth::user()->name }}</span>
                        </button>
                        <div class="absolute right-0 mt-0 w-48 bg-white text-gray-800 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition z-50">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-3 hover:bg-blue-50">⚙️ Settings</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-3 hover:bg-blue-50 border-t">🚪 Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Header -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-4 sm:px-6 lg:px-8 py-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-bold">My Binary Tree</h2>
                <p class="text-blue-100 mt-2">View your complete MLM network structure</p>
            </div>
        </div>

        <!-- Main Content -->
        <main class="flex-1">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <!-- User Info Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                    <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-blue-600">
                        <p class="text-gray-600 text-sm">Your Code</p>
                        <p class="text-2xl font-bold text-gray-800 font-mono">{{ Auth::user()->referral_code }}</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-green-600">
                        <p class="text-gray-600 text-sm">Phone</p>
                        <p class="text-2xl font-bold text-gray-800">{{ Auth::user()->phone }}</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-purple-600">
                        <p class="text-gray-600 text-sm">Direct Members</p>
                        <p class="text-2xl font-bold text-gray-800">{{ Auth::user()->children()->count() }}</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-orange-600">
                        <p class="text-gray-600 text-sm">Total Downline</p>
                        <p class="text-2xl font-bold text-gray-800">{{ Auth::user()->countDownline() }}</p>
                    </div>
                </div>

                <!-- Tree Section -->
                <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                    <h3 class="text-lg font-bold text-gray-800 mb-6">🌳 Your Network Structure</h3>
                    
                    <!-- Compact Tree -->
                    <div class="bg-gray-900 rounded-lg p-6 font-mono text-sm text-green-400 overflow-x-auto max-h-96">
                        <pre>@php
function renderFullTree($user, $prefix = '', $isLast = true) {
    $output = '';
    $children = $user->children()->get();
    
    if ($prefix === '') {
        $output .= '● ' . $user->name . "\n";
    }
    
    foreach ($children as $index => $child) {
        $isLastChild = ($index === count($children) - 1);
        $connector = $isLastChild ? '└── ' : '├── ';
        $extension = $isLastChild ? '    ' : '│   ';
        
        $icon = $child->position === 'left' ? '◀' : '▶';
        $output .= $prefix . $connector . '● ' . $child->name . ' ' . $icon . "\n";
        
        if ($child->children()->count() > 0) {
            $output .= renderFullTree($child, $prefix . $extension, $isLastChild);
        }
    }
    
    return $output;
}

echo renderFullTree(Auth::user());
@endphp
                        </pre>
                    </div>

                    <!-- Tree Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-6">
                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-4 border border-green-300">
                            <p class="text-gray-600 text-sm">Your Code</p>
                            <p class="text-xl font-bold text-green-700 font-mono">{{ Auth::user()->referral_code }}</p>
                        </div>
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-4 border border-blue-300">
                            <p class="text-gray-600 text-sm">Direct Members</p>
                            <p class="text-xl font-bold text-blue-700">{{ Auth::user()->children()->count() }}</p>
                        </div>
                        <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-lg p-4 border border-orange-300">
                            <p class="text-gray-600 text-sm">Total Downline</p>
                            <p class="text-xl font-bold text-orange-700">{{ Auth::user()->countDownline() }}</p>
                        </div>
                        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-4 border border-purple-300">
                            <p class="text-gray-600 text-sm">Phone</p>
                            <p class="text-xl font-bold text-purple-700">{{ Auth::user()->phone }}</p>
                        </div>
                    </div>
                </div>

                <!-- Back to Dashboard -->
                <div class="text-center">
                    <a href="{{ route('dashboard') }}" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium">
                        ← Back to Dashboard
                    </a>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-gray-300 border-t border-gray-700 mt-auto">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-white font-bold mb-3">Tevaly MLM</h3>
                        <p class="text-sm">Build your network, grow your income.</p>
                    </div>
                    <div>
                        <h3 class="text-white font-bold mb-3">Your Code</h3>
                        <p class="text-sm font-mono bg-gray-700 px-3 py-1 rounded inline-block">{{ Auth::user()->referral_code }}</p>
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
