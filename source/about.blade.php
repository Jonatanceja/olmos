@extends('_layouts.main')

@section('body')
<div class="h-16 md:h-28"></div>
<x-cover>
    <x-slot name="sectionBackground">about-us.jpg</x-slot>
    <x-slot name="sectionTitle">About Us</x-slot>
    Building Trust and Transforming Spaces
</x-cover>
<section class="bg-neutral-50">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-5 gap-10 pb-10 md:py-0 md:pb-20 items-center transform md:-translate-y-24 md:-mb-24">
        <div class="col-span-1 md:col-span-2">
            <img class="w-full md:rounded-md md:shadow-md" src="/assets/images/about.jpg" alt="Man working at maintenance">
        </div>
        <div class="col-span-1 md:col-span-3">
            <x-textBlockLeft>
                <x-slot name="serviceTitle">About</x-slot>
                <x-slot name="mainTitle">Quality, and Client Satisfaction</x-slot>
                We're more than just a renovation company; we're a family-owned business built on a foundation of <strong>10 years of experience.</strong>  
                Our passion for transforming spaces and exceeding client expectations runs deep within our family, fueling our commitment to providing exceptional service.           
            </x-textBlockLeft>
        </div>
    </div>
</section>
<section class="bg-neutral-50 pb-10 md:pb-20">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-20 px-5">
        <x-box>
            <x-slot name="boxImage">rocket.svg</x-slot>
            <x-slot name="boxTitle">Mission</x-slot>
            Transform your vision into reality, crafting stunning, practical spaces that add value to your property and enrich your daily living or working experience.
        </x-box>
        <x-box>
            <x-slot name="boxImage">bullseye.svg</x-slot>
            <x-slot name="boxTitle">Vision</x-slot>
            To become the leading provider of residential and commercial renovation and maintenance services, knowing for our expertise, integrity, and unwavering dedication to client satisfaction.        
        </x-box>
    </div>
    <div class="container mx-auto pt-10 md:pt-20">
        <x-textBlockLeft>
            <x-slot name="serviceTitle">Values</x-slot>
            <x-slot name="mainTitle">We believe in building trust and long-lasting relationships with our clients.</x-slot>
            Let our family help yours create the space you've always dreamed of.
            <ul>
                <li>Family: We treat our clients and team members like family, fostering a collaborative and supportive environment.</li>
                <li>Quality: We are committed to delivering the highest quality workmanship, using top-of-the-line materials and exceeding industry standards.</li>
                <li>Integrity: Honesty, transparency, and open communication are at the heart of everything we do.</li>
                <li>Innovation: We embrace new technologies and methods to ensure our services remain efficient and effective.</li>
                <li>Client Satisfaction: Your satisfaction is our top priority. We listen to your needs, collaborate closely, and deliver results that exceed your expectations.</li>
            </ul>        
        </x-textBlockLeft>
    </div>
</section>
<section class="bg-neutral-800 py-0 pt-10 md:py-20">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-5 gap-10">
        <div class="col-span-1 md:col-span-3">
            <x-textBlockLeftLight>
                <x-slot name="serviceTitle">Values</x-slot>
                <x-slot name="mainTitle">Safety First</x-slot>
                Our team consists of highly skilled and certified technicians who are well-versed in safety protocols for all types of maintenance and renovation work.

We adhere to all industry-standard safety regulations and best practices. This includes utilizing proper personal protective equipment (PPE), maintaining a clean and organized work environment, and having clear emergency procedures in place.            
            </x-textBlockLeftLight>
        </div>
        <div class="relative col-span-1 md:col-span-2">
            <img class="md:absolute md:-top-32 left-0 md:rounded-md shadow-md z-0 w-full md:w-3/5" src="/assets/images/safety-1.jpg" alt="Working Safely">
            <img class="md:absolute md:-bottom-32 right-0 md:rounded-md shadow-md z-10 w-full md:w-2/3" src="/assets/images/safety-2.jpg" alt="Working Safely">
        </div>
    </div>
</section>
<x-callToA>
    <x-slot name="sectionBackground">action-about.jpeg</x-slot>
    <x-slot name="sectionTitle">We'll Handle your Renovation</x-slot>
    <x-slot name="sectionSubtitle">Schedule Your Consultation Now!</x-slot>
    Let Our Experts Transform Your Space!
</x-callToA>
@endsection