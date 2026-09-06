@php
    use App\Support\SiteImage;

    // Fond : public/images/hero-bg.{webp,jpg,png} — placeholder SVG tant qu'il est absent.
    $heroBackground = SiteImage::url('hero-bg');

    /*
     | Portrait : deux traitements selon le fichier déposé dans public/images/
     |  - avocate.png  → photo détourée (fond transparent), affichée telle quelle
     |                   comme sur le modèle ;
     |  - avocate.jpg / .webp → photo avec son décor, présentée dans un cadre
     |                   arrondi pour rester élégante sans détourage.
     */
    // Le placeholder SVG est lui aussi détouré : pas de cadre tant qu'aucune photo n'est fournie.
    $portraitIsCutOut = is_file(public_path('images/avocate.png')) || ! SiteImage::exists('avocate');
    $portrait = SiteImage::url('avocate', 'portrait.svg');
@endphp

<section class="relative flex min-h-screen items-center overflow-hidden bg-brown-dark pt-[76px] lg:pt-[92px]">

    {{-- Image de fond --}}
    <div class="absolute inset-0">
        <img src="{{ $heroBackground }}" alt="" aria-hidden="true" class="h-full w-full object-cover object-center">
        <span class="absolute inset-0 bg-[linear-gradient(100deg,rgba(31,18,18,0.72)_0%,rgba(31,18,18,0.45)_45%,rgba(31,18,18,0.12)_75%)]" aria-hidden="true"></span>
    </div>

    <div class="relative z-10 mx-auto flex w-full max-w-[1400px] flex-col items-start gap-10 px-6 pt-16 lg:flex-row lg:items-end lg:px-10 lg:py-[90px]">

        <div class="max-w-[900px] flex-1 pb-5 lg:pb-10">
            <h1 class="mb-6 font-title text-[clamp(42px,6.2vw,92px)] font-medium leading-[1.05] text-white drop-shadow-[0_2px_18px_rgba(0,0,0,0.35)] lg:mb-8">
                {{ config('cabinet.nom') }}
            </h1>

            <p class="mb-4 text-[clamp(26px,3.6vw,54px)] font-normal leading-tight text-cream">
                {{ config('cabinet.titre') }}
            </p>

            <p class="mb-8 text-[clamp(14px,1.4vw,21px)] font-light uppercase tracking-[0.08em] text-white/90 lg:mb-11">
                {{ config('cabinet.accroche') }}
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="#rendez-vous"
                   class="inline-flex flex-1 items-center justify-center rounded-sm bg-cream px-8 py-5 text-[17px] font-medium leading-none text-brown transition hover:-translate-y-0.5 hover:bg-cream-soft sm:flex-none sm:text-[19px]">
                    Prendre rendez-vous
                </a>
                <a href="#competences"
                   class="inline-flex flex-1 items-center justify-center rounded-sm bg-brown px-8 py-5 text-[17px] font-medium leading-none text-cream transition hover:-translate-y-0.5 hover:bg-brown-dark sm:flex-none sm:text-[19px]">
                    Mes compétences
                </a>
            </div>
        </div>

        {{-- Portrait --}}
        <figure class="m-0 w-[min(360px,78%)] shrink-0 self-center lg:w-[clamp(280px,32vw,520px)] lg:self-end">
            @if ($portraitIsCutOut)
                <img src="{{ $portrait }}"
                     alt="Portrait de {{ config('cabinet.nom') }}"
                     class="h-auto w-full drop-shadow-[0_24px_46px_rgba(0,0,0,0.35)]">
            @else
                <div class="overflow-hidden rounded-t-[999px] rounded-b-sm border-4 border-cream/25 shadow-[0_24px_46px_rgba(0,0,0,0.4)]">
                    <img src="{{ $portrait }}"
                         alt="Portrait de {{ config('cabinet.nom') }}"
                         class="aspect-[3/4] h-auto w-full object-cover object-top">
                </div>
            @endif
        </figure>
    </div>
</section>
