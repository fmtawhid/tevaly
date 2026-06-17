<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone Number')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Email Address (Optional) -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email (Optional)')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Referral Code -->
        <div class="mt-4">
            <x-input-label for="referral_code" :value="__('Referral Code (Your Sponsor\'s Code)')" />
            <x-text-input id="referral_code" class="block mt-1 w-full" type="text" name="referral_code" :value="old('referral_code', request('ref'))" required />
            <x-input-error :messages="$errors->get('referral_code')" class="mt-2" />
            <p class="text-xs text-gray-600 mt-1">Enter your sponsor's referral code</p>
        </div>

        <!-- Placement ID -->
        <div class="mt-4">
            <x-input-label for="placement_id" :value="__('Select User (Where to place you in tree - Optional)')" />
            <select id="placement_id" name="placement_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="">-- Auto place under sponsor --</option>
            </select>
            <x-input-error :messages="$errors->get('placement_id')" class="mt-2" />
            <p class="text-xs text-gray-600 mt-1">Leave empty to be placed directly under your sponsor</p>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const referralCodeInput = document.getElementById('referral_code');
    const placementSelect = document.getElementById('placement_id');

    // Load placement users when referral code changes
    function loadPlacementUsers() {
        const referralCode = referralCodeInput.value.trim();
        
        if (!referralCode) {
            placementSelect.innerHTML = '<option value="">-- Enter referral code first --</option>';
            return;
        }

        // Fetch available users for placement
        fetch(`/api/placement-users?referral_code=${encodeURIComponent(referralCode)}`)
            .then(response => response.json())
            .then(data => {
                placementSelect.innerHTML = '';
                
                // Always add the "Auto place under sponsor" option
                const defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.textContent = '-- Auto place under sponsor --';
                placementSelect.appendChild(defaultOption);
                
                if (data.users && data.users.length > 0) {
                    data.users.forEach(user => {
                        const option = document.createElement('option');
                        option.value = user.id;
                        option.textContent = `${user.name} (ID: ${user.id}) - Children: ${user.downline_count}`;
                        if (user.id == "{{ old('placement_id') }}") {
                            option.selected = true;
                        }
                        placementSelect.appendChild(option);
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                placementSelect.innerHTML = '<option value="">-- Auto place under sponsor --</option>';
            });
    }

    // Load users on page load if referral code has a value
    if (referralCodeInput.value) {
        loadPlacementUsers();
    }

    // Load users when referral code changes
    referralCodeInput.addEventListener('change', loadPlacementUsers);
    referralCodeInput.addEventListener('input', loadPlacementUsers);
});
</script>
