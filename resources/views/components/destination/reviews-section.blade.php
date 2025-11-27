@props(['reviews']) <div class="flex flex-col w-full gap-8 bg-white mt-12" id="reviews-section">

    <section class="flex flex-col gap-4 w-full">
        
        @if($reviews->count() > 0)
            @foreach($reviews as $review)
                <article class="flex gap-4 p-6 bg-white rounded-2xl shadow-sm border border-gray-100 transition-shadow hover:shadow-md">
                    
                    <div class="shrink-0 w-12 h-12 bg-[#47b6c2] rounded-full flex items-center justify-center text-white text-lg font-bold">
                        {{ $review['initial'] }}
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                            <h3 class="text-[#060b0b] text-base font-bold">{{ $review['name'] }}</h3>
                            <span class="text-[#060b0b]/60 text-sm">{{ $review['timeAgo'] }}</span>
                        </div>

                        <div class="flex gap-1">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 {{ $i < $review['rating'] ? 'text-yellow-400 fill-current' : 'text-gray-300' }}" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            @endfor
                        </div>

                        <p class="text-[#060b0b]/80 text-sm leading-relaxed mt-1">
                            {{ $review['comment'] }}
                        </p>
                    </div>
                </article>
            @endforeach

            <div class="mt-6 flex justify-center">
                {{ $reviews->links() }}
            </div>

        @else
            <div class="text-center py-8 bg-gray-50 rounded-2xl border border-dashed border-gray-300">
                <p class="text-gray-500 text-sm">No reviews yet. Be the first to review!</p>
            </div>
        @endif

    </section>
</div>