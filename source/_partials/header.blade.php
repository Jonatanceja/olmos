<div x-data="{ open: false }" class="bg-white shadow-sm fixed w-full py-2 md:py-0 z-50">
    <nav class="pl-4 flex justify-between items-center h-full">
        <div class="flex items-center">
            <a href="{{ $page->baseUrl }}/" class="w-24 md:w-32" aria-label="Go to home page">
                <x-logo/>
            </a>
        </div>
        <div class="hidden h-full md:flex items-center">
            <ul class="flex space-x-8 uppercase pr-4">
                <li><a href="{{ $page->baseUrl }}/" class="text-neutral-800 hover:text-neutral-500" aria-label="Go to home page">Home</a></li>
                <li><a href="{{ $page->baseUrl }}/about" class="text-neutral-800 hover:text-neutral-500" aria-label="Go to about us page">About Us</a></li>
                <li><a href="{{ $page->baseUrl }}/services" class="text-neutral-800 hover:text-neutral-500" aria-label="Go to services page">Services</a></li>
                <li><a href="{{ $page->baseUrl }}/projects" class="text-neutral-800 hover:text-neutral-500" aria-label="Go to projects page">Projects</a></li>
            </ul>
            <div class="bg-naranja hover:bg-orange-400 py-7 px-8 uppercase text-white space-y-1">
                <div><a class="hover:underline" href="tel:{{ $page->phoneCall }}" aria-label="Call the company"><span class="mr-2"><i class="lni lni-phone"></i></span>{{ $page->phone }}</div></a>
                <div><a class="text-xl hover:underline" href="{{ $page->baseUrl }}/contact" aria-label="Go to contact us page">Get a free Quote <span class="ml-2 mt-2"><i class="lni lni-arrow-right"></i></span></a></div>
            </div>
        </div>
        <div class="md:hidden mt-2">
            <button aria-label="Open Menu" @click="open = !open" class="text-naranja focus:outline-none">
                <svg x-show="!open" class="h-10 w-10 transition-transform duration-300 transform" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm16 4H4v2h16v-2z" fill="currentColor"></path>
                </svg>
                <svg x-show="open" class="h-10 w-10 transition-transform duration-300 transform rotate-180" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.364 5.636a1 1 0 0 0-1.414 0L12 10.586 7.05 5.636a1 1 0 1 0-1.414 1.414L10.586 12l-4.95 4.95a1 1 0 1 0 1.414 1.414L12 13.414l4.95 4.95a1 1 0 0 0 1.414-1.414L13.414 12l4.95-4.95a1 1 0 0 0 0-1.414z" fill="currentColor"></path>
                </svg>
            </button>
        </div>
    </nav>
    <div x-show="open" class="md:hidden bg-white mt-2">
        <ul class="px-2 py-5 uppercase text-neutral-800 text-center space-y-4">
            <li><a href="{{ $page->baseUrl }}/" class="text-neutral-800 hover:text-neutral-500" aria-label="Go to home page">Home</a></li>
            <li><a href="{{ $page->baseUrl }}/about" class="text-neutral-800 hover:text-neutral-500" aria-label="Go to about us page">About Us</a></li>
            <li><a href="{{ $page->baseUrl }}/services" class="text-neutral-800 hover:text-neutral-500" aria-label="Go to services page">Services</a></li>
            <li><a href="{{ $page->baseUrl }}/projects" class="text-neutral-800 hover:text-neutral-500" aria-label="Go to projects page">Projects</a></li>
        </ul>
        <div class="bg-naranja hover:bg-orange-400 py-7 px-8 uppercase text-white space-y-1 -mb-2">
            <div><a class="hover:underline" href="tel:{{ $page->phoneCall }}" aria-label="Call the company"><span class="mr-2"><i class="lni lni-phone"></i></span>{{ $page->phone }}</div></a>
            <div><a class="text-xl hover:underline" href="{{ $page->baseUrl }}/contact" aria-label="Go to contact us page">Get a free Quote <span class="ml-2 mt-2"><i class="lni lni-arrow-right"></i></span></a></div>
        </div>
    </div>
</div>
