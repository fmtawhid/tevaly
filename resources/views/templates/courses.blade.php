@extends('layouts.master')
@section('content')

    <!-- ====== PAGE HEADER ====== -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold">IT & Tech Courses</h1>
            <p class="text-blue-100 mt-2 text-lg">Master in-demand skills with industry expert instructors</p>
        </div>
    </section>

    <!-- ====== FILTER SECTION ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row gap-4 items-center justify-between bg-white rounded-xl p-5 shadow-sm border border-gray-100">
            <div class="flex-1 flex gap-2 flex-wrap">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm font-medium hover:bg-blue-700 transition">All Courses</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">Python</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">Web Dev</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">Data Science</button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition">Cloud</button>
            </div>
            <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-600 outline-none">
                <option>Sort by: Popularity</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Newest</option>
            </select>
        </div>
    </section>

    <!-- ====== COURSES GRID ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @php
                $courses = [
                    ['title' => 'Full‑Stack Web Dev', 'category' => 'Python', 'duration' => '12 weeks', 'level' => 'Beginner', 'price' => '$299', 'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=250&fit=crop'],
                    ['title' => 'Data Science Bootcamp', 'category' => 'Data Science', 'duration' => '16 weeks', 'level' => 'Intermediate', 'price' => '$399', 'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=250&fit=crop'],
                    ['title' => 'AWS & DevOps', 'category' => 'Cloud', 'duration' => '10 weeks', 'level' => 'Advanced', 'price' => '$349', 'image' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=400&h=250&fit=crop'],
                    ['title' => 'React Mastery', 'category' => 'Web Dev', 'duration' => '8 weeks', 'level' => 'Intermediate', 'price' => '$279', 'image' => 'https://images.unsplash.com/photo-1633356122544-f134324ef6db?w=400&h=250&fit=crop'],
                    ['title' => 'Node.js Backend', 'category' => 'Web Dev', 'duration' => '10 weeks', 'level' => 'Intermediate', 'price' => '$299', 'image' => 'https://images.unsplash.com/photo-1627873649417-af36141a4016?w=400&h=250&fit=crop'],
                    ['title' => 'Machine Learning', 'category' => 'Data Science', 'duration' => '14 weeks', 'level' => 'Advanced', 'price' => '$449', 'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=250&fit=crop'],
                    ['title' => 'Docker & K8s', 'category' => 'Cloud', 'duration' => '9 weeks', 'level' => 'Advanced', 'price' => '$379', 'image' => 'https://images.unsplash.com/photo-1633356122544-f134324ef6db?w=400&h=250&fit=crop'],
                    ['title' => 'Python Advanced', 'category' => 'Python', 'duration' => '11 weeks', 'level' => 'Advanced', 'price' => '$329', 'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=250&fit=crop'],
                ];
            @endphp

            @foreach($courses as $course)
                <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition">
                    <div class="relative">
                        <img src="{{ $course['image'] }}" alt="{{ $course['title'] }}" class="w-full h-40 object-cover" />
                        <span class="badge-category absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">{{ $course['category'] }}</span>
                        <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 text-xs text-gray-500">
                            <span><i class="fa-regular fa-clock"></i> {{ $course['duration'] }}</span>
                            <span>•</span>
                            <span>{{ $course['level'] }}</span>
                        </div>
                        <h3 class="font-semibold text-gray-900 mt-2 line-clamp-2">{{ $course['title'] }}</h3>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-bold text-blue-600">{{ $course['price'] }}</span>
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-medium text-sm">Enroll →</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!-- ====== CTA SECTION ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-blue-600 to-blue-800 text-white p-8 lg:p-14 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold">Start Learning Today</h2>
            <p class="text-blue-100 text-lg mt-2 max-w-lg mx-auto">Join thousands of students already mastering in-demand tech skills</p>
            <a href="{{ route('register') }}" class="inline-block mt-6 bg-white text-blue-600 px-8 py-3 rounded-full text-sm font-medium hover:bg-gray-100 transition shadow-lg">
                Sign Up Now
            </a>
        </div>
    </section>

@endsection
