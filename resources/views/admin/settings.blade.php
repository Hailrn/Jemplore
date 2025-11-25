@extends('layouts.admin_layout')

@section('content')
    <h2 class="text-3xl font-light text-gray-800 border-b pb-4 mb-8">Website Settings</h2>

    <form action="#" method="POST"> 
        
        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-6">Site Information</h3>
            
            <div class="space-y-6">
                
                <div>
                    <label for="site_name" class="block text-sm font-medium text-gray-700 mb-1">Site Name</label>
                    <input type="text" id="site_name" name="site_name" value="Jemplore - Jember Explore" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900" placeholder="e.g., Jemplore - Jember Explore">
                </div>
                
                <div>
                    <label for="site_description" class="block text-sm font-medium text-gray-700 mb-1">Site Description</label>
                    <textarea id="site_description" name="site_description" rows="3" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900" placeholder="A brief description of the website.">Discover the hidden beauty of Jember, Indonesia</textarea>
                </div>
                
                <div>
                    <label for="contact_email" class="block text-sm font-medium text-gray-700 mb-1">Contact Email</label>
                    <input type="email" id="contact_email" name="contact_email" value="info@jemplore.id" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900">
                </div>
                
                <div>
                    <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" value="+62 123 4567 890" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900">
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-6">SEO Settings</h3>

            <div class="space-y-6">
                <div>
                    <label for="meta_keywords" class="block text-sm font-medium text-gray-700 mb-1">Meta Keywords</label>
                    <input type="text" id="meta_keywords" name="meta_keywords" value="jember, tourism, indonesia, travel" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900" placeholder="Separate keywords with commas">
                </div>
                
                <div>
                    <label for="ga_id" class="block text-sm font-medium text-gray-700 mb-1">Google Analytics ID</label>
                    <input type="text" id="ga_id" name="ga_id" value="UA-XXXXXXXXX-X" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900" placeholder="e.g., GA-XXXXXXXXXX">
                </div>
            </div>
        </div>
        
        <div class="flex justify-end">
            <button type="submit" class="inline-flex items-center px-6 py-2.5 text-base font-medium rounded-lg text-white bg-teal-500 hover:bg-teal-600 transition shadow-md">
                Save Changes
            </button>
        </div>
        
    </form>
@endsection