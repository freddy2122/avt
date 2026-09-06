@props(['note' => 5, 'taille' => 'h-5 w-5'])

<div {{ $attributes->merge(['class' => 'flex items-center gap-1']) }}
     role="img" aria-label="Note de {{ $note }} sur 5">
    @for ($i = 1; $i <= 5; $i++)
        <svg class="{{ $taille }} {{ $i <= $note ? 'text-[#fbbc04]' : 'text-black/15' }}"
             viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8-6.2-3.3-6.2 3.3L7 14.2l-5-4.9 6.9-1z"/>
        </svg>
    @endfor
</div>
