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
                <h2 class="text-3xl font-bold">My Network Tree</h2>
                <p class="text-blue-100 mt-2">View your complete MLM network structure with visual hierarchy</p>
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
                    
                    <!-- Hierarchical Tree Diagram -->
                    <style>
                        .tree-container {
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            gap: 2rem;
                            overflow-x: auto;
                            padding: 2rem;
                            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
                            border-radius: 8px;
                        }

                        .tree-node {
                            position: relative;
                        }

                        .tree-root {
                            margin-bottom: 2rem;
                        }

                        .node-card {
                            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                            color: white;
                            padding: 1rem 1.5rem;
                            border-radius: 8px;
                            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                            min-width: 200px;
                            text-align: center;
                            border: 2px solid rgba(255, 255, 255, 0.3);
                            transition: all 0.3s ease;
                        }

                        .node-card:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
                        }

                        .node-card.child {
                            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
                        }

                        .node-name {
                            font-weight: bold;
                            font-size: 1.1rem;
                            margin-bottom: 0.5rem;
                        }

                        .node-info {
                            font-size: 0.85rem;
                            opacity: 0.9;
                        }

                        .tree-branch {
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            gap: 1.5rem;
                        }

                        .tree-children {
                            display: flex;
                            justify-content: center;
                            gap: 3rem;
                            flex-wrap: wrap;
                            position: relative;
                            padding-top: 2rem;
                        }

                        .tree-children::before {
                            content: '';
                            position: absolute;
                            top: 0;
                            left: 50%;
                            right: 50%;
                            height: 2rem;
                            border-left: 2px solid #667eea;
                            transform: translateX(-50%);
                        }

                        .tree-child-wrapper {
                            position: relative;
                            flex: 0 0 auto;
                        }

                        .tree-child-wrapper::before {
                            content: '';
                            position: absolute;
                            top: -2rem;
                            left: 50%;
                            width: 2px;
                            height: 2rem;
                            background: #667eea;
                            transform: translateX(-50%);
                        }

                        .tree-child-wrapper:not(:last-child)::after {
                            content: '';
                            position: absolute;
                            top: -2rem;
                            left: 0;
                            right: 100%;
                            height: 2px;
                            background: #667eea;
                        }

                        .tree-level {
                            margin-top: 2rem;
                        }

                        @media (max-width: 768px) {
                            .tree-children {
                                gap: 1.5rem;
                            }

                            .node-card {
                                min-width: 160px;
                                padding: 0.75rem 1rem;
                                font-size: 0.9rem;
                            }
                        }
                    </style>

                    <div class="tree-container">
                        <!-- Root User -->
                        <div class="tree-node tree-root">
                            <div class="node-card">
                                <div class="node-name">👤 {{ Auth::user()->name }}</div>
                                <div class="node-info">{{ Auth::user()->referral_code }}</div>
                                <div class="node-info text-xs">You</div>
                            </div>
                        </div>

                        @php
                            $children = Auth::user()->children()->get();
                            $childrenCount = count($children);
                        @endphp

                        @if($childrenCount > 0)
                            <!-- Connector to children -->
                            <div style="width: 2px; height: 1.5rem; background: #667eea;"></div>

                            <!-- Direct Children Level -->
                            <div class="tree-children" style="@if($childrenCount == 1) justify-content: center; @endif">
                                @forelse($children as $child)
                                    <div class="tree-child-wrapper">
                                        <div class="node-card child">
                                            <div class="node-name">👤 {{ $child->name }}</div>
                                            <div class="node-info">{{ $child->referral_code }}</div>
                                            <div class="node-info text-xs">Children: {{ $child->children()->count() }}</div>
                                        </div>

                                        @php $grandchildren = $child->children()->get(); @endphp
                                        @if(count($grandchildren) > 0)
                                            <!-- Grandchildren Level -->
                                            <div class="tree-level">
                                                <div style="width: 2px; height: 1rem; background: #667eea; margin: 0 auto;"></div>
                                                <div class="tree-children" style="@if(count($grandchildren) == 1) justify-content: center; @endif">
                                                    @foreach($grandchildren as $grandchild)
                                                        <div class="tree-child-wrapper">
                                                            <div class="node-card child" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); min-width: 150px; padding: 0.75rem 1rem;">
                                                                <div class="node-name" style="font-size: 0.95rem;">{{ $grandchild->name }}</div>
                                                                <div class="node-info text-xs">{{ $grandchild->referral_code }}</div>
                                                                @if($grandchild->children()->count() > 0)
                                                                    <div class="node-info text-xs">↓ {{ $grandchild->children()->count() }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @empty
                                    <p class="text-gray-500">No direct members yet</p>
                                @endforelse
                            </div>
                        @else
                            <div class="text-center py-8">
                                <p class="text-gray-500 text-lg">📭 No direct members in your tree yet</p>
                                <p class="text-gray-400 text-sm mt-2">Share your referral code to build your network!</p>
                            </div>
                        @endif
                    </div>
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
