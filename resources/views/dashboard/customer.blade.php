@extends('layouts.putnow')

@section('content')

<div class="max-w-7xl mx-auto py-16 px-6">

    <h1 class="text-4xl font-bold">

        👤 Dashboard Customer

    </h1>

    <p class="mt-4">

        Halo {{ auth()->user()->name }}

    </p>

</div>

@endsection