<x-user-layout>
    <x-slot name="header">My Binary Tree</x-slot>
    <x-slot name="description">View your complete downline network and structure</x-slot>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white rounded-lg shadow p-4">
                <div class="text-sm text-gray-600 mb-2">Total Downline</div>
                <div class="text-3xl font-bold text-blue-600">{{ $downlineCount }}</div>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <div class="text-sm text-gray-600 mb-2">Direct Members</div>
                <div class="text-3xl font-bold text-green-600">{{ $user->children()->count() }}</div>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <div class="text-sm text-gray-600 mb-2">Your Position</div>
                <div class="text-2xl font-bold text-purple-600">
                    @if($user->position)
                        {{ ucfirst($user->position) }}
                    @else
                        Root
                    @endif
                </div>
            </div>
        </div>

        <!-- Tree Display -->
        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tree Structure</h2>
            
            @if(empty($downlineUsers))
                <div class="text-center py-8 text-gray-500">
                    <p class="text-lg">No downline members yet</p>
                    <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline mt-2 inline-block">
                        Add your first member
                    </a>
                </div>
            @else
                <div class="space-y-2 max-h-96 overflow-y-auto">
                    @include('tree.tree-item', ['users' => $downlineUsers, 'level' => 0])
                </div>
            @endif
        </div>

        <!-- Direct Members -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Direct Members (Left & Right)</h2>
            
            @php
                $directReferrals = $user->getDirectReferrals();
            @endphp

            @if($directReferrals->isEmpty())
                <p class="text-center py-8 text-gray-500">No direct members yet</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($directReferrals as $referral)
                        <div class="border-2 {{ $referral->position === 'left' ? 'border-green-300 bg-green-50' : 'border-yellow-300 bg-yellow-50' }} rounded-lg p-4">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">{{ $referral->name }}</h3>
                                    <p class="text-gray-600">📱 {{ $referral->phone }}</p>
                                </div>
                                <span class="px-3 py-1 rounded-full text-sm font-bold {{ 
                                    $referral->position === 'left' 
                                        ? 'bg-green-200 text-green-800' 
                                        : 'bg-yellow-200 text-yellow-800' 
                                }}">
                                    {{ ucfirst($referral->position) }}
                                </span>
                            </div>
                            <div class="space-y-1 text-sm">
                                <p><span class="font-semibold">Code:</span> <span class="font-mono bg-white px-2 py-1 rounded">{{ $referral->referral_code }}</span></p>
                                <p><span class="font-semibold">Downline:</span> <span class="font-bold text-blue-600">{{ $referral->countDownline() }}</span></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-user-layout>
