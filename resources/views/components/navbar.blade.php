<header class="border-b border-[#1d1d1b]/15 bg-[#f7f6f2]">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">

        <a href="{{ route('home') }}" class="leading-none">
            <span class="block text-xl font-black tracking-[0.18em]">
                PENSHOPPE
            </span>

            <span class="mt-1 block text-[9px] font-bold uppercase tracking-[0.28em] text-[#e86a42]">
                Everyday Essentials
            </span>
        </a>

        <nav class="hidden items-center gap-8 text-sm font-semibold lg:flex">
            <a href="#features" class="transition-colors hover:text-[#e86a42]">Features</a>
            <a href="#collection" class="transition-colors hover:text-[#e86a42]">Collection</a>
            <a href="#pricing" class="transition-colors hover:text-[#e86a42]">Pricing</a>
            <a href="#testimonials" class="transition-colors hover:text-[#e86a42]">Testimonials</a>
            <a href="#contact" class="transition-colors hover:text-[#e86a42]">Contact</a>
        </nav>

        <div class="hidden items-center gap-5 sm:flex">
            <a href="#signin" class="text-sm font-semibold hover:text-[#e86a42]">
                Sign in
            </a>

            <a
                href="#collection"
                class="rounded-md bg-[#1d1d1b] px-5 py-3 text-sm font-bold text-white transition-colors hover:bg-[#e86a42]"
            >
                Get started
            </a>
        </div>

        <button
            type="button"
            data-menu-button
            aria-expanded="false"
            aria-controls="mobile-navigation"
            class="rounded-md border border-[#1d1d1b]/20 p-3 lg:hidden"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <div id="mobile-navigation" data-mobile-menu class="hidden border-t border-[#1d1d1b]/15 lg:hidden">
        <nav class="mx-auto flex max-w-7xl flex-col px-6 py-5 text-sm font-semibold">
            <a data-mobile-link href="#features" class="border-b border-[#1d1d1b]/10 py-4">Features</a>
            <a data-mobile-link href="#collection" class="border-b border-[#1d1d1b]/10 py-4">Collection</a>
            <a data-mobile-link href="#pricing" class="border-b border-[#1d1d1b]/10 py-4">Pricing</a>
            <a data-mobile-link href="#testimonials" class="border-b border-[#1d1d1b]/10 py-4">Testimonials</a>
            <a data-mobile-link href="#contact" class="py-4">Contact</a>
        </nav>
    </div>
</header>