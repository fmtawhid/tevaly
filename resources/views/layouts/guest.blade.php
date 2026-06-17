<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tevaly MLM - Authentication</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md">
            <!-- Logo & Title -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                    Tevaly
                </h1>
                <p class="text-gray-600 mt-2">MLM Binary Network System</p>
            </div>

            <!-- Auth Card -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                {{ $slot }}
            </div>

            <!-- Footer Links -->
            <div class="text-center mt-6 space-y-2">
                <p class="text-sm text-gray-600">
                    @if(Route::has('register'))
                        Don't have an account? 
                        <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-700 font-medium">
                            Sign up here
                        </a>
                    @endif
                </p>
                <p class="text-xs text-gray-500">
                    © 2026 Tevaly MLM System. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
