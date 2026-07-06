@props(['service'])

<div class="bg-white rounded-xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] hover:shadow-[0_8px_20px_-6px_rgba(6,81,237,0.15)] hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col h-full border border-gray-50">
    
    <!-- Bagian Visual (Header) -->
    @if($service->image)
        <div class="w-full aspect-video bg-gray-50/70 relative flex items-center justify-center p-4">
            <img
                src="{{ asset('storage/' . $service->image) }}"
                alt="{{ $service->title }}"
                class="max-w-full max-h-full object-contain drop-shadow-sm">
        </div>
    @else
        <div class="w-full aspect-video bg-gray-50/70 flex items-center justify-center text-6xl">
            {{ $service->icon }}
        </div>
    @endif

    <!-- Bagian Konten -->
    <div class="p-5 flex flex-col flex-1">
        
        <!-- Judul & Ikon -->
        <div class="flex items-start justify-between gap-3">
            <h3 class="text-base font-bold text-gray-900 line-clamp-1 leading-snug">
                {{ $service->title }}
            </h3>
            @if($service->image)
                <span class="text-lg leading-none shrink-0" title="Ikon Jasa">{{ $service->icon }}</span>
            @endif
        </div>

        <!-- Deskripsi -->
        <p class="mt-2.5 text-xs text-gray-500 line-clamp-3 flex-1 leading-relaxed">
            {{ $service->description }}
        </p>

        <!-- Aksi -->
        <div class="mt-5 pt-4 border-t border-gray-50">
            <a href="{{ route('services.show', $service->id) }}" class="inline-flex items-center gap-1.5 text-[11px] font-bold text-blue-600 hover:text-blue-700 transition uppercase tracking-wider" wire:navigate>
                Lihat Detail
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</div>
