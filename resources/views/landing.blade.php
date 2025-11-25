<x-main>    
    <div class="fixed top-0 right-0 z-[999] p-4 flex space-x-2">
        <a href="{{ route('owner.dashboard') }}" 
           class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-lg text-white bg-teal-600 hover:bg-teal-700 transition duration-150 transform hover:scale-105"
           title="">
            Owner 
        </a>
        <a href="{{ route('admin.dashboard') }}" 
           class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-lg text-white bg-red-600 hover:bg-red-700 transition duration-150 transform hover:scale-105"
           title="">
            Admin 
        </a>
    </div>
    <x-navbar></x-navbar>
    <x-landing.hero-section></x-landing.hero-section>
    <x-landing.category-section></x-landing.category-section>
    <x-landing.featured-destinations></x-landing.featured-destinations>
    <x-landing.why-visit-section></x-landing.why-visit-section>
    <x-landing.upcoming-events></x-landing.upcoming-events>
    <x-footer></x-footer>
</x-main>