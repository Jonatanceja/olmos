<div class="text-left space-y-3 md:space-y-5 px-5">
    @if ($serviceTitle ?? false)
        <div class="text-naranja uppercase">{{ $serviceTitle }}</div>
    @endif
    @if ($mainTitle ?? false)
        <h2 class="font-bold text-2xl md:text-4xl text-white">{{ $mainTitle }}</h2>
    @endif
    <div class="h-1 bg-naranja w-24"></div>
    <div class="prose prose-neutral mx-auto min-w-full text-white text-justify">{{ $slot }}</div>
</div>