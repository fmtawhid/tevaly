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
            <x-input-label for="placement_id" :value="__('Placement User ID (Where to place you in tree)')" />
            <x-text-input id="placement_id" class="block mt-1 w-full" type="number" name="placement_id" :value="old('placement_id')" required />
            <x-input-error :messages="$errors->get('placement_id')" class="mt-2" />
            <p class="text-xs text-gray-600 mt-1">Enter the ID of the user under whom you'll be placed</p>
        </div>

        <!-- Position -->
        <div class="mt-4">
            <x-input-label for="position" :value="__('Position')" />
            <select id="position" name="position" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                <option value="">-- Select Position --</option>
                <option value="left" @selected(old('position') === 'left')>Left</option>
                <option value="right" @selected(old('position') === 'right')>Right</option>
            </select>
            <x-input-error :messages="$errors->get('position')" class="mt-2" />
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
