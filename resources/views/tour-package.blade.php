@php
    $packages = [
        [
            'id' => 1,
            'title' => 'Waterfall Adventure',
            'price' => 'Rp 1,500,000',
            'duration' => '3 Days 2 Nights',
            'pax' => '2-8 people',
            'rating' => 4.9,
            'reviews' => 234,
            'features' => [
                'Tumpak Sewu Waterfall exploration',
                'Professional guide',
                'Accommodation included',
                'Meals provided'
            ],
            'image' => 'tumpak-sewu.png', // Cek nama file kamu ya!
        ],
        [
            'id' => 2,
            'title' => 'Coffee & Culture Tour',
            'price' => 'Rp 950,000',
            'duration' => '2 Days 1 Night',
            'pax' => '2-10 people',
            'rating' => 4.8,
            'reviews' => 189,
            'features' => [
                'Coffee plantation visit',
                'Roasting workshop',
                'Cultural village tour',
                'Traditional lunch'
            ],
            'image' => 'coffee.png',
        ],
        [
            'id' => 3,
            'title' => 'Beach Paradise',
            'price' => 'Rp 800,000',
            'duration' => '2 Days 1 Night',
            'pax' => '2-6 people',
            'rating' => 4.7,
            'reviews' => 312,
            'features' => [
                'Multiple beach visits',
                'Snorkeling equipment',
                'Sunset viewing',
                'Seafood dinner'
            ],
            'image' => 'papuma.png',
        ],
        [
            'id' => 4,
            'title' => 'Complete Jember Experience',
            'price' => 'Rp 2,800,000',
            'duration' => '5 Days 4 Nights',
            'pax' => '4-12 people',
            'rating' => 5.0,
            'reviews' => 156,
            'features' => [
                'All major attractions',
                'Premium accommodation',
                'All meals included',
                'Photography service'
            ],
            'image' => 'hero-bg.png',
        ],
    ];
@endphp
<x-main>
    <x-navbar isActive='Tour Packages'></x-navbar>
    <x-templates.page-header>
        @slot('title')
            Tour Packages
        @endslot
        @slot('subtitle')
            Curated experiences for the perfect Jember adventure
        @endslot
    </x-templates.page-header>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 pt-8">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <x-templates.card-xl :data="$packages" ></x-templates.card-xl>
        </div>
        
        <div class="mt-12 flex justify-center">
            <button class="px-6 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-[#47b6c2] transition">
                Load More packages
            </button>
        </div>
    </div>
    <x-footer></x-footer>
</x-main>