@extends('layouts.master')
@section('content')

    <!-- ====== PAGE HEADER ====== -->
    <section class="bg-gradient-to-r from-red-600 to-red-800 text-white px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold">Special Deals & Offers</h1>
            <p class="text-red-100 mt-2 text-lg">Exclusive discounts and limited-time offers on all services</p>
        </div>
    </section>

    <!-- ====== ACTIVE DEALS ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">🔥 Active Deals</h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-12">
            <!-- Deal 1 -->
            <div class="relative bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition">
                <div class="absolute top-0 right-0 bg-red-600 text-white px-4 py-2 rounded-bl-2xl">
                    <span class="font-bold text-lg">30% OFF</span>
                </div>
                <div class="h-40 bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center">
                    <span class="text-5xl">💻</span>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg text-gray-900 mb-2">Full-Stack Bootcamp Bundle</h3>
                    <p class="text-gray-600 text-sm mb-4">Master Python, React & DevOps - Save $300 on bundle purchase</p>
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <span class="text-2xl font-bold text-red-600">$699</span>
                            <span class="text-gray-400 line-through ml-2">$999</span>
                        </div>
                    </div>
                    <a href="{{ route('courses') }}" class="w-full bg-blue-600 text-white py-2 rounded-lg text-center font-medium hover:bg-blue-700 transition">
                        Get Deal
                    </a>
                    <p class="text-xs text-gray-400 mt-3">⏱️ Offer ends in 5 days</p>
                </div>
            </div>

            <!-- Deal 2 -->
            <div class="relative bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition">
                <div class="absolute top-0 right-0 bg-red-600 text-white px-4 py-2 rounded-bl-2xl">
                    <span class="font-bold text-lg">25% OFF</span>
                </div>
                <div class="h-40 bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center">
                    <span class="text-5xl">✈️</span>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg text-gray-900 mb-2">Southeast Asia Tour Package</h3>
                    <p class="text-gray-600 text-sm mb-4">Bali + Thailand + Vietnam - 15 days all-inclusive</p>
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <span class="text-2xl font-bold text-green-600">$1,499</span>
                            <span class="text-gray-400 line-through ml-2">$1,999</span>
                        </div>
                    </div>
                    <a href="{{ route('travel') }}" class="w-full bg-green-600 text-white py-2 rounded-lg text-center font-medium hover:bg-green-700 transition">
                        Get Deal
                    </a>
                    <p class="text-xs text-gray-400 mt-3">⏱️ Offer ends in 3 days</p>
                </div>
            </div>

            <!-- Deal 3 -->
            <div class="relative bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition">
                <div class="absolute top-0 right-0 bg-red-600 text-white px-4 py-2 rounded-bl-2xl">
                    <span class="font-bold text-lg">40% OFF</span>
                </div>
                <div class="h-40 bg-gradient-to-r from-orange-500 to-orange-600 flex items-center justify-center">
                    <span class="text-5xl">🚗</span>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg text-gray-900 mb-2">Luxury Car Weekly Rental</h3>
                    <p class="text-gray-600 text-sm mb-4">Mercedes-Benz S-Class - 7 days unlimited mileage</p>
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">$999</span>
                            <span class="text-gray-400 line-through ml-2">$1,659</span>
                        </div>
                    </div>
                    <a href="{{ route('cars') }}" class="w-full bg-orange-600 text-white py-2 rounded-lg text-center font-medium hover:bg-orange-700 transition">
                        Get Deal
                    </a>
                    <p class="text-xs text-gray-400 mt-3">⏱️ Offer ends in 7 days</p>
                </div>
            </div>
        </div>

        <!-- Banner Deal -->
        <div class="relative bg-gradient-to-r from-purple-600 to-pink-600 rounded-3xl p-8 lg:p-14 text-white overflow-hidden mb-12">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -mr-48 -mt-48"></div>
            <div class="relative z-10">
                <div class="inline-block bg-white/20 text-white text-xs font-bold px-4 py-2 rounded-full mb-4">LIMITED TIME</div>
                <h3 class="text-3xl lg:text-4xl font-bold mb-2">Bundle & Save More</h3>
                <p class="text-white/80 text-lg mb-6 max-w-lg">Book a course + travel package + rent a car and get an extra <span class="font-bold">20% discount</span> on everything!</p>
                <a href="{{ route('home') }}" class="inline-block bg-white text-purple-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition">
                    Start Shopping
                </a>
            </div>
        </div>
    </section>

    <!-- ====== UPCOMING DEALS ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">⏰ Upcoming Deals</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-50 rounded-2xl p-6 border-2 border-dashed border-gray-300">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="font-bold text-lg text-gray-900">Summer Sale 2026</h4>
                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-bold">Coming Soon</span>
                </div>
                <p class="text-gray-600 mb-4">50% off on all summer travel packages</p>
                <p class="text-sm text-gray-500">📅 Starts July 1st at 12:00 AM</p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-6 border-2 border-dashed border-gray-300">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="font-bold text-lg text-gray-900">Back to Tech Bootcamp</h4>
                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-bold">Coming Soon</span>
                </div>
                <p class="text-gray-600 mb-4">35% off on all IT courses</p>
                <p class="text-sm text-gray-500">📅 Starts September 1st at 9:00 AM</p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-6 border-2 border-dashed border-gray-300">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="font-bold text-lg text-gray-900">Festive Car Rentals</h4>
                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-bold">Coming Soon</span>
                </div>
                <p class="text-gray-600 mb-4">Free insurance + 30% discount on luxury cars</p>
                <p class="text-sm text-gray-500">📅 Starts December 15th</p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-6 border-2 border-dashed border-gray-300">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="font-bold text-lg text-gray-900">Weekend Getaway Deals</h4>
                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-bold">Coming Soon</span>
                </div>
                <p class="text-gray-600 mb-4">Flash deals every weekend on selected packages</p>
                <p class="text-sm text-gray-500">📅 Every Saturday & Sunday</p>
            </div>
        </div>
    </section>

    <!-- ====== NEWSLETTER ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-8 lg:p-14 text-white text-center">
            <h3 class="text-2xl lg:text-3xl font-bold mb-2">Never Miss a Deal</h3>
            <p class="text-gray-300 mb-6 max-w-lg mx-auto">Subscribe to get exclusive offers and flash deals straight to your inbox</p>
            <form class="flex flex-col sm:flex-row max-w-md mx-auto gap-3">
                <input type="email" placeholder="Enter your email" class="flex-1 px-5 py-3 rounded-full text-gray-900 focus:ring-2 focus:ring-red-500 outline-none" />
                <button type="submit" class="bg-red-600 text-white px-8 py-3 rounded-full font-bold hover:bg-red-700 transition">
                    Subscribe
                </button>
            </form>
        </div>
    </section>

@endsection
