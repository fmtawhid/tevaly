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
                <a href="#courses" class="nav-link text-[#1a1a1a]">Courses</a>
                <a href="#travel" class="nav-link">Travel</a>
                <a href="#car-rental" class="nav-link">Car Rental</a>
                <a href="#" class="nav-link">Deals</a>
                <a href="#" class="nav-link">About</a>
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


    <!-- ====== HERO ====== -->
    <section class="hero-gradient relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20 flex flex-col lg:flex-row items-center gap-10">

            <div class="flex-1 text-center lg:text-left">
                <span class="inline-block bg-[#1a1a1a] text-white text-[10px] font-semibold tracking-widest px-4 py-1.5 rounded-full mb-4">EXPLORE &amp; BOOK</span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight text-[#1a1a1a]">
                    Your Gateway to <br class="hidden sm:inline" />
                    <span class="text-[#dc2626]">Learning, Travel &amp; Freedom</span>
                </h1>
                <p class="text-gray-600 text-lg max-w-lg mx-auto lg:mx-0 mt-4 leading-relaxed">
                    Curated IT courses, unforgettable travel packages, and premium car rentals — all in one place.
                </p>
                <div class="mt-8 flex flex-wrap gap-4 justify-center lg:justify-start">
                    <a href="#courses" class="hero-cta bg-[#1a1a1a] text-white px-8 py-3.5 rounded-full text-sm font-medium shadow-lg shadow-black/10 hover:bg-black transition">
                        Explore Services
                        <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </a>
                    <a href="#" class="hero-cta bg-white text-[#1a1a1a] px-8 py-3.5 rounded-full text-sm font-medium border border-gray-200 shadow-sm hover:border-gray-400 transition">
                        View Deals
                    </a>
                </div>
                <div class="mt-8 flex items-center gap-6 text-xs text-gray-500 justify-center lg:justify-start">
                    <span><i class="fa-regular fa-circle-check text-[#1a1a1a] mr-1.5"></i> Secure booking</span>
                    <span><i class="fa-regular fa-circle-check text-[#1a1a1a] mr-1.5"></i> 24/7 support</span>
                    <span><i class="fa-regular fa-circle-check text-[#1a1a1a] mr-1.5"></i> Best price guarantee</span>
                </div>
            </div>

            <div class="flex-1 flex justify-center lg:justify-end">
                <div class="relative w-full max-w-sm lg:max-w-md">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=600&fit=crop&crop=center&auto=format" alt="Hero collage" class="rounded-3xl shadow-2xl object-cover w-full aspect-square" />
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-xl px-5 py-3 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#1a1a1a] text-white flex items-center justify-center text-lg">★</div>
                        <div>
                            <div class="font-semibold text-sm text-[#1a1a1a]">4.9 / 5.0</div>
                            <div class="text-[10px] text-gray-500">1.8k+ reviews</div>
                        </div>
                    </div>
                    <div class="absolute -top-3 -right-3 bg-[#dc2626] text-white text-xs font-bold px-4 py-1.5 rounded-full rotate-6 shadow-lg">New</div>
                </div>
            </div>

        </div>
    </section>


    <!-- ====== CATEGORY QUICK TABS ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <a href="#courses" class="category-tab bg-white rounded-2xl p-5 border border-gray-100 shadow-sm flex items-center gap-4 hover:border-gray-300 transition">
                <div class="w-12 h-12 rounded-full bg-[#1a1a1a]/5 flex items-center justify-center text-2xl">💻</div>
                <div>
                    <div class="font-semibold text-[#1a1a1a]">IT Courses</div>
                    <div class="text-xs text-gray-400">12 programs</div>
                </div>
                <i class="fa-solid fa-chevron-right ml-auto text-gray-300"></i>
            </a>
            <a href="#travel" class="category-tab bg-white rounded-2xl p-5 border border-gray-100 shadow-sm flex items-center gap-4 hover:border-gray-300 transition">
                <div class="w-12 h-12 rounded-full bg-[#1a1a1a]/5 flex items-center justify-center text-2xl">✈️</div>
                <div>
                    <div class="font-semibold text-[#1a1a1a]">Travel Packages</div>
                    <div class="text-xs text-gray-400">8 destinations</div>
                </div>
                <i class="fa-solid fa-chevron-right ml-auto text-gray-300"></i>
            </a>
            <a href="#car-rental" class="category-tab bg-white rounded-2xl p-5 border border-gray-100 shadow-sm flex items-center gap-4 hover:border-gray-300 transition">
                <div class="w-12 h-12 rounded-full bg-[#1a1a1a]/5 flex items-center justify-center text-2xl">🚗</div>
                <div>
                    <div class="font-semibold text-[#1a1a1a]">Car Rentals</div>
                    <div class="text-xs text-gray-400">15 vehicles</div>
                </div>
                <i class="fa-solid fa-chevron-right ml-auto text-gray-300"></i>
            </a>
        </div>
    </section>


    <!-- ====== SECTION 1: IT COURSES ====== -->
    <section id="courses" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 scroll-mt-20">
        <div class="flex items-center justify-between mb-8">
            <div>
                <span class="inline-block bg-[#1a1a1a]/5 text-[#1a1a1a] text-[10px] font-semibold tracking-widest px-3 py-1 rounded-full">CATEGORY</span>
                <h2 class="text-2xl font-bold text-[#1a1a1a] mt-1 section-heading">IT &amp; Tech Courses</h2>
            </div>
            <a href="#" class="text-sm font-medium text-gray-500 hover:text-[#1a1a1a] transition flex items-center gap-1">
                View all <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Course 1 -->
            <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=250&fit=crop&crop=center&auto=format" alt="Course" class="w-full h-48 object-cover" />
                    <span class="badge-category absolute top-3 left-3">Python</span>
                    <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fa-regular fa-clock"></i> 32 hours
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <i class="fa-regular fa-star"></i> 4.8 (210)
                    </div>
                    <h3 class="font-semibold text-[#1a1a1a] mt-2">Full‑Stack Web Dev</h3>
                    <p class="text-sm text-gray-500 mt-1 line-clamp-2">Master Django, React &amp; PostgreSQL from scratch.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="price-tag">$149</span>
                        <a href="#" class="text-sm font-medium text-[#1a1a1a] hover:underline flex items-center gap-1">
                            Enroll <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Course 2 -->
            <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=250&fit=crop&crop=center&auto=format" alt="Course" class="w-full h-48 object-cover" />
                    <span class="badge-category absolute top-3 left-3">Data Science</span>
                    <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fa-regular fa-clock"></i> 28 hours
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <i class="fa-regular fa-star"></i> 4.9 (158)
                    </div>
                    <h3 class="font-semibold text-[#1a1a1a] mt-2">Data Science Bootcamp</h3>
                    <p class="text-sm text-gray-500 mt-1 line-clamp-2">Pandas, NumPy, ML algorithms &amp; real projects.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="price-tag">$179</span>
                        <a href="#" class="text-sm font-medium text-[#1a1a1a] hover:underline flex items-center gap-1">
                            Enroll <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=400&h=250&fit=crop&crop=center&auto=format" alt="Course" class="w-full h-48 object-cover" />
                    <span class="badge-category absolute top-3 left-3">Cloud</span>
                    <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fa-regular fa-clock"></i> 20 hours
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <i class="fa-regular fa-star"></i> 4.7 (95)
                    </div>
                    <h3 class="font-semibold text-[#1a1a1a] mt-2">AWS &amp; DevOps</h3>
                    <p class="text-sm text-gray-500 mt-1 line-clamp-2">Deploy, scale, monitor with AWS, Docker, K8s.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="price-tag">$199</span>
                        <a href="#" class="text-sm font-medium text-[#1a1a1a] hover:underline flex items-center gap-1">
                            Enroll <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ====== SECTION 2: TRAVEL PACKAGES ====== -->
    <section id="travel" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 scroll-mt-20">
        <div class="flex items-center justify-between mb-8">
            <div>
                <span class="inline-block bg-[#1a1a1a]/5 text-[#1a1a1a] text-[10px] font-semibold tracking-widest px-3 py-1 rounded-full">CATEGORY</span>
                <h2 class="text-2xl font-bold text-[#1a1a1a] mt-1 section-heading">Exclusive Travel Packages</h2>
            </div>
            <a href="#" class="text-sm font-medium text-gray-500 hover:text-[#1a1a1a] transition flex items-center gap-1">
                View all <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Travel 1 -->
            <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=400&h=250&fit=crop&crop=center&auto=format" alt="Travel" class="w-full h-48 object-cover" />
                    <span class="badge-category absolute top-3 left-3">Beach</span>
                    <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fa-regular fa-calendar"></i> 5 Days / 4 Nights
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <i class="fa-regular fa-star"></i> 4.9 (340)
                    </div>
                    <h3 class="font-semibold text-[#1a1a1a] mt-2">Bali Tropical Escape</h3>
                    <p class="text-sm text-gray-500 mt-1 line-clamp-2">Private villa, snorkeling, and cultural tours.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="price-tag">$1,299</span>
                        <a href="#" class="text-sm font-medium text-[#1a1a1a] hover:underline flex items-center gap-1">
                            Book <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Travel 2 -->
            <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=400&h=250&fit=crop&crop=center&auto=format" alt="Travel" class="w-full h-48 object-cover" />
                    <span class="badge-category absolute top-3 left-3">Cultural</span>
                    <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fa-regular fa-calendar"></i> 7 Days / 6 Nights
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <i class="fa-regular fa-star"></i> 4.8 (265)
                    </div>
                    <h3 class="font-semibold text-[#1a1a1a] mt-2">Japan Heritage Tour</h3>
                    <p class="text-sm text-gray-500 mt-1 line-clamp-2">Tokyo, Kyoto, Mt. Fuji, and traditional tea.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="price-tag">$2,450</span>
                        <a href="#" class="text-sm font-medium text-[#1a1a1a] hover:underline flex items-center gap-1">
                            Book <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Travel 3 -->
            <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=400&h=250&fit=crop&crop=center&auto=format" alt="Travel" class="w-full h-48 object-cover" />
                    <span class="badge-category absolute top-3 left-3">Adventure</span>
                    <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fa-regular fa-calendar"></i> 4 Days / 3 Nights
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <i class="fa-regular fa-star"></i> 4.7 (190)
                    </div>
                    <h3 class="font-semibold text-[#1a1a1a] mt-2">New Zealand Adventure</h3>
                    <p class="text-sm text-gray-500 mt-1 line-clamp-2">Hiking, bungee, and fjord cruises.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="price-tag">$1,890</span>
                        <a href="#" class="text-sm font-medium text-[#1a1a1a] hover:underline flex items-center gap-1">
                            Book <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ====== SECTION 3: CAR RENTALS ====== -->
    <section id="car-rental" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 scroll-mt-20">
        <div class="flex items-center justify-between mb-8">
            <div>
                <span class="inline-block bg-[#1a1a1a]/5 text-[#1a1a1a] text-[10px] font-semibold tracking-widest px-3 py-1 rounded-full">CATEGORY</span>
                <h2 class="text-2xl font-bold text-[#1a1a1a] mt-1 section-heading">Premium Car Rentals</h2>
            </div>
            <a href="#" class="text-sm font-medium text-gray-500 hover:text-[#1a1a1a] transition flex items-center gap-1">
                View all <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Car 1 -->
            <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=400&h=250&fit=crop&crop=center&auto=format" alt="Car" class="w-full h-48 object-cover" />
                    <span class="badge-category absolute top-3 left-3">Luxury</span>
                    <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fa-regular fa-user"></i> 5 seats
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <i class="fa-regular fa-star"></i> 4.9 (78)
                    </div>
                    <h3 class="font-semibold text-[#1a1a1a] mt-2">Mercedes‑Benz S‑Class</h3>
                    <p class="text-sm text-gray-500 mt-1 line-clamp-2">Elegance, comfort, and advanced tech.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="price-tag">$189 / day</span>
                        <a href="#" class="text-sm font-medium text-[#1a1a1a] hover:underline flex items-center gap-1">
                            Rent <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Car 2 -->
            <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=400&h=250&fit=crop&crop=center&auto=format" alt="Car" class="w-full h-48 object-cover" />
                    <span class="badge-category absolute top-3 left-3">SUV</span>
                    <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fa-regular fa-user"></i> 7 seats
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <i class="fa-regular fa-star"></i> 4.7 (112)
                    </div>
                    <h3 class="font-semibold text-[#1a1a1a] mt-2">Toyota Land Cruiser</h3>
                    <p class="text-sm text-gray-500 mt-1 line-clamp-2">Off‑road ready with spacious interior.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="price-tag">$145 / day</span>
                        <a href="#" class="text-sm font-medium text-[#1a1a1a] hover:underline flex items-center gap-1">
                            Rent <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Car 3 -->
            <div class="service-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?w=400&h=250&fit=crop&crop=center&auto=format" alt="Car" class="w-full h-48 object-cover" />
                    <span class="badge-category absolute top-3 left-3">Economy</span>
                    <button class="absolute top-3 right-3 w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 transition shadow-sm">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fa-regular fa-user"></i> 4 seats
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <i class="fa-regular fa-star"></i> 4.6 (203)
                    </div>
                    <h3 class="font-semibold text-[#1a1a1a] mt-2">Honda Civic</h3>
                    <p class="text-sm text-gray-500 mt-1 line-clamp-2">Fuel‑efficient, reliable, and easy to drive.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="price-tag">$69 / day</span>
                        <a href="#" class="text-sm font-medium text-[#1a1a1a] hover:underline flex items-center gap-1">
                            Rent <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ====== PROMO BANNER ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="relative overflow-hidden rounded-3xl bg-[#1a1a1a] text-white p-8 lg:p-14 flex flex-col lg:flex-row items-center justify-between">
            <div>
                <span class="inline-block bg-white/10 text-white/80 text-[10px] font-semibold tracking-widest px-4 py-1.5 rounded-full mb-3">FLASH OFFER</span>
                <h2 class="text-3xl lg:text-4xl font-bold">Bundle &amp; Save</h2>
                <p class="text-white/70 text-lg mt-1 max-w-md">Book a course + travel package and get <span class="text-white font-bold">15% off</span> your car rental. Use code <span class="bg-white/10 px-3 py-1 rounded font-mono text-sm">SAVE15</span></p>
                <a href="#" class="inline-block mt-6 bg-white text-[#1a1a1a] px-8 py-3 rounded-full text-sm font-medium hover:bg-gray-100 transition shadow-lg">
                    Claim Offer <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                </a>
            </div>
            <div class="mt-6 lg:mt-0 flex items-center gap-2 text-5xl font-light tracking-tight">
                <span class="bg-white/10 px-5 py-2 rounded-2xl">15%</span>
                <span class="text-2xl text-white/50">OFF</span>
            </div>
        </div>
    </section>


    <!-- ====== NEWSLETTER ====== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="bg-gray-50 rounded-3xl p-8 lg:p-14 text-center">
            <h2 class="text-2xl font-bold text-[#1a1a1a]">Stay in the Loop</h2>
            <p class="text-gray-500 mt-1 max-w-md mx-auto">Get early access to new courses, travel deals, and car rental promotions.</p>
            <form class="mt-6 flex flex-col sm:flex-row max-w-md mx-auto gap-3">
                <input type="email" placeholder="Your email address" class="flex-1 px-5 py-3 rounded-full border border-gray-200 focus:border-[#1a1a1a] focus:ring-2 focus:ring-[#1a1a1a]/10 transition outline-none bg-white" />
                <button type="submit" class="bg-[#1a1a1a] text-white px-8 py-3 rounded-full text-sm font-medium hover:bg-black transition shadow-lg shadow-black/10">
                    Subscribe
                </button>
            </form>
            <p class="text-[10px] text-gray-400 mt-3">No spam, unsubscribe anytime.</p>
        </div>
    </section>


    <!-- ====== FOOTER ====== -->
    <footer class="bg-white border-t border-gray-100 pt-14 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-8 pb-12 border-b border-gray-100">

                <div>
                    <h4 class="font-bold text-[#1a1a1a] text-sm uppercase tracking-wider mb-4">Services</h4>
                    <ul class="space-y-2.5 text-sm text-gray-500">
                        <li><a href="#courses" class="footer-link">IT Courses</a></li>
                        <li><a href="#travel" class="footer-link">Travel Packages</a></li>
                        <li><a href="#car-rental" class="footer-link">Car Rentals</a></li>
                        <li><a href="#" class="footer-link">Gift Cards</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-[#1a1a1a] text-sm uppercase tracking-wider mb-4">Company</h4>
                    <ul class="space-y-2.5 text-sm text-gray-500">
                        <li><a href="#" class="footer-link">About Us</a></li>
                        <li><a href="#" class="footer-link">Careers</a></li>
                        <li><a href="#" class="footer-link">Sustainability</a></li>
                        <li><a href="#" class="footer-link">Press</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-[#1a1a1a] text-sm uppercase tracking-wider mb-4">Support</h4>
                    <ul class="space-y-2.5 text-sm text-gray-500">
                        <li><a href="#" class="footer-link">Help Center</a></li>
                        <li><a href="#" class="footer-link">Contact</a></li>
                        <li><a href="#" class="footer-link">Returns &amp; Cancellations</a></li>
                        <li><a href="#" class="footer-link">FAQs</a></li>
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