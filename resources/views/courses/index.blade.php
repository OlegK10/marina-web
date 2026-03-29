@extends('layouts.app')

@section('title', 'Online Courses — Marina')
@section('description', 'Learn at your own pace with expert-led programs designed to grow your business and sharpen your marketing skills.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-rose-50 via-white to-amber-50 py-20 lg:py-28">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-20 w-80 h-80 bg-rose-300 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-20 w-72 h-72 bg-amber-200 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-rose-100 text-rose-700 text-sm font-medium rounded-full mb-6">Self-Paced Learning</span>
            <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                Online Courses
            </h1>
            <p class="max-w-2xl mx-auto text-lg md:text-xl text-gray-600 leading-relaxed">
                Learn at your own pace with expert-led programs
            </p>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($courses->count() > 0)
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    @foreach($courses as $course)
                        <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-rose-100 transition-all duration-300 overflow-hidden">
                            <!-- Course Image -->
                            <div class="relative aspect-[16/9] overflow-hidden">
                                @if($course->image_url)
                                    <img
                                        src="{{ $course->image_url }}"
                                        alt="{{ $course->title }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    >
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-rose-200 via-rose-100 to-amber-100 flex items-center justify-center">
                                        <svg class="w-20 h-20 text-rose-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                @endif
                                <!-- Overlay Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-white/90 text-rose-700 backdrop-blur-sm shadow-sm">
                                        Online Course
                                    </span>
                                </div>
                            </div>

                            <!-- Course Info -->
                            <div class="p-8">
                                <h3 class="font-serif text-2xl font-bold text-gray-900 mb-3 group-hover:text-rose-700 transition-colors">
                                    {{ $course->title }}
                                </h3>
                                <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">
                                    {{ $course->short_description ?? Str::limit($course->description, 180) }}
                                </p>

                                <!-- Course Meta -->
                                <div class="flex flex-wrap gap-4 mb-6 pb-6 border-b border-gray-100">
                                    @if($course->lessons_count ?? false)
                                        <div class="flex items-center gap-2 text-sm text-gray-500">
                                            <svg class="w-4 h-4 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                            </svg>
                                            {{ $course->lessons_count }} Lessons
                                        </div>
                                    @endif
                                    @if($course->duration ?? false)
                                        <div class="flex items-center gap-2 text-sm text-gray-500">
                                            <svg class="w-4 h-4 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            {{ $course->duration }}
                                        </div>
                                    @endif
                                    @if($course->level ?? false)
                                        <div class="flex items-center gap-2 text-sm text-gray-500">
                                            <svg class="w-4 h-4 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                            </svg>
                                            {{ ucfirst($course->level) }}
                                        </div>
                                    @endif
                                </div>

                                <!-- Price & CTA -->
                                <div class="flex items-center justify-between">
                                    <div>
                                        <span class="text-3xl font-bold text-gray-900">${{ number_format($course->price, 2) }}</span>
                                    </div>
                                    <a
                                        href="{{ route('courses.show', $course) }}"
                                        class="inline-flex items-center gap-2 px-6 py-3 bg-rose-600 text-white text-sm font-semibold rounded-full hover:bg-rose-700 transition-colors shadow-sm"
                                    >
                                        Enroll Now
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-gray-900 mb-3">Courses Coming Soon</h3>
                    <p class="text-gray-600 mb-8 max-w-md mx-auto">
                        New courses are being developed to help you take your business to the next level. Stay tuned for launch announcements.
                    </p>
                    <a href="/contact" class="inline-flex items-center px-6 py-3 bg-rose-600 text-white text-sm font-semibold rounded-full hover:bg-rose-700 transition-colors shadow-sm">
                        Get Notified
                    </a>
                </div>
            @endif
        </div>
    </section>
@endsection
