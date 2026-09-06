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


        @case('institution')
            <path d="M24 5 43 15H5z"/>
            <path d="M11 15v20M20 15v20M28 15v20M37 15v20"/>
            <path d="M7 35h34M5 42h38"/>
            @break

        @case('mallette')
            <rect x="5" y="15" width="38" height="26" rx="3"/>
            <path d="M18 15v-4a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3v4"/>
            <path d="M5 26h38"/>
            <path d="M21 26h6"/>
            @break

        @case('balance')
            <path d="M24 8v32"/>
            <path d="M12 14h24"/>
            <circle cx="24" cy="10" r="2"/>
            <path d="M12 14 5 28h14zM36 14l-7 14h14z"/>
            <path d="M5 28a7 7 0 0 0 14 0M29 28a7 7 0 0 0 14 0"/>
            <path d="M16 42h16"/>
            @break

        @case('succession')
            <path d="M6 22 24 8l18 14"/>
            <path d="M10 20v20h28V20"/>
            <path d="M19 40V29h10v11"/>
            <path d="M24 14v4M22 16h4"/>
            @break

        @case('medaille')
            <circle cx="24" cy="18" r="11"/>
            <path d="m24 12 1.9 3.9 4.3.6-3.1 3 .7 4.3-3.8-2-3.8 2 .7-4.3-3.1-3 4.3-.6z"/>
            <path d="m17 27-4 14 11-5 11 5-4-14"/>
            @break

        @case('loupe')
            <circle cx="21" cy="21" r="14"/>
            <path d="m31 31 11 11"/>
            <path d="M14 21c3.5-4 10.5-4 14 0-3.5 4-10.5 4-14 0z"/>
            <circle cx="21" cy="21" r="2"/>
            @break

        @case('chrono')
            <circle cx="27" cy="26" r="14"/>
            <path d="M27 19v7l5 3"/>
            <path d="M23 6h8M27 6v6"/>
            <path d="M4 18h9M2 26h8M6 34h7"/>
            @break

        @case('france')
            <path d="M22 4 36 8l6 12-5 9-1 10-10 4-11-6-4-13 4-14z"/>
            <path d="m40 35 3 3-2 4-2-3z"/>
            @break

        @case('groupe')
            <circle cx="24" cy="14" r="7"/>
            <path d="M12 41c0-7 5.4-12 12-12s12 5 12 12"/>
            <circle cx="8" cy="20" r="5"/>
            <path d="M2 39c0-5.5 2.7-9.5 6.5-10"/>
            <circle cx="40" cy="20" r="5"/>
            <path d="M46 39c0-5.5-2.7-9.5-6.5-10"/>
            @break

        @case('billets')
            <rect x="4" y="12" width="40" height="24" rx="3"/>
            <circle cx="24" cy="24" r="6"/>
            <path d="M24 20v8M22 22h4M22 26h4"/>
            <path d="M11 18v12M37 18v12"/>
            @break

        @case('calendrier')
            <rect x="6" y="10" width="36" height="32" rx="3"/>
            <path d="M6 19h36"/>
            <path d="M16 5v9M32 5v9"/>
            <path d="m18 29 4 4 9-9"/>
            @break

        @case('carte')
            <path d="m6 12 12-5 12 5 12-5v29l-12 5-12-5-12 5z"/>
            <path d="M18 7v29M30 12v29"/>
            @break

    @endswitch
</svg>
