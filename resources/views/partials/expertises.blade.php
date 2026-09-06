@php
    use App\Support\SiteImage;

    // Les cartes reprennent la photo de la bannière en fond, assombrie.
    $fondCarte = SiteImage::url('hero-bg');
@endphp

<section id="mes-competences" class="scroll-mt-28 bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-[1400px] px-6 lg:px-10">

        <h2 class="mb-14 max-w-4xl font-body text-[clamp(28px,3.4vw,44px)] font-semibold leading-tight text-ink lg:mb-16">
            Mes compétences en droit des affaires, sur Paris et dans toute la France
        </h2>

        <div class="grid gap-10 lg:grid-cols-[minmax(0,420px)_minmax(0,1fr)] lg:gap-14">

            <div class="flex flex-col items-start gap-10">
                <figure class="m-0 w-full">
                    <img src="{{ SiteImage::url('competences') }}"
                         alt="Marteau de justice posé sur le bureau du cabinet"
                         class="aspect-square w-full rounded-sm object-cover shadow-[0_18px_40px_rgba(0,0,0,0.18)]">
                </figure>

                <a href="#rendez-vous"
                   class="inline-flex items-center justify-center rounded-sm bg-cream px-10 py-5 text-[18px] font-semibold leading-none text-brown shadow-[6px_6px_0_rgba(63,42,42,0.18)] transition hover:-translate-y-0.5 hover:bg-cream-soft">
                    Prendre rendez-vous
                </a>
            </div>

            <div class="grid gap-8 sm:grid-cols-2">
                @foreach (config('cabinet.expertises') as $expertise)
                    <article @class([
                        'group relative overflow-hidden rounded-sm bg-[#3b4443] shadow-[8px_8px_0_rgba(0,0,0,0.08)]',
                        'sm:col-span-2' => $loop->last && $loop->count % 2 === 1,
                    ])>
                        <img src="{{ $fondCarte }}" alt="" aria-hidden="true"
                             class="absolute inset-0 h-full w-full object-cover opacity-40 transition-transform duration-500 group-hover:scale-105">
                        <span aria-hidden="true" class="absolute inset-0 bg-[#2f3736]/80"></span>

                        <div class="relative flex h-full flex-col p-7">
                            <x-icon :name="$expertise['icone']" class="mb-6 h-11 w-11 text-white" />

                            <h3 class="mb-3 text-[22px] font-semibold text-cream">{{ $expertise['titre'] }}</h3>

                            <p class="mb-6 text-[16px] leading-relaxed text-white/85">{{ $expertise['texte'] }}</p>

                            <a href="{{ $expertise['url'] }}"
                               class="mt-auto inline-flex items-center gap-2 text-[16px] text-cream transition-colors hover:text-white">
                                En savoir plus
                                <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M5 12h14M13 6l6 6-6 6"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
