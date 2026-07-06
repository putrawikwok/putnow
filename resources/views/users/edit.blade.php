@extends('layouts.admin')

@section('admin-content')

<div class="max-w-md">

    <div class="border-b border-gray-100 pb-4 mb-6">
        <h1 class="text-lg font-bold text-gray-800 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
            </svg>
            Edit User
        </h1>
        <p class="text-xs text-gray-500 mt-1">Perbarui detail dan role pengguna ini.</p>
    </div>

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-xs font-semibold text-gray-600 mb-1.5">Nama Lengkap</label>
            <input
                type="text"
                name="name"
                value="{{ old('name', $user->name) }}"
                class="w-full border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
        </div>

        <div class="mb-4">
            <label class="block text-xs font-semibold text-gray-600 mb-1.5">Alamat Email</label>
            <input
                type="email"
                name="email"
                value="{{ old('email', $user->email) }}"
                class="w-full border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
        </div>

        <div class="mb-6">
            <label class="block text-xs font-semibold text-gray-600 mb-1.5">Role Pengguna</label>
            <select
                name="role"
                class="w-full border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition bg-white">
                <option value="customer" @selected($user->role=='customer')>Customer</option>
                <option value="seller" @selected($user->role=='seller')>Seller</option>
                <option value="super_admin" @selected($user->role=='super_admin')>Super Admin</option>
            </select>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 text-xs font-bold transition flex items-center gap-2">
                Simpan Perubahan
            </button>
            <a href="{{ route('users.index') }}" class="px-4 py-2 text-xs font-bold text-gray-500 hover:text-gray-700 transition">
                Batal
            </a>
        </div>

    </form>

</div>

@endsection