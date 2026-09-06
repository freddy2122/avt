@php
    $contact = config('cabinet.contact');

    $liens = [
        ['label' => 'À propos',   'url' => '#a-propos'],
        ['label' => 'Compétences','url' => '#mes-competences'],
        ['label' => 'Honoraires', 'url' => '#honoraires'],
        ['label' => 'Blog',       'url' => '#blog'],
        ['label' => 'Avis',       'url' => '#avis'],
        ['label' => 'Contact',    'url' => '#rendez-vous'],
    ];

    $mentions = [
        ['label' => 'Mentions légales',    'url' => '#mentions-legales'],
        ['label' => 'Politique de confidentialité', 'url' => '#confidentialite'],
        ['label' => 'Plan du site',        'url' => '#plan-du-site'],
    ];
@endphp

<footer class="bg-brown text-white">
    <div class="mx-auto max-w-[1400px] px-6 py-16 lg:px-10 lg:py-20">

        <div class="grid gap-12 lg:grid-cols-[minmax(0,340px)_minmax(0,1fr)_minmax(0,1fr)] lg:gap-16">

            {{-- Identité --}}
            <div>
                <a href="{{ url('/') }}" class="mb-6 inline-flex flex-col items-center gap-1 text-white" aria-label="Accueil — {{ config('cabinet.nom') }}">
                    <span class="font-title text-[30px] font-semibold leading-none tracking-wide">{{ config('cabinet.initiales') }}</span>
                    <span class="h-px w-full bg-current" aria-hidden="true"></span>
                    <span class="font-title text-[11px] uppercase leading-none tracking-[0.22em]">{{ config('cabinet.mention') }}</span>
                </a>

                <p class="mb-2 text-[17px] font-semibold text-cream">{{ config('cabinet.nom') }}</p>
                <p class="text-[16px] leading-relaxed text-white/75">
                    {{ config('cabinet.titre') }}.<br>
                    {{ config('cabinet.accroche') }}.
                </p>
            </div>

            {{-- Navigation --}}
            <nav aria-label="Pied de page">
                <h2 class="mb-6 text-lg font-semibold text-cream">Le cabinet</h2>
                <ul class="grid grid-cols-2 gap-x-6 gap-y-3">
                    @foreach ($liens as $lien)
                        <li>
                            <a href="{{ $lien['url'] }}" class="text-[16px] text-white/80 transition-colors hover:text-cream">{{ $lien['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            {{-- Coordonnées --}}
            <div>
                <h2 class="mb-6 text-lg font-semibold text-cream">Me contacter</h2>

                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <x-icon name="telephone" class="mt-0.5 h-5 w-5 shrink-0 text-cream" />
                        <a href="tel:{{ $contact['telephone_lien'] }}" class="text-[16px] text-white/85 transition-colors hover:text-cream">{{ $contact['telephone'] }}</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <x-icon name="email" class="mt-0.5 h-5 w-5 shrink-0 text-cream" />
                        <a href="mailto:{{ $contact['email'] }}" class="break-all text-[16px] text-white/85 transition-colors hover:text-cream">{{ $contact['email'] }}</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <x-icon name="localisation" class="mt-0.5 h-5 w-5 shrink-0 text-cream" />
                        <span class="text-[16px] text-white/85">{{ $contact['adresse'] }}</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <x-icon name="calendrier" class="mt-0.5 h-5 w-5 shrink-0 text-cream" />
                        <span class="text-[16px] text-white/85">Ouvert {{ $contact['horaires'] }}</span>
                    </li>
                </ul>

                <a href="{{ $contact['reservation_url'] }}"
                   class="mt-8 inline-flex items-center justify-center rounded-sm bg-cream px-7 py-4 text-[16px] font-semibold leading-none text-brown transition hover:-translate-y-0.5 hover:bg-cream-soft">
                    Prendre rendez-vous
                </a>
            </div>
        </div>

        {{-- Bas de page --}}
        <div class="mt-14 flex flex-col gap-4 border-t border-white/15 pt-8 text-[15px] text-white/60 sm:flex-row sm:items-center sm:justify-between">
            <p>© {{ date('Y') }} {{ config('cabinet.nom') }} — {{ config('cabinet.barreau') }}. Tous droits réservés.</p>

            <ul class="flex flex-wrap gap-x-6 gap-y-2">
                @foreach ($mentions as $mention)
                    <li><a href="{{ $mention['url'] }}" class="transition-colors hover:text-cream">{{ $mention['label'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
