<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard - Tevaly MLM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation Bar -->
        <nav class="bg-gradient-to-r from-blue-600 to-blue-800 text-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold">Tevaly</h1>
                        <span class="ml-3 text-blue-200 text-sm">MLM Network</span>
                    </div>

                    <!-- Menu -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="{{ route('dashboard') }}" class="hover:text-blue-200 transition font-bold">
                            📊 Dashboard
                        </a>
                        <a href="{{ route('tree.show') }}" class="hover:text-blue-200 transition">
                            🌳 My Tree
                        </a>
                    </div>

                    <!-- User Dropdown -->
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
                <h2 class="text-3xl font-bold">My Dashboard</h2>
                <p class="text-blue-100 mt-2">Welcome back, {{ Auth::user()->name }}! Here's your MLM overview.</p>
            </div>
        </div>

        <!-- Main Content -->
        <main class="flex-1">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <!-- Success Message -->
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg flex justify-between items-center">
                        <span>✓ {{ session('success') }}</span>
                        <button onclick="this.parentElement.style.display='none'" class="text-green-700 hover:text-green-900">✕</button>
                    </div>
                @endif

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-700 text-white rounded-lg shadow-md p-6">
                        <p class="text-sm opacity-90">Your Code</p>
                        <p class="text-2xl font-bold mt-2 font-mono">{{ Auth::user()->referral_code }}</p>
                    </div>

                    <div class="bg-gradient-to-br from-green-500 to-green-700 text-white rounded-lg shadow-md p-6">
                        <p class="text-sm opacity-90">Phone</p>
                        <p class="text-2xl font-bold mt-2">{{ Auth::user()->phone }}</p>
                    </div>

                    <div class="bg-gradient-to-br from-purple-500 to-purple-700 text-white rounded-lg shadow-md p-6">
                        <p class="text-sm opacity-90">Direct Members</p>
                        <p class="text-2xl font-bold mt-2">{{ Auth::user()->children()->count() }}</p>
                    </div>

                    <div class="bg-gradient-to-br from-orange-500 to-orange-700 text-white rounded-lg shadow-md p-6">
                        <p class="text-sm opacity-90">Total Downline</p>
                        <p class="text-2xl font-bold mt-2">{{ Auth::user()->countDownline() }}</p>
                    </div>
                </div>

                <!-- Referral Section -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">📤 Share Your Referral</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Your Code</label>
                            <div class="flex gap-2">
                                <input type="text" id="referral-code" readonly value="{{ Auth::user()->referral_code }}" 
                                    class="flex-1 px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 font-mono">
                                <button onclick="copyToClipboard('#referral-code')" 
                                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium">
                                    Copy
                                </button>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Registration Link</label>
                            <div class="flex gap-2">
                                <input type="text" id="referral-link" readonly 
                                    value="{{ route('register') }}?ref={{ Auth::user()->referral_code }}" 
                                    class="flex-1 px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 text-sm font-mono">
                                <button onclick="copyToClipboard('#referral-link')" 
                                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium">
                                    Copy
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add New Member -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">➕ Add New Member</h3>
                    
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('member.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Member Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Position</label>
                                <select name="position" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Select Position</option>
                                    <option value="left" {{ old('position') === 'left' ? 'selected' : '' }}>Left</option>
                                    <option value="right" {{ old('position') === 'right' ? 'selected' : '' }}>Right</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                                <input type="password" name="password" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition font-medium">
                            Add Member
                        </button>
                    </form>
                </div>

                <!-- Direct Members -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">👥 Your Direct Members (Left & Right)</h3>
                    
                    @php $directMembers = Auth::user()->children()->get(); @endphp

                    @if($directMembers->isEmpty())
                        <p class="text-gray-500 text-center py-8">No direct members yet</p>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach($directMembers as $member)
                                <div class="border-l-4 {{ $member->position === 'left' ? 'border-green-500 bg-green-50' : 'border-yellow-500 bg-yellow-50' }} pl-4 py-4 rounded-r-lg">
                                    <div class="flex justify-between items-start mb-2">
                                        <div>
                                            <h4 class="font-bold text-gray-800">{{ $member->name }}</h4>
                                            <p class="text-sm text-gray-600">📱 {{ $member->phone }}</p>
                                        </div>
                                        <span class="px-2 py-1 rounded text-xs font-bold {{ 
                                            $member->position === 'left' 
                                                ? 'bg-green-200 text-green-800' 
                                                : 'bg-yellow-200 text-yellow-800' 
                                        }}">{{ ucfirst($member->position) }}</span>
                                    </div>
                                    <p class="text-xs text-gray-600 mb-2">Code: {{ $member->referral_code }}</p>
                                    @if($member->countDownline() > 0)
                                        <p class="text-xs font-bold text-blue-600">📊 {{ $member->countDownline() }} members under</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- View Tree Button -->
                <div class="text-center">
                    <a href="{{ route('tree.show') }}" class="inline-block px-8 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-bold">
                        🌳 View Full Binary Tree
                    </a>
                </div>
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

    <script>
        function copyToClipboard(selector) {
            const element = document.querySelector(selector);
            element.select();
            document.execCommand('copy');
            const button = event.target;
            const originalText = button.textContent;
            button.textContent = '✓ Copied!';
            setTimeout(() => button.textContent = originalText, 2000);
        }
    </script>
</body>
</html>
