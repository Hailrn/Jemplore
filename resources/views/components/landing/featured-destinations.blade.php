<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
        <div>
            <h2 class="text-3xl font-bold text-[#060b0b]">Featured Destinations</h2>
            <p class="text-[#060b0b]/60 mt-2 text-base">Explore the most popular spots in Jember</p>
        </div>
        
        <a href="#" class="group flex items-center gap-2 text-[#47b6c2] font-medium hover:text-[#3da0aa] transition">
            View All
            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @php
            $destinations = [
                [
                    'name' => 'Tumpak Sewu Waterfall',
                    'category' => 'Nature',
                    'rating' => 4.9,
                    'reviews' => 2840,
                    'tags' => ['Hidden Gem', 'Pre-Wedding Spot'],
                    'image' => 'tumpak-sewu.png',
                ],
                [
                    'name' => 'Coffee Plantations',
                    'category' => 'Experience',
                    'rating' => 4.8,
                    'reviews' => 1520,
                    'tags' => ['Coffee Education', 'Scenic Views'],
                    'image' => 'coffee.png',
                ],
                [
                    'name' => 'Papuma Beach',
                    'category' => 'Beach',
                    'rating' => 4.7,
                    'reviews' => 3210,
                    'tags' => ['Sunset Spot', 'Family Friendly'],
                    'image' => 'papuma.png',
                ],
            ];
        @endphp

        @foreach($destinations as $item)
            <div class="bg-white rounded-[20px] overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group cursor-pointer flex flex-col h-full">
                
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/' . $item['image']) }}" 
                         alt="{{ $item['name'] }}" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                    
                    <div class="absolute top-4 left-4 bg-[#47b6c2] text-white text-xs font-medium px-3 py-1.5 rounded-lg shadow-md">
                        {{ $item['category'] }}
                    </div>
                </div>

                <div class="p-6 flex flex-col gap-4 flex-1">
                    
                    <div>
                        <h3 class="text-xl font-bold text-[#060b0b] mb-2 line-clamp-1">
                            {{ $item['name'] }}
                        </h3>
                        
                        <div class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="font-bold text-[#060b0b]">{{ $item['rating'] }}</span>
                            <span class="text-gray-400">({{ number_format($item['reviews']) }} reviews)</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 mt-auto">
                        @foreach($item['tags'] as $tag)
                            <span class="bg-[#98dce4]/20 text-[#060b0b] text-xs px-3 py-1.5 rounded-full font-medium whitespace-nowrap">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>

                </div>
            </div>
        @endforeach

    </div>
</section>