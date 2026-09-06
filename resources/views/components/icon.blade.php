@props(['name' => ''])

{{-- Pictogrammes en trait, dessinés en SVG : aucune police d'icônes à charger. --}}
<svg {{ $attributes->merge([
        'class' => 'h-10 w-10',
        'viewBox' => '0 0 48 48',
        'fill' => 'none',
        'stroke' => 'currentColor',
        'stroke-width' => '1.6',
        'stroke-linecap' => 'round',
        'stroke-linejoin' => 'round',
    ]) }} aria-hidden="true">
    @switch($name)

        @case('signature')
            <path d="M31 8 39 16 20 35l-9 2 2-9z"/>
            <path d="M28.5 10.5 36.5 18.5"/>
            <path d="M9 42c3-3.5 6-3.5 9 0s6 3.5 9 0 6-3.5 9 0"/>
            @break

        @case('contrat')
            <path d="M14 6h15l8 8v28H14z"/>
            <path d="M29 6v8h8"/>
            <path d="M19 22h13M19 27h13M19 32h8"/>
            <circle cx="20" cy="37" r="3"/>
            <path d="M26 38c2-2.5 4-2.5 6 0"/>
            @break

        @case('cession')
            <path d="M6 14h24v20H6z"/>
            <path d="M6 20h24"/>
            <circle cx="15" cy="26" r="3"/>
            <path d="M34 17h8M34 24h8M34 31h8"/>
            <path d="M39 14l3 3-3 3M39 21l3 3-3 3M39 28l3 3-3 3"/>
            @break

        @case('conseil')
            <path d="M24 5v4M9 20h4M35 20h4M13.5 9.5l2.8 2.8M34.5 9.5l-2.8 2.8"/>
            <path d="M24 14c5 0 9 3.8 9 8.6 0 3.2-1.8 5.2-3.2 6.9-.9 1.1-1.3 2.1-1.3 3.5h-9c0-1.4-.4-2.4-1.3-3.5-1.4-1.7-3.2-3.7-3.2-6.9C15 17.8 19 14 24 14z"/>
            <path d="M20.5 37h7M21.5 41h5"/>
            @break

        @case('eiffel')
            <path d="M24 5v6"/>
            <path d="M20 11h8"/>
            <path d="M22 11c0 12-4 25-9 32h22c-5-7-9-20-9-32"/>
            <path d="M17.5 26h13M14 34h20"/>
            @break

        @case('visio')
            <rect x="6" y="12" width="24" height="18" rx="3"/>
            <path d="M34 18l8-5v22l-8-5z"/>
            <path d="M14 38h14"/>
            @break

        @case('developpement')
            <path d="M8 38V10"/>
            <path d="M8 38h32"/>
            <path d="M14 30l7-8 6 5 10-12"/>
            <path d="M31 15h6v6"/>
            @break

        @case('litige')
            <path d="M24 8 43 40H5z"/>
            <path d="M24 20v9"/>
            <path d="M24 34h.02"/>
            @break

    @endswitch
</svg>
