@php
    $destinations = [
        [
            'title' => 'Tumpak Sewu Waterfall',
            'category' => 'Nature',
            'price' => 'Rp 10,000',
            'location' => 'Lumajang Border',
            'rating' => 4.9,
            'reviews' => 2840,
            'image' => 'tumpak-sewu.png', // Pastiin file ada di public/img/
            'tags' => ['Hidden Gem', 'Pre-Wedding Spot'],
            'color' => 'bg-[#47b6c2]'
        ],
        [
            'title' => 'Papuma Beach',
            'category' => 'Beach',
            'price' => 'Rp 20,000',
            'location' => 'Wuluhan',
            'rating' => 4.7,
            'reviews' => 3210,
            'image' => 'papuma.png',
            'tags' => ['Sunset Spot', 'Family Friendly'],
            'color' => 'bg-blue-500'
        ],
        [
            'title' => 'Coffee Plantations',
            'category' => 'Nature',
            'price' => 'Rp 15,000',
            'location' => 'Sidomulyo',
            'rating' => 4.8,
            'reviews' => 1520,
            'image' => 'coffee.png',
            'tags' => ['Coffee Education', 'Scenic Views'],
            'color' => 'bg-green-600'
        ],
        [
            'title' => 'Rembangan Village',
            'category' => 'Culture',
            'price' => 'Rp 5,000',
            'location' => 'Rembangan',
            'rating' => 4.6,
            'reviews' => 980,
            'image' => 'foods.png', // Placeholder
            'tags' => ['City View', 'Night Spot'],
            'color' => 'bg-purple-500'
        ],
        [
            'title' => 'Mount Argopuro',
            'category' => 'Hiking',
            'price' => 'Rp 30,000',
            'location' => 'Hyang Argopuro',
            'rating' => 4.9,
            'reviews' => 540,
            'image' => 'coffee.png', // Placeholder
            'tags' => ['Extreme', 'Camping'],
            'color' => 'bg-orange-500'
        ],
            [
            'title' => 'Watu Ulo Beach',
            'category' => 'Beach',
            'price' => 'Rp 7,500',
            'location' => 'Ambulu',
            'rating' => 4.5,
            'reviews' => 1200,
            'image' => 'papuma.png', // Placeholder
            'tags' => ['History', 'Myths'],
            'color' => 'bg-blue-400'
        ],
    ];
@endphp
<x-main>
    <x-navbar isActive='Destinations'></x-navbar>
    <x-templates.page-header></x-templates.page-header>
    <x-destination.search-bar></x-destination.search-bar>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="mb-6 text-[#060b0b]/60 font-medium">
            Showing <span class="text-[#060b0b] font-bold">{{ count($destinations) }}</span> destinations
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <x-templates.card-md :data="$destinations" ></x-templates.card-md>
        </div>
        
        <div class="mt-12 flex justify-center">
            <button class="px-6 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-[#47b6c2] transition">
                Load More Destinations
            </button>
        </div>
    </div>
    <x-footer></x-footer>
</x-main>