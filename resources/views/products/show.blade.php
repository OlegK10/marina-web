@extends('layouts.app')

@section('title', $product->title . ' — Marina')
@section('description', $product->short_description ?? Str::limit($product->description, 160))

@section('content')
    <!-- Breadcrumb -->
    <section class="bg-gray-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center gap-2 text-sm text-gray-500">
                <a href="/" class="hover:text-rose-600 transition-colors">Home</a>
                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="{{ route('products.index') }}" class="hover:text-rose-600 transition-colors">Products</a>
                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-gray-900 font-medium">{{ $product->title }}</span>
            </nav>
        </div>
    </section>

    <!-- Product Hero -->
    <section class="py-12 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <!-- Left: Product Image -->
                <div class="relative">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-lg">
                        @if($product->image_url)
                            <img
                                src="{{ $product->image_url }}"
                                alt="{{ $product->title }}"
                                class="w-full h-full object-cover"
                            >
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-rose-100 via-rose-50 to-amber-50 flex items-center justify-center">
                                <svg class="w-24 h-24 text-rose-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Right: Product Details -->
                <div>
                    <!-- Type Badge -->
                    <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full mb-4
                        {{ ($product->type ?? '') === 'ebook' ? 'bg-amber-100 text-amber-800' : 'bg-rose-100 text-rose-800' }}">
                        {{ ($product->type ?? '') === 'ebook' ? 'Ebook' : 'Digital Download' }}
                    </span>

                    <h1 class="font-serif text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                        {{ $product->title }}
                    </h1>

                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        {{ $product->short_description ?? Str::limit($product->description, 200) }}
                    </p>

                    <!-- Price -->
                    <div class="flex items-baseline gap-3 mb-8">
                        <span class="text-4xl font-bold text-gray-900">${{ number_format($product->price, 2) }}</span>
                        <span class="text-sm text-gray-500">One-time purchase</span>
                    </div>

                    <!-- Purchase Button (scrolls to checkout) -->
                    <a
                        href="#checkout"
                        class="inline-flex items-center justify-center w-full sm:w-auto gap-2 px-8 py-4 bg-rose-600 text-white text-lg font-semibold rounded-xl hover:bg-rose-700 transition-colors shadow-lg hover:shadow-xl"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/>
                        </svg>
                        Purchase Now
                    </a>

                    <!-- Trust Indicators -->
                    <div class="mt-8 flex flex-wrap gap-6 text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Instant digital delivery
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Secure payment
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Lifetime access
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Full Description -->
    <section class="py-16 lg:py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-8">About This Product</h2>
            <div class="prose prose-lg prose-rose max-w-none text-gray-700 leading-relaxed">
                {!! nl2br(e($product->description)) !!}
            </div>
        </div>
    </section>

    <!-- What's Included -->
    @if($product->whats_included ?? false)
        <section class="py-16 lg:py-20 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-8">What's Included</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($product->whats_included as $item)
                        <div class="flex items-start gap-3 p-4 bg-rose-50/50 rounded-xl">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-rose-100 flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Testimonials -->
    @if(isset($product->testimonials) && count($product->testimonials) > 0)
        <section class="py-16 lg:py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-12 text-center">What Others Are Saying</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($product->testimonials as $testimonial)
                        <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                            <div class="flex items-center gap-1 mb-4">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-gray-600 leading-relaxed mb-4">"{{ $testimonial->content }}"</p>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-rose-100 flex items-center justify-center">
                                    <span class="text-sm font-semibold text-rose-600">{{ Str::substr($testimonial->author, 0, 1) }}</span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">{{ $testimonial->author }}</p>
                                    @if($testimonial->role ?? false)
                                        <p class="text-xs text-gray-500">{{ $testimonial->role }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Related Products -->
    @if(isset($relatedProducts) && $relatedProducts->count() > 0)
        <section class="py-16 lg:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-12 text-center">You May Also Like</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($relatedProducts as $related)
                        <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-rose-100 transition-all duration-300 overflow-hidden">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                @if($related->image_url)
                                    <img
                                        src="{{ $related->image_url }}"
                                        alt="{{ $related->title }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    >
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-rose-100 via-rose-50 to-amber-50 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-rose-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="font-serif text-lg font-bold text-gray-900 mb-2 group-hover:text-rose-700 transition-colors">
                                    {{ $related->title }}
                                </h3>
                                <div class="flex items-center justify-between">
                                    <span class="text-xl font-bold text-gray-900">${{ number_format($related->price, 2) }}</span>
                                    <a href="{{ route('products.show', $related) }}" class="text-rose-600 font-semibold text-sm hover:text-rose-700 transition-colors">
                                        View Details &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Checkout Section -->
    <section id="checkout" class="py-16 lg:py-20 bg-gradient-to-br from-rose-50 via-white to-amber-50">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl border border-rose-100 p-8 lg:p-10">
                <div class="text-center mb-8">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-2">Complete Your Purchase</h2>
                    <p class="text-gray-600">Get instant access to <span class="font-semibold">{{ $product->title }}</span></p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-gray-900">${{ number_format($product->price, 2) }}</span>
                    </div>
                </div>

                <form id="checkout-form" class="space-y-4" data-checkout>
                    <input type="hidden" name="type" value="product">
                    <input type="hidden" name="item_id" value="{{ $product->id }}">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Your Name</label>
                        <input type="text" name="customer_name" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Your Email</label>
                        <input type="email" name="customer_email" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                    </div>
                    <button type="submit" class="w-full bg-rose-600 text-white py-3 px-6 rounded-lg hover:bg-rose-700 font-semibold">
                        Purchase — ${{ number_format($product->price, 2) }}
                    </button>
                    <div id="checkout-message" class="hidden text-sm mt-2"></div>
                </form>

                <p class="text-center text-xs text-gray-400 mt-6">
                    Secure checkout. Your payment information is encrypted and safe.
                </p>
            </div>
        </div>
    </section>
@endsection
