@if ($services->count())

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-10">

    @foreach ($services as $service)
        <x-service-card :service="$service" />
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