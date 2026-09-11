@props([
    'href' => '#',
    'variant' => 'dark',
])

@php
    $baseClasses = 'inline-flex items-center justify-center gap-3 rounded-md px-5 py-3.5 text-sm font-bold transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#e86a42] focus-visible:ring-offset-2';

    $variants = [
        'dark' => 'bg-[#1d1d1b] text-white hover:bg-[#e86a42]',
        'orange' => 'bg-[#e86a42] text-white hover:bg-[#1d1d1b]',
        'outline' => 'border border-[#1d1d1b]/20 text-[#1d1d1b] hover:border-[#e86a42] hover:text-[#e86a42]',
        'light' => 'border border-[#1d1d1b]/15 bg-white text-[#1d1d1b] hover:border-[#e86a42] hover:text-[#e86a42]',
    ];

    $variantClasses = $variants[$variant] ?? $variants['dark'];
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge(['class' => $baseClasses . ' ' . $variantClasses]) }}
>
    {{ $slot }}
</a>