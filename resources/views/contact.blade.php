@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-rose-50 via-white to-stone-50 py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">Let's Connect</p>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-stone-900 mb-6">Get In Touch</h1>
            <p class="text-lg md:text-xl text-stone-600 max-w-2xl mx-auto leading-relaxed">
                Have a question or ready to start your transformation? I would love to hear from you. Fill out the form below and I will be in touch soon.
            </p>
        </div>
    </section>

    <!-- Success Message -->
    @if(session('success'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
            <div class="bg-green-50 border border-green-200 rounded-2xl p-6 flex items-start">
                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div>
                    <h3 class="text-green-800 font-semibold">Message Sent Successfully!</h3>
                    <p class="text-green-700 mt-1">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- Contact Form & Info -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16">
                <!-- Left Column: Contact Form -->
                <div class="lg:col-span-3">
                    <div class="bg-stone-50 rounded-2xl p-8 md:p-10 border border-stone-100">
                        <h2 class="text-2xl font-bold text-stone-900 mb-2">Send a Message</h2>
                        <p class="text-stone-500 mb-8">Fill out the form and I will get back to you within 24-48 business hours.</p>

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf

                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-semibold text-stone-700 mb-2">Full Name <span class="text-rose-500">*</span></label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Your full name"
                                    required
                                    class="w-full px-4 py-3 rounded-xl border border-stone-200 bg-white text-stone-900 placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-rose-300 focus:border-rose-300 transition-colors duration-200"
                                >
                                @error('name')
                                    <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-stone-700 mb-2">Email Address <span class="text-rose-500">*</span></label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="you@example.com"
                                    required
                                    class="w-full px-4 py-3 rounded-xl border border-stone-200 bg-white text-stone-900 placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-rose-300 focus:border-rose-300 transition-colors duration-200"
                                >
                                @error('email')
                                    <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-stone-700 mb-2">Phone Number</label>
                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="+1 (555) 123-4567"
                                    class="w-full px-4 py-3 rounded-xl border border-stone-200 bg-white text-stone-900 placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-rose-300 focus:border-rose-300 transition-colors duration-200"
                                >
                                @error('phone')
                                    <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Subject -->
                            <div>
                                <label for="subject" class="block text-sm font-semibold text-stone-700 mb-2">Subject <span class="text-rose-500">*</span></label>
                                <select
                                    id="subject"
                                    name="subject"
                                    required
                                    class="w-full px-4 py-3 rounded-xl border border-stone-200 bg-white text-stone-900 focus:outline-none focus:ring-2 focus:ring-rose-300 focus:border-rose-300 transition-colors duration-200"
                                >
                                    <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Select a topic...</option>
                                    <option value="1:1 Coaching" {{ old('subject') == '1:1 Coaching' ? 'selected' : '' }}>1:1 Coaching Inquiry</option>
                                    <option value="Group Programs" {{ old('subject') == 'Group Programs' ? 'selected' : '' }}>Group Programs</option>
                                    <option value="Courses" {{ old('subject') == 'Courses' ? 'selected' : '' }}>Courses & Digital Products</option>
                                    <option value="Speaking" {{ old('subject') == 'Speaking' ? 'selected' : '' }}>Speaking Engagement</option>
                                    <option value="Collaboration" {{ old('subject') == 'Collaboration' ? 'selected' : '' }}>Collaboration / Partnership</option>
                                    <option value="General" {{ old('subject') == 'General' ? 'selected' : '' }}>General Question</option>
                                    <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('subject')
                                    <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-semibold text-stone-700 mb-2">Message <span class="text-rose-500">*</span></label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    placeholder="Tell me a little about yourself and how I can help..."
                                    required
                                    class="w-full px-4 py-3 rounded-xl border border-stone-200 bg-white text-stone-900 placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-rose-300 focus:border-rose-300 transition-colors duration-200 resize-vertical"
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button
                                    type="submit"
                                    class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-rose-500 text-white font-semibold rounded-full hover:bg-rose-600 transition-colors duration-300 shadow-md hover:shadow-lg"
                                >
                                    Send Message
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Column: Contact Info -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Contact Details -->
                    <div class="bg-rose-50 rounded-2xl p-8 border border-rose-100">
                        <h3 class="text-xl font-bold text-stone-900 mb-6">Contact Information</h3>
                        <div class="space-y-5">
                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-rose-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                    <svg class="w-5 h-5 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-stone-700">Email</p>
                                    <a href="mailto:hello@marinacoaching.com" class="text-rose-600 hover:text-rose-700 transition-colors">hello@marinacoaching.com</a>
                                </div>
                            </div>
                            <!-- Phone -->
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-rose-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                    <svg class="w-5 h-5 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-stone-700">Phone</p>
                                    <a href="tel:+15551234567" class="text-rose-600 hover:text-rose-700 transition-colors">+1 (555) 123-4567</a>
                                </div>
                            </div>
                            <!-- Location -->
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-rose-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                    <svg class="w-5 h-5 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-stone-700">Location</p>
                                    <p class="text-stone-600">Los Angeles, CA</p>
                                    <p class="text-stone-500 text-sm">Available worldwide via Zoom</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="bg-white rounded-2xl p-8 border border-stone-100 shadow-sm">
                        <h3 class="text-xl font-bold text-stone-900 mb-6">Follow Along</h3>
                        <div class="flex flex-wrap gap-3">
                            <a href="#" class="inline-flex items-center px-4 py-2.5 bg-stone-50 hover:bg-rose-50 text-stone-600 hover:text-rose-600 rounded-xl transition-colors duration-200 border border-stone-100 hover:border-rose-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                Instagram
                            </a>
                            <a href="#" class="inline-flex items-center px-4 py-2.5 bg-stone-50 hover:bg-rose-50 text-stone-600 hover:text-rose-600 rounded-xl transition-colors duration-200 border border-stone-100 hover:border-rose-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 01-1.93.07 4.28 4.28 0 004 2.98 8.521 8.521 0 01-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/></svg>
                                Twitter
                            </a>
                            <a href="#" class="inline-flex items-center px-4 py-2.5 bg-stone-50 hover:bg-rose-50 text-stone-600 hover:text-rose-600 rounded-xl transition-colors duration-200 border border-stone-100 hover:border-rose-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                LinkedIn
                            </a>
                            <a href="#" class="inline-flex items-center px-4 py-2.5 bg-stone-50 hover:bg-rose-50 text-stone-600 hover:text-rose-600 rounded-xl transition-colors duration-200 border border-stone-100 hover:border-rose-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                YouTube
                            </a>
                            <a href="#" class="inline-flex items-center px-4 py-2.5 bg-stone-50 hover:bg-rose-50 text-stone-600 hover:text-rose-600 rounded-xl transition-colors duration-200 border border-stone-100 hover:border-rose-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12.017 24c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641 0 12.017 0z"/></svg>
                                Pinterest
                            </a>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="bg-white rounded-2xl p-8 border border-stone-100 shadow-sm">
                        <h3 class="text-xl font-bold text-stone-900 mb-6">Office Hours</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-stone-100">
                                <span class="text-stone-600 font-medium">Monday - Friday</span>
                                <span class="text-stone-900 font-semibold">9:00 AM - 5:00 PM PST</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-stone-100">
                                <span class="text-stone-600 font-medium">Saturday</span>
                                <span class="text-stone-900 font-semibold">10:00 AM - 2:00 PM PST</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="text-stone-600 font-medium">Sunday</span>
                                <span class="text-stone-500">Closed</span>
                            </div>
                        </div>
                        <p class="text-stone-500 text-sm mt-4">Response time: within 24-48 business hours</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Placeholder -->
    <section class="bg-stone-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="bg-stone-200 rounded-2xl h-[400px] flex items-center justify-center overflow-hidden relative">
                <div class="text-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                        <svg class="w-8 h-8 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <p class="text-stone-600 font-semibold text-lg">Los Angeles, California</p>
                    <p class="text-stone-500 text-sm mt-1">Serving clients worldwide via virtual sessions</p>
                </div>
                <!-- Decorative Map Grid -->
                <div class="absolute inset-0 opacity-10">
                    <div class="w-full h-full" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 39px, #78716c 39px, #78716c 40px), repeating-linear-gradient(90deg, transparent, transparent 39px, #78716c 39px, #78716c 40px);"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Mini-Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">Common Questions</p>
                <h2 class="text-3xl md:text-4xl font-bold text-stone-900 mb-4">Before You Reach Out...</h2>
                <p class="text-lg text-stone-600">Here are answers to some of the most common questions I receive.</p>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-stone-50 rounded-2xl p-6 border border-stone-100">
                    <h3 class="text-lg font-bold text-stone-900 mb-2">How quickly will I hear back from you?</h3>
                    <p class="text-stone-600 leading-relaxed">I typically respond to all inquiries within 24-48 business hours. If your matter is urgent, please indicate that in your subject line and I will do my best to get back to you sooner.</p>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-stone-50 rounded-2xl p-6 border border-stone-100">
                    <h3 class="text-lg font-bold text-stone-900 mb-2">Do you offer free consultations?</h3>
                    <p class="text-stone-600 leading-relaxed">Yes! I offer a complimentary 30-minute discovery call for potential coaching clients. This is a chance for us to connect, discuss your goals, and determine if we are a great fit to work together. Select "1:1 Coaching Inquiry" in the form above to get started.</p>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-stone-50 rounded-2xl p-6 border border-stone-100">
                    <h3 class="text-lg font-bold text-stone-900 mb-2">I am not sure which service is right for me. Can you help?</h3>
                    <p class="text-stone-600 leading-relaxed">Absolutely! Tell me a bit about where you are in your business and where you want to go, and I will recommend the best program or service for your needs. There is no one-size-fits-all approach here.</p>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-stone-50 rounded-2xl p-6 border border-stone-100">
                    <h3 class="text-lg font-bold text-stone-900 mb-2">Do you work with clients outside of the US?</h3>
                    <p class="text-stone-600 leading-relaxed">Yes! I work with ambitious women all over the world. All of my coaching sessions and programs are available online, making it easy to connect no matter where you are located. I accommodate various time zones for live sessions.</p>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-stone-50 rounded-2xl p-6 border border-stone-100">
                    <h3 class="text-lg font-bold text-stone-900 mb-2">Are you available for speaking engagements or collaborations?</h3>
                    <p class="text-stone-600 leading-relaxed">I love connecting with like-minded brands and organizations! Please select "Speaking Engagement" or "Collaboration / Partnership" from the subject dropdown and share the details. I review every request personally.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
