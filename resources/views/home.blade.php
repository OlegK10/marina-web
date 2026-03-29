@extends('layouts.app')

@section('title', 'Marina — Mentoring & Osobní rozvoj')
@section('description', 'Mentoring, koučování a osobní rozvoj. Marina vám pomůže najít pevnější oporu v sobě.')

@section('content')

    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=1600&q=80" alt="Marina - Mentoring a osobní rozvoj" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 via-gray-900/60 to-gray-900/30"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="max-w-2xl">
                <p class="text-rose-300 font-medium text-sm sm:text-base tracking-wide uppercase mb-4">Práce se sebou &bull; vztahy &bull; peníze &bull; vnitřní nastavení</p>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight">
                    Ahoj, já jsem Marina
                </h1>
                <p class="mt-6 text-lg sm:text-xl text-gray-200 leading-relaxed max-w-xl">
                    Pracuju s lidmi, kteří chtějí pochopit sami sebe a přestat se motat v tom samém dokola. Pomáhám jim zorientovat se v tom, co cítí, proč se zasekávají a jak z toho ven – bez tlaku a bez přetvářky.
                </p>
                <div class="mt-10">
                    <a href="/courses" class="inline-flex items-center justify-center px-8 py-4 bg-rose-600 text-white text-base font-semibold rounded-full hover:bg-rose-700 transition-all shadow-lg shadow-rose-600/30 hover:shadow-rose-600/50">
                        Kurzy a webináře
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Stats -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <p class="font-serif text-3xl sm:text-4xl font-bold text-gray-900">500+</p>
                    <p class="mt-1 text-sm text-gray-500">Spokojených klientů</p>
                </div>
                <div class="text-center">
                    <p class="font-serif text-3xl sm:text-4xl font-bold text-gray-900">2+</p>
                    <p class="mt-1 text-sm text-gray-500">Roky zkušeností</p>
                </div>
                <div class="text-center">
                    <p class="font-serif text-3xl sm:text-4xl font-bold text-gray-900">10+</p>
                    <p class="mt-1 text-sm text-gray-500">Vytvořených kurzů</p>
                </div>
                <div class="text-center">
                    <p class="font-serif text-3xl sm:text-4xl font-bold text-gray-900">4.9<span class="text-rose-500">&#9733;</span></p>
                    <p class="mt-1 text-sm text-gray-500">Průměrné hodnocení</p>
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
                        <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?w=800&q=80" alt="Marina - Mentoring a osobní rozvoj" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-rose-100 rounded-2xl -z-10"></div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-rose-50 rounded-full -z-10"></div>
                </div>
                <!-- Text -->
                <div>
                    <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">O mně</p>
                    <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        Ahoj, já jsem Marina
                    </h2>
                    <div class="mt-6 space-y-4 text-gray-600 leading-relaxed">
                        <p>
                            Už druhým rokem se věnuji mentoringu, koučování a osobnímu rozvoji. Vycházím z vlastní zkušenosti a dlouhodobé práce na sobě i s klienty.
                        </p>
                        <p>
                            Věřím, že změna nemusí být drastická ani vyčerpávající, ale může dávat smysl a postupně zapadat do reálného života.
                        </p>
                    </div>
                    <a href="/about" class="mt-8 inline-flex items-center text-rose-600 font-semibold hover:text-rose-700 transition-colors group">
                        Zjistit více o mně
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
                <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">Služby</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">Jak vám mohu pomoci</h2>
                <p class="mt-4 text-gray-600 text-lg">Vyberte si úroveň podpory, která odpovídá vašim potřebám.</p>
            </div>

            @php
                $defaultServices = [
                    [
                        'title' => '1:1 Konzultace',
                        'description' => 'Cílená konzultace, kde se ponoříme do vašich cílů, identifikujeme překážky a vytvoříme jasný plán dalších kroků. Ideální pro ty, kdo potřebují jasnost a směr.',
                        'price' => '197',
                        'icon' => 'consultation',
                        'features' => ['60minutová hloubková konzultace', 'Individuální akční plán', 'Záznam a shrnutí', '7denní e-mailová podpora'],
                    ],
                    [
                        'title' => 'Instagram Audit',
                        'description' => 'Získejte komplexní audit vašeho Instagramu s konkrétními doporučeními pro růst sledujících, zvýšení zapojení a přeměnu followerů na klienty.',
                        'price' => '97',
                        'icon' => 'audit',
                        'features' => ['Kompletní analýza profilu', 'Plán obsahové strategie', 'Průvodce hashtagy a SEO', 'PDF s plánem růstu'],
                    ],
                    [
                        'title' => 'VIP Mentoringový program',
                        'description' => 'Intenzivní 3měsíční mentoringový zážitek pro ty, kdo to myslí vážně. Zahrnuje strategii, zodpovědnost, práci s myšlením a praktické vedení.',
                        'price' => '1,497',
                        'icon' => 'mentoring',
                        'features' => ['12 týdenních 1:1 hovorů', 'Neomezený přístup přes Voxer', 'Individuální strategie', 'Čtvrtletní revize pokroku'],
                    ],
                ];
                $displayServices = $services ?? $defaultServices;
            @endphp

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($displayServices as $index => $service)
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-shadow duration-300 border border-rose-100/50 flex flex-col {{ $index === 2 ? 'ring-2 ring-rose-600 relative' : '' }}">
                    @if($index === 2)
                        <span class="absolute -top-3 left-1/2 -translate-x-1/2 px-4 py-1 bg-rose-600 text-white text-xs font-bold rounded-full uppercase tracking-wide">Nejoblíbenější</span>
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
                        <p class="text-sm text-gray-500 mb-4">Od</p>
                        <p class="font-serif text-3xl font-bold text-gray-900">${{ $service['price'] }}</p>
                        <a href="/services" class="mt-4 block w-full text-center px-6 py-3 {{ $index === 2 ? 'bg-rose-600 text-white hover:bg-rose-700' : 'bg-gray-900 text-white hover:bg-gray-800' }} font-semibold rounded-full transition-colors text-sm">
                            Začít
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
                <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">Produkty</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">Digitální produkty a materiály</h2>
                <p class="mt-4 text-gray-600 text-lg">Nástroje, šablony a průvodci, kteří vám pomohou růst vlastním tempem.</p>
            </div>

            @php
                $defaultProducts = [
                    [
                        'title' => 'Pracovní sešit: Strategie značky',
                        'price' => '47',
                        'image' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=600&q=80',
                        'description' => 'Krok za krokem k definování identity vaší značky, sdělení a vizuálního směru.',
                    ],
                    [
                        'title' => 'Plánovač obsahu pro Instagram',
                        'price' => '29',
                        'image' => 'https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=600&q=80',
                        'description' => '90 dní obsahových podnětů, šablon popisků a hashtagových strategií.',
                    ],
                    [
                        'title' => 'Sada pro e-mailový marketing',
                        'price' => '67',
                        'image' => 'https://images.unsplash.com/photo-1596526131083-e8c633c948d2?w=600&q=80',
                        'description' => 'E-mailové sekvence, šablony a strategie pro péči o kontakty a zvýšení prodeje.',
                    ],
                    [
                        'title' => 'Šablony prodejních stránek',
                        'price' => '39',
                        'image' => 'https://images.unsplash.com/photo-1542435503-956c469947f6?w=600&q=80',
                        'description' => 'Připravené šablony textů pro vysoce konverzní prodejní a přistávací stránky.',
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
                                Získat
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <a href="/products" class="inline-flex items-center text-rose-600 font-semibold hover:text-rose-700 transition-colors group">
                    Zobrazit všechny produkty
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Courses Section -->
    <section class="py-20 lg:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">Vzdělávání</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">Posuňte se dál</h2>
                <p class="mt-4 text-gray-600 text-lg">Online kurzy ve vlastním tempu, které vám dodají dovednosti a sebevědomí pro osobní růst.</p>
            </div>

            @php
                $defaultCourses = [
                    [
                        'title' => 'Masterclass: Růst na Instagramu',
                        'lessons' => 24,
                        'price' => '197',
                        'image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=600&q=80',
                        'description' => 'Naučte se budovat aktivní komunitu na Instagramu, která se promění v klienty.',
                    ],
                    [
                        'title' => 'Plán identity značky',
                        'lessons' => 18,
                        'price' => '147',
                        'image' => 'https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=600&q=80',
                        'description' => 'Vytvořte soudržnou a přitažlivou identitu značky, která osloví vaše ideální klienty.',
                    ],
                    [
                        'title' => 'Tajemství prodejního funnelu',
                        'lessons' => 32,
                        'price' => '247',
                        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80',
                        'description' => 'Vybudujte automatizované prodejní funnely, které pracují 24/7 na získávání kontaktů a příjmů.',
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
                            {{ $course['lessons'] }} lekcí
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-xl font-bold text-gray-900">{{ $course['title'] }}</h3>
                        <p class="mt-2 text-sm text-gray-500 leading-relaxed">{{ $course['description'] }}</p>
                        <div class="mt-6 flex items-center justify-between">
                            <span class="font-serif text-2xl font-bold text-gray-900">${{ $course['price'] }}</span>
                            <a href="/products" class="px-5 py-2.5 bg-gray-900 text-white text-sm font-semibold rounded-full hover:bg-gray-800 transition-colors">
                                Zapsat se
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
                <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">Reference</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">Co říkají moji klienti</h2>
                <p class="mt-4 text-gray-600 text-lg">Skutečné příběhy lidí, kteří prošli proměnou.</p>
            </div>

            @php
                $defaultTestimonials = [
                    [
                        'quote' => 'Spolupráce s Marinou úplně změnila můj přístup k sobě. Během 3 měsíců jsem získala mnohem větší sebevědomí a konečně jsem si věřila. Má neuvěřitelnou schopnost vidět váš potenciál a pomoct vám ho odkrýt.',
                        'name' => 'Sophie Anderson',
                        'role' => 'Zakladatelka, Bloom Studio',
                        'rating' => 5,
                        'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&q=80',
                    ],
                    [
                        'quote' => 'Marinina konzultace byla pro mě zlomový okamžik. Konečně jsem pochopila, co mě brzdí, a začala jsem dělat vědomé kroky ke změně. Nejlepší investice, kterou jsem do sebe udělala.',
                        'name' => 'Jessica Chen',
                        'role' => 'Koučka a řečnice',
                        'rating' => 5,
                        'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&q=80',
                    ],
                    [
                        'quote' => 'VIP Mentoringový program stál za každou korunu. Marina mi pomohla najít jasný směr a pracovat na sobě způsobem, který dává smysl. Její vedení v oblasti myšlení a seberozvoje mi dodalo jasnost a sebevědomí, které jsem zoufale potřebovala.',
                        'name' => 'Olivia Martinez',
                        'role' => 'Kreativní ředitelka, OliviaCo',
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
                <p class="text-rose-600 font-semibold text-sm uppercase tracking-wider mb-3">Časté dotazy</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">Často kladené otázky</h2>
                <p class="mt-4 text-gray-600 text-lg">Vše, co potřebujete vědět, než začneme spolupracovat.</p>
            </div>

            <div x-data="{ active: null }" class="space-y-4">
                <!-- FAQ 1 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button @click="active = active === 1 ? null : 1" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900 pr-4">Pro koho je mentoring nejvhodnější?</span>
                        <svg :class="{ 'rotate-180': active === 1 }" class="w-5 h-5 text-rose-500 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 1" x-collapse x-cloak>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed">
                            Můj mentoring je určen pro lidi, kteří chtějí pracovat na sobě, posílit sebevědomí a najít funkčnější vzorce chování. Ať už jste na začátku své cesty za osobním rozvojem, nebo už na sobě pracujete a chcete se posunout dál, moje programy vám vyjdou vstříc. Nejlépe spolupracuji s těmi, kdo jsou odhodlaní ke změně.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button @click="active = active === 2 ? null : 2" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900 pr-4">Co mohu očekávat od 1:1 konzultace?</span>
                        <svg :class="{ 'rotate-180': active === 2 }" class="w-5 h-5 text-rose-500 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 2" x-collapse x-cloak>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed">
                            Během naší 60minutové konzultace se ponoříme do vašich konkrétních výzev a cílů. Zanalyzuji vaši aktuální situaci, identifikuji příležitosti k růstu a společně vytvoříme jasný akční plán. Po konzultaci obdržíte záznam, podrobné shrnutí a 7 dní e-mailové podpory pro další otázky. Většina klientů odchází s okamžitou jasností a konkrétními dalšími kroky.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button @click="active = active === 3 ? null : 3" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900 pr-4">Jak probíhají online kurzy?</span>
                        <svg :class="{ 'rotate-180': active === 3 }" class="w-5 h-5 text-rose-500 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 3" x-collapse x-cloak>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed">
                            Všechny kurzy jsou plně ve vlastním tempu a hostovány na speciální vzdělávací platformě. Po zakoupení získáte doživotní přístup k video lekcím, stahovatelným pracovním listům, šablonám a budoucím aktualizacím. Každý kurz zahrnuje soukromou komunitu, kde se můžete propojit s ostatními studenty a získat další podporu. Můžete se učit vlastním tempem, podle vlastního rozvrhu.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button @click="active = active === 4 ? null : 4" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900 pr-4">Nabízíte vrácení peněz za digitální produkty?</span>
                        <svg :class="{ 'rotate-180': active === 4 }" class="w-5 h-5 text-rose-500 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 4" x-collapse x-cloak>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed">
                            Ano, na všechny kurzy a digitální produkty nabízím 14denní garanci vrácení peněz. Pokud nebudete se svým nákupem zcela spokojeni, stačí se ozvat do 14 dnů a vrátím vám plnou částku, bez otázek. U 1:1 služeb je možné přeplánování až 24 hodin před vaší konzultací. Chci, abyste se ve své investici cítili naprosto jistě.
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button @click="active = active === 5 ? null : 5" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900 pr-4">Čím se liší VIP Mentoringový program?</span>
                        <svg :class="{ 'rotate-180': active === 5 }" class="w-5 h-5 text-rose-500 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 5" x-collapse x-cloak>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed">
                            VIP Mentoringový program je moje nejkomplexnější nabídka. Během 3 měsíců získáte týdenní 1:1 hovory, neomezený přístup k hlasovým zprávám přes Voxer pro vedení v reálném čase, individuální strategii vytvořenou speciálně pro vás a kompletní čtvrtletní revizi pokroku. Je to jako mít osobního mentora a stratéga po ruce. Tento program je pro ty, kdo to s výrazným posunem myslí vážně.
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
                Připraveni na změnu?
            </h2>
            <p class="mt-6 text-lg text-gray-300 leading-relaxed">
                Udělejte první krok k životu, který vás naplňuje. Společně najdeme cestu, která dává smysl právě vám.
            </p>
            <form action="/newsletter/subscribe" method="POST" class="mt-10 max-w-md mx-auto">
                @csrf
                <div class="flex flex-col sm:flex-row gap-3">
                    <input type="email" name="email" required placeholder="Váš e-mail" class="flex-1 px-5 py-4 bg-white/10 border border-white/20 rounded-full text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent backdrop-blur-sm">
                    <button type="submit" class="px-8 py-4 bg-rose-600 text-white font-semibold rounded-full hover:bg-rose-700 transition-colors shadow-lg shadow-rose-600/30 whitespace-nowrap">
                        Začít
                    </button>
                </div>
            </form>
            <p class="mt-4 text-sm text-gray-500">Bezplatná konzultace pro nové odběratele. Žádný spam, odhlášení kdykoliv.</p>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 lg:py-24 bg-rose-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="w-16 h-16 bg-rose-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                <svg class="w-8 h-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-gray-900">Odebírejte novinky</h2>
            <p class="mt-4 text-gray-600 text-lg">
                Každý týden tipy na osobní rozvoj a sebevědomí přímo do vaší schránky. Připojte se k ostatním, kteří na sobě pracují.
            </p>
            <form action="/newsletter/subscribe" method="POST" class="mt-8 max-w-lg mx-auto">
                @csrf
                <div class="flex flex-col sm:flex-row gap-3">
                    <input type="email" name="email" required placeholder="Váš e-mail" class="flex-1 px-5 py-3.5 bg-white border border-gray-200 rounded-full text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent shadow-sm">
                    <button type="submit" class="px-8 py-3.5 bg-rose-600 text-white font-semibold rounded-full hover:bg-rose-700 transition-colors shadow-sm whitespace-nowrap">
                        Odebírat
                    </button>
                </div>
            </form>
            <p class="mt-3 text-xs text-gray-500">Žádný spam. Odhlášení kdykoliv. Přečtěte si naše <a href="/privacy-policy" class="underline hover:text-rose-600">Zásady ochrany osobních údajů</a>.</p>
        </div>
    </section>

@endsection
