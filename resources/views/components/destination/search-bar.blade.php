<section class="relative -mt-10">
    <form action="/destinations" method="GET" class="w-full max-w-7xl mx-auto bg-white rounded-2xl p-4 md:p-6 shadow-sm border border-gray-100 mb-10">
        
        <div class="flex flex-col lg:flex-row items-center gap-4 w-full">
            
            <div class="relative flex-1 w-full h-[54px] flex items-center bg-white rounded-xl border border-[#98dce4]/50 focus-within:border-[#47b6c2] focus-within:ring-2 focus-within:ring-[#47b6c2]/20 transition-all px-4 gap-3">
                
                <div class="flex-shrink-0 text-[#47b6c2]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>

                <input 
                    type="text" 
                    name="q" 
                    class="w-full h-full bg-transparent border-none outline-none focus:ring-0 text-gray-700 text-sm placeholder-gray-400"
                    placeholder="Search destinations, culinary . . ."
                    autocomplete="off"
                />
            </div>

            <div class="flex flex-wrap md:flex-nowrap items-center gap-3 w-full lg:w-auto justify-end">
                
                @php
                    // Kita definisikan filter apa aja yang mau ditampilin
                    // Nanti bisa dikembangin jadi <select> beneran
                    $filters = [
                        ['label' => 'Category', 'value' => 'All'],
                        ['label' => 'Location', 'value' => 'All Locations'],
                        ['label' => 'Price', 'value' => 'Any Price'],
                    ];
                @endphp

                @foreach($filters as $filter)
                    <div class="relative group">
                        <button type="button" class="flex items-center justify-between h-[54px] lg:h-11 px-4 gap-3 bg-[#f3f3f5] rounded-xl min-w-[140px] hover:bg-[#e0e0e0] transition-colors w-full md:w-auto">
                            
                            <div class="flex flex-col items-start text-xs">
                                <span class="text-gray-400 font-medium">{{ $filter['label'] }}</span>
                                <span class="text-gray-800 font-semibold">{{ $filter['value'] }}</span>
                            </div>

                            <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        </div>
                @endforeach

                <button type="submit" class="h-[54px] lg:h-11 px-6 bg-[#47b6c2] hover:bg-[#3da0aa] text-white rounded-xl font-medium shadow-lg shadow-[#47b6c2]/30 transition-all active:scale-95 flex items-center justify-center gap-2 w-full md:w-auto">
                    Search
                </button>

            </div>
        </div>
    </form>
</section>