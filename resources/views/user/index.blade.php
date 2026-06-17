<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Tevaly MLM</title>
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

        <!-- Page Header -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-4 sm:px-6 lg:px-8 py-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-bold">Welcome to Tevaly MLM</h2>
                <p class="text-blue-100 mt-2">Manage your network and grow your income</p>
            </div>
        </div>

        <!-- Main Content -->
        <main class="flex-1">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Quick Start Card -->
                    <div class="bg-gradient-to-br from-blue-500 to-blue-700 text-white rounded-lg shadow-md p-8">
                        <h3 class="text-2xl font-bold mb-4">🚀 Quick Start</h3>
                        <ul class="space-y-2 text-blue-100">
                            <li>✓ Share your referral code to invite members</li>
                            <li>✓ Add members directly to your left or right</li>
                            <li>✓ Earn from your downline commissions</li>
                            <li>✓ View your complete network tree</li>
                        </ul>
                        <a href="{{ route('dashboard') }}" class="inline-block mt-4 px-6 py-2 bg-white text-blue-600 rounded-lg font-bold hover:shadow-lg transition">
                            Go to Dashboard →
                        </a>
                    </div>

                    <!-- Your Network Card -->
                    <div class="bg-gradient-to-br from-green-500 to-green-700 text-white rounded-lg shadow-md p-8">
                        <h3 class="text-2xl font-bold mb-4">📊 Your Network</h3>
                        <div class="space-y-3">
                            <p class="text-green-100">
                                <span class="font-bold text-2xl">{{ Auth::user()->children()->count() }}</span> Direct Members
                            </p>
                            <p class="text-green-100">
                                <span class="font-bold text-2xl">{{ Auth::user()->countDownline() }}</span> Total Downline
                            </p>
                        </div>
                        <a href="{{ route('tree.show') }}" class="inline-block mt-4 px-6 py-2 bg-white text-green-600 rounded-lg font-bold hover:shadow-lg transition">
                            View Tree →
                        </a>
                    </div>
                </div>

                <!-- Features -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="text-lg font-bold text-gray-800 mb-2">💰 Binary Tree</h4>
                        <p class="text-gray-600 text-sm">Earn from left and right positions in your network.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="text-lg font-bold text-gray-800 mb-2">🎯 Referral System</h4>
                        <p class="text-gray-600 text-sm">Share your code and track all your referrals.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="text-lg font-bold text-gray-800 mb-2">📈 Real-time Stats</h4>
                        <p class="text-gray-600 text-sm">Monitor your network growth in real-time.</p>
                    </div>
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
