@extends('_layouts.main')

@section('body')
<div class="h-16 md:h-28"></div>
<x-cover>
    <x-slot name="sectionBackground">projects.jpg</x-slot>
    <x-slot name="sectionTitle">Projects</x-slot>
    Our Work Speaks for Itself
</x-cover>
<section class="py-10 md:py-20 container mx-auto space-y-10">
    <x-textBlockLeft>
        <x-slot name="serviceTitle">Projects</x-slot>
        <x-slot name="mainTitle">See Our Transformation Projects</x-slot>    
    </x-textBlockLeft>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-5 px-5">
        @foreach ($page->projects as $project)
        <div>
            <a href="/assets/images/projects/{{ $project->thumbnail }}" data-fancybox="gallery" data-caption="{{ $project->caption }}">
                <img src="/assets/images/thumbs/{{ $project->image }}" alt="{{ $project->caption }}"/>
            </a>
        </div>                       
        @endforeach
    </div>
</section>
<x-callToA>
    <x-slot name="sectionBackground">cta-projects.jpg</x-slot>
    <x-slot name="sectionTitle">Let's Discuss Your Project</x-slot>
    <x-slot name="sectionSubtitle">Request a free Quote!</x-slot>
    Let Our Experts Transform Your Space!
</x-callToA>

@endsection