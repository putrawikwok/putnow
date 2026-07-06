@extends('layouts.putnow')

@section('content')
<div class="bg-gray-50 min-h-screen py-10">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <nav class="flex mb-8 text-xs font-medium text-gray-500">
            <a href="{{ route('services.index') }}" class="hover:text-blue-600 transition-colors" wire:navigate>Jelajahi Jasa</a>
            <span class="mx-2 text-gray-300">/</span>
            <span class="text-gray-900 font-semibold">{{ $service->title }}</span>
        </nav>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden flex flex-col lg:flex-row">
            
            <!-- Left Column: Visuals -->
            <div class="w-full lg:w-2/5 bg-gray-50/50 border-b lg:border-b-0 lg:border-r border-gray-100 flex flex-col justify-center p-6 sm:p-8">
                @if($service->image)
                    <div class="w-full aspect-[4/3] relative rounded-xl overflow-hidden bg-white shadow-sm border border-gray-100">
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-full object-cover">
                    </div>
                @else
                    <div class="w-full aspect-[4/3] flex items-center justify-center text-7xl bg-white rounded-xl shadow-sm border border-gray-100">
                        {{ $service->icon }}
                    </div>
                @endif
            </div>

            <!-- Right Column: Details & Actions -->
            <div class="w-full lg:w-3/5 p-6 sm:p-10 flex flex-col">
                
                <div class="flex items-center justify-between mb-4">
                    <span class="px-3 py-1 bg-green-50 text-green-700 text-[10px] font-bold rounded-full tracking-wide uppercase border border-green-100">Tersedia</span>
                </div>
                
                <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900 mb-4 leading-tight">
                    {{ $service->icon }} {{ $service->title }}
                </h1>
                
                <!-- Seller Profile Inline -->
                <div class="flex items-center gap-3 mb-8 pb-6 border-b border-gray-100">
                    <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 font-bold text-sm">
                        {{ strtoupper(substr($service->user->name, 0, 1)) }}
                    </div>
                    <div>
                        <p class="text-[11px] text-gray-500 mb-0.5 uppercase tracking-wide">Penjual</p>
                        <p class="text-sm font-bold text-gray-900">{{ $service->user->name }}</p>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-10 text-sm text-gray-600 leading-relaxed whitespace-pre-line flex-1">
                    {{ $service->description }}
                </div>

                <!-- Action Buttons -->
                <div class="mt-auto flex flex-col gap-3">
                    <a href="mailto:{{ $service->user->email }}?subject=Tanya Jasa: {{ $service->title }}" 
                       class="w-full flex items-center justify-center gap-2 bg-gray-900 hover:bg-gray-800 text-white px-5 py-3.5 rounded-xl text-sm font-semibold transition-colors shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Hubungi via Email
                    </a>

                    @if(auth()->check() && (auth()->user()->isSuperAdmin() || auth()->id() === $service->user_id))
                        <div class="flex gap-3 mt-2">
                            <a href="{{ route('services.edit', $service) }}" 
                               class="flex-1 flex justify-center items-center gap-2 bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 hover:border-gray-300 px-4 py-2.5 rounded-xl text-xs font-bold transition-all shadow-sm" wire:navigate>
                                Edit Jasa
                            </a>
                            
                            <form action="{{ route('services.destroy', $service) }}" method="POST" class="flex-1 swal-confirm">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="w-full flex justify-center items-center gap-2 bg-white border border-red-200 text-red-600 hover:bg-red-50 px-4 py-2.5 rounded-xl text-xs font-bold transition-all shadow-sm">
                                    Hapus Jasa
                                </button>
                            </form>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection