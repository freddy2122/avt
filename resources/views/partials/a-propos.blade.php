@php
    use App\Support\SiteImage;
@endphp

<section id="a-propos" class="scroll-mt-28 bg-white py-20 lg:py-28">
    <div class="mx-auto grid max-w-[1400px] items-start gap-12 px-6 lg:grid-cols-[minmax(0,460px)_minmax(0,1fr)] lg:gap-20 lg:px-10">

        <figure class="m-0">
            <img src="{{ SiteImage::url('a-propos') }}"
                 alt="{{ config('cabinet.nom') }}, avocate au {{ config('cabinet.barreau') }}"
                 class="aspect-square w-full rounded-sm object-cover shadow-[0_18px_40px_rgba(0,0,0,0.18)]">
        </figure>

        <div class="text-ink">
            <h2 class="mb-8 font-body text-[clamp(28px,3.4vw,44px)] font-semibold leading-tight">
                Votre cabinet d'avocate en droit des affaires, à Paris et en France
            </h2>

            <p class="mb-6 text-[17px] leading-[1.9] text-ink/85 lg:text-lg">
                Inscrite au {{ config('cabinet.barreau') }}, {{ config('cabinet.nom_texte') }} est une avocate
                expérimentée en <strong class="font-semibold text-ink">droit des affaires</strong>. Elle est reconnue
                pour son accompagnement personnalisé des entreprises.<br>
                Grâce à une expérience solide en <strong class="font-semibold text-ink">cabinet d'affaires</strong>
                et dans l'administration, elle intervient en droit commercial, droit des sociétés et litiges URSSAF.
            </p>

            <p class="mb-8 text-[17px] leading-[1.9] text-ink/85 lg:text-lg">
                Choisissez {{ config('cabinet.nom_texte') }} et prenez rendez-vous de deux façons :
            </p>

            <ul class="mb-10 space-y-5">
                @foreach (config('cabinet.rendez_vous') as $mode)
                    <li class="flex items-center gap-5">
                        <x-icon :name="$mode['icone']" class="h-8 w-8 shrink-0 text-brown" />
                        <span class="text-[17px] text-ink lg:text-lg">{{ $mode['label'] }}</span>
                    </li>
                @endforeach
            </ul>

            <a href="#rendez-vous"
               class="inline-flex items-center justify-center rounded-sm bg-cream px-10 py-5 text-[18px] font-semibold leading-none text-brown shadow-[6px_6px_0_rgba(63,42,42,0.18)] transition hover:-translate-y-0.5 hover:bg-cream-soft">
                Prendre rendez-vous
            </a>
        </div>
    </div>
</section>
