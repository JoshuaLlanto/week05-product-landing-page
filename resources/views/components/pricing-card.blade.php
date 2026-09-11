@props([
    'name' => '',
    'price' => '',
    'description' => '',
    'features' => [],
    'featured' => false,
])

@php
    $cardClasses = $featured
        ? 'border-[#1d1d1b] bg-[#1d1d1b] text-white'
        : 'border-[#1d1d1b]/15 bg-white text-[#1d1d1b]';

    $mutedClasses = $featured
        ? 'text-white/65'
        : 'text-black/55';
@endphp

<article class="flex h-full flex-col border p-6 sm:p-8 {{ $cardClasses }}">
    @if ($featured)
        <span class="mb-6 w-fit bg-[#e86a42] px-3 py-2 text-xs font-bold uppercase tracking-[0.14em] text-white">
            Most chosen
        </span>
    @endif

    <h3 class="text-2xl font-black">
        {{ $name }}
    </h3>

    <p class="mt-3 min-h-12 text-sm leading-6 {{ $mutedClasses }}">
        {{ $description }}
    </p>

    <p class="mt-8 text-4xl font-black">
        {{ $price }}
    </p>

    <p class="mt-2 text-xs {{ $mutedClasses }}">
        Illustrative prototype bundle
    </p>

    <ul class="mt-8 flex-1 space-y-4 border-t border-current/15 pt-6 text-sm">
        @foreach ($features as $feature)
            <li class="flex gap-3">
                <span class="font-bold text-[#e86a42]">✓</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button
        href="#contact"
        :variant="$featured ? 'orange' : 'light'"
        class="mt-8 w-full"
    >
        Choose this look
    </x-button>
</article>