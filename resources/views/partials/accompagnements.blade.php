{{-- Carrousel : défilement horizontal avec accroche (scroll-snap) et deux flèches --}}
<section id="accompagnements" class="scroll-mt-28 bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-[1400px] px-6 lg:px-10">

        <h2 class="mb-14 font-body text-[clamp(28px,3.4vw,44px)] font-semibold leading-tight text-ink lg:mb-16">
            Mes différents accompagnements en droit des affaires
        </h2>

        <div class="relative" data-carousel>
            <button type="button" data-carousel-prev aria-label="Voir les accompagnements précédents"
                    class="absolute -left-2 top-1/2 z-10 hidden h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white text-brown shadow-md transition hover:bg-cream lg:flex xl:-left-6">
                <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 6l-6 6 6 6"/></svg>
            </button>

            <div data-carousel-track
                 class="flex snap-x snap-mandatory gap-8 overflow-x-auto scroll-smooth pb-6 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                @foreach (config('cabinet.accompagnements') as $accompagnement)
                    <article class="flex w-[85%] shrink-0 snap-start flex-col rounded-sm bg-brown p-8 shadow-[10px_10px_0_rgba(0,0,0,0.12)] sm:w-[46%] lg:w-[31.5%]">
                        <x-icon :name="$accompagnement['icone']" class="mb-7 h-11 w-11 text-white" />
                        <h3 class="mb-4 text-[22px] font-semibold text-cream">{{ $accompagnement['titre'] }}</h3>
                        <p class="text-[16px] leading-[1.8] text-white/85">{{ $accompagnement['texte'] }}</p>
                    </article>
                @endforeach
            </div>

            <button type="button" data-carousel-next aria-label="Voir les accompagnements suivants"
                    class="absolute -right-2 top-1/2 z-10 hidden h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white text-brown shadow-md transition hover:bg-cream lg:flex xl:-right-6">
                <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 6l6 6-6 6"/></svg>
            </button>
        </div>
    </div>
</section>
