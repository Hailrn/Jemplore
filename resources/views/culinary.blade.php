@php
    $destinations = [
        [
            'title' => 'Nasi Tempong',
            'category' => 'Traditional',
            'price' => 'Rp 15,000 - Rp 25,000',
            'location' => 'Jember Kota',
            'rating' => 4.8,
            'reviews' => 1520,
            'image' => 'foods.png', // Pastiin file ada di public/img/
            'tags' => ['Spicy', 'Local Favorite'],
            'color' => 'bg-[#47b6c2]'
        ],
        [
            'title' => 'Kopi Jember Arabica',
            'category' => 'Beverages',
            'price' => 'Rp 20,000 - Rp 50,000',
            'location' => 'Sidomulyo',
            'rating' => 4.9,
            'reviews' => 2340,
            'image' => 'papuma.png',
            'tags' => ['Coffee', 'Premium'],
            'color' => 'bg-blue-500'
        ],
        [
            'title' => 'Tape Bondowoso',
            'category' => 'Snacks',
            'price' => 'Rp 10,000 - Rp 30,000',
            'location' => 'Bondowoso',
            'rating' => 4.7,
            'reviews' => 980,
            'image' => 'foods.png',
            'tags' => ['Traditional', 'Souvenir'],
            'color' => 'bg-green-600'
        ],
        [
            'title' => 'Suwar - Suwir',
            'category' => 'Traditional',
            'price' => 'Rp 5,000 - Rp 15,000',
            'location' => 'Jember Kota',
            'rating' => 4.6,
            'reviews' => 1120,
            'image' => 'foods.png',
            'tags' => ['Traditional', 'Dessert'],
            'color' => 'bg-purple-500'
        ]
    ];
@endphp
<x-main>
    <x-navbar isActive='Culinary'></x-navbar>
    <x-templates.page-header>
        @slot('title')
            Explore Culinary Delights in Jember
        @endslot
        @slot('subtitle')
            Taste the authentic flavors of Jember.
        @endslot
    </x-templates.page-header>
    <x-destination.search-bar></x-destination.search-bar>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="mb-6 text-[#060b0b]/60 font-medium">
            Showing <span class="text-[#060b0b] font-bold">{{ count($destinations) }}</span> Culinary
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <x-templates.card-md :data="$destinations" ></x-templates.card-md>
        </div>
        
        <div class="mt-12 flex justify-center">
            <button class="px-6 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-[#47b6c2] transition">
                Load More Culinary
            </button>
        </div>
    </div>
    <x-footer></x-footer>
</x-main>