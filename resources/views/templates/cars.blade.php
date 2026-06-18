@extends('layouts.master')
@section('content')

    <!-- ====== PAGE HEADER ====== -->
    <section class="bg-gradient-to-r from-orange-600 to-orange-800 text-white px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold">Premium Car Rentals</h1>
            <p class="text-orange-100 mt-2 text-lg">Choose from our exclusive fleet of luxury and reliable vehicles</p>
        </div>
    </section>

    <!-- ====== FILTER SECTION ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row gap-4 items-center justify-between bg-white rounded-xl p-5 shadow-sm border border-gray-100">
            <div class="flex-1 flex gap-2 flex-wrap">
                <button class="px-4 py-2 bg-orange-600 text-white rounded-full text-sm font-medium hover:bg-orange-700 transition">All Cars</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">Luxury</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">SUV</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">Economy</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">Sports</button>
            </div>
            <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-orange-600 outline-none">
                <option>Sort by: Popularity</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Newest</option>
            </select>
        </div>
    </section>

    <!-- ====== CAR RENTAL GRID ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @php
                $cars = [
                    ['title' => 'Mercedes‑Benz S‑Class', 'category' => 'Luxury', 'type' => 'Sedan', 'price' => '$199/day', 'image' => 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=400&h=250&fit=crop'],
                    ['title' => 'Toyota Land Cruiser', 'category' => 'SUV', 'type' => '7 Seater', 'price' => '$149/day', 'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=400&h=250&fit=crop'],
                    ['title' => 'Honda City', 'category' => 'Economy', 'type' => 'Sedan', 'price' => '$45/day', 'image' => 'https://images.unsplash.com/photo-1494976388531-d1058494cdd8?w=400&h=250&fit=crop'],
                    ['title' => 'Ferrari F8 Tributo', 'category' => 'Sports', 'type' => 'Convertible', 'price' => '$599/day', 'image' => 'https://images.unsplash.com/photo-1552820728-8ac41f1ce891?w=400&h=250&fit=crop'],
                    ['title' => 'BMW X7', 'category' => 'SUV', 'type' => '7 Seater', 'price' => '$179/day', 'image' => 'https://images.unsplash.com/photo-1464207687429-7505649dae38?w=400&h=250&fit=crop'],
                    ['title' => 'Hyundai Elantra', 'category' => 'Economy', 'type' => 'Sedan', 'price' => '$42/day', 'image' => 'https://images.unsplash.com/photo-1507950547674-252ce5d4b913?w=400&h=250&fit=crop'],
                    ['title' => 'Porsche 911', 'category' => 'Sports', 'type' => 'Coupe', 'price' => '$499/day', 'image' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=400&h=250&fit=crop'],
                    ['title' => 'Audi Q8', 'category' => 'Luxury', 'type' => 'SUV', 'price' => '$229/day', 'image' => 'https://images.unsplash.com/photo-1567818735868-e71b99932e29?w=400&h=250&fit=crop'],
                ];
            @endphp

            @foreach($cars as $car)
                <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition">
                    <div class="relative">
                        <img src="{{ $car['image'] }}" alt="{{ $car['title'] }}" class="w-full h-40 object-cover" />
                        <span class="badge-category absolute top-3 left-3 bg-orange-600 text-white text-xs font-semibold px-3 py-1 rounded-full">{{ $car['category'] }}</span>
                        <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 text-xs text-gray-500">
                            <span><i class="fa-solid fa-car"></i> {{ $car['type'] }}</span>
                            <span>•</span>
                            <span><i class="fa-regular fa-user"></i> Manual/Auto</span>
                        </div>
                        <h3 class="font-semibold text-gray-900 mt-2 line-clamp-2">{{ $car['title'] }}</h3>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-bold text-orange-600">{{ $car['price'] }}</span>
                            <a href="#" class="text-orange-600 hover:text-orange-700 font-medium text-sm">Reserve →</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!-- ====== BOOKING INFO SECTION ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-orange-50 rounded-2xl p-6 border border-orange-200">
                <div class="text-3xl mb-3">📋</div>
                <h3 class="font-bold text-gray-900 mb-2">Simple Booking</h3>
                <p class="text-sm text-gray-600">Select dates, choose your car, and complete checkout in minutes</p>
            </div>
            <div class="bg-orange-50 rounded-2xl p-6 border border-orange-200">
                <div class="text-3xl mb-3">🛡️</div>
                <h3 class="font-bold text-gray-900 mb-2">Insurance Included</h3>
                <p class="text-sm text-gray-600">Comprehensive coverage and 24/7 roadside assistance included</p>
            </div>
            <div class="bg-orange-50 rounded-2xl p-6 border border-orange-200">
                <div class="text-3xl mb-3">⛽</div>
                <h3 class="font-bold text-gray-900 mb-2">Fuel Options</h3>
                <p class="text-sm text-gray-600">Return with fuel or prepay. Flexible fuel policies available</p>
            </div>
        </div>
    </section>

    <!-- ====== CTA SECTION ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-orange-600 to-orange-800 text-white p-8 lg:p-14 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold">Ready to Hit the Road?</h2>
            <p class="text-orange-100 text-lg mt-2 max-w-lg mx-auto">Book your perfect car today and enjoy premium driving experience</p>
            <a href="#" class="inline-block mt-6 bg-white text-orange-600 px-8 py-3 rounded-full text-sm font-medium hover:bg-gray-100 transition shadow-lg">
                Reserve Your Car Now
            </a>
        </div>
    </section>

@endsection
