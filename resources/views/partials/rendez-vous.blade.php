@php
    use App\Support\SiteImage;

    $contact = config('cabinet.contact');

    $coordonnees = [
        [
            'icone' => 'telephone',
            'titre' => 'Téléphone',
            'valeur' => $contact['telephone'],
            'lien' => 'tel:'.$contact['telephone_lien'],
        ],
        [
            'icone' => 'email',
            'titre' => 'Adresse-mail',
            'valeur' => $contact['email'],
            'lien' => 'mailto:'.$contact['email'],
        ],
        [
            'icone' => 'localisation',
            'titre' => 'Adresse',
            'valeur' => $contact['adresse'],
            'lien' => null,
        ],
    ];
@endphp

<section id="rendez-vous" class="scroll-mt-28 bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-[1400px] px-6 lg:px-10">

        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

            <div>
                <h2 class="mb-8 font-body text-[clamp(28px,3.4vw,44px)] font-semibold leading-tight text-ink">
                    Prendre rendez-vous avec {{ config('cabinet.nom') }}
                </h2>

                <p class="mb-10 text-[17px] leading-[1.9] text-ink/85 lg:text-lg">
                    Planifiez facilement votre <strong class="font-semibold text-ink">consultation</strong>, en présentiel,
                    ou en visioconférence partout en <strong class="font-semibold text-ink">France</strong>.
                    Cliquez ci-dessous pour accéder directement à la
                    <strong class="font-semibold text-ink">réservation en ligne</strong>.
                </p>

                <h3 class="mb-4 text-[22px] font-semibold text-brown">Horaires d'ouverture</h3>

                <p class="mb-10 text-[17px] leading-[1.9] text-ink/85 lg:text-lg">
                    Vous pouvez réserver à tout moment en ligne. Le cabinet est ouvert
                    <strong class="font-semibold text-ink">{{ $contact['horaires'] }}</strong>.
                </p>

                <a href="{{ $contact['reservation_url'] }}"
                   class="inline-flex items-center justify-center rounded-sm bg-cream px-10 py-5 text-[18px] font-semibold leading-none text-brown shadow-[6px_6px_0_rgba(63,42,42,0.18)] transition hover:-translate-y-0.5 hover:bg-cream-soft">
                    Prendre rendez-vous
                </a>
            </div>

            <figure class="m-0 flex justify-center lg:justify-end">
                <img src="{{ SiteImage::url('rendez-vous', 'cabinet-digital.svg') }}"
                     alt="Le site du cabinet affiché sur un ordinateur portable, devant la tour Eiffel"
                     class="w-full max-w-[560px] object-contain">
            </figure>
        </div>

        {{-- Coordonnées --}}
        <div class="mt-16 border-t border-black/10 pt-14 lg:mt-20 lg:pt-16">
            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($coordonnees as $coordonnee)
                    <div class="flex items-start gap-4">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-sm bg-cream text-brown">
                            <x-icon :name="$coordonnee['icone']" class="h-6 w-6" />
                        </span>

                        <div>
                            <h3 class="mb-1 text-xl font-semibold text-ink">{{ $coordonnee['titre'] }}</h3>

                            @if ($coordonnee['lien'])
                                <a href="{{ $coordonnee['lien'] }}" class="text-[17px] text-ink/80 transition-colors hover:text-brown">
                                    {{ $coordonnee['valeur'] }}
                                </a>
                            @else
                                <p class="text-[17px] text-ink/80">{{ $coordonnee['valeur'] }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
