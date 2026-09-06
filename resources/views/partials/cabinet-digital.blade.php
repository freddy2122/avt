@php
    use App\Support\SiteImage;
@endphp

<section id="cabinet-digital" class="relative scroll-mt-28 overflow-hidden bg-white py-20 lg:py-28">

    <span aria-hidden="true"
          class="pointer-events-none absolute -left-32 top-0 hidden h-full w-[60%] bg-gris/60 [clip-path:polygon(0_0,100%_0,55%_100%,0_100%)] lg:block"></span>

    <div class="relative mx-auto max-w-[1400px] px-6 lg:px-10">

        <h2 class="mb-14 font-body text-[clamp(28px,3.4vw,44px)] font-semibold leading-tight text-ink lg:mb-16">
            Un cabinet d'avocate en droit des affaires digitalisé et en présentiel
        </h2>

        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

            <figure class="m-0">
                <img src="{{ SiteImage::url('cabinet-digital') }}"
                     alt="Le site du cabinet affiché sur un ordinateur portable"
                     class="w-full max-w-[560px] object-contain">
            </figure>

            <div>
                <p class="mb-4 text-[17px] leading-[1.9] text-ink/85 lg:text-lg">
                    Un cabinet pensé pour l'ère digitale : consultez en
                    <strong class="font-semibold text-ink">visioconférence</strong> où que vous soyez en
                    <strong class="font-semibold text-ink">France</strong>, ou retrouvez
                    {{ config('cabinet.nom_texte') }} directement à
                    <strong class="font-semibold text-ink">Paris</strong>.
                </p>

                <p class="mb-8 text-[17px] leading-[1.9] text-ink/85 lg:text-lg">
                    Les avantages d'opter pour le cabinet digitalisé :
                </p>

                <div class="mb-10 space-y-5">
                    @foreach (config('cabinet.avantages_digital') as $avantage)
                        <article class="flex items-start gap-5 rounded-sm bg-gris p-5 shadow-[8px_8px_0_rgba(0,0,0,0.05)]">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-sm bg-cream text-brown">
                                <x-icon :name="$avantage['icone']" class="h-6 w-6" />
                            </span>
                            <div>
                                <h3 class="mb-1 text-lg font-semibold text-brown">{{ $avantage['titre'] }}</h3>
                                <p class="text-[16px] leading-relaxed text-ink/85">{{ $avantage['texte'] }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="flex lg:justify-end">
                    <a href="#rendez-vous"
                       class="inline-flex items-center justify-center rounded-sm bg-cream px-10 py-5 text-[18px] font-semibold leading-none text-brown shadow-[6px_6px_0_rgba(63,42,42,0.18)] transition hover:-translate-y-0.5 hover:bg-cream-soft">
                        Prendre rendez-vous
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
