@if ($services->count())

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">

    @foreach ($services as $service)

        <div class="bg-white rounded-2xl shadow-md p-8 hover:-translate-y-2 hover:shadow-xl transition duration-300">

            @if($service->image)
    <img
        src="{{ asset('storage/' . $service->image) }}"
        alt="{{ $service->title }}"
        class="w-full h-48 object-cover rounded-xl">
@else
    <div class="text-5xl">
        {{ $service->icon }}
    </div>
@endif

            <h2 class="mt-6 text-2xl font-bold">
                {{ $service->title }}
            </h2>

            <p class="mt-4 text-gray-600">
                {{ $service->description }}
            </p>

            <a href="{{ route('services.show', $service->id) }}"
               class="inline-block mt-6 text-blue-600 font-semibold hover:underline">
                Lihat Detail →
            </a>

        </div>

    @endforeach

</div>

@else

<div class="mt-16 text-center">

    <div class="text-7xl">
        🔍
    </div>

    <h2 class="mt-6 text-3xl font-bold text-gray-800">
        Jasa tidak ditemukan
    </h2>

    <p class="mt-4 text-gray-500">
        Coba gunakan kata kunci lain.
    </p>

</div>

@endif
@if ($services->hasPages())

    <div class="mt-12">

        {{ $services->links() }}

    </div>

@endif