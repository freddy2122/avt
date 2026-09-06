{{-- Accordéon natif <details> : ouverture sans JavaScript --}}
<section id="faq" class="scroll-mt-28 bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-[1400px] px-6 lg:px-10">

        <h2 class="mb-12 font-body text-[clamp(28px,3.4vw,44px)] font-semibold leading-tight text-ink">
            Les questions fréquemment posées
        </h2>

        <div class="space-y-4">
            @foreach (config('cabinet.faq') as $index => $item)
                <details @if ($index === 0) open @endif name="faq"
                         class="group rounded-sm bg-gris shadow-[8px_8px_0_rgba(0,0,0,0.05)] transition-colors open:bg-brown">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 text-[17px] font-medium text-ink transition-colors group-open:text-cream lg:text-lg [&::-webkit-details-marker]:hidden">
                        {{ $item['question'] }}
                        <svg viewBox="0 0 24 24" class="h-5 w-5 shrink-0 transition-transform duration-200 group-open:rotate-180"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </summary>

                    <p class="px-6 pb-6 text-[16px] leading-[1.8] text-white/85">
                        {{ $item['reponse'] }}
                    </p>
                </details>
            @endforeach
        </div>

        <a href="#rendez-vous"
           class="mt-12 inline-flex items-center justify-center rounded-sm bg-cream px-10 py-5 text-[18px] font-semibold leading-none text-brown shadow-[6px_6px_0_rgba(63,42,42,0.18)] transition hover:-translate-y-0.5 hover:bg-cream-soft">
            Prendre rendez-vous
        </a>
    </div>
</section>
