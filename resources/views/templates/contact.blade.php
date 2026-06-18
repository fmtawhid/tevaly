@extends('layouts.master')
@section('content')

    <!-- ====== PAGE HEADER ====== -->
    <section class="bg-gradient-to-r from-teal-600 to-teal-800 text-white px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold">Contact Us</h1>
            <p class="text-teal-100 mt-2 text-lg">We'd love to hear from you. Get in touch with our team today.</p>
        </div>
    </section>

    <!-- ====== CONTACT FORM & INFO ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Contact Information -->
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Get in Touch</h2>
                
                <div class="space-y-6">
                    <!-- Email -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Email</h3>
                            <p class="mt-2 text-gray-600">support@serviverse.com</p>
                            <p class="text-sm text-gray-500">We'll get back to you within 2 hours</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Phone</h3>
                            <p class="mt-2 text-gray-600">+1-800-SERVIVERSE</p>
                            <p class="text-sm text-gray-500">Available 24/7 for urgent issues</p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Office</h3>
                            <p class="mt-2 text-gray-600">123 Business Park<br/>San Francisco, CA 94105</p>
                            <p class="text-sm text-gray-500">Monday to Friday, 9 AM - 6 PM PST</p>
                        </div>
                    </div>

                    <!-- Live Chat -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                <i class="fa-solid fa-comments"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Live Chat</h3>
                            <p class="mt-2 text-gray-600">Available on our website</p>
                            <p class="text-sm text-gray-500">Response within 5 minutes during business hours</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                    <form class="space-y-6">
                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-900 mb-2">Full Name</label>
                            <input type="text" placeholder="Your name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition" />
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-medium text-gray-900 mb-2">Email Address</label>
                            <input type="email" placeholder="your@email.com" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition" />
                        </div>

                        <!-- Subject -->
                        <div>
                            <label class="block text-sm font-medium text-gray-900 mb-2">Subject</label>
                            <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition">
                                <option>Select a category</option>
                                <option>Course Inquiry</option>
                                <option>Travel Booking</option>
                                <option>Car Rental Issue</option>
                                <option>Billing & Payment</option>
                                <option>Technical Support</option>
                                <option>Partnership</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block text-sm font-medium text-gray-900 mb-2">Message</label>
                            <textarea placeholder="Tell us more about your inquiry..." rows="6" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition resize-none"></textarea>
                        </div>

                        <!-- Checkbox -->
                        <div class="flex items-start">
                            <input type="checkbox" id="updates" class="mt-1 rounded border-gray-300 text-teal-600" />
                            <label for="updates" class="ml-3 text-sm text-gray-600">
                                I'd like to receive updates and special offers from ServiVerse
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-teal-600 text-white py-3 rounded-lg font-semibold hover:bg-teal-700 transition">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <!-- ====== OFFICE LOCATIONS ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Our Offices</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition text-center">
                <div class="text-4xl mb-4">🇺🇸</div>
                <h3 class="font-bold text-lg text-gray-900 mb-2">North America</h3>
                <p class="text-sm text-gray-600 mb-2">123 Business Park<br/>San Francisco, CA 94105</p>
                <p class="text-xs text-gray-500">PST: Mon-Fri 9AM-6PM</p>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition text-center">
                <div class="text-4xl mb-4">🇬🇧</div>
                <h3 class="font-bold text-lg text-gray-900 mb-2">Europe</h3>
                <p class="text-sm text-gray-600 mb-2">456 Tech Street<br/>London, UK EC1A 1BB</p>
                <p class="text-xs text-gray-500">GMT: Mon-Fri 9AM-6PM</p>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition text-center">
                <div class="text-4xl mb-4">🇮🇳</div>
                <h3 class="font-bold text-lg text-gray-900 mb-2">Asia Pacific</h3>
                <p class="text-sm text-gray-600 mb-2">789 Innovation Hub<br/>Bangalore, India 560001</p>
                <p class="text-xs text-gray-500">IST: Mon-Fri 9AM-6PM</p>
            </div>
        </div>
    </section>

    <!-- ====== FAQ QUICK LINKS ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="bg-teal-50 rounded-2xl p-8 lg:p-12 border border-teal-200">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Still have questions?</h2>
            <p class="text-gray-600 mb-6">Check out our Help Center or frequently asked questions:</p>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('faqs') }}" class="inline-block bg-teal-600 text-white px-6 py-2 rounded-full font-medium hover:bg-teal-700 transition">
                    <i class="fa-solid fa-question-circle mr-2"></i> FAQs
                </a>
                <a href="{{ route('help') }}" class="inline-block bg-white text-teal-600 px-6 py-2 rounded-full font-medium border border-teal-600 hover:bg-teal-50 transition">
                    <i class="fa-solid fa-circle-question mr-2"></i> Help Center
                </a>
            </div>
        </div>
    </section>

@endsection
