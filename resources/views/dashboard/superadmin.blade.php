@extends('layouts.admin')

@section('admin-content')

<div>

    {{-- Judul --}}
    <h1 class="text-2xl font-bold text-blue-600">
        👑 Dashboard Super Admin
    </h1>

    <p class="mt-1 text-sm text-gray-600">
        Selamat datang,
        <span class="font-semibold text-gray-800">
            {{ auth()->user()->name }}
        </span>
    </p>

    {{-- Statistik --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">

    <x-dashboard-card
        icon="👥"
        title="Total User"
        :value="$totalUsers"
        color="text-blue-600"
    />

    <x-dashboard-card
        icon="🙋"
        title="Customer"
        :value="$totalCustomers"
        color="text-green-600"
    />

    <x-dashboard-card
        icon="🏪"
        title="Seller"
        :value="$totalSellers"
        color="text-yellow-500"
    />

    <x-dashboard-card
        icon="🛠️"
        title="Total Jasa"
        :value="$totalServices"
        color="text-red-500"
    />

</div> {{-- End Statistik --}}

    {{-- Quick Action --}}
    <div class="border-t border-gray-100 mt-8 pt-6">

        <h2 class="text-lg font-bold text-gray-800">
            ⚡ Quick Action
        </h2>

        <div class="flex flex-wrap gap-3 mt-4">

            <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'create-service')"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 text-xs font-bold transition">
                ➕ Tambah Jasa
            </button>

            <a href="{{ route('services.index') }}"
                class="bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-900 text-xs font-bold transition">
                📋 Semua Jasa
            </a>

        </div>

    </div> {{-- End Quick Action --}}

    {{-- Informasi Sistem --}}
    <div class="border-t border-gray-100 mt-8 pt-6">

        <h2 class="text-lg font-bold text-gray-800">
            📌 Informasi Sistem
        </h2>

        <div class="mt-4 space-y-2 text-sm text-gray-600">

            <p>
                <strong>Versi :</strong> PutNow v1.0
            </p>

            <p>
                <strong>Role :</strong>
                {{ auth()->user()->role }}
            </p>

            <p>
                <strong>Tanggal :</strong>
                {{ now()->format('d F Y') }}
            </p>

            <p>
                <strong>Status :</strong>

                <span class="text-green-600 font-semibold">
                    Online
                </span>

            </p>

        </div>

    </div> {{-- End Informasi Sistem --}}

</div> {{-- End Container --}}

<!-- Include the Create Service Modal -->
<x-create-service-modal />

@endsection