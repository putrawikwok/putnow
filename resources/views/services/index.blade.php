@extends('layouts.putnow')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-16">

    @include('services.header')

    @include('services.search')

    <div id="services-container">
        @include('services.cards')
    </div>

</section>

@endsection