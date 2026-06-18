@extends('layouts.master')
@section('content')

    <!-- ====== PAGE HEADER ====== -->
    <section class="bg-gradient-to-r from-cyan-600 to-cyan-800 text-white px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold">Help Center</h1>
            <p class="text-cyan-100 mt-2 text-lg">Find answers to your questions quickly</p>
        </div>
    </section>

    <!-- ====== SEARCH BAR ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="relative max-w-2xl mx-auto">
            <input type="text" placeholder="Search for help articles..." class="w-full px-6 py-4 rounded-full border-2 border-gray-300 focus:border-cyan-600 focus:ring-2 focus:ring-cyan-300 outline-none" />
            <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-cyan-600 text-white px-6 py-2 rounded-full hover:bg-cyan-700 transition">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </section>

    <!-- ====== CATEGORIES ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Browse by Category</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <a href="#courses-help" class="bg-blue-50 hover:bg-blue-100 rounded-2xl p-6 border border-blue-200 transition cursor-pointer">
                <div class="text-4xl mb-3">🎓</div>
                <h3 class="font-bold text-gray-900 mb-1">Courses</h3>
                <p class="text-sm text-gray-600">12 articles</p>
            </a>

            <a href="#travel-help" class="bg-green-50 hover:bg-green-100 rounded-2xl p-6 border border-green-200 transition cursor-pointer">
                <div class="text-4xl mb-3">✈️</div>
                <h3 class="font-bold text-gray-900 mb-1">Travel</h3>
                <p class="text-sm text-gray-600">18 articles</p>
            </a>

            <a href="#cars-help" class="bg-orange-50 hover:bg-orange-100 rounded-2xl p-6 border border-orange-200 transition cursor-pointer">
                <div class="text-4xl mb-3">🚗</div>
                <h3 class="font-bold text-gray-900 mb-1">Car Rentals</h3>
                <p class="text-sm text-gray-600">15 articles</p>
            </a>

            <a href="#billing-help" class="bg-purple-50 hover:bg-purple-100 rounded-2xl p-6 border border-purple-200 transition cursor-pointer">
                <div class="text-4xl mb-3">💳</div>
                <h3 class="font-bold text-gray-900 mb-1">Billing</h3>
                <p class="text-sm text-gray-600">8 articles</p>
            </a>
        </div>
    </section>

    <!-- ====== FAQ ACCORDION ====== -->
    <section class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Frequently Asked Questions</h2>
        
        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-md transition">
                <button class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('active')">
                    <span class="font-semibold text-gray-900 text-left">How do I enroll in a course?</span>
                    <i class="fa-solid fa-chevron-down text-gray-400"></i>
                </button>
                <div class="hidden px-6 pb-4 text-gray-600">
                    <p>Simply browse our course catalog, select the course you're interested in, add it to cart, and complete the payment. You'll get instant access to all course materials and live sessions.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-md transition">
                <button class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('active')">
                    <span class="font-semibold text-gray-900 text-left">Can I get a refund for my booking?</span>
                    <i class="fa-solid fa-chevron-down text-gray-400"></i>
                </button>
                <div class="hidden px-6 pb-4 text-gray-600">
                    <p>Yes! For courses, you can get a full refund within 7 days of purchase. For travel and car rentals, refund policies vary based on the specific booking terms. Check your booking confirmation for details.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-md transition">
                <button class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('active')">
                    <span class="font-semibold text-gray-900 text-left">What payment methods do you accept?</span>
                    <i class="fa-solid fa-chevron-down text-gray-400"></i>
                </button>
                <div class="hidden px-6 pb-4 text-gray-600">
                    <p>We accept all major credit/debit cards, digital wallets (Apple Pay, Google Pay), bank transfers, and buy-now-pay-later options. You can also use your gift cards.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-md transition">
                <button class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('active')">
                    <span class="font-semibold text-gray-900 text-left">Is customer support available 24/7?</span>
                    <i class="fa-solid fa-chevron-down text-gray-400"></i>
                </button>
                <div class="hidden px-6 pb-4 text-gray-600">
                    <p>Yes! Our support team is available round-the-clock via chat, email, and phone. For urgent issues, our chat support responds within 5 minutes.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-md transition">
                <button class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('active')">
                    <span class="font-semibold text-gray-900 text-left">How can I track my travel booking?</span>
                    <i class="fa-solid fa-chevron-down text-gray-400"></i>
                </button>
                <div class="hidden px-6 pb-4 text-gray-600">
                    <p>All bookings can be tracked in your account dashboard. You'll receive email updates for each stage of your journey, and real-time flight/bus tracking is available in our mobile app.</p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-md transition">
                <button class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('active')">
                    <span class="font-semibold text-gray-900 text-left">What's included in the car rental insurance?</span>
                    <i class="fa-solid fa-chevron-down text-gray-400"></i>
                </button>
                <div class="hidden px-6 pb-4 text-gray-600">
                    <p>Our standard insurance covers collision, third-party liability, and theft. Additional coverage options like windshield protection and breakdown assistance are available at checkout.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== CONTACT SUPPORT ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="bg-gradient-to-r from-cyan-50 to-cyan-100 rounded-2xl p-8 lg:p-12 border border-cyan-200">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Didn't find what you're looking for?</h2>
            <p class="text-gray-600 mb-6">Our support team is ready to help! Contact us through any of these channels:</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="mailto:support@serviverse.com" class="bg-white rounded-lg p-6 hover:shadow-lg transition text-center border border-gray-200">
                    <div class="text-3xl mb-3">📧</div>
                    <h3 class="font-bold text-gray-900 mb-2">Email</h3>
                    <p class="text-sm text-gray-600">support@serviverse.com</p>
                    <p class="text-xs text-gray-500 mt-2">Response within 2 hours</p>
                </a>

                <a href="tel:+1-800-SERVIVERSE" class="bg-white rounded-lg p-6 hover:shadow-lg transition text-center border border-gray-200">
                    <div class="text-3xl mb-3">📞</div>
                    <h3 class="font-bold text-gray-900 mb-2">Phone</h3>
                    <p class="text-sm text-gray-600">+1-800-SERVIVERSE</p>
                    <p class="text-xs text-gray-500 mt-2">Available 24/7</p>
                </a>

                <a href="{{ route('contact') }}" class="bg-white rounded-lg p-6 hover:shadow-lg transition text-center border border-gray-200">
                    <div class="text-3xl mb-3">💬</div>
                    <h3 class="font-bold text-gray-900 mb-2">Live Chat</h3>
                    <p class="text-sm text-gray-600">Start a conversation</p>
                    <p class="text-xs text-gray-500 mt-2">Response within 5 minutes</p>
                </a>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.bg-white.rounded-xl button').forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('i');
                content.classList.toggle('hidden');
                icon.style.transform = content.classList.contains('hidden') ? 'rotate(0)' : 'rotate(180deg)';
            });
        });
    </script>

@endsection
