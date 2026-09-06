@php
    $avis = config('cabinet.avis');
@endphp

<section id="avis" class="scroll-mt-28 bg-gris py-24 [clip-path:polygon(0_4%,100%_0,100%_96%,0_100%)] lg:py-28">
    <div class="mx-auto max-w-[1400px] px-6 lg:px-10">

        <h2 class="mb-14 font-body text-[clamp(28px,3.4vw,44px)] font-semibold leading-tight text-ink lg:mb-16">
            Retour d'expérience de mes clients
        </h2>

        <div class="grid items-center gap-10 lg:grid-cols-[minmax(0,300px)_minmax(0,1fr)] lg:gap-12">

            {{-- Fiche du cabinet --}}
            <div class="flex items-start gap-5">
                <span class="flex h-16 w-16 shrink-0 flex-col items-center justify-center gap-0.5 border border-black/10 bg-white text-ink">
                    <span class="font-title text-lg font-semibold leading-none">{{ config('cabinet.initiales') }}</span>
                    <span class="h-px w-7 bg-current" aria-hidden="true"></span>
                    <span class="font-title text-[8px] uppercase leading-none tracking-[0.2em]">{{ config('cabinet.mention') }}</span>
                </span>

                <div>
                    <p class="mb-2 text-[17px] font-semibold leading-snug text-ink">
                        {{ config('cabinet.nom_texte') }}<br>— Droit des affaires — Paris
                    </p>

                    <x-etoiles :note="$avis['note']" class="mb-1.5" />

                    <p class="mb-4 text-[15px] text-ink/60">
                        @if ($avis['nombre'] > 0)
                            {{ $avis['nombre'] }} avis Google
                        @else
                            Avis Google
                        @endif
                    </p>

                    <a href="{{ $avis['ecrire_url'] }}"
                       class="inline-flex items-center justify-center rounded-sm border border-ink/25 bg-white px-5 py-2.5 text-[15px] font-semibold text-ink transition hover:border-ink/50 hover:bg-gris">
                        Écrire un avis
                    </a>
                </div>
            </div>

            {{-- Carrousel des avis --}}
            <div class="relative" data-carousel>
                <button type="button" data-carousel-prev aria-label="Voir les avis précédents"
                        class="absolute -left-3 top-1/2 z-10 hidden h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full bg-white text-ink shadow-md transition hover:bg-cream lg:flex">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 6l-6 6 6 6"/></svg>
                </button>

                <div data-carousel-track
                     class="flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth px-1 pb-4 pt-1 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                    @foreach ($avis['temoignages'] as $temoignage)
                        <article class="flex w-[80%] shrink-0 snap-start flex-col rounded-lg bg-white p-5 shadow-[0_2px_10px_rgba(0,0,0,0.08)] sm:w-[46%] xl:w-[31%]">
                            <div class="mb-3 flex items-center gap-3">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full text-lg font-semibold text-white"
                                      style="background-color: {{ $temoignage['couleur'] }}" aria-hidden="true">
                                    {{ mb_strtoupper(mb_substr($temoignage['auteur'], 0, 1)) }}
                                </span>

                                <div class="min-w-0 flex-1">
                                    <p class="truncate text-[15px] font-semibold text-ink">{{ $temoignage['auteur'] }}</p>
                                    <p class="text-[13px] text-ink/50">{{ $temoignage['date'] }}</p>
                                </div>

                                <x-logo-google class="h-5 w-5 shrink-0" />
                            </div>

                            <div class="mb-3 flex items-center gap-2">
                                <x-etoiles :note="$temoignage['note']" taille="h-4 w-4" />
                                <svg viewBox="0 0 24 24" class="h-4 w-4 text-[#1a73e8]" fill="currentColor" aria-label="Avis vérifié" role="img">
                                    <path d="M12 1.5 14.6 4l3.5-.4 1 3.4 3.2 1.6-1.4 3.2 1.4 3.2-3.2 1.6-1 3.4-3.5-.4L12 22.5 9.4 20l-3.5.4-1-3.4L1.7 15.4 3.1 12.2 1.7 9l3.2-1.6 1-3.4L9.4 4z"/>
                                    <path d="m8.5 12.2 2.4 2.4 4.6-4.8" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                            <p class="mb-4 line-clamp-4 text-[15px] leading-relaxed text-ink/85">{{ $temoignage['texte'] }}</p>

                            <a href="{{ $avis['profil_url'] }}" class="mt-auto text-[14px] text-ink/50 transition-colors hover:text-brown">
                                Lire la suite
                            </a>
                        </article>
                    @endforeach
                </div>

                <button type="button" data-carousel-next aria-label="Voir les avis suivants"
                        class="absolute -right-3 top-1/2 z-10 hidden h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full bg-white text-ink shadow-md transition hover:bg-cream lg:flex">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 6l6 6-6 6"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>
