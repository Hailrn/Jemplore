@extends('layouts.admin_layout')

@section('content')
    <h2 class="text-3xl font-light text-gray-800 border-b pb-4 mb-8">Master Data Management</h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">

        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Categories</h3>
                <button class="inline-flex items-center px-3 py-1.5 text-sm font-medium rounded-lg text-white bg-blue-500 hover:bg-blue-600 transition shadow-md">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Add
                </button>
            </div>
            
            <div class="divide-y divide-gray-200">
                @php
                    $categories = ['Nature', 'Beach', 'Culture', 'Experience'];
                @endphp

                @foreach ($categories as $category)
                <div class="flex justify-between items-center py-3">
                    <span class="text-gray-700">{{ $category }}</span>
                    <div class="flex space-x-2">
                        <button class="text-blue-500 hover:text-blue-700 p-1 rounded-full hover:bg-gray-100 transition" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </button>
                        <button class="text-red-500 hover:text-red-700 p-1 rounded-full hover:bg-gray-100 transition" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Thematic Tags</h3>
                <button class="inline-flex items-center px-3 py-1.5 text-sm font-medium rounded-lg text-white bg-blue-500 hover:bg-blue-600 transition shadow-md">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Add
                </button>
            </div>
            
            <div class="divide-y divide-gray-200">
                @php
                    $tags = ['Hidden Gem', 'Pre-Wedding Spot', 'Coffee Education', 'Sunset Spot'];
                @endphp
                
                @foreach ($tags as $tag)
                <div class="flex justify-between items-center py-3">
                    <span class="text-gray-700">{{ $tag }}</span>
                    <div class="flex space-x-2">
                        <button class="text-blue-500 hover:text-blue-700 p-1 rounded-full hover:bg-gray-100 transition" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </button>
                        <button class="text-red-500 hover:text-red-700 p-1 rounded-full hover:bg-gray-100 transition" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-semibold text-gray-800">General Tour Packages</h3>
            <button class="inline-flex items-center px-4 py-2 text-sm font-semibold rounded-lg text-white bg-teal-500 hover:bg-teal-600 transition shadow-md">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                Create Package
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Package Name
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Duration
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Price
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    
                    @php
                        $packages = [
                            ['name' => 'Waterfall Adventure', 'duration' => '3D/2N', 'price' => '1.500.000', 'status' => 'Active'],
                            ['name' => 'Coffee & Culture', 'duration' => '2D/1N', 'price' => '950.000', 'status' => 'Active'],
                            ['name' => 'Beach Paradise', 'duration' => '2D/1N', 'price' => '800.000', 'status' => 'Active'],
                        ];
                    @endphp

                    @foreach ($packages as $package)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $package['name'] }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $package['duration'] }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Rp {{ $package['price'] }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $package['status'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <div class="flex justify-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-900 p-2 rounded-full hover:bg-gray-100 transition" title="Edit Package">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </button>
                                <button class="text-red-600 hover:text-red-900 p-2 rounded-full hover:bg-gray-100 transition" title="Delete Package">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection