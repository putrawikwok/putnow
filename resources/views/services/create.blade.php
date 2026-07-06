@extends('layouts.putnow')

@section('content')

<section class="max-w-4xl mx-auto px-6 py-16">

    <h1 class="text-h1 text-blue-600">

        Tambah Jasa

    </h1>

    <p class="mt-4 text-body">

        Tambahkan layanan baru ke PutNow.

    </p>

    @include('services.form')

</section>

@endsection