@extends('layouts.putnow')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-12">

    {{-- Judul --}}
    <h1 class="text-4xl font-bold text-blue-600">
        👑 Dashboard Super Admin
    </h1>

    <p class="mt-2 text-gray-600">
        Selamat datang,
        <span class="font-semibold">
            {{ auth()->user()->name }}
        </span>
    </p>

    {{-- Statistik --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">

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
    <div class="bg-white rounded-2xl shadow mt-10 p-8">

        <h2 class="text-2xl font-bold">
            ⚡ Quick Action
        </h2>

        <div class="flex flex-wrap gap-4 mt-6">

            <a href="{{ route('services.create') }}"
                class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700">

                ➕ Tambah Jasa

            </a>

            <a href="{{ route('services.index') }}"
                class="bg-gray-800 text-white px-6 py-3 rounded-xl hover:bg-gray-900">

                📋 Semua Jasa

            </a>

        </div>

    </div> {{-- End Quick Action --}}

    {{-- Informasi Sistem --}}
    <div class="bg-white rounded-2xl shadow mt-10 p-8">

        <h2 class="text-2xl font-bold">
            📌 Informasi Sistem
        </h2>

        <div class="mt-6 space-y-3">

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

@endsection