@extends('layouts.admin')

@section('admin-content')

<div>

    <h1 class="text-2xl font-bold text-blue-600">
        👥 Manajemen User
    </h1>

    <p class="text-xs text-gray-500 mt-1">
        Daftar seluruh pengguna PutNow.
    </p>

    <div class="mt-6 border border-gray-100 rounded-lg overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-50 border-b border-gray-100 text-xs text-gray-500 uppercase tracking-wider">
                <tr>
                    <th class="px-4 py-3 text-left font-medium">ID</th>
                    <th class="px-4 py-3 text-left font-medium">Nama</th>
                    <th class="px-4 py-3 text-left font-medium">Email</th>
                    <th class="px-4 py-3 text-left font-medium">Role</th>
                    <th class="px-4 py-3 text-center font-medium">Action</th>
                </tr>
            </thead>

            <tbody class="text-sm text-gray-700">
                @foreach($users as $user)
                <tr class="border-b border-gray-50 hover:bg-gray-50 transition">
                    <td class="px-4 py-3">{{ $user->id }}</td>
                    <td class="px-4 py-3 font-medium">{{ $user->name }}</td>
                    <td class="px-4 py-3 text-gray-500">{{ $user->email }}</td>
                    <td class="px-4 py-3">
                        <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold 
                            {{ $user->role == 'super_admin' ? 'bg-red-100 text-red-700' : ($user->role == 'seller' ? 'bg-blue-100 text-blue-700' : 'bg-gray-100 text-gray-700') }}">
                            {{ strtoupper($user->role) }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="{{ route('users.edit', $user) }}"
                            class="bg-blue-50 text-blue-600 px-3 py-1.5 rounded hover:bg-blue-600 hover:text-white transition text-xs font-semibold">
                                Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

    <div class="mt-6">

        {{ $users->links() }}

    </div>

</div>

@endsection