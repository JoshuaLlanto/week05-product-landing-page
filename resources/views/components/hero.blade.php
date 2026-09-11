<section id="top" class="border-b border-[#1d1d1b]/15">
    <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-12 sm:py-16 lg:grid-cols-[0.82fr_1.18fr] lg:gap-16 lg:px-8 lg:py-20">

        <div class="max-w-xl">
            <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-[0.18em] text-[#e86a42]">
                <span class="h-2 w-2 bg-[#e86a42]"></span>
                New everyday collection
            </div>

            <h1 class="mt-7 text-5xl font-black leading-[0.94] tracking-tighter sm:text-6xl lg:text-7xl">
                Make every day
                <span class="text-[#e86a42]">look intentional.</span>
            </h1>

            <p class="mt-7 max-w-lg text-base leading-7 text-black/60 sm:text-lg">
                Everyday pieces designed to move with your schedule,
                your mood, and your personal style.
            </p>

            <div class="mt-9 flex flex-wrap gap-3">
                <x-button href="#collection" variant="dark">
                    Shop the collection
                    <span aria-hidden="true">→</span>
                </x-button>

                <x-button href="#features" variant="outline">
                    Explore the edit
                </x-button>
            </div>

            <div class="mt-12 grid max-w-md grid-cols-3 border-y border-[#1d1d1b]/15 py-5">
                <div>
                    <p class="text-2xl font-black">04</p>
                    <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.12em] text-black/45">
                        Core pieces
                    </p>
                </div>

                <div class="border-l border-[#1d1d1b]/15 pl-4">
                    <p class="text-2xl font-black">01</p>
                    <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.12em] text-black/45">
                        Easy rotation
                    </p>
                </div>

                <div class="border-l border-[#1d1d1b]/15 pl-4">
                    <p class="text-2xl font-black">∞</p>
                    <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.12em] text-black/45">
                        Ways to style
                    </p>
                </div>
            </div>
        </div>

        <div class="relative">
            <div class="absolute -bottom-4 -left-4 z-10 hidden w-44 border border-[#1d1d1b] bg-[#f7f6f2] p-4 sm:block">
                <p class="text-[10px] font-bold uppercase tracking-[0.14em] text-black/45">
                    The everyday edit
                </p>

                <p class="mt-3 text-lg font-black leading-tight">
                    Less effort.<br>
                    More outfit.
                </p>
            </div>

            <div class="relative overflow-hidden border border-[#1d1d1b] bg-[#e4e0d6] shadow-[12px_12px_0_#1d1d1b]">
                <img
                    src="{{ asset('images/hero-editorial.png') }}"
                    alt="Model wearing a neutral everyday outfit with a burnt-orange overshirt"
                    class="h-full min-h-96 w-full object-cover object-[70%_center] sm:min-h-136"
                >

                <div class="absolute right-4 top-4 border border-[#1d1d1b] bg-[#f7f6f2] px-3 py-2 text-[10px] font-bold uppercase tracking-[0.12em]">
                    Look 01 / New season
                </div>
            </div>

            <div class="mt-4 flex items-center justify-between text-xs font-bold uppercase tracking-[0.12em] text-black/45">
                <span>Casual essentials</span>
                <span>Designed for real days</span>
            </div>
        </div>

    </div>
</section>