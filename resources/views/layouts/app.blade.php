<!DOCTYPE html>
<html lang="cs" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Marina — Mentoring & Osobní rozvoj')</title>
    <meta name="description" content="@yield('description', 'Mentoring, koučování a osobní rozvoj. Marina vám pomůže najít pevnější oporu v sobě.')">
    <meta name="author" content="Marina">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Marina — Mentoring & Osobní rozvoj')">
    <meta property="og:description" content="@yield('og_description', 'Mentoring, koučování a osobní rozvoj. Marina vám pomůže najít pevnější oporu v sobě.')">
    <meta property="og:image" content="@yield('og_image', 'https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=1200&q=80')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Marina">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Marina — Mentoring & Osobní rozvoj')">
    <meta name="twitter:description" content="@yield('og_description', 'Mentoring, koučování a osobní rozvoj. Marina vám pomůže najít pevnější oporu v sobě.')">
    <meta name="twitter:image" content="@yield('og_image', 'https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=1200&q=80')">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.ts'])

    @stack('styles')

    <style>
        [x-cloak] { display: none !important; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="font-sans text-gray-800 bg-white antialiased">

    <!-- Navigation -->
    <header x-data="{ mobileOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-rose-100/50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-2">
                    <span class="font-serif text-2xl lg:text-3xl font-bold text-gray-900 tracking-tight">Marina</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center gap-8">
                    <a href="/" class="text-sm font-medium text-gray-700 hover:text-rose-600 transition-colors">Domů</a>
                    <a href="/about" class="text-sm font-medium text-gray-700 hover:text-rose-600 transition-colors">O mně</a>
                    <a href="/services" class="text-sm font-medium text-gray-700 hover:text-rose-600 transition-colors">Služby</a>
                    <a href="/products" class="text-sm font-medium text-gray-700 hover:text-rose-600 transition-colors">Produkty</a>
                    <a href="/blog" class="text-sm font-medium text-gray-700 hover:text-rose-600 transition-colors">Blog</a>
                    <a href="/contact" class="text-sm font-medium text-gray-700 hover:text-rose-600 transition-colors">Kontakt</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden lg:flex items-center gap-4">
                    <a href="/contact" class="inline-flex items-center px-5 py-2.5 bg-rose-600 text-white text-sm font-semibold rounded-full hover:bg-rose-700 transition-colors shadow-sm">
                        Rezervovat hovor
                    </a>
                </div>

                <!-- Mobile menu button -->
                <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 rounded-lg text-gray-600 hover:bg-rose-50 transition-colors" aria-label="Toggle menu">
                    <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div x-show="mobileOpen" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="lg:hidden pb-4 border-t border-rose-100/50">
                <div class="flex flex-col gap-1 pt-4">
                    <a href="/" class="px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-colors">Domů</a>
                    <a href="/about" class="px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-colors">O mně</a>
                    <a href="/services" class="px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-colors">Služby</a>
                    <a href="/products" class="px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-colors">Produkty</a>
                    <a href="/blog" class="px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-colors">Blog</a>
                    <a href="/contact" class="px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-colors">Kontakt</a>
                    <div class="px-4 pt-2">
                        <a href="/contact" class="inline-flex items-center justify-center w-full px-5 py-2.5 bg-rose-600 text-white text-sm font-semibold rounded-full hover:bg-rose-700 transition-colors">
                            Rezervovat hovor
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Spacer for fixed nav -->
    <div class="h-16 lg:h-20"></div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Main footer -->
            <div class="py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <!-- Brand -->
                <div class="lg:col-span-1">
                    <a href="/" class="inline-block">
                        <span class="font-serif text-2xl font-bold text-white">Marina</span>
                    </a>
                    <p class="mt-4 text-sm leading-relaxed text-gray-400">
                        Práce se sebou &bull; vztahy &bull; peníze &bull; vnitřní nastavení. Pomáhám lidem zorientovat se v tom, co cítí, proč se zasekávají a jak z toho ven.
                    </p>
                    <!-- Social Links -->
                    <div class="mt-6 flex items-center gap-4">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-rose-600 transition-colors" aria-label="Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-rose-600 transition-colors" aria-label="Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-rose-600 transition-colors" aria-label="YouTube">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-rose-600 transition-colors" aria-label="LinkedIn">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-rose-600 transition-colors" aria-label="TikTok">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider">Rychlé odkazy</h3>
                    <ul class="mt-4 space-y-3">
                        <li><a href="/about" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">O Marině</a></li>
                        <li><a href="/services" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">Služby</a></li>
                        <li><a href="/products" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">Digitální produkty</a></li>
                        <li><a href="/blog" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">Blog</a></li>
                        <li><a href="/contact" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">Kontakt</a></li>
                        <li><a href="/privacy-policy" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">Ochrana soukromí</a></li>
                        <li><a href="/terms" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">Obchodní podmínky</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider">Služby</h3>
                    <ul class="mt-4 space-y-3">
                        <li><a href="/services#consultation" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">1:1 Konzultace</a></li>
                        <li><a href="/services#audit" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">Instagram Audit</a></li>
                        <li><a href="/services#mentoring" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">Mentoringový program</a></li>
                        <li><a href="/products" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">Online kurzy</a></li>
                        <li><a href="/products" class="text-sm text-gray-400 hover:text-rose-400 transition-colors">Digitální šablony</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider">Zůstaňte v kontaktu</h3>
                    <p class="mt-4 text-sm text-gray-400">Získejte pravidelné tipy na osobní rozvoj, sebevědomí a budování lepších vztahů.</p>
                    <form action="/newsletter/subscribe" method="POST" class="mt-4">
                        @csrf
                        <div class="flex flex-col gap-3">
                            <input type="email" name="email" required placeholder="Váš e-mail" class="w-full px-4 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent">
                            <button type="submit" class="w-full px-4 py-2.5 bg-rose-600 text-white text-sm font-semibold rounded-lg hover:bg-rose-700 transition-colors">
                                Odebírat
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Bottom bar -->
            <div class="py-6 border-t border-gray-800 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-gray-500">&copy; {{ date('Y') }} Marina. Všechna práva vyhrazena.</p>
                <div class="flex items-center gap-6">
                    <a href="/privacy-policy" class="text-sm text-gray-500 hover:text-rose-400 transition-colors">Ochrana soukromí</a>
                    <a href="/terms" class="text-sm text-gray-500 hover:text-rose-400 transition-colors">Podmínky</a>
                    <a href="/cookie-policy" class="text-sm text-gray-500 hover:text-rose-400 transition-colors">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Cookie Banner -->
    @include('components.cookie-banner')

    @stack('scripts')
</body>
</html>
