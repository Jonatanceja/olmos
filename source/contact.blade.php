@extends('_layouts.main')

@section('body')
<div class="h-16 md:h-28"></div>
<x-cover>
    <x-slot name="sectionBackground">contact.jpg</x-slot>
    <x-slot name="sectionTitle">Contact us</x-slot>
    Let's Discuss Your Project
</x-cover>
<section class="pt-10 md:pt-20 container mx-auto space-y-10">
    <x-textBlockLeft>
        <x-slot name="serviceTitle">Contact Us</x-slot>
        <x-slot name="mainTitle">We are here to help you make a first move to your remodelation project</x-slot>    
    </x-textBlockLeft>
</section>
<section class="py-10 md:py-20 px-5 space-y-5 md:space-y-7 container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-20">
        <div class="space-y-3">
            <div class="text-neutral-700 font-semibold">
                <span class="mr-2 pt-2 text-naranja text-lg"><i class="lni lni-envelope"></i></span>
                <a class="hover:text-naranja" href="mailto:{{ $page->mail }}">{{ $page->mail }}</a>
            </div>
            <div class="text-neutral-700 font-semibold">
                <span class="mr-2 pt-2 text-naranja text-lg"><i class="lni lni-phone"></i></span>
                <a class="hover:text-naranja" href="tel:{{ $page->phoneCall }}">{{ $page->phone }}</a><span class="font-medium"> (English)</span> 
            </div>
            <div class="text-neutral-700 font-semibold">
                <span class="mr-2 pt-2 text-naranja text-lg"><i class="lni lni-phone"></i></span>
                <a class="hover:text-naranja" href="tel:{{ $page->phoneCall2 }}">{{ $page->phone2 }}</a><span class="font-medium"> (Español)</span> 
            </div>
            <div class="text-neutral-700 font-semibold"><span class="mr-2 pt-2 text-naranja text-lg"><i class="lni lni-map-marker"></i></span>{{ $page->address }}</div>
        </div>
        <div class="space-y-3">
            <h3 class="text-2xl">Fill out the form</h3>
            <form action="sendform.php" method="POST" class="mx-auto">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="name" name="name" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <small class="text-gray-600">Format: 123-456-7890</small>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="service" class="block text-gray-700 text-sm font-bold mb-2">Service:</label>
                    <select id="service" name="service" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select a service</option>
                        <option value="Demolition">Demolition</option>
                        <option value="Drywall">Drywall</option>
                        <option value="Painting">Painting</option>
                        <option value="Furniture Installation and Appliances Services">Furniture Installation and Appliances Services</option>
                        <option value="Floor">Floor</option>
                        <option value="Wallpaper">Wallpaper</option>
                        <option value="Doors and Frames">Doors and Frames</option>
                        <option value="Trim and Moulding">Trim and Moulding</option>
                        <option value="Plumbing and Pressure Washing Services">Plumbing and Pressure Washing Services</option>
                        <option value="Bathroom Renovation">Bathroom Renovation</option>
                        <option value="Kitchen Renovation">Kitchen Renovation</option>
                        <option value="Electrical Services">Electrical Services</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <x-buttonPrincipal type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</x-buttonPrincipal>
            </form>        
        </div>
    </div>
</section>
<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3359.5810415352075!2d-97.36741942441509!3d32.6439787737195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e6dce7cb3b4e5%3A0x695dccc32573ba18!2s6801%20Penhurst%20Dr%2C%20Fort%20Worth%2C%20TX%2076133%2C%20EE.%20UU.!5e0!3m2!1ses-419!2smx!4v1711508718077!5m2!1ses-419!2smx" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection