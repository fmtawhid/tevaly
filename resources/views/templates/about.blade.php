@extends('layouts.master')
@section('content')

    <!-- ====== PAGE HEADER ====== -->
    <section class="bg-gradient-to-r from-indigo-600 to-indigo-800 text-white px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold">About ServiVerse</h1>
            <p class="text-indigo-100 mt-2 text-lg">Your one-stop destination for learning, travel, and premium rentals</p>
        </div>
    </section>

    <!-- ====== MISSION & VISION ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Mission</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-4">
                    At ServiVerse, we believe that everyone deserves access to high-quality education, unforgettable travel experiences, and premium transportation services. Our mission is to make these opportunities accessible, affordable, and seamless for everyone.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed">
                    We combine expertise in three distinct domains to create a unified platform where you can upskill yourself, explore the world, and travel in style—all in one place.
                </p>
            </div>
            <div class="bg-indigo-50 rounded-2xl p-8 border border-indigo-200">
                <div class="text-5xl mb-4">🎯</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">By The Numbers</h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="text-2xl font-bold text-indigo-600">50K+</span>
                        <span class="text-gray-600">Students Trained</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-2xl font-bold text-indigo-600">200+</span>
                        <span class="text-gray-600">Destinations Covered</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-2xl font-bold text-indigo-600">1000+</span>
                        <span class="text-gray-600">Premium Vehicles</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== CORE VALUES ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Our Core Values</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition text-center">
                <div class="text-4xl mb-4">✨</div>
                <h3 class="font-bold text-lg text-gray-900 mb-2">Excellence</h3>
                <p class="text-gray-600 text-sm">We maintain the highest standards in everything we do, from course quality to customer service.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition text-center">
                <div class="text-4xl mb-4">🤝</div>
                <h3 class="font-bold text-lg text-gray-900 mb-2">Trust</h3>
                <p class="text-gray-600 text-sm">Our users trust us with their time, money, and experiences. We take that responsibility seriously.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition text-center">
                <div class="text-4xl mb-4">🌍</div>
                <h3 class="font-bold text-lg text-gray-900 mb-2">Inclusivity</h3>
                <p class="text-gray-600 text-sm">We believe education, travel, and premium services should be accessible to everyone globally.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition text-center">
                <div class="text-4xl mb-4">♻️</div>
                <h3 class="font-bold text-lg text-gray-900 mb-2">Sustainability</h3>
                <p class="text-gray-600 text-sm">We're committed to operating responsibly and minimizing our environmental impact.</p>
            </div>
        </div>
    </section>

    <!-- ====== OUR STORY ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="bg-gray-50 rounded-2xl p-8 lg:p-12 border border-gray-200">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
            <div class="space-y-4 text-gray-600 leading-relaxed">
                <p>
                    ServiVerse was founded in 2024 by a team of visionary entrepreneurs who noticed a gap in the market. While incredible resources existed for learning, travel, and car rentals, they were scattered across different platforms—fragmented, complicated, and often frustrating.
                </p>
                <p>
                    We decided to change that. Our team spent months researching, speaking with thousands of users, and identifying what truly matters: quality, convenience, affordability, and trust. The result? ServiVerse—a unified platform designed with you in mind.
                </p>
                <p>
                    Today, we're proud to serve over 50,000 students who've transformed their careers, help thousands of travelers create unforgettable memories, and provide premium mobility solutions to business and leisure customers worldwide.
                </p>
            </div>
        </div>
    </section>

    <!-- ====== TEAM ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Leadership Team</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-lg transition">
                <div class="h-40 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-4xl">👨‍💼</div>
                <div class="p-4 text-center">
                    <h3 class="font-bold text-gray-900">Rajesh Kumar</h3>
                    <p class="text-sm text-gray-600">CEO & Founder</p>
                    <p class="text-xs text-gray-500 mt-2">10+ years in EdTech industry</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-lg transition">
                <div class="h-40 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center text-4xl">👩‍💼</div>
                <div class="p-4 text-center">
                    <h3 class="font-bold text-gray-900">Priya Singh</h3>
                    <p class="text-sm text-gray-600">Chief Operations Officer</p>
                    <p class="text-xs text-gray-500 mt-2">Former travel industry executive</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-lg transition">
                <div class="h-40 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center text-4xl">👨‍💻</div>
                <div class="p-4 text-center">
                    <h3 class="font-bold text-gray-900">Amit Patel</h3>
                    <p class="text-sm text-gray-600">Chief Technology Officer</p>
                    <p class="text-xs text-gray-500 mt-2">Full-stack engineer & architect</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-lg transition">
                <div class="h-40 bg-gradient-to-br from-pink-400 to-pink-600 flex items-center justify-center text-4xl">👩‍💻</div>
                <div class="p-4 text-center">
                    <h3 class="font-bold text-gray-900">Neha Gupta</h3>
                    <p class="text-sm text-gray-600">Chief Product Officer</p>
                    <p class="text-xs text-gray-500 mt-2">Product strategy & UX expert</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== CONTACT CTA ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-indigo-600 to-indigo-800 text-white p-8 lg:p-14 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold mb-2">Want to Learn More?</h2>
            <p class="text-indigo-100 text-lg mt-2 max-w-lg mx-auto mb-6">Get in touch with our team to discuss partnerships, careers, or any questions you have.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-indigo-600 px-8 py-3 rounded-full text-sm font-medium hover:bg-gray-100 transition shadow-lg">
                Contact Us
            </a>
        </div>
    </section>

@endsection
