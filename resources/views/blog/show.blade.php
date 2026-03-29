@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <!-- Hero Image -->
    <section class="relative bg-stone-900">
        @if($post->image)
            <div class="w-full h-[300px] md:h-[450px] lg:h-[500px] relative">
                <img
                    src="{{ $post->image }}"
                    alt="{{ $post->title }}"
                    class="w-full h-full object-cover opacity-60"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 to-stone-900/20"></div>
            </div>
        @else
            <div class="w-full h-[300px] md:h-[400px] bg-gradient-to-br from-rose-400 via-rose-300 to-stone-300">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/60 to-transparent"></div>
            </div>
        @endif

        <!-- Title Overlay -->
        <div class="absolute bottom-0 left-0 right-0">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pb-10 md:pb-14">
                @if($post->category)
                    <span class="inline-block px-3 py-1 bg-rose-500 text-white text-xs font-semibold rounded-full mb-4">
                        {{ $post->category }}
                    </span>
                @endif
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight">
                    {{ $post->title }}
                </h1>
            </div>
        </div>
    </section>

    <!-- Article Meta -->
    <section class="bg-white border-b border-stone-100">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-wrap items-center gap-4 text-sm text-stone-500">
                <!-- Author -->
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-rose-100 rounded-full flex items-center justify-center mr-2">
                        <svg class="w-4 h-4 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <span class="font-medium text-stone-700">{{ $post->author ?? 'Marina' }}</span>
                </div>

                <span class="text-stone-300">|</span>

                <!-- Date -->
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-stone-400 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>{{ $post->created_at->format('F j, Y') }}</span>
                </div>

                <span class="text-stone-300">|</span>

                <!-- Reading Time -->
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-stone-400 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>{{ max(1, ceil(str_word_count(strip_tags($post->content)) / 200)) }} min read</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <article class="py-12 md:py-16 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg prose-stone max-w-none
                prose-headings:text-stone-900 prose-headings:font-bold
                prose-h2:text-2xl prose-h2:mt-10 prose-h2:mb-4
                prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
                prose-p:text-stone-600 prose-p:leading-relaxed prose-p:mb-6
                prose-a:text-rose-500 prose-a:no-underline hover:prose-a:text-rose-600 hover:prose-a:underline
                prose-strong:text-stone-800
                prose-blockquote:border-rose-300 prose-blockquote:bg-rose-50 prose-blockquote:rounded-r-xl prose-blockquote:py-1 prose-blockquote:px-6 prose-blockquote:not-italic prose-blockquote:text-stone-600
                prose-img:rounded-2xl prose-img:shadow-md
                prose-ul:text-stone-600 prose-ol:text-stone-600
                prose-li:marker:text-rose-400
            ">
                {!! $post->content !!}
            </div>
        </div>
    </article>

    <!-- Share Buttons -->
    <section class="bg-stone-50 border-t border-b border-stone-100">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <span class="text-stone-700 font-semibold">Share this article:</span>
                <div class="flex items-center gap-3">
                    <!-- Twitter -->
                    <a
                        href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center px-4 py-2.5 bg-white text-stone-600 hover:text-sky-500 hover:border-sky-200 rounded-xl border border-stone-200 transition-colors duration-200"
                    >
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 01-1.93.07 4.28 4.28 0 004 2.98 8.521 8.521 0 01-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/></svg>
                        Twitter
                    </a>

                    <!-- Facebook -->
                    <a
                        href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center px-4 py-2.5 bg-white text-stone-600 hover:text-blue-600 hover:border-blue-200 rounded-xl border border-stone-200 transition-colors duration-200"
                    >
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        Facebook
                    </a>

                    <!-- LinkedIn -->
                    <a
                        href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center px-4 py-2.5 bg-white text-stone-600 hover:text-blue-700 hover:border-blue-200 rounded-xl border border-stone-200 transition-colors duration-200"
                    >
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Blog -->
    <section class="bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <a
                href="{{ route('blog.index') }}"
                class="inline-flex items-center text-rose-500 hover:text-rose-600 font-semibold transition-colors duration-200"
            >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to All Articles
            </a>
        </div>
    </section>

    <!-- Related Posts -->
    <section class="py-20 lg:py-28 bg-stone-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">Keep Reading</p>
                <h2 class="text-3xl font-bold text-stone-900">You Might Also Enjoy</h2>
            </div>

            @if(isset($relatedPosts) && $relatedPosts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($relatedPosts as $related)
                        <article class="bg-white rounded-2xl overflow-hidden border border-stone-100 shadow-sm hover:shadow-md transition-shadow duration-300 group">
                            <a href="{{ route('blog.show', $related->slug) }}" class="block overflow-hidden">
                                @if($related->image)
                                    <img
                                        src="{{ $related->image }}"
                                        alt="{{ $related->title }}"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500"
                                    >
                                @else
                                    <div class="w-full h-48 bg-gradient-to-br from-rose-200 via-rose-100 to-stone-100 flex items-center justify-center group-hover:scale-105 transition-transform duration-500">
                                        <svg class="w-10 h-10 text-rose-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                        </svg>
                                    </div>
                                @endif
                            </a>
                            <div class="p-5">
                                @if($related->category)
                                    <span class="inline-block px-2.5 py-0.5 bg-rose-50 text-rose-600 text-xs font-semibold rounded-full mb-2">
                                        {{ $related->category }}
                                    </span>
                                @endif
                                <h3 class="text-lg font-bold text-stone-900 group-hover:text-rose-600 transition-colors duration-200">
                                    <a href="{{ route('blog.show', $related->slug) }}">{{ $related->title }}</a>
                                </h3>
                                <p class="text-stone-400 text-sm mt-2">{{ $related->created_at->format('M d, Y') }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl overflow-hidden border border-stone-100 shadow-sm">
                        <div class="w-full h-48 bg-gradient-to-br from-rose-200 via-rose-100 to-stone-100"></div>
                        <div class="p-5">
                            <div class="h-3 bg-stone-100 rounded-full w-20 mb-3"></div>
                            <div class="h-5 bg-stone-100 rounded-full w-full mb-2"></div>
                            <div class="h-5 bg-stone-100 rounded-full w-3/4"></div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl overflow-hidden border border-stone-100 shadow-sm">
                        <div class="w-full h-48 bg-gradient-to-br from-stone-200 via-stone-100 to-rose-50"></div>
                        <div class="p-5">
                            <div class="h-3 bg-stone-100 rounded-full w-20 mb-3"></div>
                            <div class="h-5 bg-stone-100 rounded-full w-full mb-2"></div>
                            <div class="h-5 bg-stone-100 rounded-full w-3/4"></div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl overflow-hidden border border-stone-100 shadow-sm">
                        <div class="w-full h-48 bg-gradient-to-br from-rose-100 via-stone-100 to-rose-200"></div>
                        <div class="p-5">
                            <div class="h-3 bg-stone-100 rounded-full w-20 mb-3"></div>
                            <div class="h-5 bg-stone-100 rounded-full w-full mb-2"></div>
                            <div class="h-5 bg-stone-100 rounded-full w-3/4"></div>
                        </div>
                    </div>
                </div>
                <p class="text-center text-stone-500 mt-8">More articles coming soon. Stay tuned!</p>
            @endif
        </div>
    </section>

    <!-- Newsletter CTA -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-rose-500 to-rose-600">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Never Miss an Insight</h2>
            <p class="text-lg text-rose-100 mb-8 max-w-xl mx-auto leading-relaxed">
                Join my newsletter and get weekly tips on business growth, mindset shifts, and strategies delivered straight to your inbox.
            </p>
            <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex flex-col sm:flex-row gap-3 max-w-lg mx-auto">
                @csrf
                <input
                    type="email"
                    name="email"
                    placeholder="Enter your email address"
                    required
                    class="flex-1 px-5 py-4 rounded-full bg-white/20 text-white placeholder-rose-200 border border-white/30 focus:outline-none focus:ring-2 focus:ring-white/50 focus:bg-white/25 transition-colors duration-200"
                >
                <button
                    type="submit"
                    class="px-8 py-4 bg-white text-rose-600 font-semibold rounded-full hover:bg-rose-50 transition-colors duration-300 shadow-lg hover:shadow-xl whitespace-nowrap"
                >
                    Subscribe
                </button>
            </form>
            <p class="text-rose-200 text-sm mt-4">No spam, ever. Unsubscribe anytime.</p>
        </div>
    </section>
@endsection
