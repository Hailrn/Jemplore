@extends('layouts.admin_layout')

@section('content')
    <h2 class="text-3xl font-light text-gray-800 border-b pb-4 mb-8">System Reports</h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">

        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Website Traffic</h3>
            
            <div class="flex flex-col items-center justify-center p-8 text-center">
                {{-- Placeholder Ikon Grafik --}}
                <svg class="w-16 h-16 text-teal-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                
                <h4 class="text-3xl font-bold text-gray-900 mb-1">45.2K visits</h4>
                <p class="text-sm text-gray-500 mb-4">Traffic Analytics</p>
                <p class="text-green-600 font-medium">+22% from last month</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Top Performing Content</h3>
            
            <div class="divide-y divide-gray-100">
                
                <div class="flex justify-between items-center py-3">
                    <div>
                        <p class="text-gray-900 font-medium">Tumpak Sewu Waterfall</p>
                        <p class="text-sm text-gray-500">12.4K views</p>
                    </div>
                    <span class="text-sm font-semibold text-green-600">+19%</span>
                </div>
                
                <div class="flex justify-between items-center py-3">
                    <div>
                        <p class="text-gray-900 font-medium">Papuma Beach</p>
                        <p class="text-sm text-gray-500">8.7K views</p>
                    </div>
                    <span class="text-sm font-semibold text-green-600">+22%</span>
                </div>
                
                <div class="flex justify-between items-center py-3">
                    <div>
                        <p class="text-gray-900 font-medium">Coffee Plantations</p>
                        <p class="text-sm text-gray-500">6.2K views</p>
                    </div>
                    <span class="text-sm font-semibold text-green-600">+8%</span>
                </div>
                
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 min-h-[400px] flex flex-col items-center justify-center">
        <h3 class="text-xl font-semibold text-gray-800 mb-6 w-full">User Activity</h3>
        
        <div class="flex flex-col items-center justify-center flex-grow">
            <svg class="w-20 h-20 text-blue-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            <p class="text-gray-500 font-medium">User Engagement Metrics</p>
        </div>
    </div>
@endsection