@extends('layouts.app')

@section('title', 'Digital Products & Resources — Marina')
@section('description', 'Practical tools, ebooks, and digital downloads to accelerate your business growth.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-rose-50 via-white to-amber-50 py-20 lg:py-28">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 right-10 w-72 h-72 bg-rose-300 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-96 h-96 bg-amber-200 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-rose-100 text-rose-700 text-sm font-medium rounded-full mb-6">Shop & Learn</span>
            <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                Digital Products & Resources
            </h1>
            <p class="max-w-2xl mx-auto text-lg md:text-xl text-gray-600 leading-relaxed">
                Practical tools and guides to accelerate your growth
            </p>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ activeFilter: 'all' }">

            <!-- Filter Tabs -->
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button
                    @click="activeFilter = 'all'"
                    :class="activeFilter === 'all' ? 'bg-rose-600 text-white shadow-md' : 'bg-white text-gray-700 border border-gray-200 hover:border-rose-300 hover:text-rose-600'"
                    class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-200"
                >
                    All Products
                </button>
                <button
                    @click="activeFilter = 'ebook'"
                    :class="activeFilter === 'ebook' ? 'bg-rose-600 text-white shadow-md' : 'bg-white text-gray-700 border border-gray-200 hover:border-rose-300 hover:text-rose-600'"
                    class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-200"
                >
                    Ebooks
                </button>
                <button
                    @click="activeFilter = 'digital_download'"
                    :class="activeFilter === 'digital_download' ? 'bg-rose-600 text-white shadow-md' : 'bg-white text-gray-700 border border-gray-200 hover:border-rose-300 hover:text-rose-600'"
                    class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-200"
                >
                    Digital Downloads
                </button>
            </div>

            @if($products->count() > 0)
                <!-- Product Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($products as $product)
                        <div
                            x-show="activeFilter === 'all' || activeFilter === '{{ $product->type ?? 'digital_download' }}'"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-rose-100 transition-all duration-300 overflow-hidden"
                        >
                            <!-- Product Image -->
                            <div class="relative aspect-[4/3] overflow-hidden">
                                @if($product->image_url)
                                    <img
                                        src="{{ $product->image_url }}"
                                        alt="{{ $product->title }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    >
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-rose-100 via-rose-50 to-amber-50 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-rose-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                        </svg>
                                    </div>
                                @endif
                                <!-- Type Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full
                                        {{ ($product->type ?? '') === 'ebook' ? 'bg-amber-100 text-amber-800' : 'bg-rose-100 text-rose-800' }}">
                                        {{ ($product->type ?? '') === 'ebook' ? 'Ebook' : 'Digital Download' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Product Info -->
                            <div class="p-6">
                                <h3 class="font-serif text-xl font-bold text-gray-900 mb-2 group-hover:text-rose-700 transition-colors">
                                    {{ $product->title }}
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-2">
                                    {{ $product->short_description ?? Str::limit($product->description, 120) }}
                                </p>
                                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                    <span class="text-2xl font-bold text-gray-900">${{ number_format($product->price, 2) }}</span>
                                    <a
                                        href="{{ route('products.show', $product) }}"
                                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-rose-600 text-white text-sm font-semibold rounded-full hover:bg-rose-700 transition-colors shadow-sm"
                                    >
                                        Get It Now
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-16 px-4">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-rose-50 flex items-center justify-center">
                        <svg class="w-10 h-10 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-gray-900 mb-3">Coming Soon</h3>
                    <p class="text-gray-600 mb-8 max-w-md mx-auto">
                        Exciting new products and resources are on their way. Sign up below to be the first to know when they launch.
                    </p>
                    <form action="/newsletter/subscribe" method="POST" class="max-w-sm mx-auto">
                        @csrf
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input
                                type="email"
                                name="email"
                                required
                                placeholder="Your email address"
                                class="flex-1 px-4 py-3 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent"
                            >
                            <button
                                type="submit"
                                class="px-6 py-3 bg-rose-600 text-white text-sm font-semibold rounded-lg hover:bg-rose-700 transition-colors"
                            >
                                Notify Me
                            </button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </section>
@endsection
