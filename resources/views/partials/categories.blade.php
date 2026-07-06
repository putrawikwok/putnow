<section id="kategori" class="max-w-7xl mx-auto px-6 py-20 border-t border-neutral-900">
    <div class="mb-16">
        <p class="text-[#44d62c] text-xs font-bold tracking-widest uppercase mb-4">JASA DI PUTNOW</p>
        <h2 class="text-4xl lg:text-6xl font-extrabold text-white leading-tight tracking-tight">
            Dari tugas online <br>sampai bantuan harian.
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($services as $service)
            <a href="{{ route('services.show', $service->id) }}" class="bg-[#111111] border border-neutral-800 p-6 rounded-3xl flex flex-col justify-between hover:border-[#44d62c]/50 hover:-translate-y-1 transition duration-300 group">
                <div>
                    <div class="flex justify-between items-center mb-6">
                        <span class="bg-neutral-900 text-gray-400 border border-neutral-800 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                            {{ $service->category->name ?? 'Jasa' }}
                        </span>
                        <span class="text-[#44d62c] text-[10px] font-bold uppercase tracking-wider group-hover:text-[#3bc225]">
                            Open
                        </span>
                    </div>
                    
                    <h3 class="text-xl font-extrabold text-white leading-snug line-clamp-3 mb-4 group-hover:text-[#44d62c] transition">
                        {{ $service->title }}
                    </h3>
                </div>

                <div class="flex justify-between items-end mt-8 border-t border-neutral-800 pt-4">
                    <span class="text-xs text-gray-500 font-bold uppercase">Budget</span>
                    <span class="text-lg font-bold text-white">
                        Rp {{ number_format($service->price ?? 0, 0, ',', '.') }}
                    </span>
                </div>
            </a>
        @empty
            <div class="col-span-full text-center py-12 border border-dashed border-neutral-800 rounded-3xl text-gray-600">
                Belum ada jasa yang tersedia saat ini.
            </div>
        @endforelse
    </div>

    <div class="mt-12 flex justify-end">
        <a href="{{ route('services.index') }}" class="px-6 py-3 border border-neutral-700 text-white font-bold rounded-xl hover:bg-neutral-800 transition">
            Lihat semua jasa →
        </a>
    </div>
</section>