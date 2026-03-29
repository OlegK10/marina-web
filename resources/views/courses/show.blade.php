@extends('layouts.app')

@section('title', $course->title . ' — Marina')
@section('description', $course->short_description ?? Str::limit($course->description, 160))

@section('content')
    <!-- Course Hero -->
    <section class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 py-20 lg:py-28 overflow-hidden">
        @if($course->image_url)
            <div class="absolute inset-0">
                <img src="{{ $course->image_url }}" alt="{{ $course->title }}" class="w-full h-full object-cover opacity-20">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/95 via-gray-900/80 to-gray-900/60"></div>
            </div>
        @else
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-10 right-10 w-96 h-96 bg-rose-500 rounded-full blur-3xl"></div>
                <div class="absolute bottom-10 left-10 w-72 h-72 bg-amber-400 rounded-full blur-3xl"></div>
            </div>
        @endif
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm text-gray-400 mb-8">
                <a href="/" class="hover:text-rose-400 transition-colors">Home</a>
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="{{ route('courses.index') }}" class="hover:text-rose-400 transition-colors">Courses</a>
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-gray-300">{{ $course->title }}</span>
            </nav>

            <div class="max-w-3xl">
                <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-rose-500/20 text-rose-300 border border-rose-500/30 mb-6">
                    Online Course
                </span>
                <h1 class="font-serif text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
                    {{ $course->title }}
                </h1>
                <p class="text-lg text-gray-300 leading-relaxed mb-8">
                    {{ $course->short_description ?? Str::limit($course->description, 200) }}
                </p>

                <!-- Key Info -->
                <div class="flex flex-wrap gap-6 mb-8">
                    @if($course->lessons_count ?? false)
                        <div class="flex items-center gap-2 text-gray-300">
                            <svg class="w-5 h-5 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <span class="text-sm font-medium">{{ $course->lessons_count }} Lessons</span>
                        </div>
                    @endif
                    @if($course->duration ?? false)
                        <div class="flex items-center gap-2 text-gray-300">
                            <svg class="w-5 h-5 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-sm font-medium">{{ $course->duration }}</span>
                        </div>
                    @endif
                    @if($course->level ?? false)
                        <div class="flex items-center gap-2 text-gray-300">
                            <svg class="w-5 h-5 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            <span class="text-sm font-medium">{{ ucfirst($course->level) }}</span>
                        </div>
                    @endif
                </div>

                <!-- Price & CTA -->
                <div class="flex flex-wrap items-center gap-6">
                    <span class="text-4xl font-bold text-white">${{ number_format($course->price, 2) }}</span>
                    <a href="#checkout" class="inline-flex items-center gap-2 px-8 py-4 bg-rose-600 text-white text-lg font-semibold rounded-xl hover:bg-rose-700 transition-colors shadow-lg hover:shadow-xl">
                        Enroll Now
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What You'll Learn -->
    @if($course->learning_outcomes ?? false)
        <section class="py-16 lg:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-4">What You'll Learn</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">By the end of this course, you will have the knowledge and skills to transform your business.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-4xl mx-auto">
                    @foreach($course->learning_outcomes as $outcome)
                        <div class="flex items-start gap-4 p-5 bg-rose-50/50 rounded-xl">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-rose-100 flex items-center justify-center mt-0.5">
                                <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 leading-relaxed">{{ $outcome }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Course Curriculum -->
    @if($course->curriculum ?? false)
        <section class="py-16 lg:py-20 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-4">Course Curriculum</h2>
                    <p class="text-gray-600">A structured path to help you master every concept.</p>
                </div>
                <div class="space-y-4" x-data="{ openModule: null }">
                    @foreach($course->curriculum as $index => $module)
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button
                                @click="openModule = openModule === {{ $index }} ? null : {{ $index }}"
                                class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors"
                            >
                                <div class="flex items-center gap-4">
                                    <span class="flex-shrink-0 w-10 h-10 rounded-full bg-rose-100 flex items-center justify-center text-sm font-bold text-rose-600">
                                        {{ $index + 1 }}
                                    </span>
                                    <div>
                                        <h3 class="font-semibold text-gray-900">{{ $module['title'] }}</h3>
                                        @if($module['description'] ?? false)
                                            <p class="text-sm text-gray-500 mt-1">{{ $module['description'] }}</p>
                                        @endif
                                    </div>
                                </div>
                                <svg
                                    class="w-5 h-5 text-gray-400 transition-transform duration-200"
                                    :class="openModule === {{ $index }} ? 'rotate-180' : ''"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="openModule === {{ $index }}" x-collapse x-cloak class="border-t border-gray-100">
                                @if(isset($module['lessons']) && count($module['lessons']) > 0)
                                    <ul class="divide-y divide-gray-50">
                                        @foreach($module['lessons'] as $lesson)
                                            <li class="px-6 py-4 flex items-center gap-3">
                                                <svg class="w-4 h-4 text-rose-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                                <span class="text-sm text-gray-700">{{ $lesson }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Full Description -->
    <section class="py-16 lg:py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-8">About This Course</h2>
            <div class="prose prose-lg prose-rose max-w-none text-gray-700 leading-relaxed">
                {!! nl2br(e($course->description)) !!}
            </div>
        </div>
    </section>

    <!-- Instructor Section -->
    <section class="py-16 lg:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900">Meet Your Instructor</h2>
            </div>
            <div class="max-w-3xl mx-auto flex flex-col md:flex-row items-center gap-8 bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                <div class="flex-shrink-0">
                    <div class="w-32 h-32 rounded-full bg-gradient-to-br from-rose-200 to-amber-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=300&h=300&fit=crop" alt="Marina" class="w-full h-full object-cover">
                    </div>
                </div>
                <div>
                    <h3 class="font-serif text-xl font-bold text-gray-900 mb-2">Marina</h3>
                    <p class="text-rose-600 text-sm font-medium mb-4">Business Coach & Marketing Mentor</p>
                    <p class="text-gray-600 leading-relaxed">
                        With years of experience helping entrepreneurs scale their businesses, Marina brings practical, actionable strategies to every course. Her unique approach combines proven marketing frameworks with mindset coaching to help you achieve lasting results.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    @if(isset($course->testimonials) && count($course->testimonials) > 0)
        <section class="py-16 lg:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-4">Student Reviews</h2>
                    <p class="text-gray-600">Hear from students who have completed this course.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($course->testimonials as $testimonial)
                        <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100">
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
    @if($course->faqs ?? false)
        <section class="py-16 lg:py-20 bg-gray-50">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                </div>
                <div class="space-y-4" x-data="{ openFaq: null }">
                    @foreach($course->faqs as $faqIndex => $faq)
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button
                                @click="openFaq = openFaq === {{ $faqIndex }} ? null : {{ $faqIndex }}"
                                class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors"
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

    <!-- Checkout Section -->
    <section id="checkout" class="py-16 lg:py-20 bg-gradient-to-br from-rose-50 via-white to-amber-50">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl border border-rose-100 p-8 lg:p-10">
                <div class="text-center mb-8">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-2">Enroll Today</h2>
                    <p class="text-gray-600">Get full access to <span class="font-semibold">{{ $course->title }}</span></p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-gray-900">${{ number_format($course->price, 2) }}</span>
                        <span class="text-sm text-gray-500 ml-2">one-time payment</span>
                    </div>
                </div>

                <!-- What's Included Summary -->
                <div class="mb-8 p-4 bg-rose-50/50 rounded-xl">
                    <ul class="space-y-2 text-sm text-gray-700">
                        @if($course->lessons_count ?? false)
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $course->lessons_count }} comprehensive lessons
                            </li>
                        @endif
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Lifetime access to all materials
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Learn at your own pace
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Certificate of completion
                        </li>
                    </ul>
                </div>

                <form id="checkout-form" class="space-y-4" data-checkout>
                    <input type="hidden" name="type" value="course">
                    <input type="hidden" name="item_id" value="{{ $course->id }}">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Your Name</label>
                        <input type="text" name="customer_name" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Your Email</label>
                        <input type="email" name="customer_email" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                    </div>
                    <button type="submit" class="w-full bg-rose-600 text-white py-3 px-6 rounded-lg hover:bg-rose-700 font-semibold">
                        Purchase — ${{ number_format($course->price, 2) }}
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
