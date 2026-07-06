@extends('layouts.putnow')

@section('content')
<!-- Dark Theme Wrapper for Landing Page -->
<div class="bg-[#0a0a0a] text-white min-h-screen relative font-sans overflow-hidden" 
     style="background-image: linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px); background-size: 50px 50px;">
    
    @include('partials.hero')

    @include('partials.how-it-works')

    @include('partials.stats')

    @include('partials.testimonials')

    @include('partials.features')

    @include('partials.faq')

    @include('partials.cta')

</div>
@endsection