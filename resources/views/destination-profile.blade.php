@props(['wisata', 'reviews' => [], 'events' => []])
<x-main>
    <x-navbar isActive='Destinations'></x-navbar>
    <x-templates.back-header> 
    </x-templates.back-header>
    <x-destination.profile :wisata="$wisata" :reviews="$reviews" :events="$events" ></x-destination.profile>
    <x-footer></x-footer>
</x-main>