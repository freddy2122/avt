@php
    $navLinks = [
        ['label' => 'Honoraires', 'url' => '#honoraires'],
        ['label' => 'À propos',   'url' => '#a-propos'],
        ['label' => 'Blog',       'url' => '#blog'],
        ['label' => 'Contact',    'url' => '#contact'],
    ];

    // Le sous-menu reprend les domaines d'expertise déclarés dans config/cabinet.php
    $competences = array_map(
        fn (array $expertise) => ['label' => $expertise['titre'], 'url' => $expertise['url']],
        config('cabinet.expertises'),
    );
@endphp

<header id="header" class="fixed inset-x-0 top-0 z-50 bg-brown">
    <div class="mx-auto flex min-h-[76px] max-w-[1400px] items-center gap-8 px-6 lg:min-h-[92px] lg:px-10">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="mr-auto flex flex-col items-center gap-1 text-white" aria-label="Accueil — {{ config('cabinet.nom') }}">
            <span class="font-title text-[28px] font-semibold leading-none tracking-wide lg:text-[34px]">{{ config('cabinet.initiales') }}</span>
            <span class="h-px w-full bg-current" aria-hidden="true"></span>
            <span class="font-title text-[11px] uppercase leading-none tracking-[0.22em] lg:text-xs">{{ config('cabinet.mention') }}</span>
        </a>

        {{-- Navigation --}}
        <nav id="nav"
             aria-label="Navigation principale"
             class="fixed inset-x-0 top-[76px] max-h-[calc(100vh-76px)] -translate-y-[120%] overflow-y-auto bg-brown px-6 pb-9 pt-3 shadow-[0_22px_40px_rgba(0,0,0,0.3)] transition-transform duration-300
                    lg:static lg:top-auto lg:max-h-none lg:translate-y-0 lg:overflow-visible lg:bg-transparent lg:p-0 lg:shadow-none">

            <ul class="flex flex-col items-stretch lg:flex-row lg:items-center lg:gap-8">

                {{-- Compétences + sous-menu --}}
                <li class="nav-item group relative border-b border-white/10 lg:border-0">
                    <button type="button"
                            class="nav-toggle flex w-full items-center justify-between gap-2 py-[18px] text-lg font-medium text-white transition-colors hover:text-cream lg:w-auto lg:justify-start lg:py-2.5 lg:text-[17px]"
                            aria-expanded="false" aria-controls="submenu-competences">
                        Compétences
                        <svg class="nav-caret h-4 w-4 transition-transform duration-200" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <ul id="submenu-competences"
                        class="submenu hidden bg-black/20 py-1.5
                               lg:absolute lg:left-[-20px] lg:top-full lg:z-10 lg:block lg:min-w-[260px] lg:bg-brown lg:py-2.5 lg:shadow-[0_18px_40px_rgba(0,0,0,0.28)]
                               lg:invisible lg:opacity-0 lg:-translate-y-2 lg:transition lg:duration-200
                               lg:group-hover:visible lg:group-hover:opacity-100 lg:group-hover:translate-y-0">
                        @foreach ($competences as $item)
                            <li>
                                <a href="{{ $item['url'] }}" class="block px-6 py-3 text-base text-white transition-colors hover:bg-white/10 hover:text-cream">{{ $item['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                @foreach ($navLinks as $link)
                    <li class="border-b border-white/10 lg:border-0">
                        <a href="{{ $link['url'] }}" class="block py-[18px] text-lg font-medium text-white transition-colors hover:text-cream lg:py-2.5 lg:text-[17px]">{{ $link['label'] }}</a>
                    </li>
                @endforeach
            </ul>

            {{-- CTA mobile --}}
            <a href="#rendez-vous" class="mt-6 flex w-full items-center justify-center rounded-sm bg-cream px-6 py-4 font-medium text-brown transition-colors hover:bg-cream-soft lg:hidden">
                Prendre rendez-vous
            </a>
        </nav>

        {{-- CTA desktop --}}
        <a href="#rendez-vous" class="hidden shrink-0 rounded-sm bg-cream px-6 py-4 font-medium leading-none text-brown transition hover:-translate-y-0.5 hover:bg-cream-soft lg:inline-flex">
            Prendre rendez-vous
        </a>

        {{-- Burger --}}
        <button id="burger" type="button"
                class="flex h-11 w-11 shrink-0 flex-col items-center justify-center gap-1.5 lg:hidden"
                aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="nav">
            <span class="block h-0.5 w-6 bg-white transition-transform duration-200"></span>
            <span class="block h-0.5 w-6 bg-white transition-opacity duration-200"></span>
            <span class="block h-0.5 w-6 bg-white transition-transform duration-200"></span>
        </button>
    </div>
</header>
