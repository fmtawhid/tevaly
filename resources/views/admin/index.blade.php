@extends('admin.layouts.app')
    <x-slot name="header">Admin Panel</x-slot>
    <x-slot name="description">Central management hub for Tevaly MLM System</x-slot>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <a href="{{ route('admin.dashboard') }}" class="bg-gradient-to-br from-red-500 to-red-700 text-white rounded-lg shadow-md p-8 hover:shadow-lg transition block">
            <h3 class="text-2xl font-bold mb-2">📊 Dashboard</h3>
            <p class="text-red-100">View overall statistics and reports</p>
        </a>

        <a href="{{ route('admin.users') }}" class="bg-gradient-to-br from-blue-500 to-blue-700 text-white rounded-lg shadow-md p-8 hover:shadow-lg transition block">
            <h3 class="text-2xl font-bold mb-2">👥 All Users</h3>
            <p class="text-blue-100">Manage and monitor all users</p>
        </a>

        <a href="{{ route('admin.tree') }}" class="bg-gradient-to-br from-green-500 to-green-700 text-white rounded-lg shadow-md p-8 hover:shadow-lg transition block">
            <h3 class="text-2xl font-bold mb-2">🌳 Network Tree</h3>
            <p class="text-green-100">View complete MLM structure</p>
        </a>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-red-500">
            <p class="text-gray-600 text-sm">Total Users</p>
            <p class="text-3xl font-bold text-red-600 mt-2">{{ \App\Models\User::count() }}</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
            <p class="text-gray-600 text-sm">Admins</p>
            <p class="text-3xl font-bold text-blue-600 mt-2">{{ \App\Models\User::where('role', 'admin')->count() }}</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
            <p class="text-gray-600 text-sm">Agents</p>
            <p class="text-3xl font-bold text-green-600 mt-2">{{ \App\Models\User::where('role', 'agent')->count() }}</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500">
            <p class="text-gray-600 text-sm">Regular Users</p>
            <p class="text-3xl font-bold text-purple-600 mt-2">{{ \App\Models\User::where('role', 'user')->count() }}</p>
        </div>
    </div>
</x-admin-layout>
