@extends('layouts.app')

@section('title', 'About Marina')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-rose-50 via-white to-stone-50 py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">Get To Know Me</p>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-stone-900 mb-6">About Marina</h1>
            <p class="text-lg md:text-xl text-stone-600 max-w-2xl mx-auto leading-relaxed">
                Empowering ambitious women to build thriving businesses with clarity, confidence, and strategy that feels authentic.
            </p>
        </div>
    </section>

    <!-- Full-Width Image -->
    <section class="w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10">
            <div class="rounded-2xl overflow-hidden shadow-xl">
                <img
                    src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=1200&q=80"
                    alt="Marina - Business Coach and Strategist"
                    class="w-full h-[400px] md:h-[500px] lg:h-[600px] object-cover object-center"
                >
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <!-- Image Column -->
                <div class="order-2 lg:order-1">
                    <div class="relative">
                        <div class="absolute -top-4 -left-4 w-full h-full bg-rose-100 rounded-2xl"></div>
                        <img
                            src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&q=80"
                            alt="Marina's journey"
                            class="relative rounded-2xl shadow-lg w-full h-[400px] object-cover"
                        >
                    </div>
                </div>
                <!-- Text Column -->
                <div class="order-1 lg:order-2">
                    <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">My Story</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-stone-900 mb-6">From Corporate Burnout to Purpose-Driven Success</h2>
                    <div class="space-y-4 text-stone-600 leading-relaxed">
                        <p>
                            For over a decade, I climbed the corporate ladder, checking every box society told me would bring fulfillment. But deep down, I knew there was something more. I craved the freedom to create on my own terms and the ability to truly make an impact in the lives of other women.
                        </p>
                        <p>
                            In 2018, I took the leap. I left my six-figure corporate position and launched my coaching practice with nothing but a vision and an unwavering belief that women deserve better support in business. Those first months were humbling, exhilarating, and transformative.
                        </p>
                        <p>
                            Today, I have had the privilege of working with hundreds of incredible women, helping them turn their passions into profitable businesses. My approach blends proven business strategy with the heart-centered leadership that makes entrepreneurship feel joyful, not just successful.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Second Story Block -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center mt-20">
                <!-- Text Column -->
                <div>
                    <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">My Approach</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-stone-900 mb-6">Strategy Meets Soul</h2>
                    <div class="space-y-4 text-stone-600 leading-relaxed">
                        <p>
                            I believe that the best businesses are built at the intersection of smart strategy and authentic expression. You do not have to choose between being profitable and being yourself. In fact, the more aligned you are with your values, the faster your business grows.
                        </p>
                        <p>
                            My coaching style is warm, direct, and deeply supportive. I will celebrate your wins and gently challenge you when you are playing small. Together, we will create a roadmap that honors your unique strengths and lifestyle goals while building something truly sustainable.
                        </p>
                        <p>
                            Whether you are just starting out or ready to scale to your next level, I am here to help you do it with grace, clarity, and a whole lot of heart.
                        </p>
                    </div>
                </div>
                <!-- Image Column -->
                <div>
                    <div class="relative">
                        <div class="absolute -bottom-4 -right-4 w-full h-full bg-stone-100 rounded-2xl"></div>
                        <img
                            src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&q=80"
                            alt="Marina coaching session"
                            class="relative rounded-2xl shadow-lg w-full h-[400px] object-cover object-top"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values / Mission Section -->
    <section class="py-20 lg:py-28 bg-stone-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">What I Stand For</p>
                <h2 class="text-3xl md:text-4xl font-bold text-stone-900 mb-4">My Core Values</h2>
                <p class="text-lg text-stone-600 max-w-2xl mx-auto">These principles guide every interaction, every program, and every piece of advice I share.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value Card 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300 border border-stone-100">
                    <div class="w-14 h-14 bg-rose-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-stone-900 mb-3">Authenticity First</h3>
                    <p class="text-stone-600 leading-relaxed">Your business should be a reflection of who you truly are. I help you build from a place of alignment, not imitation.</p>
                </div>

                <!-- Value Card 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300 border border-stone-100">
                    <div class="w-14 h-14 bg-rose-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-stone-900 mb-3">Bold Action</h3>
                    <p class="text-stone-600 leading-relaxed">Dreams without action stay dreams. I believe in moving forward with courage, even when the path is not perfectly clear.</p>
                </div>

                <!-- Value Card 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300 border border-stone-100">
                    <div class="w-14 h-14 bg-rose-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-stone-900 mb-3">Community Over Competition</h3>
                    <p class="text-stone-600 leading-relaxed">We rise by lifting others. I foster a supportive community where women champion each other's success.</p>
                </div>

                <!-- Value Card 4 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300 border border-stone-100">
                    <div class="w-14 h-14 bg-rose-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-stone-900 mb-3">Sustainable Growth</h3>
                    <p class="text-stone-600 leading-relaxed">Hustle culture is not the answer. I teach strategies that create lasting results without sacrificing your well-being.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline / Journey Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">The Journey</p>
                <h2 class="text-3xl md:text-4xl font-bold text-stone-900 mb-4">Key Milestones</h2>
                <p class="text-lg text-stone-600 max-w-2xl mx-auto">Every step of my journey has shaped the coach and mentor I am today.</p>
            </div>

            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-4 md:left-1/2 md:-translate-x-px top-0 bottom-0 w-0.5 bg-rose-200"></div>

                <!-- Milestone 1 -->
                <div class="relative flex flex-col md:flex-row items-start mb-12">
                    <div class="md:w-1/2 md:pr-12 md:text-right pl-12 md:pl-0">
                        <div class="bg-rose-50 rounded-2xl p-6 border border-rose-100">
                            <span class="text-rose-500 font-bold text-sm">2010</span>
                            <h3 class="text-lg font-bold text-stone-900 mt-1 mb-2">Corporate Career Begins</h3>
                            <p class="text-stone-600 text-sm leading-relaxed">Started my career in marketing and business development at a Fortune 500 company, learning the fundamentals of strategy and leadership.</p>
                        </div>
                    </div>
                    <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-rose-500 rounded-full -translate-x-1/2 mt-8 border-4 border-white shadow-sm"></div>
                    <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                </div>

                <!-- Milestone 2 -->
                <div class="relative flex flex-col md:flex-row items-start mb-12">
                    <div class="md:w-1/2 md:pr-12 hidden md:block"></div>
                    <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-rose-500 rounded-full -translate-x-1/2 mt-8 border-4 border-white shadow-sm"></div>
                    <div class="md:w-1/2 md:pl-12 pl-12">
                        <div class="bg-stone-50 rounded-2xl p-6 border border-stone-100">
                            <span class="text-rose-500 font-bold text-sm">2015</span>
                            <h3 class="text-lg font-bold text-stone-900 mt-1 mb-2">Leadership Role & First Mentoring</h3>
                            <p class="text-stone-600 text-sm leading-relaxed">Promoted to senior leadership and began informally mentoring women in the workplace, sparking a passion for helping others succeed.</p>
                        </div>
                    </div>
                </div>

                <!-- Milestone 3 -->
                <div class="relative flex flex-col md:flex-row items-start mb-12">
                    <div class="md:w-1/2 md:pr-12 md:text-right pl-12 md:pl-0">
                        <div class="bg-rose-50 rounded-2xl p-6 border border-rose-100">
                            <span class="text-rose-500 font-bold text-sm">2018</span>
                            <h3 class="text-lg font-bold text-stone-900 mt-1 mb-2">The Leap of Faith</h3>
                            <p class="text-stone-600 text-sm leading-relaxed">Left the corporate world to launch my coaching practice full-time. Enrolled in my first ICF-accredited coaching certification program.</p>
                        </div>
                    </div>
                    <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-rose-500 rounded-full -translate-x-1/2 mt-8 border-4 border-white shadow-sm"></div>
                    <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                </div>

                <!-- Milestone 4 -->
                <div class="relative flex flex-col md:flex-row items-start mb-12">
                    <div class="md:w-1/2 md:pr-12 hidden md:block"></div>
                    <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-rose-500 rounded-full -translate-x-1/2 mt-8 border-4 border-white shadow-sm"></div>
                    <div class="md:w-1/2 md:pl-12 pl-12">
                        <div class="bg-stone-50 rounded-2xl p-6 border border-stone-100">
                            <span class="text-rose-500 font-bold text-sm">2020</span>
                            <h3 class="text-lg font-bold text-stone-900 mt-1 mb-2">First Online Program Launch</h3>
                            <p class="text-stone-600 text-sm leading-relaxed">Launched my signature online coaching program, reaching women across the globe. Surpassed 100 clients in the first year of digital offerings.</p>
                        </div>
                    </div>
                </div>

                <!-- Milestone 5 -->
                <div class="relative flex flex-col md:flex-row items-start mb-12">
                    <div class="md:w-1/2 md:pr-12 md:text-right pl-12 md:pl-0">
                        <div class="bg-rose-50 rounded-2xl p-6 border border-rose-100">
                            <span class="text-rose-500 font-bold text-sm">2022</span>
                            <h3 class="text-lg font-bold text-stone-900 mt-1 mb-2">Community & Retreats</h3>
                            <p class="text-stone-600 text-sm leading-relaxed">Founded an exclusive membership community and hosted the first in-person business retreat, bringing together 50 women entrepreneurs.</p>
                        </div>
                    </div>
                    <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-rose-500 rounded-full -translate-x-1/2 mt-8 border-4 border-white shadow-sm"></div>
                    <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                </div>

                <!-- Milestone 6 -->
                <div class="relative flex flex-col md:flex-row items-start">
                    <div class="md:w-1/2 md:pr-12 hidden md:block"></div>
                    <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-rose-500 rounded-full -translate-x-1/2 mt-8 border-4 border-white shadow-sm"></div>
                    <div class="md:w-1/2 md:pl-12 pl-12">
                        <div class="bg-stone-50 rounded-2xl p-6 border border-stone-100">
                            <span class="text-rose-500 font-bold text-sm">2024 - Present</span>
                            <h3 class="text-lg font-bold text-stone-900 mt-1 mb-2">Scaling Impact</h3>
                            <p class="text-stone-600 text-sm leading-relaxed">Expanded offerings to include courses, digital products, and group coaching. Over 500 women have transformed their businesses through my programs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications / Credentials Section -->
    <section class="py-20 lg:py-28 bg-stone-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">Credentials</p>
                <h2 class="text-3xl md:text-4xl font-bold text-stone-900 mb-4">Certifications & Training</h2>
                <p class="text-lg text-stone-600 max-w-2xl mx-auto">I invest continuously in my own growth so I can bring the best to my clients.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Credential 1 -->
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-stone-100">
                    <div class="w-16 h-16 bg-rose-50 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-stone-900 mb-2">ICF Certified Coach</h3>
                    <p class="text-stone-500 text-sm">Professional Certified Coach (PCC) through the International Coaching Federation</p>
                </div>

                <!-- Credential 2 -->
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-stone-100">
                    <div class="w-16 h-16 bg-rose-50 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-stone-900 mb-2">MBA in Marketing</h3>
                    <p class="text-stone-500 text-sm">Master of Business Administration with a concentration in Marketing Strategy</p>
                </div>

                <!-- Credential 3 -->
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-stone-100">
                    <div class="w-16 h-16 bg-rose-50 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-stone-900 mb-2">NLP Practitioner</h3>
                    <p class="text-stone-500 text-sm">Certified Neuro-Linguistic Programming Practitioner for transformational coaching techniques</p>
                </div>

                <!-- Credential 4 -->
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-stone-100">
                    <div class="w-16 h-16 bg-rose-50 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-stone-900 mb-2">Digital Marketing Certified</h3>
                    <p class="text-stone-500 text-sm">Google and HubSpot certified in digital marketing, content strategy, and inbound methodology</p>
                </div>

                <!-- Credential 5 -->
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-stone-100">
                    <div class="w-16 h-16 bg-rose-50 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-stone-900 mb-2">Featured Speaker</h3>
                    <p class="text-stone-500 text-sm">Keynote speaker at women's business conferences across North America and Europe</p>
                </div>

                <!-- Credential 6 -->
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-stone-100">
                    <div class="w-16 h-16 bg-rose-50 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-stone-900 mb-2">500+ Clients Served</h3>
                    <p class="text-stone-500 text-sm">A growing community of ambitious women who have transformed their businesses and lives</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-rose-500 to-rose-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Build the Business of Your Dreams?</h2>
            <p class="text-lg text-rose-100 mb-10 max-w-2xl mx-auto leading-relaxed">
                I would love to learn more about you and your goals. Let's explore how we can work together to create something extraordinary.
            </p>
            <a
                href="{{ route('services.index') }}"
                class="inline-flex items-center px-8 py-4 bg-white text-rose-600 font-semibold rounded-full hover:bg-rose-50 transition-colors duration-300 shadow-lg hover:shadow-xl"
            >
                Let's Work Together
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </section>
@endsection
