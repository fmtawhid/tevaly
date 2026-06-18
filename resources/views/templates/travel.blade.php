@extends('layouts.master')
@section('content')

    <!-- ====== PAGE HEADER ====== -->
    <section class="bg-gradient-to-r from-green-600 to-green-800 text-white px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold">Travel Packages</h1>
            <p class="text-green-100 mt-2 text-lg">Explore the world with exclusive curated travel experiences</p>
        </div>
    </section>

    <!-- ====== FILTER SECTION ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row gap-4 items-center justify-between bg-white rounded-xl p-5 shadow-sm border border-gray-100">
            <div class="flex-1 flex gap-2 flex-wrap">
                <button class="px-4 py-2 bg-green-600 text-white rounded-full text-sm font-medium hover:bg-green-700 transition">All Packages</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">Beach</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">Adventure</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">Cultural</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">Luxury</button>
            </div>
            <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-green-600 outline-none">
                <option>Sort by: Popularity</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Duration: Short</option>
            </select>
        </div>
    </section>

    <!-- ====== TRAVEL PACKAGES GRID ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @php
                $packages = [
                    ['title' => 'Bali Tropical Escape', 'category' => 'Beach', 'duration' => '7 days', 'group' => 'Groups of 10+', 'price' => '$1,299', 'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=400&h=250&fit=crop'],
                    ['title' => 'Japan Heritage Tour', 'category' => 'Cultural', 'duration' => '10 days', 'group' => 'Groups of 8+', 'price' => '$1,899', 'image' => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=400&h=250&fit=crop'],
                    ['title' => 'New Zealand Adventure', 'category' => 'Adventure', 'duration' => '12 days', 'group' => 'Groups of 6+', 'price' => '$2,199', 'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=400&h=250&fit=crop'],
                    ['title' => 'Swiss Alps Hiking', 'category' => 'Adventure', 'duration' => '9 days', 'group' => 'Groups of 5+', 'price' => '$1,699', 'image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=250&fit=crop'],
                    ['title' => 'Paris Luxury Getaway', 'category' => 'Luxury', 'duration' => '5 days', 'group' => 'Couples', 'price' => '$1,499', 'image' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=400&h=250&fit=crop'],
                    ['title' => 'Thailand Island Hopping', 'category' => 'Beach', 'duration' => '8 days', 'group' => 'Groups of 12+', 'price' => '$999', 'image' => 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=400&h=250&fit=crop'],
                    ['title' => 'Egypt Historical Tour', 'category' => 'Cultural', 'duration' => '11 days', 'group' => 'Groups of 10+', 'price' => '$1,599', 'image' => 'https://images.unsplash.com/photo-1518684029980-cf91b2fa50d3?w=400&h=250&fit=crop'],
                    ['title' => 'Iceland Fjords Trek', 'category' => 'Adventure', 'duration' => '10 days', 'group' => 'Groups of 8+', 'price' => '$1,899', 'image' => 'https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?w=400&h=250&fit=crop'],
                ];
            @endphp

            @foreach($packages as $package)
                <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition">
                    <div class="relative">
                        <img src="{{ $package['image'] }}" alt="{{ $package['title'] }}" class="w-full h-40 object-cover" />
                        <span class="badge-category absolute top-3 left-3 bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full">{{ $package['category'] }}</span>
                        <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 text-xs text-gray-500">
                            <span><i class="fa-regular fa-calendar"></i> {{ $package['duration'] }}</span>
                            <span>•</span>
                            <span>{{ $package['group'] }}</span>
                        </div>
                        <h3 class="font-semibold text-gray-900 mt-2 line-clamp-2">{{ $package['title'] }}</h3>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-bold text-green-600">{{ $package['price'] }}</span>
                            <a href="#" class="text-green-600 hover:text-green-700 font-medium text-sm">Book →</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!-- ====== CTA SECTION ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-green-600 to-green-800 text-white p-8 lg:p-14 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold">Ready for Your Next Adventure?</h2>
            <p class="text-green-100 text-lg mt-2 max-w-lg mx-auto">Create unforgettable memories with our expertly curated travel experiences</p>
            <a href="#" class="inline-block mt-6 bg-white text-green-600 px-8 py-3 rounded-full text-sm font-medium hover:bg-gray-100 transition shadow-lg">
                Explore More Packages
            </a>
        </div>
    </section>

@endsection
