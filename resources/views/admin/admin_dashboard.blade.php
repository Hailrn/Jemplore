@extends('layouts.admin_layout') 

@section('content')
    <h2 class="text-3xl font-light text-gray-800 mb-8 border-b pb-4">System Overview</h2>
        
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
        
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500">Total Users</p>
                <h3 class="text-3xl font-semibold text-gray-900 mt-1">1,247</h3>
                <p class="text-xs text-green-500 mt-1 flex items-center">
                    <span class="mr-1">▲</span>
                    +8% this month
                </p>
            </div>
            <div class="bg-blue-100 p-3 rounded-full text-blue-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500">Destinations</p>
                <h3 class="text-3xl font-semibold text-gray-900 mt-1">87</h3>
                <p class="text-xs text-gray-400 mt-1">
                    52 verified
                </p>
            </div>
            <div class="bg-green-100 p-3 rounded-full text-green-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500">Website Traffic</p>
                <h3 class="text-3xl font-semibold text-gray-900 mt-1">45.2K</h3>
                <p class="text-xs text-green-500 mt-1 flex items-center">
                    <span class="mr-1">▲</span>
                    +22% this month
                </p>
            </div>
            <div class="bg-indigo-100 p-3 rounded-full text-indigo-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l2 2 4-4 4 4 2-2M12 21V6"></path></svg>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500">Pending Reviews</p>
                <h3 class="text-3xl font-semibold text-gray-900 mt-1">12</h3>
                <p class="text-xs text-red-500 mt-1">
                    Needs attention
                </p>
            </div>
            <div class="bg-orange-100 p-3 rounded-full text-orange-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
            </div>
        </div>
        
    </div>
    
    <h3 class="text-xl font-medium text-gray-800 mb-4">Quick Actions</h3>
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 flex space-x-4">
        
        <button class="flex items-center px-4 py-2 bg-teal-500 text-white rounded-lg hover:bg-teal-600 transition duration-150 shadow-md">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3 .895 3 2s-1.343 2-3 2 3 .895 3 2s-1.343 2-3 2m0-8V6m0 12v-2"></path></svg>
            Review Content (<span class="font-bold">12 pending</span>)
        </button>

        <button class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-150 shadow-md">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H9a2 2 0 01-2-2v-1a4 4 0 014-4h2a4 4 0 014 4v1a2 2 0 01-2 2z"></path></svg>
            Manage Users
        </button>

        <button class="flex items-center px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-150 shadow-md">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10m-4 0h16M4 7h16M4 7h16"></path></svg>
            Master Data
        </button>
    </div>

@endsection