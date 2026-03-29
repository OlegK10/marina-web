@extends('layouts.app')

@section('title', $service->title . ' — Marina')
@section('description', $service->short_description ?? Str::limit($service->description, 160))

@section('content')
    <!-- Service Hero -->
    <section class="relative bg-gradient-to-br from-rose-50 via-white to-amber-50 py-20 lg:py-28">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 right-20 w-80 h-80 bg-rose-300 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-20 w-96 h-96 bg-amber-200 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm text-gray-500 mb-8">
                <a href="/" class="hover:text-rose-600 transition-colors">Home</a>
                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="{{ route('services.index') }}" class="hover:text-rose-600 transition-colors">Services</a>
                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-gray-900 font-medium">{{ $service->title }}</span>
            </nav>

            <div class="max-w-3xl">
                <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-rose-100 text-rose-700 mb-6">Service</span>
                <h1 class="font-serif text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    {{ $service->title }}
                </h1>
                <p class="text-lg text-gray-600 leading-relaxed mb-8">
                    {{ $service->short_description ?? Str::limit($service->description, 250) }}
                </p>

                <!-- Meta Info -->
                <div class="flex flex-wrap items-center gap-6 mb-8">
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-bold text-gray-900">${{ number_format($service->price, 2) }}</span>
                    </div>
                    @if($service->duration ?? false)
                        <div class="flex items-center gap-2 text-gray-600 px-4 py-2 bg-white rounded-full border border-gray-200">
                            <svg class="w-4 h-4 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-sm font-medium">{{ $service->duration }}</span>
                        </div>
                    @endif
                </div>

                <a href="#checkout" class="inline-flex items-center gap-2 px-8 py-4 bg-rose-600 text-white text-lg font-semibold rounded-xl hover:bg-rose-700 transition-colors shadow-lg hover:shadow-xl">
                    Book This Service
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Full Description -->
    <section class="py-16 lg:py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-8">About This Service</h2>
            <div class="prose prose-lg prose-rose max-w-none text-gray-700 leading-relaxed">
                {!! nl2br(e($service->description)) !!}
            </div>
        </div>
    </section>

    <!-- What's Included -->
    @if($service->whats_included ?? false)
        <section class="py-16 lg:py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-4">What's Included</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Everything you get when you book this service.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    @foreach($service->whats_included as $item)
                        <div class="flex items-start gap-4 p-6 bg-white rounded-xl border border-gray-100 shadow-sm">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-rose-100 flex items-center justify-center mt-0.5">
                                <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 leading-relaxed">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- How It Works -->
    <section class="py-16 lg:py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-4">How It Works</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">A simple process to get you started on your transformation.</p>
            </div>
            <div class="space-y-0">
                @php
                    $steps = $service->process ?? [
                        ['title' => 'Book Your Session', 'description' => 'Complete the checkout form below and choose a time that works for you. You\'ll receive a confirmation email with all the details.'],
                        ['title' => 'Pre-Session Preparation', 'description' => 'You\'ll receive a brief questionnaire to help me understand your goals and current situation so we can make the most of our time together.'],
                        ['title' => 'Your Session', 'description' => 'We\'ll meet virtually for a focused, productive session where we\'ll tackle your specific challenges and create an actionable plan.'],
                        ['title' => 'Follow-Up & Support', 'description' => 'After our session, you\'ll receive a summary of key takeaways and action items to keep your momentum going.'],
                    ];
                @endphp
                @foreach($steps as $stepIndex => $step)
                    <div class="relative flex gap-6 pb-12 last:pb-0">
                        <!-- Connector Line -->
                        @if(!$loop->last)
                            <div class="absolute left-6 top-14 w-0.5 h-full bg-rose-100"></div>
                        @endif
                        <!-- Step Number -->
                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-rose-600 flex items-center justify-center text-white font-bold text-lg shadow-lg relative z-10">
                            {{ $stepIndex + 1 }}
                        </div>
                        <!-- Step Content -->
                        <div class="pt-1">
                            <h3 class="font-semibold text-lg text-gray-900 mb-2">{{ $step['title'] }}</h3>
                            <p class="text-gray-600 leading-relaxed">{{ $step['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    @if(isset($service->testimonials) && count($service->testimonials) > 0)
        <section class="py-16 lg:py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-4">Client Testimonials</h2>
                    <p class="text-gray-600">Hear from clients who have experienced this service.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($service->testimonials as $testimonial)
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

    <!-- FAQ Section -->
    @if($service->faqs ?? false)
        <section class="py-16 lg:py-20 bg-white">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                </div>
                <div class="space-y-4" x-data="{ openFaq: null }">
                    @foreach($service->faqs as $faqIndex => $faq)
                        <div class="bg-gray-50 rounded-xl border border-gray-200 overflow-hidden">
                            <button
                                @click="openFaq = openFaq === {{ $faqIndex }} ? null : {{ $faqIndex }}"
                                class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-100 transition-colors"
                            >
                                <span class="font-semibold text-gray-900 pr-4">{{ $faq['question'] }}</span>
                                <svg
                                    class="w-5 h-5 text-gray-400 flex-shrink-0 transition-transform duration-200"
                                    :class="openFaq === {{ $faqIndex }} ? 'rotate-180' : ''"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="openFaq === {{ $faqIndex }}" x-collapse x-cloak class="px-6 pb-6">
                                <p class="text-gray-600 leading-relaxed">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Checkout / Booking Section -->
    <section id="checkout" class="py-16 lg:py-20 bg-gradient-to-br from-rose-50 via-white to-amber-50">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl border border-rose-100 p-8 lg:p-10">
                <div class="text-center mb-8">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-2">Book This Service</h2>
                    <p class="text-gray-600">Secure your spot for <span class="font-semibold">{{ $service->title }}</span></p>
                    <div class="mt-4 flex items-center justify-center gap-3">
                        <span class="text-4xl font-bold text-gray-900">${{ number_format($service->price, 2) }}</span>
                        @if($service->duration ?? false)
                            <span class="text-sm text-gray-500 px-3 py-1 bg-gray-100 rounded-full">{{ $service->duration }}</span>
                        @endif
                    </div>
                </div>

                <form id="checkout-form" class="space-y-4" data-checkout>
                    <input type="hidden" name="type" value="service">
                    <input type="hidden" name="item_id" value="{{ $service->id }}">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Your Name</label>
                        <input type="text" name="customer_name" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Your Email</label>
                        <input type="email" name="customer_email" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                    </div>
                    <button type="submit" class="w-full bg-rose-600 text-white py-3 px-6 rounded-lg hover:bg-rose-700 font-semibold">
                        Purchase — ${{ number_format($service->price, 2) }}
                    </button>
                    <div id="checkout-message" class="hidden text-sm mt-2"></div>
                </form>

                <p class="text-center text-xs text-gray-400 mt-6">
                    Secure checkout. Your payment information is encrypted and safe.
                </p>
            </div>
        </div>
    </section>

    <!-- Not Sure CTA -->
    <section class="py-16 lg:py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gray-50 rounded-2xl p-10 lg:p-14 border border-gray-100">
                <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    Not sure which service is right for you?
                </h2>
                <p class="text-gray-600 leading-relaxed mb-8 max-w-2xl mx-auto">
                    Every business is unique. If you are not sure which service fits your needs best, take a look at all available options or reach out for a free consultation.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-rose-600 text-white text-sm font-semibold rounded-full hover:bg-rose-700 transition-colors shadow-sm">
                        View All Services
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-700 text-sm font-semibold rounded-full hover:bg-gray-50 transition-colors border border-gray-200">
                        Book a Free Call
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
