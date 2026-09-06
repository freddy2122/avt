{{-- Bandeau des compétences, coupé en biais sous la bannière --}}
<section id="competences" class="relative scroll-mt-24">

    {{-- Ombre décalée qui prolonge la diagonale --}}
    <span aria-hidden="true"
          class="absolute inset-x-0 top-0 h-full translate-y-3 bg-black/25 [clip-path:polygon(0_0,100%_0,100%_100%,0_86%)]"></span>

    <div class="relative bg-brown [clip-path:polygon(0_0,100%_0,100%_100%,0_86%)]">
        <div class="mx-auto grid max-w-[1400px] grid-cols-2 gap-x-6 gap-y-10 px-6 pb-24 pt-14 sm:gap-y-12 lg:grid-cols-4 lg:px-10 lg:pb-28 lg:pt-16">
            @foreach (config('cabinet.competences') as $competence)
                <a href="{{ $competence['url'] }}" class="group flex flex-col items-center gap-4 text-center">
                    <x-icon :name="$competence['icone']" class="h-12 w-12 text-white transition-transform duration-300 group-hover:-translate-y-1" />
                    <span class="text-[17px] font-medium text-cream transition-colors group-hover:text-white lg:text-xl">
                        {{ $competence['label'] }}
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</section>
