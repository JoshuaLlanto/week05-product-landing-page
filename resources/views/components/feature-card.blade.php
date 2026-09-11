@props([
    'number' => '01',
    'icon' => 'layers',
    'eyebrow' => '',
    'title' => '',
    'description' => '',
    'tags' => [],
    'image' => null,
    'accent' => false,
])

@php
    $surfaceClasses = $accent
        ? 'bg-[#e86a42] text-white'
        : 'bg-[#f7f6f2] text-[#1d1d1b]';

    $mutedClasses = $accent
        ? 'text-white/75'
        : 'text-black/55';

    $lineClasses = $accent
        ? 'border-white/35'
        : 'border-[#1d1d1b]/20';

    $tagClasses = $accent
        ? 'border-white/35 text-white/80'
        : 'border-[#1d1d1b]/15 text-black/50';
@endphp

<article class="group relative min-h-64 overflow-hidden p-6 transition-colors duration-300 sm:p-8 {{ $surfaceClasses }}">

    <div class="flex items-start justify-between">
        <div>
            <span class="text-xs font-bold tracking-widest {{ $accent ? 'text-white/60' : 'text-black/40' }}">
                {{ $number }}
            </span>

            @if ($eyebrow)
                <p class="mt-2 text-[10px] font-bold uppercase tracking-widest {{ $mutedClasses }}">
                    {{ $eyebrow }}
                </p>
            @endif
        </div>

        <span class="flex h-11 w-11 items-center justify-center border {{ $lineClasses }}">
            @if ($icon === 'layers')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m12 3-9 5 9 5 9-5-9-5Zm-9 9 9 5 9-5M3 16l9 5 9-5" />
                </svg>
            @elseif ($icon === 'ruler')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m4 16 12-12 4 4L8 20H4v-4Zm3-1 2 2m1-5 2 2m1-5 2 2" />
                </svg>
            @elseif ($icon === 'refresh')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v6h6M20 20v-6h-6M6.5 15a7 7 0 0 0 11.8 1.1L20 14M4 10l1.7-2.1A7 7 0 0 1 17.5 9" />
                </svg>
            @elseif ($icon === 'bag')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 8h14l1 12H4L5 8Zm3 0a4 4 0 0 1 8 0" />
                </svg>
            @elseif ($icon === 'mobile')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <rect width="12" height="19" x="6" y="2.5" rx="2" stroke-width="1.5" />
                    <path stroke-linecap="round" stroke-width="1.5" d="M10 18.5h4" />
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m12 3 1.8 5.2L19 10l-5.2 1.8L12 17l-1.8-5.2L5 10l5.2-1.8L12 3Z" />
                </svg>
            @endif
        </span>
    </div>

    <div class="mt-10 max-w-sm">
        <h3 class="text-xl font-black tracking-tight">
            {{ $title }}
        </h3>

        <p class="mt-3 text-sm leading-6 {{ $mutedClasses }}">
            {{ $description }}
        </p>
    </div>

    @if (count($tags) > 0)
        <div class="mt-6 flex flex-wrap gap-2">
            @foreach ($tags as $tag)
                <span class="border px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider {{ $tagClasses }}">
                    {{ $tag }}
                </span>
            @endforeach
        </div>
    @endif

    @if ($image)
        <div class="absolute bottom-0 right-0 h-28 w-28 translate-x-4 translate-y-4 overflow-hidden border-l border-t {{ $lineClasses }} {{ $accent ? 'bg-[#f7f6f2]' : 'bg-[#ebe7dd]' }}">
            <img
                src="{{ asset('images/' . $image) }}"
                alt="{{ $title }}"
                class="h-full w-full object-contain p-2 transition duration-300 group-hover:scale-105"
            >
        </div>
    @endif
</article>