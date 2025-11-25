@php
    $events = [
        [
            'id' => 1,
            'title' => 'Jember Fashion Carnaval',
            'category' => 'Cultural',
            'description' => 'The world-famous fashion carnival showcasing creative costumes and cultural performances.',
            'date' => 'Monday, December 15, 2025',
            'time' => '10:00 AM - 5:00 PM',
            'location' => 'Jember City Center',
            'image' => 'carnaval.png', // Pastikan gambarnya ada ya!
        ],
        [
            'id' => 2,
            'title' => 'Coffee Festival',
            'category' => 'Festival',
            'description' => "Celebrate Jember's premium coffee with tastings, workshops, and farm tours.",
            'date' => 'Friday, November 28, 2025',
            'time' => '8:00 AM - 6:00 PM',
            'location' => 'Sidomulyo Coffee Plantations',
            'image' => 'coffee.png',
        ],
        [
            'id' => 3,
            'title' => 'Beach Clean-up Day',
            'category' => 'Community',
            'description' => 'Join the community in keeping our beaches clean and beautiful.',
            'date' => 'Tuesday, November 25, 2025',
            'time' => '6:00 AM - 12:00 PM',
            'location' => 'Papuma Beach',
            'image' => 'papuma.png',
        ],
        [
            'id' => 4,
            'title' => 'Traditional Dance Workshop',
            'category' => 'Workshop',
            'description' => 'Learn traditional Javanese dance from local experts.',
            'date' => 'Monday, December 1, 2025',
            'time' => '2:00 PM - 5:00 PM',
            'location' => 'Rembangan Cultural Center',
            'image' => 'carnaval.png',
        ],
    ];
@endphp
<x-main>
    <x-navbar isActive='Events'></x-navbar>
    <x-templates.page-header>
        @slot('title')
            Events and Activity in Jember
        @endslot
        @slot('subtitle')
            Discover upcoming events and activities in Jember.
        @endslot
    </x-templates.page-header>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 pt-8">
        <div class="grid grid-cols-1 gap-8">
            <x-templates.card-row :data="$events"></x-templates.card-row>
        </div>
        
        <div class="mt-12 flex justify-center">
            <button class="px-6 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-[#47b6c2] transition">
                Load More Events
            </button>
        </div>
    </div>
    <x-footer></x-footer>
</x-main>