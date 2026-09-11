@props([
    'initials' => 'JS',
    'name' => '',
    'role' => '',
    'quote' => '',
    'tone' => 'orange',
])

@php
    $avatarClasses = [
        'orange' => 'bg-[#e86a42] text-white',
        'sand' => 'bg-[#d5a07d] text-[#1d1d1b]',
        'dark' => 'bg-[#1d1d1b] text-white',
    ];
@endphp

<article class="border border-[#1d1d1b]/15 bg-[#f7f6f2] p-6 sm:p-8">
    <p class="text-3xl font-black text-[#e86a42]">“</p>

    <p class="mt-4 min-h-28 text-base leading-7 text-black/70">
        {{ $quote }}
    </p>

    <div class="mt-8 flex items-center gap-4 border-t border-[#1d1d1b]/15 pt-5">
        <div class="flex h-12 w-12 items-center justify-center text-sm font-black {{ $avatarClasses[$tone] ?? $avatarClasses['orange'] }}">
            {{ $initials }}
        </div>

        <div>
            <p class="font-bold">{{ $name }}</p>
            <p class="text-sm text-black/50">{{ $role }}</p>
        </div>
    </div>
</article>