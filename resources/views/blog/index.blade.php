@extends('layouts.app')

@section('title', 'Blog & Insights')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-rose-50 via-white to-stone-50 py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">Learn & Grow</p>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-stone-900 mb-6">Blog & Insights</h1>
            <p class="text-lg md:text-xl text-stone-600 max-w-2xl mx-auto leading-relaxed">
                Tips, strategies, and insights for growing your business with clarity and confidence.
            </p>
        </div>
    </section>

    <!-- Popular Topics -->
    <section class="bg-white border-b border-stone-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-wrap items-center gap-3">
                <span class="text-stone-700 font-semibold text-sm mr-2">Popular Topics:</span>
                <a href="#" class="inline-block px-4 py-2 bg-rose-50 text-rose-600 text-sm font-medium rounded-full hover:bg-rose-100 transition-colors duration-200 border border-rose-100">
                    Business Strategy
                </a>
                <a href="#" class="inline-block px-4 py-2 bg-stone-50 text-stone-600 text-sm font-medium rounded-full hover:bg-rose-50 hover:text-rose-600 transition-colors duration-200 border border-stone-100 hover:border-rose-100">
                    Marketing Tips
                </a>
                <a href="#" class="inline-block px-4 py-2 bg-stone-50 text-stone-600 text-sm font-medium rounded-full hover:bg-rose-50 hover:text-rose-600 transition-colors duration-200 border border-stone-100 hover:border-rose-100">
                    Mindset
                </a>
                <a href="#" class="inline-block px-4 py-2 bg-stone-50 text-stone-600 text-sm font-medium rounded-full hover:bg-rose-50 hover:text-rose-600 transition-colors duration-200 border border-stone-100 hover:border-rose-100">
                    Branding
                </a>
                <a href="#" class="inline-block px-4 py-2 bg-stone-50 text-stone-600 text-sm font-medium rounded-full hover:bg-rose-50 hover:text-rose-600 transition-colors duration-200 border border-stone-100 hover:border-rose-100">
                    Productivity
                </a>
                <a href="#" class="inline-block px-4 py-2 bg-stone-50 text-stone-600 text-sm font-medium rounded-full hover:bg-rose-50 hover:text-rose-600 transition-colors duration-200 border border-stone-100 hover:border-rose-100">
                    Leadership
                </a>
                <a href="#" class="inline-block px-4 py-2 bg-stone-50 text-stone-600 text-sm font-medium rounded-full hover:bg-rose-50 hover:text-rose-600 transition-colors duration-200 border border-stone-100 hover:border-rose-100">
                    Work-Life Balance
                </a>
            </div>
        </div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if(isset($posts) && $posts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($posts as $post)
                        <article class="bg-white rounded-2xl overflow-hidden border border-stone-100 shadow-sm hover:shadow-md transition-shadow duration-300 group">
                            <!-- Image -->
                            <a href="{{ route('blog.show', $post->slug) }}" class="block overflow-hidden">
                                @if($post->image)
                                    <img
                                        src="{{ $post->image }}"
                                        alt="{{ $post->title }}"
                                        class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500"
                                    >
                                @else
                                    <div class="w-full h-56 bg-gradient-to-br from-rose-200 via-rose-100 to-stone-100 flex items-center justify-center group-hover:scale-105 transition-transform duration-500">
                                        <svg class="w-12 h-12 text-rose-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                        </svg>
                                    </div>
                                @endif
                            </a>

                            <!-- Content -->
                            <div class="p-6">
                                <!-- Category Badge -->
                                @if($post->category)
                                    <span class="inline-block px-3 py-1 bg-rose-50 text-rose-600 text-xs font-semibold rounded-full mb-3 border border-rose-100">
                                        {{ $post->category }}
                                    </span>
                                @endif

                                <!-- Title -->
                                <h2 class="text-xl font-bold text-stone-900 mb-2 group-hover:text-rose-600 transition-colors duration-200">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                        {{ $post->title }}
                                    </a>
                                </h2>

                                <!-- Excerpt -->
                                @if($post->excerpt)
                                    <p class="text-stone-600 text-sm leading-relaxed mb-4 line-clamp-3">
                                        {{ $post->excerpt }}
                                    </p>
                                @endif

                                <!-- Meta -->
                                <div class="flex items-center justify-between pt-4 border-t border-stone-100">
                                    <span class="text-stone-400 text-sm">
                                        {{ $post->created_at->format('M d, Y') }}
                                    </span>
                                    <a
                                        href="{{ route('blog.show', $post->slug) }}"
                                        class="inline-flex items-center text-rose-500 hover:text-rose-600 text-sm font-semibold transition-colors duration-200"
                                    >
                                        Read More
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-16 flex justify-center">
                    {{ $posts->links() }}
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-16">
                    <div class="w-20 h-20 bg-rose-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-rose-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-stone-900 mb-3">Coming Soon!</h2>
                    <p class="text-stone-600 max-w-md mx-auto leading-relaxed">
                        Check back for articles on business growth, marketing strategies, and more. In the meantime, follow me on social media for daily tips and inspiration.
                    </p>
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center mt-8 px-6 py-3 bg-rose-500 text-white font-semibold rounded-full hover:bg-rose-600 transition-colors duration-300 shadow-md"
                    >
                        Stay Connected
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </section>
@endsection
