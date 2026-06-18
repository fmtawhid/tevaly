@extends('layouts.master')
@section('content')

    <!-- ====== PAGE HEADER ====== -->
    <section class="bg-gradient-to-r from-pink-600 to-pink-800 text-white px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold">Frequently Asked Questions</h1>
            <p class="text-pink-100 mt-2 text-lg">Find quick answers to common questions</p>
        </div>
    </section>

    <!-- ====== FAQ BY CATEGORY ====== -->
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        
        <!-- COURSES FAQ -->
        <div class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                <span class="text-3xl">🎓</span> Courses
            </h2>
            
            <div class="space-y-4">
                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>What are the prerequisites for the courses?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Most of our beginner courses require no prior experience. Intermediate and advanced courses may require foundational knowledge. Check the course description for specific prerequisites.</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>Do I get a certificate after completing a course?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Yes! Upon successful completion of a course and final project, you'll receive a recognized certificate that you can add to your LinkedIn profile and resume.</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>Can I download course materials?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Yes, you can download lecture notes, code files, and resources. Video downloads are available for premium members to view offline.</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>How long is course access available?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">You get lifetime access to course materials once enrolled. Any future updates to the course are included at no additional cost.</p>
                </details>
            </div>
        </div>

        <!-- TRAVEL FAQ -->
        <div class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                <span class="text-3xl">✈️</span> Travel
            </h2>
            
            <div class="space-y-4">
                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>What's included in travel packages?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Most packages include accommodation, guided tours, meals as specified, and airport transfers. Check individual package descriptions for exact inclusions.</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>What's your cancellation policy?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Cancellations made 30 days before travel receive a full refund. Cancellations 15-30 days before travel get 50% refund. Less than 15 days has no refund.</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>Do you arrange visa assistance?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Yes, we provide visa assistance for international destinations. Our travel consultants will guide you through the entire process.</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>Is travel insurance included?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Basic travel insurance is included. You can opt for comprehensive coverage at checkout for an additional fee.</p>
                </details>
            </div>
        </div>

        <!-- CAR RENTAL FAQ -->
        <div class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                <span class="text-3xl">🚗</span> Car Rentals
            </h2>
            
            <div class="space-y-4">
                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>What are the age requirements to rent?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Minimum age is 21 years with a valid driving license. Drivers under 25 may have additional fees. Luxury vehicles require minimum age of 25.</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>What documents do I need?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Valid driving license, passport/ID, credit card (for deposit), and insurance card. International visitors need an International Driving Permit.</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>Is fuel included in the rental?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Vehicles are rented on a "full tank" basis. You can prepay for fuel or return with a full tank. There's a premium charged for fuel top-ups at our stations.</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>What happens if there's an accident?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Report accidents immediately to our 24/7 helpline. Our insurance covers most damage based on your coverage level. Document the scene with photos for claims.</p>
                </details>
            </div>
        </div>

        <!-- BILLING FAQ -->
        <div class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                <span class="text-3xl">💳</span> Billing & Payment
            </h2>
            
            <div class="space-y-4">
                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>What payment methods are accepted?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">We accept all major credit/debit cards, digital wallets, bank transfers, and BNPL options. Cryptocurrency payments coming soon.</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>Is my payment information secure?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Absolutely! We use bank-level encryption (256-bit SSL) and comply with PCI DSS standards. Your payment data is never stored on our servers.</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>How long does refund processing take?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Refunds are processed within 5-7 business days. The time for the amount to appear in your account depends on your bank (2-5 business days).</p>
                </details>

                <details class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-md transition cursor-pointer">
                    <summary class="font-semibold text-gray-900 flex justify-between items-center">
                        <span>Do you offer discount codes?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">Yes! Subscribe to our newsletter for exclusive codes. We also run periodic promotions and seasonal sales. Follow our social media for flash deals.</p>
                </details>
            </div>
        </div>

    </section>

    <!-- ====== CTA SECTION ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-pink-600 to-pink-800 text-white p-8 lg:p-14 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold mb-2">Didn't find your answer?</h2>
            <p class="text-pink-100 text-lg mt-2 max-w-lg mx-auto mb-6">Our support team is here to help. Reach out to us anytime.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-pink-600 px-8 py-3 rounded-full text-sm font-medium hover:bg-gray-100 transition shadow-lg">
                Contact Support
            </a>
        </div>
    </section>

    <script>
        document.querySelectorAll('details').forEach(detail => {
            detail.addEventListener('click', function() {
                // Close other details
                document.querySelectorAll('details').forEach(d => {
                    if (d !== detail) d.removeAttribute('open');
                });
            });
        });
    </script>

@endsection
