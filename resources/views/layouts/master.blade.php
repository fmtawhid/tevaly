<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ServiVerse — Courses, Travel &amp; Rentals</title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        /* smooth hover & card effects */
        .service-card {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.18);
        }
        .hero-gradient {
            background: linear-gradient(145deg, #f8f6f2 0%, #edeae4 100%);
        }
        .badge-category {
            background: #1a1a1a;
            color: #fff;
            font-size: 0.6rem;
            letter-spacing: 0.06em;
            padding: 0.2rem 0.8rem;
            border-radius: 999px;
        }
        .category-tab {
            transition: all 0.2s ease;
        }
        .category-tab:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 24px -8px rgba(0, 0, 0, 0.1);
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0;
            height: 2px;
            background: #1a1a1a;
            transition: width 0.25s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .cart-badge {
            top: -6px;
            right: -8px;
            font-size: 0.6rem;
            min-width: 18px;
            height: 18px;
            border-radius: 999px;
            background: #dc2626;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0 5px;
        }
        .footer-link {
            transition: color 0.15s ease;
        }
        .footer-link:hover {
            color: #1a1a1a;
        }
        .search-input:focus {
            outline: none;
            border-color: #1a1a1a;
            box-shadow: 0 0 0 3px rgba(26, 26, 26, 0.08);
        }
        .hero-cta {
            transition: all 0.2s ease;
        }
        .hero-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px -8px rgba(0, 0, 0, 0.2);
        }
        .section-heading {
            letter-spacing: -0.02em;
        }
        .price-tag {
            background: #f1f0ee;
            padding: 0.2rem 0.8rem;
            border-radius: 999px;
            font-size: 0.8rem;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <!-- ====== TOP BAR ====== -->
    <div class="bg-[#1a1a1a] text-white text-[11px] tracking-wide py-1.5 px-4 flex justify-between items-center">
        <span class="hidden sm:inline">🚀 Book your next experience with confidence</span>
        <span class="flex items-center gap-3">
            <a href="#" class="hover:text-gray-300 transition">Help Center</a>
            <span class="w-px h-3 bg-white/30"></span>
            <a href="#" class="hover:text-gray-300 transition">Become a Partner</a>
            <span class="w-px h-3 bg-white/30 hidden sm:inline"></span>
            <span class="hidden sm:inline">|</span>
            <a href="#" class="hover:text-gray-300 transition hidden sm:inline">USD</a>
        </span>
    </div>

    <!-- ====== HEADER ====== -->
    <header class="bg-white border-b border-gray-200/60 sticky top-0 z-40 backdrop-blur-sm bg-white/90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16 lg:h-20">

            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 text-2xl font-bold tracking-tight">
                <span class="text-[#1a1a1a]">Servi</span>
                <span class="text-[#dc2626]">Verse</span>
                <span class="text-[10px] font-normal text-gray-400 tracking-widest ml-1 hidden sm:inline">®</span>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden lg:flex items-center gap-8 text-sm font-medium text-gray-700">
                <a href="{{ route('courses') }}" class="nav-link text-[#1a1a1a]">Courses</a>
                <a href="{{ route('travel') }}" class="nav-link">Travel</a>
                <a href="{{ route('cars') }}" class="nav-link">Car Rental</a>
                <a href="{{ route('deals') }}" class="nav-link">Deals</a>
                <a href="{{ route('about') }}" class="nav-link">About</a>
            </nav>

            <!-- Right: Search + Icons -->
            <div class="flex items-center gap-3 sm:gap-5">

                <div class="hidden md:flex items-center border border-gray-200 rounded-full px-4 py-1.5 bg-gray-50/70 focus-within:bg-white transition">
                    <i class="fa-solid fa-magnifying-glass text-gray-400 text-sm mr-2"></i>
                    <input type="text" placeholder="Search services…" class="search-input bg-transparent text-sm w-36 lg:w-48 py-1 text-gray-700 placeholder-gray-400" />
                </div>

                <button class="md:hidden text-gray-600 hover:text-black">
                    <i class="fa-solid fa-magnifying-glass text-lg"></i>
                </button>

                <a href="#" class="text-gray-600 hover:text-black transition hidden sm:inline">
                    <i class="fa-regular fa-user text-xl"></i>
                </a>
                <a href="#" class="text-gray-600 hover:text-black transition hidden sm:inline">
                    <i class="fa-regular fa-heart text-xl"></i>
                </a>

                <a href="#" class="relative text-gray-600 hover:text-black transition">
                    <i class="fa-solid fa-bag-shopping text-xl"></i>
                    <span class="cart-badge">3</span>
                </a>

                <button class="lg:hidden text-gray-700 text-2xl hover:text-black transition">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>

        </div>

        <!-- Mobile Search -->
        <div class="lg:hidden px-4 pb-3">
            <div class="flex items-center border border-gray-200 rounded-full px-4 py-2 bg-gray-50/70 focus-within:bg-white transition">
                <i class="fa-solid fa-magnifying-glass text-gray-400 mr-2"></i>
                <input type="text" placeholder="Search services…" class="search-input bg-transparent text-sm w-full py-1 text-gray-700 placeholder-gray-400" />
            </div>
        </div>
    </header>
@yield('content')

    <!-- ====== FOOTER ====== -->
    <footer class="bg-white border-t border-gray-100 pt-14 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-8 pb-12 border-b border-gray-100">

                <div>
                    <h4 class="font-bold text-[#1a1a1a] text-sm uppercase tracking-wider mb-4">Services</h4>
                    <ul class="space-y-2.5 text-sm text-gray-500">
                        <li><a href="{{ route('courses') }}" class="footer-link">IT Courses</a></li>
                        <li><a href="{{ route('travel') }}" class="footer-link">Travel Packages</a></li>
                        <li><a href="{{ route('cars') }}" class="footer-link">Car Rentals</a></li>
                        <li><a href="{{ route('deals') }}" class="footer-link">Special Deals</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-[#1a1a1a] text-sm uppercase tracking-wider mb-4">Company</h4>
                    <ul class="space-y-2.5 text-sm text-gray-500">
                        <li><a href="{{ route('about') }}" class="footer-link">About Us</a></li>
                        <li><a href="#" class="footer-link">Careers</a></li>
                        <li><a href="#" class="footer-link">Sustainability</a></li>
                        <li><a href="#" class="footer-link">Press</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-[#1a1a1a] text-sm uppercase tracking-wider mb-4">Support</h4>
                    <ul class="space-y-2.5 text-sm text-gray-500">
                        <li><a href="{{ route('help') }}" class="footer-link">Help Center</a></li>
                        <li><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>
                        <li><a href="{{ route('faqs') }}" class="footer-link">FAQs</a></li>
                        <li><a href="#" class="footer-link">Returns &amp; Cancellations</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-[#1a1a1a] text-sm uppercase tracking-wider mb-4">Connect</h4>
                    <ul class="space-y-2.5 text-sm text-gray-500">
                        <li><a href="#" class="footer-link"><i class="fa-brands fa-instagram mr-2 w-4"></i>Instagram</a></li>
                        <li><a href="#" class="footer-link"><i class="fa-brands fa-twitter mr-2 w-4"></i>Twitter</a></li>
                        <li><a href="#" class="footer-link"><i class="fa-brands fa-youtube mr-2 w-4"></i>YouTube</a></li>
                        <li><a href="#" class="footer-link"><i class="fa-brands fa-tiktok mr-2 w-4"></i>TikTok</a></li>
                    </ul>
                </div>

            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-400">
                <span>&copy; 2026 ServiVerse. All rights reserved.</span>
                <div class="flex items-center gap-4">
                    <a href="#" class="hover:text-[#1a1a1a] transition">Privacy</a>
                    <a href="#" class="hover:text-[#1a1a1a] transition">Terms</a>
                    <span class="flex items-center gap-1">
                        <i class="fa-brands fa-cc-visa text-lg"></i>
                        <i class="fa-brands fa-cc-mastercard text-lg"></i>
                        <i class="fa-brands fa-cc-paypal text-lg"></i>
                        <i class="fa-brands fa-cc-apple-pay text-lg"></i>
                    </span>
                </div>
            </div>

        </div>
    </footer>

    <!-- Mobile floating cart -->
    <div class="fixed bottom-6 right-6 lg:hidden z-50">
        <a href="#" class="bg-[#1a1a1a] text-white w-14 h-14 rounded-full shadow-2xl flex items-center justify-center text-xl hover:bg-black transition relative">
            <i class="fa-solid fa-bag-shopping"></i>
            <span class="absolute -top-1 -right-1 bg-[#dc2626] text-white text-[10px] font-bold w-6 h-6 rounded-full flex items-center justify-center">3</span>
        </a>
    </div>

</body>
</html>