@php
    use App\Support\SiteImage;

    $domaines = [
        [
            'icone' => 'developpement',
            'titre' => 'Le développement',
            'texte' => "Création de société, rédaction de contrats, structuration ou cession d'entreprise.",
        ],
        [
            'icone' => 'litige',
            'titre' => 'Les litiges',
            'texte' => 'Conflits entre associés, recouvrement de créances, contentieux ou redressements URSSAF.',
        ],
    ];
@endphp

<section id="droit-des-affaires" class="relative scroll-mt-28 overflow-hidden bg-white py-20 lg:py-28">

    {{-- Voile diagonal très clair, en écho à la coupe du bandeau --}}
    <span aria-hidden="true"
          class="pointer-events-none absolute -left-24 -top-10 hidden h-[55%] w-[55%] bg-gris/60 [clip-path:polygon(0_0,100%_0,28%_100%,0_100%)] lg:block"></span>

    <div class="relative mx-auto grid max-w-[1400px] items-start gap-12 px-6 lg:grid-cols-2 lg:gap-20 lg:px-10">

        <div class="text-ink">
            <h2 class="mb-8 font-body text-[clamp(28px,3.4vw,44px)] font-semibold leading-tight">
                Qu'est-ce que le droit des affaires ?
            </h2>

            <p class="mb-6 text-[17px] leading-[1.9] text-ink/85 lg:text-lg">
                Le <strong class="font-semibold text-ink">droit des affaires</strong> encadre l'activité économique
                des <strong class="font-semibold text-ink">entreprises</strong>,
                <strong class="font-semibold text-ink">commerçants</strong> et
                <strong class="font-semibold text-ink">sociétés</strong>. Il couvre le droit commercial, le droit
                des sociétés, le droit de la concurrence et les contrats.
            </p>

            <p class="mb-10 text-[17px] leading-[1.9] text-ink/85 lg:text-lg">
                Une avocate en droit des affaires intervient pour :
            </p>

            <div class="space-y-6">
                @foreach ($domaines as $domaine)
                    <article class="flex items-start gap-5 rounded-sm bg-gris p-6 shadow-[8px_8px_0_rgba(0,0,0,0.05)]">
                        <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-sm bg-cream text-brown">
                            <x-icon :name="$domaine['icone']" class="h-7 w-7" />
                        </span>
                        <div>
                            <h3 class="mb-1.5 text-xl font-semibold text-brown">{{ $domaine['titre'] }}</h3>
                            <p class="text-[16px] leading-relaxed text-ink/85">{{ $domaine['texte'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="flex flex-col items-start gap-10 lg:items-end">
            <figure class="m-0 w-full">
                <img src="{{ SiteImage::url('droit-affaires') }}"
                     alt="Balance de la justice posée à côté d'un ordinateur portable"
                     class="aspect-[4/3] w-full rounded-sm object-cover shadow-[0_18px_40px_rgba(0,0,0,0.15)]">
            </figure>

            <a href="#rendez-vous"
               class="inline-flex items-center justify-center rounded-sm bg-cream px-10 py-5 text-[18px] font-semibold leading-none text-brown shadow-[6px_6px_0_rgba(63,42,42,0.18)] transition hover:-translate-y-0.5 hover:bg-cream-soft">
                Prendre rendez-vous
            </a>
        </div>
    </div>
</section>
