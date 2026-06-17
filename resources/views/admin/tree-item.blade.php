@forelse($users as $user)
    <div class="mb-2">
        <div class="flex items-center gap-2 p-3 bg-white border border-gray-200 rounded-lg hover:border-red-300 hover:shadow-md transition">
            <!-- Position Badge -->
            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-bold {{ 
                $user->position === 'left' 
                    ? 'bg-green-100 text-green-800' 
                    : ($user->position === 'right' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800')
            }}">
                {{ ucfirst($user->position ?? 'Root') }}
            </span>

            <!-- User Info -->
            <div class="flex-1">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="font-semibold text-gray-800">{{ $user->name }}</p>
                        <p class="text-xs text-gray-600">ID: {{ $user->id }} | 📱 {{ $user->phone }} | 🏷️ {{ $user->referral_code }}</p>
                    </div>
                    <div class="text-right">
                        <span class="px-2 py-1 text-xs font-semibold rounded {{ 
                            $user->role === 'admin' ? 'bg-red-100 text-red-800' : 
                            ($user->role === 'agent' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800')
                        }}">
                            {{ ucfirst($user->role) }}
                        </span>
                        @if($user->countDownline() > 0)
                            <p class="text-xs text-blue-600 font-bold mt-1">{{ $user->countDownline() }} under</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Children -->
        @if($user->children->count() > 0)
            <div style="margin-left: 20px;">
                @include('admin.tree-item', ['users' => $user->children])
            </div>
        @endif
    </div>
@empty
    <p class="text-gray-400 text-xs italic">No members</p>
@endforelse
