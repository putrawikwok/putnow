@extends('layouts.putnow')

@section('content')

<div class="max-w-7xl mx-auto py-16 px-6">

    <h1 class="text-4xl font-bold text-blue-600">

        👑 Dashboard Super Admin

    </h1>

    <p class="mt-4 text-gray-600">

        Selamat datang, {{ auth()->user()->name }}

    </p>

</div>

@endsection