@extends('_layouts.main')

@section('body')
@include('_partials.hero')
<section class="bg-neutral-50 py-10 md:py-20 space-y-5 md:space-y-10">
    <div class="container max-w-4xl mx-auto">
        <x-textBlockCenter>
            <x-slot name="serviceTitle">Full Service</x-slot>
            <x-slot name="mainTitle">From minor touch-ups to full-scale renovations, we have the expertise to bring your vision to life.</x-slot>
            We are a full-service renovation and maintenance company dedicated to creating your dream space, whether it's your home or business. From small repairs to complete remodels, we offer a wide range of services to meet your needs.
        </x-textBlockCenter>
    </div>
    <div class="container mx-auto space-y-10 px-5" id="second">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-5 md:gap-10">
            @foreach ($page->services as $item)
            <x-blurb>
                <x-slot name="serviceIcon">{{ $item->icon }}</x-slot>
                <x-slot name="serviceTitle">{{ $item->title }}</x-slot>
                {{ $item->text }} 
            </x-blurb>         
            @endforeach
        </div>
        <div class="flex justify-center">
            <a href="{{ $page->baseUrl }}/services" aria-label="Go to services page"><x-buttonPrincipal>See full services</x-buttonPrincipal></a>
        </div>
    </div>
    <div class="h-56 hidden md:block"></div>
</section>
<section class="bg-neutral-800 space-y-10 pb-10 md:pb-0">
    <div class="container mx-auto rounded-md grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-14 items-center bg-white transform md:-translate-y-56">
        <div><img class="w-full rounded-l-md" src="/assets/images/experience.jpg" alt="Experience Worker"></div>
        <div class="pb-10">
            <x-textBlockLeft>
                <x-slot name="serviceTitle">Experience</x-slot>
                <x-slot name="mainTitle">Over <span class="text-naranja font-extrabold">10 Years</span> of Renovation Expertise</x-slot>
                With a proven track record of success for over a decade, we offer the experience and expertise to deliver your renovation project flawlessly.            
            </x-textBlockLeft>
        </div>
    </div>
    <div class="container mx-auto transform md:-translate-y-56 space-y-10">
        <x-textBlockLeftLight>
            <x-slot name="serviceTitle">Testimonials</x-slot>
            <x-slot name="mainTitle">What our clients say</x-slot>            
        </x-textBlockLeftLight>
        <x-swiper>
            @foreach ($page->testimonials as $item)
            <div class="swiper-slide bg-white rounded-md p-5 md:p-10 space-y-3 min-h-full">
                <div class="flex space-x-1 text-amber-400 text-xl"><i class="lni lni-star-fill"></i><i class="lni lni-star-fill"></i><i class="lni lni-star-fill"></i><i class="lni lni-star-fill"></i><i class="lni lni-star-fill"></i></div>
                <div class="prose">{{ $item->testimonial }}</div>
                <div class="space-y-1">
                    <p class="font-bold text-neutral-800">{{ $item->user }}</p>
                    <p class="text-neutral-600 italic text-sm">{{ $item->place }}</p>
                </div>
            </div>
            @endforeach
        </x-swiper>
    </div>
</section>
<section class="py-10 md:py-20 transform md:-translate-y-24 md:-mb-24 bg-white">
    <div class="container mx-auto space-y-10 md:space-y-20">
        <x-textBlockLeft>
            <x-slot name="serviceTitle">Projects</x-slot>
            <x-slot name="mainTitle">See our work in action</x-slot>           
        </x-textBlockLeft>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5 px-5">
            @php
            $projects = collect($page->projects)->take(8);
            @endphp

            @foreach ($projects as $project)
                <div>
                    <a href="/assets/images/projects/{{ $project['thumbnail'] }}" data-fancybox="gallery" data-caption="{{ $project['caption'] }}" aria-label="Open the image in lightbox">
                        <img src="/assets/images/thumbs/{{ $project['image'] }}" alt="Projects Image"/>
                    </a>
                </div>                       
            @endforeach
        </div>
        <div class="px-5">
            <a href="{{ $page->baseUrl }}/services" aria-label="Go to projects page"><x-buttonAlt>Watch more Projects</x-buttonAlt></a>
        </div>
    </div>
</section>
    <x-callToA>
        <x-slot name="sectionBackground">stress.jpeg</x-slot>
        <x-slot name="sectionTitle">Stop Stressing, Start Renovating</x-slot>
        <x-slot name="sectionSubtitle">Schedule Your Consultation Now!</x-slot>
        Let Our Experts Transform Your Space!
    </x-callToA>
@endsection
