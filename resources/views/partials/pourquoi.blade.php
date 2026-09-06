{{-- Bandeau clair coupé en biais en haut et en bas --}}
<section id="pourquoi" class="scroll-mt-28 bg-gris py-24 [clip-path:polygon(0_4%,100%_0,100%_96%,0_100%)] lg:py-32">
    <div class="mx-auto max-w-[1400px] px-6 lg:px-10">

        <h2 class="mb-16 max-w-4xl font-body text-[clamp(28px,3.4vw,44px)] font-semibold leading-tight text-ink lg:mb-20">
            Pourquoi choisir {{ config('cabinet.nom_texte') }}, avocate à Paris ?
        </h2>

        <div class="grid grid-cols-2 gap-x-8 gap-y-14 lg:grid-cols-4">
            @foreach (config('cabinet.atouts') as $atout)
                <div class="flex flex-col items-center gap-4 text-center">
                    <x-icon :name="$atout['icone']" class="h-14 w-14 text-brown" />
                    <h3 class="text-xl font-semibold text-ink">{{ $atout['titre'] }}</h3>
                    <p class="max-w-[220px] text-[16px] leading-relaxed text-ink/60">{{ $atout['texte'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
