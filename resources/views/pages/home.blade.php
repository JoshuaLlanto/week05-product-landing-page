@extends('layouts.app')

@section('title', 'Penshoppe Everyday Essentials | Style built for everyday life')

@section('content')
    <x-navbar />

    <main>
        <x-hero />

        <<section id="features" class="border-b border-[#1d1d1b]/15">
    <div class="mx-auto grid max-w-7xl gap-16 px-6 py-24 lg:grid-cols-[0.8fr_1.2fr] lg:px-8">

        <div class="lg:sticky lg:top-10 lg:self-start">
            <p class="text-sm font-bold uppercase tracking-widest text-[#e86a42]">
                01 / The everyday edit
            </p>

            <h2 class="mt-6 max-w-xl text-4xl font-black leading-tight tracking-tight sm:text-5xl">
                A wardrobe system built around real routines.
            </h2>

            <p class="mt-6 max-w-md text-base leading-7 text-black/60">
                The collection is organized around pieces that are easy to understand,
                easy to combine, and useful beyond one occasion.
            </p>

            <div class="mt-10 overflow-hidden border border-[#1d1d1b] bg-[#e7e2d8] shadow-[10px_10px_0_#e86a42]">
                <div class="aspect-4/3 overflow-hidden">
                    <img
                        src="{{ asset('images/essential-tee.png') }}"
                        alt="Off-white essential t-shirt"
                        class="h-full w-full object-cover"
                    >
                </div>

                <div class="grid grid-cols-3 border-t border-[#1d1d1b] bg-[#f7f6f2]">
                    <div class="border-r border-[#1d1d1b]/15 p-4">
                        <p class="text-lg font-black">01</p>
                        <p class="mt-1 text-[10px] font-bold uppercase tracking-widest text-black/45">
                            Layer
                        </p>
                    </div>

                    <div class="border-r border-[#1d1d1b]/15 p-4">
                        <p class="text-lg font-black">02</p>
                        <p class="mt-1 text-[10px] font-bold uppercase tracking-widest text-black/45">
                            Build
                        </p>
                    </div>

                    <div class="p-4">
                        <p class="text-lg font-black">03</p>
                        <p class="mt-1 text-[10px] font-bold uppercase tracking-widest text-black/45">
                            Express
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="mb-6 flex items-center justify-between">
                <p class="text-sm font-bold uppercase tracking-widest text-black/45">
                    Six reasons to start here
                </p>

                <span class="text-sm font-bold text-[#e86a42]">
                    6 / 6
                </span>
            </div>

            <div class="border-b border-[#1d1d1b]/15">

                <x-feature-card
                    number="01"
                    icon="layers"
                    eyebrow="Style system"
                    title="Easy layers"
                    description="Build outfits from simple pieces that work together across different plans."
                    :tags="['Tops', 'Bottoms', 'Bags']"
                />

                <x-feature-card
                    number="02"
                    icon="ruler"
                    eyebrow="Product clarity"
                    title="Clear fit details"
                    description="Make better choices with visible size, fit, and product information."
                    :tags="['Fit', 'Size', 'Details']"
                />

                <x-feature-card
                    number="03"
                    icon="refresh"
                    eyebrow="Collection rhythm"
                    title="Fresh drops"
                    description="Keep your everyday rotation current with new styles and seasonal updates."
                    :tags="['New', 'Seasonal', 'Looks']"
                />

                <x-feature-card
                    number="04"
                    icon="bag"
                    eyebrow="Less friction"
                    title="Simple shopping"
                    description="Move from product discovery to your next look with fewer unnecessary steps."
                    :tags="['Browse', 'Compare', 'Choose']"
                />

                <x-feature-card
                    number="05"
                    icon="mobile"
                    eyebrow="Responsive by design"
                    title="Made for mobile"
                    description="Browse comfortably whether you are at home, at school, or on the go."
                    :tags="['Mobile', 'Fast', 'Clear']"
                />

                <x-feature-card
                    number="06"
                    icon="spark"
                    eyebrow="Personal styling"
                    title="Own your look"
                    description="Use everyday essentials as a starting point for your personal style."
                    :tags="['Mix', 'Match', 'Express']"
                />

            </div>
        </div>

    </div>
</section>

        <section id="collection" class="border-b border-[#1d1d1b]/15 bg-white">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8">

                <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
                    <div class="max-w-2xl">
                        <p class="text-sm font-bold uppercase tracking-[0.18em] text-[#e86a42]">
                            The everyday edit
                        </p>

                        <h2 class="mt-5 text-4xl font-black tracking-[-0.04em] sm:text-5xl">
                            Start with the pieces you will actually wear.
                        </h2>
                    </div>

                    <a href="#pricing" class="text-sm font-bold underline decoration-[#e86a42] decoration-2 underline-offset-8">
                        View style bundles →
                    </a>
                </div>

                <div class="mt-12 grid gap-5 md:grid-cols-3">

                    <article class="group">
                        <div class="relative aspect-4/5 overflow-hidden bg-[#ece8df]">
                            <span class="absolute left-4 top-4 z-10 bg-[#f7f6f2] px-3 py-2 text-xs font-bold">
                                01
                            </span>

                            <img
                                src="{{ asset('images/essential-tee.png') }}"
                                alt="Folded off-white everyday t-shirt"
                                loading="lazy"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            >
                        </div>

                        <div class="mt-4 flex items-start justify-between gap-4">
                            <div>
                                <h3 class="font-black">Essential Tee</h3>
                                <p class="mt-1 text-sm text-black/50">Soft off-white cotton</p>
                            </div>

                            <p class="font-bold">₱599</p>
                        </div>
                    </article>

                    <article class="group">
                        <div class="relative flex aspect-4/5 items-center justify-center overflow-hidden bg-[#e1ddd3]">
                            <span class="absolute left-4 top-4 z-10 bg-[#f7f6f2] px-3 py-2 text-xs font-bold">
                                02
                            </span>

                            <img
                                src="{{ asset('images/everyday-pants.png') }}"
                                alt="Dark charcoal straight-leg trousers"
                                loading="lazy"
                                class="h-full w-full object-contain p-8 transition duration-500 group-hover:scale-105"
                            >
                        </div>

                        <div class="mt-4 flex items-start justify-between gap-4">
                            <div>
                                <h3 class="font-black">Everyday Trousers</h3>
                                <p class="mt-1 text-sm text-black/50">Straight-leg charcoal fit</p>
                            </div>

                            <p class="font-bold">₱899</p>
                        </div>
                    </article>

                    <article class="group">
                        <div class="relative flex aspect-4/5 items-center justify-center overflow-hidden bg-[#e9e5dc]">
                            <span class="absolute left-4 top-4 z-10 bg-[#f7f6f2] px-3 py-2 text-xs font-bold">
                                03
                            </span>

                            <img
                                src="{{ asset('images/crossbody-bag.png') }}"
                                alt="Black crossbody bag with burnt-orange strap"
                                loading="lazy"
                                class="h-full w-full object-contain p-8 transition duration-500 group-hover:scale-105"
                            >
                        </div>

                        <div class="mt-4 flex items-start justify-between gap-4">
                            <div>
                                <h3 class="font-black">Daily Crossbody</h3>
                                <p class="mt-1 text-sm text-black/50">Compact black with orange detail</p>
                            </div>

                            <p class="font-bold">₱799</p>
                        </div>
                    </article>

                </div>

                <div class="mt-20 grid gap-5 lg:grid-cols-[1.2fr_0.8fr]">

                    <div class="border border-[#1d1d1b] bg-[#f7f6f2] p-4 shadow-[10px_10px_0_#e86a42]">
                        <div class="flex items-center justify-between border-b border-[#1d1d1b]/15 pb-4 text-xs font-bold uppercase tracking-[0.12em]">
                            <span>Collection preview</span>
                            <span class="text-black/40">Desktop view</span>
                        </div>

                        <div class="mt-4 bg-white p-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-black">Everyday rotation</p>
                                    <p class="mt-1 text-xs text-black/45">Simple pieces. Better combinations.</p>
                                </div>

                                <span class="border border-[#1d1d1b]/15 px-3 py-2 text-xs font-bold">
                                    12 items
                                </span>
                            </div>

                            <div class="mt-5 grid grid-cols-3 gap-3">
                                <div class="aspect-square overflow-hidden bg-[#ece8df]">
                                    <img
                                        src="{{ asset('images/essential-tee.png') }}"
                                        alt="Essential tee preview"
                                        class="h-full w-full object-cover"
                                    >
                                </div>

                                <div class="aspect-square overflow-hidden bg-[#e1ddd3]">
                                    <img
                                        src="{{ asset('images/everyday-pants.png') }}"
                                        alt="Everyday trousers preview"
                                        class="h-full w-full object-contain p-3"
                                    >
                                </div>

                                <div class="aspect-square overflow-hidden bg-[#e9e5dc]">
                                    <img
                                        src="{{ asset('images/crossbody-bag.png') }}"
                                        alt="Daily crossbody preview"
                                        class="h-full w-full object-contain p-3"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-[#1d1d1b] bg-[#1d1d1b] p-6 text-white">
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-white/50">
                            Mobile-first shopping
                        </p>

                        <h3 class="mt-20 text-3xl font-black leading-tight">
                            A cleaner way to browse on smaller screens.
                        </h3>

                        <p class="mt-4 text-sm leading-6 text-white/60">
                            Clear product cards, visible prices, and one primary action
                            keep the shopping experience easy to follow.
                        </p>

                        <div class="mt-8 border border-white/20 bg-[#f7f6f2] p-3">
                            <div class="border border-[#1d1d1b]/15 bg-white">
                                <div class="flex items-center justify-between border-b border-[#1d1d1b]/15 p-3">
                                    <span class="text-xs font-black">PENSHOPPE</span>
                                    <span class="text-xs text-black/40">Menu</span>
                                </div>

                                <div class="h-28 overflow-hidden bg-[#e86a42]">
                                    <img
                                        src="{{ asset('images/essential-tee.png') }}"
                                        alt="Mobile product preview"
                                        class="h-full w-full object-cover"
                                    >
                                </div>

                                <div class="p-3">
                                    <p class="text-sm font-black text-[#1d1d1b]">
                                        Essential Tee
                                    </p>

                                    <p class="mt-1 text-xs text-black/50">
                                        From ₱599
                                    </p>

                                    <div class="mt-4 h-9 bg-[#1d1d1b]"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="pricing" class="border-b border-[#1d1d1b]/15">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
                <div class="max-w-2xl">
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-[#e86a42]">
                        Style bundles
                    </p>

                    <h2 class="mt-5 text-4xl font-black tracking-[-0.04em] sm:text-5xl">
                        Start with one piece or build the whole look.
                    </h2>

                    <p class="mt-5 leading-7 text-black/60">
                        Illustrative bundle prices created for this academic prototype.
                    </p>
                </div>

                <div class="mt-12 grid gap-4 lg:grid-cols-3">
                    <x-pricing-card
                        name="Starter Look"
                        price="₱899"
                        description="A simple starting point for everyday outfits."
                        :features="[
                            'One everyday top',
                            'Basic style guide',
                            'Easy outfit pairing'
                        ]"
                    />

                    <x-pricing-card
                        name="Everyday Style"
                        price="₱1,499"
                        description="A balanced outfit built for repeat wear."
                        :featured="true"
                        :features="[
                            'Top and everyday bottom',
                            'Mix-and-match suggestions',
                            'Collection access'
                        ]"
                    />

                    <x-pricing-card
                        name="Complete Wardrobe"
                        price="₱2,499"
                        description="A complete rotation for different daily plans."
                        :features="[
                            'Complete outfit set',
                            'Accessory suggestion',
                            'Seasonal style updates'
                        ]"
                    />
                </div>
            </div>
        </section>

        <section id="testimonials" class="border-b border-[#1d1d1b]/15 bg-white">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
                <div class="max-w-2xl">
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-[#e86a42]">
                        Prototype testimonials
                    </p>

                    <h2 class="mt-5 text-4xl font-black tracking-[-0.04em] sm:text-5xl">
                        Everyday pieces. Personal style.
                    </h2>
                </div>

                <div class="mt-12 grid gap-4 lg:grid-cols-3">
                    <x-testimonial-card
                        initials="AM"
                        name="Alyssa M."
                        role="College student"
                        tone="orange"
                        quote="I like that the pieces are easy to combine. I can create different outfits without buying too many things."
                    />

                    <x-testimonial-card
                        initials="DR"
                        name="Daniel R."
                        role="Young professional"
                        tone="sand"
                        quote="The collection feels practical. I can wear the same essentials for work, weekends, and casual plans."
                    />

                    <x-testimonial-card
                        initials="ML"
                        name="Mika L."
                        role="Creative learner"
                        tone="dark"
                        quote="The layout makes it easy to see the products and understand how they work together before choosing."
                    />
                </div>
            </div>
        </section>

        <section id="contact" class="bg-[#e86a42]">
            <div class="mx-auto flex max-w-7xl flex-col gap-8 px-6 py-20 lg:flex-row lg:items-end lg:justify-between lg:px-8">
                <div class="max-w-2xl">
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-white/70">
                        Your next everyday look
                    </p>

                    <h2 class="mt-5 text-4xl font-black tracking-[-0.04em] text-white sm:text-6xl">
                        Make room for a style that feels like you.
                    </h2>
                </div>

                <x-button href="#collection" variant="dark">
                    Start exploring
                    <span aria-hidden="true">→</span>
                </x-button>
            </div>
        </section>
    </main>

    <x-footer />
@endsection