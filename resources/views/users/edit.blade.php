@extends('layouts.putnow')

@section('content')

<div class="max-w-3xl mx-auto py-12">

    <h1 class="text-3xl font-bold text-blue-600 mb-8">
        ✏️ Edit User
    </h1>

    <form action="{{ route('users.update', $user) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-5">
            <label class="font-semibold">Nama</label>

            <input
                type="text"
                name="name"
                value="{{ old('name', $user->name) }}"
                class="w-full border rounded-xl p-3 mt-2">
        </div>

        <div class="mb-5">
            <label class="font-semibold">Email</label>

            <input
                type="email"
                name="email"
                value="{{ old('email', $user->email) }}"
                class="w-full border rounded-xl p-3 mt-2">
        </div>

        <div class="mb-8">
            <label class="font-semibold">Role</label>

            <select
                name="role"
                class="w-full border rounded-xl p-3 mt-2">

                <option value="customer"
                    @selected($user->role=='customer')>
                    Customer
                </option>

                <option value="seller"
                    @selected($user->role=='seller')>
                    Seller
                </option>

                <option value="super_admin"
                    @selected($user->role=='super_admin')>
                    Super Admin
                </option>

            </select>
        </div>

        <button
            class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700">

            💾 Simpan Perubahan

        </button>

    </form>

</div>

@endsection