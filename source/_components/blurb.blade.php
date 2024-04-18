<div class="rounded-md bg-white shadow-md p-5 md:p-10 text-center space-y-2 md:space-y-3 transition duration-500 transform group hover:bg-neutral-800 hover:-translate-y-2">
    @if ($serviceIcon ?? false)
    <img class="h-16 mx-auto" src="/assets/images/{{ $serviceIcon }}" alt="Service Icon">
    @endif
    @if ($serviceTitle ?? false)
    <h3 class="text-xl uppercase font-bold text-naranja">{{ $serviceTitle }}</h3>        
    @endif
    <div class="prose prose-neutral group-hover:text-white">{{ $slot }}</div>
</div>