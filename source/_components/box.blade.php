<div class="bg-white p-5 md:p-10 rounded-md shadow-md space-y-2 md:space-y-3">
    @if ($boxImage ?? false)
    <img class="h-12" src="/assets/images/{{ $boxImage }}" alt="Icono">
    @endif
    @if ($boxTitle ?? false)
    <h3 class="text-xl md:text-2xl font-bold uppercase text-neutral-800">{{ $boxTitle }}</h3>        
    @endif
    <div class="prose prose-neutral text-justify">{{ $slot }}</div>
</div>