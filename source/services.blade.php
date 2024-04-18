@extends('_layouts.main')

@section('body')
<div class="h-16 md:h-28"></div>
<x-cover>
    <x-slot name="sectionBackground">services.jpg</x-slot>
    <x-slot name="sectionTitle">Services</x-slot>
    Reliable Renovation & Maintenance Services for Your Home or Business
</x-cover>
<section class="py-10 md:py-20 container mx-auto">
    <x-textBlockLeft>
        <x-slot name="serviceTitle">What we do</x-slot>
        <x-slot name="mainTitle">Renovation & Maintenance Services You Can Trust</x-slot>
        From minor touch-ups to full-scale renovations, we offer a range of services designed to transform your space with lasting results.  
        Our skilled professionals prioritize quality and reliability on every project, ensuring your complete satisfaction.  
        Explore our services below and discover how we can turn your vision into reality.      
    </x-textBlockLeft>
</section>
<section class="container mx-auto space-y-10 md:space-y-20 pb-10 md:pb-20">
    <div class="grid grid-cols-1 md:grid-cols-5 gap-10 md:gap-20 items-center">
        @foreach ($fullservices as $service)
            <!--- bloque 1 --->
            <div class="col-span-1 md:col-span-2">
                <img class="w-full md:rounded-md md:shadow-md" src="/assets/images/{{ $service->image }}" alt="Service Image">
            </div>
            <div class="col-span-1 md:col-span-3">
                <x-textBlockLeft>
                    <x-slot name="serviceTitle">{{ $service->title }}</x-slot>
                    <x-slot name="mainTitle">{{ $service->subtitle }}</x-slot>
                    {!! $service->getContent() !!}           
                </x-textBlockLeft>
            </div>
        @endforeach
    </div>   
</section>
<section class="space-y-10 md:space-y-20 py-10 md:py-20 bg-neutral-50">
    <div class="container mx-auto">
        <x-textBlockLeft>
            <x-slot name="serviceTitle">List of Services</x-slot>
            <x-slot name="mainTitle">Transform Your Space: Renovation & Maintenance Solutions</x-slot>
            <ol>
                <li>Demolition (interior and exterior)</li>
                <li>Drywall (Installation and repair)</li>
                <li>Mud, Tape and Sand.</li>
                <li>Drywall and Ceiling texture (Popcorn, Orange peel, Spray sand and others)</li>
                <li>Painting (Interior and exterior)</li>
                <li>Painting and Staining (furniture and cabinets)</li>
                <li>Carpet (installation and demolition)</li>
                <li>Ceramic floor (installation and demolition)</li>
                <li>Vinyl floor (installation and demolition)</li>
                <li>Laminate floor (installation and demolition)</li>
                <li>Wallpaper (installation and demolition)</li>
                <li>Furniture, Fixtures and Equipment package (Installation)</li>
                <li>Doors and frames (Installation, repair and painting)</li>
                <li>Trim and moulding (installation, repair and painting)</li>
                <li>Pressure Washing Services.</li>
                <li>Appliances (installation)</li>
                <li>Bathroom remodeling (replacement shower, tubs, tile, sink, toilet, vanity and others)</li>
                <li>Kitchen remodeling (remove, replace and upgrade cabinets, countertops, sink and others)</li>
                <li>Electrical Services (Installation of new or replacement indoor and outdoor lighting,
                    ceiling fan, switches and outlets)</li>
                <li>Plumbing Services (Repair a kitchen faucet, stop leaks in joints, toilet flush problems,
                    fix a clogged tub drain, unclog a toilet, replace a shutoff valves and others minors services)</li>
            </ol>                  
        </x-textBlockLeft> 
    </div>
</section>
<x-callToA>
    <x-slot name="sectionBackground">services-cta.jpg</x-slot>
    <x-slot name="sectionTitle">We'll Handle your Renovation</x-slot>
    <x-slot name="sectionSubtitle">Schedule Your Consultation Now!</x-slot>
    Let Our Experts Transform Your Space!
</x-callToA>

@endsection