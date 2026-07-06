@extends('layouts.putnow')

@section('content')

<div class="max-w-7xl mx-auto py-16 px-6">

    <div class="flex justify-between items-center mb-8">

        <div>
            <h1 class="text-h1">
                🏪 Dashboard Seller
            </h1>

            <p class="mt-2 text-body">
                Selamat datang, <b>{{ auth()->user()->name }}</b> 👋
            </p>
        </div>



    </div>

    <h2 class="text-h2 mb-6">
        Jasa Saya
    </h2>

    @if($services->count())

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($services as $service)

                <div class="bg-white rounded-xl shadow p-5">

                    @if($service->image)

                        <img src="{{ asset('storage/' . $service->image) }}"
                             class="w-full h-48 object-cover rounded-lg mb-4">

                    @endif

                    <div class="text-3xl mb-2">
                        {{ $service->icon }}
                    </div>

                    <h3 class="text-h2 text-xl">
                        {{ $service->title }}
                    </h3>

                    <p class="text-gray-600 mt-2">
                        {{ Str::limit($service->description, 80) }}
                    </p>

                    <div class="flex gap-3 mt-6">

                        <a href="{{ route('services.edit', $service) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded" wire:navigate>
                            ✏ Edit
                        </a>

                        <form action="{{ route('services.destroy', $service) }}"
                              method="POST"
                              class="swal-confirm">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">

                                🗑 Hapus

                            </button>

                        </form>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="bg-white rounded-xl shadow p-8 text-center">

            <h2 class="text-2xl font-bold mb-2">
                Belum ada jasa
            </h2>

            <p class="text-gray-500 mb-6">
                Mulailah menawarkan jasa pertamamu.
            </p>

            <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'create-service')"
               class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg text-sm font-bold transition">
                + Tambah Jasa
            </button>

        </div>

    @endif

</div>

<!-- Include the Create Service Modal -->
<x-create-service-modal />

@endsection