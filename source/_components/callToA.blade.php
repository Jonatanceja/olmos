@if ($sectionBackground ?? false)
<section class="py-12 md:py-24 bg-center bg-cover relative flex items-center" style="background-image: url('/assets/images/{{ $sectionBackground }}')">
@endif
    <div class="absolute w-full h-full bg-black/30 z-0 inset-0"></div>
    <div class="container max-w-6xl px-5 relative z-10 mx-auto text-center text-white space-y-2 md:space-y-5 tracking-wide">
        @if ($sectionTitle ?? false)
        <h1 class="text-3xl md:text-6xl font-bold">{{ $sectionTitle }}</h1>   
        @endif
        @if ($sectionSubtitle ?? false)
        <h2 class="text-xl md:text-3xl font-bold">{{ $sectionSubtitle }}</h2>
        @endif
        <p class="text-base md:text-xl font-semibold">{{ $slot }}</p>
        <div class="flex space-x-5 items-center justify-center">
            <a href="/contact" aria-label="Go to contact us page"><x-buttonPrincipal>Get a free quote</x-buttonPrincipal></a>
        </div>
    </div>
</section>