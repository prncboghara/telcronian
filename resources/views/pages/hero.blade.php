@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    @include('componets.hero')
</section>
<!-- Trusted Section -->
<section class="trusted-section">
    @include('componets.trusted')
</section>

<!-- Precertification Section -->
<section class="precertification-section">
    @include('componets.precertification')
</section>

<!-- certification Section -->
<section class="certification-section">
    @include('componets.certification')
</section>

@endsection