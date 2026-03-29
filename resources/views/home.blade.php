@extends('layouts.app')

@section('title', 'Marina — Business Coach & Marketing Mentor')
@section('description', 'Transform your business with expert coaching and marketing strategy. Marina helps ambitious entrepreneurs scale their brands through 1:1 consulting, courses, and mentoring programs.')

@section('content')

    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=1600&q=80" alt="Ambitious entrepreneur working on her business" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 via-gray-900/60 to-gray-900/30"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="max-w-2xl">
                <p class="text-rose-300 font-medium text-sm sm:text-base tracking-wide uppercase mb-4">Business Coach &amp; Marketing Mentor</p>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight">
                    Transform Your Business, Elevate Your Brand
                </h1>
                <p class="mt-6 text-lg sm:text-xl text-gray-200 leading-relaxed max-w-xl">
                    Business coaching &amp; marketing strategy for ambitious entrepreneurs ready to scale. Let's build something extraordinary together.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 bg-rose-600 text-white text-base font-semibold rounded-full hover:bg-rose-700 transition-all shadow-lg shadow-rose-600/30 hover:shadow-rose-600/50">
                        Book a Consultation
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="/services" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/40 text-white text-base font-semibold rounded-full hover:bg-white/10 hover:border-white/60 transition-all">
                        Explore Programs
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- As Featured In -->
            <p class="text-center text-xs font-semibold uppercase tracking-widest text-gray-400 mb-8">As Featured In</p>
            <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12 mb-12">
                <div class="h-8 w-24 bg-gray-200 rounded flex items-center justify-center text-xs font-bold text-gray-400 uppercase">Forbes</div>
                <div class="h-8 w-28 bg-gray-200 rounded flex items-center justify-center text-xs font-bold text-gray-400 uppercase">Entrepreneur</div>
                <div class="h-8 w-24 bg-gray-200 rounded flex items-center justify-center text-xs font-bold text-gray-400 uppercase">Inc.</div>
                <div class="h-8 w-32 bg-gray-200 rounded flex items-center justify-center text-xs font-bold text-gray-400 uppercase">Business Insider</div>
                <div class="h-8 w-24 bg-gray-200 rounded flex items-center justify-center text-xs font-bold text-gray-400 uppercase">Vogue</div>
            </div>
            <!-- Stats -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <p class="font-serif text-3xl sm:text-4xl font-bold text-gray-900">500+</p>
                    <p class="mt-1 text-sm text-gray-500">Clients Served</p>
                </div>
                <div class="text-center">
                    <p class="font-serif text-3xl sm:text-4xl font-bold text-gray-900">10+</p>
                    <p class="mt-1 text-sm text-gray-500">Years Experience</p>
                </div>
                <div class="text-center">
                    <p class="font-serif text-3xl sm:text-4xl font-bold text-gray-900">50+</p>
                    <p class="mt-1 text-sm text-gray-500">Courses Created</p>
                </div>
                <div class="text-center">
                    <p class="font-serif text-3xl sm:text-4xl font-bold text-gray-900">4.9<span class="text-rose-500">&#9733;</span></p>
                    <p class="mt-1 text-sm text-gray-500">Average Rating</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <!-- Image -->
                <div class="relative">
                    <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?w=800&q=80" alt="Marina - Business Coach and Marketing Mentor" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-rose-100 rounded-2xl -z-10"></div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-rose-50 rounded-full -z-10"></div>
                </div>
                <!-- Text -->
                <div>
                    <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">About Me</p>
                    <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        Hi, I'm Marina
                    </h2>
                    <div class="mt-6 space-y-4 text-gray-600 leading-relaxed">
                        <p>
                            I'm a business coach and marketing strategist with over a decade of experience helping entrepreneurs build brands that stand out, attract dream clients, and generate consistent revenue.
                        </p>
                        <p>
                            After scaling my own business from a side hustle to a multi-six-figure brand, I made it my mission to help other ambitious women do the same. My approach combines proven strategy with intuitive guidance, because I believe success should feel aligned, not exhausting.
                        </p>
                        <p>
                            Whether you're just starting out or ready to scale to the next level, I'm here to help you create a business and life you truly love.
                        </p>
                    </div>
                    <a href="/about" class="mt-8 inline-flex items-center text-rose-600 font-semibold hover:text-rose-700 transition-colors group">
                        Learn More About Me
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 lg:py-28 bg-rose-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">Services</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">How I Can Help You</h2>
                <p class="mt-4 text-gray-600 text-lg">Choose the right level of support for where you are in your business journey.</p>
            </div>

            @php
                $defaultServices = [
                    [
                        'title' => '1:1 Business Consultation',
                        'description' => 'A focused strategy session where we dive deep into your business goals, identify bottlenecks, and create a clear action plan. Perfect for entrepreneurs who need clarity and direction.',
                        'price' => '197',
                        'icon' => 'consultation',
                        'features' => ['60-minute deep-dive session', 'Custom action plan', 'Recording & summary notes', '7-day email follow-up'],
                    ],
                    [
                        'title' => 'Instagram Audit & Strategy',
                        'description' => 'Get a comprehensive audit of your Instagram presence with actionable recommendations to grow your following, boost engagement, and convert followers into paying clients.',
                        'price' => '97',
                        'icon' => 'audit',
                        'features' => ['Full profile analysis', 'Content strategy blueprint', 'Hashtag & SEO guide', 'Growth roadmap PDF'],
                    ],
                    [
                        'title' => 'VIP Mentoring Program',
                        'description' => 'An intensive 3-month mentoring experience for serious entrepreneurs ready to uplevel. Includes strategy, accountability, mindset work, and hands-on marketing guidance.',
                        'price' => '1,497',
                        'icon' => 'mentoring',
                        'features' => ['12 weekly 1:1 calls', 'Unlimited Voxer access', 'Custom marketing strategy', 'Quarterly business review'],
                    ],
                ];
                $displayServices = $services ?? $defaultServices;
            @endphp

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($displayServices as $index => $service)
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-shadow duration-300 border border-rose-100/50 flex flex-col {{ $index === 2 ? 'ring-2 ring-rose-600 relative' : '' }}">
                    @if($index === 2)
                        <span class="absolute -top-3 left-1/2 -translate-x-1/2 px-4 py-1 bg-rose-600 text-white text-xs font-bold rounded-full uppercase tracking-wide">Most Popular</span>
                    @endif
                    <!-- Icon -->
                    <div class="w-14 h-14 bg-rose-100 rounded-xl flex items-center justify-center mb-6">
                        @if(($service['icon'] ?? '') === 'consultation')
                            <svg class="w-7 h-7 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        @elseif(($service['icon'] ?? '') === 'audit')
                            <svg class="w-7 h-7 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        @else
                            <svg class="w-7 h-7 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        @endif
                    </div>
                    <h3 class="font-serif text-xl font-bold text-gray-900">{{ $service['title'] }}</h3>
                    <p class="mt-3 text-gray-600 text-sm leading-relaxed flex-1">{{ $service['description'] }}</p>
                    <!-- Features -->
                    @if(!empty($service['features']))
                        <ul class="mt-6 space-y-2">
                            @foreach($service['features'] as $feature)
                                <li class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-rose-500 mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <!-- Price & CTA -->
                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <p class="text-sm text-gray-500 mb-4">Starting from</p>
                        <p class="font-serif text-3xl font-bold text-gray-900">${{ $service['price'] }}</p>
                        <a href="/services" class="mt-4 block w-full text-center px-6 py-3 {{ $index === 2 ? 'bg-rose-600 text-white hover:bg-rose-700' : 'bg-gray-900 text-white hover:bg-gray-800' }} font-semibold rounded-full transition-colors text-sm">
                            Get Started
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">Shop</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">Digital Products &amp; Resources</h2>
                <p class="mt-4 text-gray-600 text-lg">Tools, templates, and guides to help you grow your business on your own terms.</p>
            </div>

            @php
                $defaultProducts = [
                    [
                        'title' => 'The Brand Strategy Workbook',
                        'price' => '47',
                        'image' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=600&q=80',
                        'description' => 'A step-by-step workbook to define your brand identity, messaging, and visual direction.',
                    ],
                    [
                        'title' => 'Instagram Content Planner',
                        'price' => '29',
                        'image' => 'https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=600&q=80',
                        'description' => '90 days of content prompts, caption templates, and hashtag strategies.',
                    ],
                    [
                        'title' => 'Email Marketing Toolkit',
                        'price' => '67',
                        'image' => 'https://images.unsplash.com/photo-1596526131083-e8c633c948d2?w=600&q=80',
                        'description' => 'Email sequences, templates, and strategies to nurture leads and drive sales.',
                    ],
                    [
                        'title' => 'Sales Page Copy Templates',
                        'price' => '39',
                        'image' => 'https://images.unsplash.com/photo-1542435503-956c469947f6?w=600&q=80',
                        'description' => 'Plug-and-play copy templates for high-converting sales pages and landing pages.',
                    ],
                ];
                $displayProducts = (!empty($featuredProducts) && count($featuredProducts) > 0) ? $featuredProducts : $defaultProducts;
            @endphp

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($displayProducts as $product)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="aspect-[4/3] overflow-hidden bg-gray-100">
                        <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-lg font-bold text-gray-900">{{ $product['title'] }}</h3>
                        <p class="mt-2 text-sm text-gray-500 leading-relaxed">{{ $product['description'] }}</p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="font-serif text-2xl font-bold text-gray-900">${{ $product['price'] }}</span>
                            <a href="/products" class="px-5 py-2 bg-rose-600 text-white text-sm font-semibold rounded-full hover:bg-rose-700 transition-colors">
                                Get It Now
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <a href="/products" class="inline-flex items-center text-rose-600 font-semibold hover:text-rose-700 transition-colors group">
                    View All Products
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Courses Section -->
    <section class="py-20 lg:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">Courses</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">Level Up Your Skills</h2>
                <p class="mt-4 text-gray-600 text-lg">Self-paced online courses designed to give you the skills and confidence to grow your business.</p>
            </div>

            @php
                $defaultCourses = [
                    [
                        'title' => 'Instagram Growth Masterclass',
                        'lessons' => 24,
                        'price' => '197',
                        'image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=600&q=80',
                        'description' => 'Learn how to grow an engaged Instagram following that converts into paying clients.',
                    ],
                    [
                        'title' => 'Brand Identity Blueprint',
                        'lessons' => 18,
                        'price' => '147',
                        'image' => 'https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=600&q=80',
                        'description' => 'Create a cohesive, magnetic brand identity that attracts your dream clients.',
                    ],
                    [
                        'title' => 'Sales Funnel Secrets',
                        'lessons' => 32,
                        'price' => '247',
                        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80',
                        'description' => 'Build automated sales funnels that work 24/7 to generate leads and revenue.',
                    ],
                ];
                $displayCourses = $courses ?? $defaultCourses;
            @endphp

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($displayCourses as $course)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="aspect-video overflow-hidden bg-gray-100 relative">
                        <img src="{{ $course['image'] }}" alt="{{ $course['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-semibold text-gray-700">
                            {{ $course['lessons'] }} Lessons
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-xl font-bold text-gray-900">{{ $course['title'] }}</h3>
                        <p class="mt-2 text-sm text-gray-500 leading-relaxed">{{ $course['description'] }}</p>
                        <div class="mt-6 flex items-center justify-between">
                            <span class="font-serif text-2xl font-bold text-gray-900">${{ $course['price'] }}</span>
                            <a href="/products" class="px-5 py-2.5 bg-gray-900 text-white text-sm font-semibold rounded-full hover:bg-gray-800 transition-colors">
                                Enroll Now
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 lg:py-28 bg-rose-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">Testimonials</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">What My Clients Say</h2>
                <p class="mt-4 text-gray-600 text-lg">Real stories from real entrepreneurs who have transformed their businesses.</p>
            </div>

            @php
                $defaultTestimonials = [
                    [
                        'quote' => 'Working with Marina completely transformed how I approach my business. Within 3 months of implementing her strategies, I doubled my revenue and finally felt confident in my brand. She has this incredible ability to see your potential and help you unlock it.',
                        'name' => 'Sophie Anderson',
                        'role' => 'Founder, Bloom Studio',
                        'rating' => 5,
                        'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&q=80',
                    ],
                    [
                        'quote' => 'Marina\'s Instagram audit was a complete game-changer. I went from 2k to 15k followers in 6 months with the strategy she created for me. But more importantly, those followers actually convert into clients. Best investment I\'ve made in my business.',
                        'name' => 'Jessica Chen',
                        'role' => 'Life Coach & Speaker',
                        'rating' => 5,
                        'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&q=80',
                    ],
                    [
                        'quote' => 'The VIP Mentoring Program was worth every penny. Marina helped me launch my first digital course which generated $30k in the first month. Her guidance on branding, marketing, and mindset gave me the clarity and confidence I desperately needed.',
                        'name' => 'Olivia Martinez',
                        'role' => 'Creative Director, OliviaCo',
                        'rating' => 5,
                        'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=200&q=80',
                    ],
                ];
                $displayTestimonials = $testimonials ?? $defaultTestimonials;
            @endphp

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($displayTestimonials as $testimonial)
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-rose-100/50">
                    <!-- Stars -->
                    <div class="flex items-center gap-1 mb-4">
                        @for($i = 0; $i < ($testimonial['rating'] ?? 5); $i++)
                            <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <!-- Quote -->
                    <blockquote class="text-gray-600 leading-relaxed text-sm">
                        "{{ $testimonial['quote'] }}"
                    </blockquote>
                    <!-- Author -->
                    <div class="mt-6 flex items-center gap-4">
                        <img src="{{ $testimonial['image'] ?? '' }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <p class="font-semibold text-gray-900 text-sm">{{ $testimonial['name'] }}</p>
                            <p class="text-gray-500 text-xs">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">FAQ</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">Frequently Asked Questions</h2>
                <p class="mt-4 text-gray-600 text-lg">Everything you need to know before working together.</p>
            </div>

            <div x-data="{ active: null }" class="space-y-4">
                <!-- FAQ 1 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button @click="active = active === 1 ? null : 1" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900 pr-4">Who is your coaching best suited for?</span>
                        <svg :class="{ 'rotate-180': active === 1 }" class="w-5 h-5 text-rose-500 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 1" x-collapse x-cloak>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed">
                            My coaching is designed for ambitious female entrepreneurs, coaches, creatives, and service providers who are ready to take their business to the next level. Whether you're just starting out and need a clear strategy, or you're already generating revenue and want to scale, my programs meet you where you are. I work best with action-takers who are committed to growth.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button @click="active = active === 2 ? null : 2" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900 pr-4">What can I expect from a 1:1 consultation?</span>
                        <svg :class="{ 'rotate-180': active === 2 }" class="w-5 h-5 text-rose-500 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 2" x-collapse x-cloak>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed">
                            During our 60-minute session, we'll dive deep into your specific business challenges and goals. I'll analyze your current strategy, identify opportunities for growth, and we'll create a clear action plan together. After the session, you'll receive a recording, detailed summary notes, and 7 days of email support for follow-up questions. Most clients walk away with immediate clarity and actionable next steps.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button @click="active = active === 3 ? null : 3" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900 pr-4">How are your online courses delivered?</span>
                        <svg :class="{ 'rotate-180': active === 3 }" class="w-5 h-5 text-rose-500 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 3" x-collapse x-cloak>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed">
                            All courses are fully self-paced and hosted on a dedicated learning platform. Once you purchase, you get lifetime access to video lessons, downloadable worksheets, templates, and any future updates. Each course includes a private community where you can connect with other students and get additional support. You can learn at your own pace, on your own schedule.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button @click="active = active === 4 ? null : 4" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900 pr-4">Do you offer refunds on digital products?</span>
                        <svg :class="{ 'rotate-180': active === 4 }" class="w-5 h-5 text-rose-500 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 4" x-collapse x-cloak>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed">
                            Yes, I offer a 14-day money-back guarantee on all courses and digital products. If you're not completely satisfied with your purchase, simply reach out within 14 days and I'll issue a full refund, no questions asked. For 1:1 services, rescheduling is available up to 24 hours before your session. I want you to feel completely confident in your investment.
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button @click="active = active === 5 ? null : 5" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900 pr-4">What makes the VIP Mentoring Program different?</span>
                        <svg :class="{ 'rotate-180': active === 5 }" class="w-5 h-5 text-rose-500 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 5" x-collapse x-cloak>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed">
                            The VIP Mentoring Program is my most comprehensive offering. Over 3 months, you get weekly 1:1 calls, unlimited voice messaging support via Voxer for real-time guidance, a custom marketing strategy built specifically for your business, and a complete quarterly business review. It's like having a marketing director and business strategist in your pocket. This program is for entrepreneurs who are serious about making a significant leap in their business.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 lg:py-28 bg-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-rose-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-rose-400 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">
                Ready to Transform Your Business?
            </h2>
            <p class="mt-6 text-lg text-gray-300 leading-relaxed">
                Take the first step towards building a business you love. Let's create a strategy that works for you and start seeing real results.
            </p>
            <form action="/newsletter/subscribe" method="POST" class="mt-10 max-w-md mx-auto">
                @csrf
                <div class="flex flex-col sm:flex-row gap-3">
                    <input type="email" name="email" required placeholder="Enter your email" class="flex-1 px-5 py-4 bg-white/10 border border-white/20 rounded-full text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent backdrop-blur-sm">
                    <button type="submit" class="px-8 py-4 bg-rose-600 text-white font-semibold rounded-full hover:bg-rose-700 transition-colors shadow-lg shadow-rose-600/30 whitespace-nowrap">
                        Get Started
                    </button>
                </div>
            </form>
            <p class="mt-4 text-sm text-gray-500">Free consultation for new subscribers. No spam, unsubscribe anytime.</p>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 lg:py-24 bg-rose-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="w-16 h-16 bg-rose-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                <svg class="w-8 h-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-gray-900">Join My Newsletter</h2>
            <p class="mt-4 text-gray-600 text-lg">
                Get weekly tips on marketing &amp; business growth delivered straight to your inbox. Join 10,000+ ambitious entrepreneurs already leveling up.
            </p>
            <form action="/newsletter/subscribe" method="POST" class="mt-8 max-w-lg mx-auto">
                @csrf
                <div class="flex flex-col sm:flex-row gap-3">
                    <input type="email" name="email" required placeholder="Your email address" class="flex-1 px-5 py-3.5 bg-white border border-gray-200 rounded-full text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent shadow-sm">
                    <button type="submit" class="px-8 py-3.5 bg-rose-600 text-white font-semibold rounded-full hover:bg-rose-700 transition-colors shadow-sm whitespace-nowrap">
                        Subscribe
                    </button>
                </div>
            </form>
            <p class="mt-3 text-xs text-gray-500">No spam ever. Unsubscribe anytime. Read our <a href="/privacy-policy" class="underline hover:text-rose-600">Privacy Policy</a>.</p>
        </div>
    </section>

@endsection
