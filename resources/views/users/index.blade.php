@extends('layouts.putnow')

@section('content')

<div class="max-w-7xl mx-auto py-10 px-6">

    <h1 class="text-4xl font-bold text-blue-600">
        👥 Manajemen User
    </h1>

    <p class="text-gray-600 mt-2">
        Daftar seluruh pengguna PutNow.
    </p>

    <div class="mt-8 bg-white rounded-2xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="p-4 text-left">ID</th>

                    <th class="p-4 text-left">Nama</th>

                    <th class="p-4 text-left">Email</th>

                    <th class="p-4 text-left">Role</th>

                    <th class="p-4 text-center">Action</th>

                </tr>

            </thead>

            <tbody>

                @foreach($users as $user)

                <tr class="border-t">

                    <td class="p-4">
                        {{ $user->id }}
                    </td>

                    <td class="p-4">
                        {{ $user->name }}
                    </td>

                    <td class="p-4">
                        {{ $user->email }}
                    </td>

                    <td class="p-4">
                        {{ $user->role }}
                    </td>

                    <td class="p-4 text-center">

                        <a href="{{ route('users.edit', $user) }}"
                            class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">
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