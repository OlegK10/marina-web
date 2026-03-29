@extends('layouts.app')

@section('title', 'Services — Marina')
@section('description', 'Personalized business coaching, marketing mentorship, and strategy services to accelerate your growth.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-rose-50 via-white to-amber-50 py-20 lg:py-28">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-1/4 w-80 h-80 bg-rose-300 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-1/4 w-72 h-72 bg-amber-200 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-rose-100 text-rose-700 text-sm font-medium rounded-full mb-6">Work With Me</span>
            <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                Services
            </h1>
            <p class="max-w-2xl mx-auto text-lg md:text-xl text-gray-600 leading-relaxed">
                Personalized support for your business journey
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($services->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($services as $service)
                        <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-rose-100 transition-all duration-300 overflow-hidden flex flex-col">
                            <!-- Icon / Image Area -->
                            <div class="p-8 pb-0">
                                @if($service->image_url ?? false)
                                    <div class="aspect-[16/10] rounded-xl overflow-hidden mb-6">
                                        <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    </div>
                                @else
                                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-rose-100 to-rose-50 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            @if($loop->index % 3 === 0)
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                            @elseif($loop->index % 3 === 1)
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                                            @endif
                                        </svg>
                                    </div>
                                @endif
                            </div>

                            <!-- Service Info -->
                            <div class="p-8 pt-0 flex flex-col flex-1">
                                <h3 class="font-serif text-xl font-bold text-gray-900 mb-3 group-hover:text-rose-700 transition-colors">
                                    {{ $service->title }}
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-1">
                                    {{ $service->short_description ?? Str::limit($service->description, 150) }}
                                </p>

                                <!-- Duration & Price -->
                                <div class="space-y-3 mb-6 pb-6 border-b border-gray-100">
                                    @if($service->duration ?? false)
                                        <div class="flex items-center gap-2 text-sm text-gray-500">
                                            <svg class="w-4 h-4 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            {{ $service->duration }}
                                        </div>
                                    @endif
                                    <div class="flex items-baseline gap-1">
                                        <span class="text-sm text-gray-500">Starting at</span>
                                        <span class="text-2xl font-bold text-gray-900">${{ number_format($service->price, 2) }}</span>
                                    </div>
                                </div>

                                <!-- CTA -->
                                <a
                                    href="{{ route('services.show', $service) }}"
                                    class="inline-flex items-center justify-center gap-2 w-full px-6 py-3 bg-rose-600 text-white text-sm font-semibold rounded-full hover:bg-rose-700 transition-colors shadow-sm"
                                >
                                    Learn More
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-16 px-4">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-rose-50 flex items-center justify-center">
                        <svg class="w-10 h-10 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-gray-900 mb-3">Services Coming Soon</h3>
                    <p class="text-gray-600 mb-8 max-w-md mx-auto">
                        Exciting new service offerings are being prepared. Check back soon or reach out to learn more.
                    </p>
                    <a href="/contact" class="inline-flex items-center px-6 py-3 bg-rose-600 text-white text-sm font-semibold rounded-full hover:bg-rose-700 transition-colors shadow-sm">
                        Get in Touch
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Comparison / Features Section -->
    @if($services->count() > 1)
        <section class="py-16 lg:py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-gray-900 mb-4">Compare Services</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Find the perfect level of support for where you are in your business journey.</p>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <thead>
                            <tr class="border-b border-gray-100">
                                <th class="text-left p-6 text-sm font-semibold text-gray-900 bg-gray-50">Feature</th>
                                @foreach($services as $service)
                                    <th class="text-center p-6 text-sm font-semibold text-gray-900 bg-gray-50 min-w-[160px]">
                                        {{ $service->title }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr>
                                <td class="p-6 text-sm text-gray-700">Duration</td>
                                @foreach($services as $service)
                                    <td class="p-6 text-center text-sm text-gray-600">
                                        {{ $service->duration ?? 'Varies' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td class="p-6 text-sm text-gray-700">Price</td>
                                @foreach($services as $service)
                                    <td class="p-6 text-center text-sm font-semibold text-gray-900">
                                        ${{ number_format($service->price, 2) }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td class="p-6 text-sm text-gray-700">Personalized Strategy</td>
                                @foreach($services as $service)
                                    <td class="p-6 text-center">
                                        <svg class="w-5 h-5 text-rose-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td class="p-6 text-sm text-gray-700">Follow-up Support</td>
                                @foreach($services as $service)
                                    <td class="p-6 text-center">
                                        @if($service->price >= 200)
                                            <svg class="w-5 h-5 text-rose-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        @else
                                            <svg class="w-5 h-5 text-gray-300 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td class="p-6 text-sm text-gray-700"></td>
                                @foreach($services as $service)
                                    <td class="p-6 text-center">
                                        <a href="{{ route('services.show', $service) }}" class="inline-flex items-center px-4 py-2 bg-rose-600 text-white text-xs font-semibold rounded-full hover:bg-rose-700 transition-colors">
                                            Choose
                                        </a>
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    @endif

    <!-- Booking CTA Section -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 right-10 w-96 h-96 bg-rose-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-72 h-72 bg-amber-400 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Transform Your Business?
            </h2>
            <p class="text-lg text-gray-300 leading-relaxed mb-10 max-w-2xl mx-auto">
                Not sure which service is right for you? Let's chat. Book a free discovery call and together we'll find the perfect path forward for your unique goals.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/contact" class="inline-flex items-center gap-2 px-8 py-4 bg-rose-600 text-white text-lg font-semibold rounded-xl hover:bg-rose-700 transition-colors shadow-lg hover:shadow-xl">
                    Book a Free Discovery Call
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="/about" class="inline-flex items-center gap-2 px-8 py-4 bg-white/10 text-white text-lg font-semibold rounded-xl hover:bg-white/20 transition-colors border border-white/20">
                    Learn About Marina
                </a>
            </div>
        </div>
    </section>
@endsection
