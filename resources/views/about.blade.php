@extends('layouts.app')

@section('title', 'O mně — Marina')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-rose-50 via-white to-stone-50 py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">O mně</p>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-stone-900 mb-6 font-serif">Marina</h1>
            <p class="text-lg md:text-xl text-stone-600 max-w-2xl mx-auto leading-relaxed">
                Mentoring, koučování a osobní rozvoj
            </p>
        </div>
    </section>

    <!-- Full-Width Image -->
    <section class="w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10">
            <div class="rounded-2xl overflow-hidden shadow-xl">
                <img
                    src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=1200&q=80"
                    alt="Marina — Mentoring a osobní rozvoj"
                    class="w-full h-[400px] md:h-[500px] lg:h-[600px] object-cover object-center"
                >
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none">
                <p class="text-rose-500 font-semibold tracking-widest uppercase text-sm mb-4">Můj příběh</p>
                <h2 class="text-3xl md:text-4xl font-bold text-stone-900 mb-8 font-serif">Kdo jsem</h2>

                <div class="space-y-6 text-stone-600 leading-relaxed text-lg">
                    <p>
                        Jmenuji se Marina a už druhým rokem se věnuji mentoringu, koučování a osobnímu rozvoji.
                    </p>
                    <p>
                        Vycházím z vlastní zkušenosti a dlouhodobé práce na sobě i s klienty. Věřím, že změna nemusí být drastická ani vyčerpávající, ale může dávat smysl a postupně zapadat do reálného života.
                    </p>
                    <p>
                        Ať už řešíte vztahy, sebevědomí nebo vnitřní chaos, jsem tu proto, abyste v tom nemuseli být sami a mohli si najít pevnější oporu v sobě.
                    </p>
                    <p>
                        Pracuji s různými technikami zaměřenými na posílení sebehodnocení a sebevědomí. Opírám se také o jungovský přístup k vědomí a nevědomí, kde se často skrývají vzorce našeho chování.
                    </p>
                    <p>
                        Společně tyto vzorce postupně objevujeme, přijímáme a nahrazujeme funkčnějšími. Díky tomu přichází nové zkušenosti, které se promítají nejen do vašeho vnímání sebe, ale i do vztahů a práce s penězi.
                    </p>
                    <p>
                        Ve své práci využívám koučovací přístup, práci se symbolikou, prvky NLP a principy neuroplasticity mozku.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-rose-500 to-rose-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 font-serif">Chcete začít pracovat na sobě?</h2>
            <p class="text-lg text-rose-100 mb-10 max-w-2xl mx-auto leading-relaxed">
                Ráda se s vámi spojím a probereme, jak vám mohu pomoci na vaší cestě.
            </p>
            <a
                href="{{ route('services.index') }}"
                class="inline-flex items-center px-8 py-4 bg-white text-rose-600 font-semibold rounded-full hover:bg-rose-50 transition-colors duration-300 shadow-lg hover:shadow-xl"
            >
                Zobrazit služby
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </section>
@endsection
