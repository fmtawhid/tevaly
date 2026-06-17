@forelse($users as $item)
    @php
        $user = is_array($item) ? $item['user'] : $item;
        $level = is_array($item) ? $item['level'] : 0;
        $children = is_array($item) && isset($item['children']) ? $item['children'] : $user->children;
        $position = is_array($item) && isset($item['position']) ? $item['position'] : $user->position;
    @endphp
    
    <div class="mb-1 pb-1">
        <div class="flex items-center gap-2" style="margin-left: {{ $level * 20 }}px;">
            <!-- Position Badge -->
            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-bold {{ 
                $position === 'left' 
                    ? 'bg-green-100 text-green-800' 
                    : ($position === 'right' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800')
            }}">
                {{ ucfirst($position ?? 'Root') }}
            </span>

            <!-- User Info -->
            <div class="flex-1 p-2 rounded border border-gray-200 hover:border-blue-300 hover:shadow-sm transition">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="font-semibold text-gray-800 text-sm">{{ $user->name }}</p>
                        <p class="text-xs text-gray-600">📱 {{ $user->phone }} | 🏷️ {{ $user->referral_code }}</p>
                    </div>
                    @if($user->countDownline() > 0)
                        <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">
                            {{ $user->countDownline() }} under
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <!-- Recursively show children -->
        @if(count($children) > 0)
            @include('tree.tree-item', ['users' => $children, 'level' => $level + 1])
        @endif
    </div>
@empty
    <p class="text-gray-400 text-xs italic" style="margin-left: {{ ($level ?? 0) * 20 }}px;">No members</p>
@endforelse
