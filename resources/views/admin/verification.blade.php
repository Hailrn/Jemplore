@extends('layouts.admin_layout')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-light text-gray-800 border-b pb-4 mb-4">Content Verification Queue</h2>
        <span class="inline-flex items-center px-4 py-2 text-sm font-semibold rounded-full bg-orange-100 text-orange-800">
            12 Pending Items
        </span>
    </div>

    <div class="space-y-6">
        
        {{-- CARD 1: Tumpak Sewu Waterfall --}}
        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
            <div class="flex justify-between items-start mb-3">
                <h3 class="text-xl font-bold text-gray-900">Tumpak Sewu Waterfall</h3>
                <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-indigo-100 text-indigo-700">
                    Profile Update
                </span>
            </div>
            
            <p class="text-sm text-gray-500 mb-2">
                Submitted by: Tumpak Sewu Team • 2025-11-10
            </p>
            <p class="text-gray-700 mb-4">
                Updated description and added 3 new photos
            </p>

            <div class="flex space-x-3 border-t pt-4">
                {{-- Tombol untuk menampilkan Modal --}}
                <button 
                    onclick="openPreview('Tumpak Sewu Waterfall', 'Updated description and added 3 new photos')" 
                    class="preview-btn flex items-center px-4 py-2 text-sm font-medium rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    Preview Changes
                </button>
                <button class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-white bg-green-500 hover:bg-green-600 transition shadow-md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Approve
                </button>
                <button class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-white bg-red-600 hover:bg-red-700 transition shadow-md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    Reject
                </button>
            </div>
        </div>

        {{-- CARD 2: Sidomulyo Coffee Plantation --}}
        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
            <div class="flex justify-between items-start mb-3">
                <h3 class="text-xl font-bold text-gray-900">Sidomulyo Coffee Plantation</h3>
                <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-teal-100 text-teal-700">
                    Event Creation
                </span>
            </div>
            
            <p class="text-sm text-gray-500 mb-2">
                Submitted by: Coffee Plantation Owner • 2025-11-10
            </p>
            <p class="text-gray-700 mb-4">
                New event: Coffee Tasting Workshop on Dec 5
            </p>

            <div class="flex space-x-3 border-t pt-4">
                <button 
                    onclick="openPreview('Sidomulyo Coffee Plantation', 'New event: Coffee Tasting Workshop on Dec 5')" 
                    class="preview-btn flex items-center px-4 py-2 text-sm font-medium rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    Preview Changes
                </button>
                <button class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-white bg-green-500 hover:bg-green-600 transition shadow-md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Approve
                </button>
                <button class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-white bg-red-600 hover:bg-red-700 transition shadow-md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    Reject
                </button>
            </div>
        </div>

        {{-- CARD 3: Papuma Beach --}}
        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
            <div class="flex justify-between items-start mb-3">
                <h3 class="text-xl font-bold text-gray-900">Papuma Beach</h3>
                <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-indigo-100 text-indigo-700">
                    Profile Update
                </span>
            </div>
            
            <p class="text-sm text-gray-500 mb-2">
                Submitted by: Papuma Beach Admin • 2025-11-09
            </p>
            <p class="text-gray-700 mb-4">
                Updated operating hours and ticket prices
            </p>

            <div class="flex space-x-3 border-t pt-4">
                <button 
                    onclick="openPreview('Papuma Beach', 'Updated operating hours and ticket prices')" 
                    class="preview-btn flex items-center px-4 py-2 text-sm font-medium rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    Preview Changes
                </button>
                <button class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-white bg-green-500 hover:bg-green-600 transition shadow-md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Approve
                </button>
                <button class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-white bg-red-600 hover:bg-red-700 transition shadow-md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    Reject
                </button>
            </div>
        </div>

    </div>
    
    {{-- =============================================== --}}
    {{-- MODAL PREVIEW CHANGES --}}
    {{-- =============================================== --}}
    {{-- KOREKSI: Menghapus overlay gelap dan mempertahankan hanya positioning --}}
    <div id="previewModal" class="fixed inset-0 flex items-center justify-center z-[100] hidden">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-xl mx-4 transform transition-all duration-300 scale-100" 
             aria-modal="true" role="dialog" aria-labelledby="modal-title">
            
            {{-- Header Modal --}}
            <div class="px-6 py-4 border-b flex justify-between items-center">
                <h3 id="modal-title" class="text-xl font-semibold text-gray-800">Preview Changes - <span id="modalTitleDestination"></span></h3>
                <button onclick="closePreview()" class="text-gray-400 hover:text-gray-600 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            
            {{-- Konten Modal --}}
            <div class="p-6 h-96 overflow-y-auto">
                {{-- Ini adalah "pop-up" Content Preview di dalam modal --}}
                <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-6 flex flex-col items-center justify-center h-full">
                    <h4 class="text-lg font-semibold text-gray-700 mb-4">Content Preview</h4>
                    <p class="text-gray-600 text-center" id="modalContentPreviewText">
                        {{-- Teks konten akan dimasukkan di sini oleh JS --}}
                    </p>
                </div>
            </div>
            
            {{-- Footer Modal --}}
            <div class="px-6 py-4 border-t">
                <p class="text-sm text-gray-700 font-medium">Changes: <span id="modalChangesSummary"></span></p>
            </div>
        </div>
    </div>
    
@endsection

@section('scripts')
<script>
    const modal = document.getElementById('previewModal');
    const modalTitleDestination = document.getElementById('modalTitleDestination');
    const modalChangesSummary = document.getElementById('modalChangesSummary');
    const modalContentPreviewText = document.getElementById('modalContentPreviewText');

    function openPreview(destinationName, changesSummary) {
        modalTitleDestination.textContent = destinationName;
        modalChangesSummary.textContent = changesSummary;
        modalContentPreviewText.textContent = changesSummary;

        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden'); 
    }

    function closePreview() {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    modal.addEventListener('click', (e) => {
        if (e.target.id === 'previewModal') {
            closePreview();
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closePreview();
        }
    });
</script>
@endsection