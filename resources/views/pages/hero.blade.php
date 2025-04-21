<!-- resources/views/pages/home.blade.php -->
@extends('layouts.app')

@section('content')
<div class="content-area">
    <div class="hero-section row w-100">
        <div class="bubble-paragraph col-xl-6 col-12 order-xl-1 order-2">
            <h1>A Smarter Way to Product Compliance</h1>
            <div class="paragraph">
                <p>Simplify your compliance journey with expert testing, seamless certification, and trusted lab
                    partnerships—ensuring your products meet global regulatory standards efficiently.</p>
            </div>
            <div class="started-actions">
                <button class="btn start-btn">Get Started Now</button>
                <button class="btn reserve-btn">Reserve a Lab Today</button>
            </div>
        </div>
        <div class="iot-vector col-xl-6 col-12 order-xl-2 order-1 d-flex justify-content-center align-items-center">
            <img src="{{ Vite::asset('public/assets/iot-vector.png') }}" alt="Iot vector" />
        </div>
    </div>
    <div class="carousel-section">
        <div class="carousel-title">
            <p>Trusted by</p>
        </div>
        <ul class="carousel-items">
            <li><img src="{{ Vite::asset('public/assets/trusted-by/boltshift.png') }}" alt="Boltshift" /></li>
            <li><img src="{{ Vite::asset('public/assets/trusted-by/lightbox.png') }}" alt="Lightbox" /></li>
            <li><img src="{{ Vite::asset('public/assets/trusted-by/featherdev.png') }}" alt="FeatherDev" /></li>
            <li><img src="{{ Vite::asset('public/assets/trusted-by/spherule.png') }}" alt="Spherule" /></li>
            <li><img src="{{ Vite::asset('public/assets/trusted-by/globalbank.png') }}" alt="Globabank" /></li>
            <li><img src="{{ Vite::asset('public/assets/trusted-by/nietzsche.png') }}" alt="Nietzsche" /></li>
        </ul>
    </div>
    <div class="container stepper-section">
        <div class="text-content">
            <h1>Reserve Lab for Precertification Testing</h1>
            <p>There's a 50% chance that products fail electromagnetic compatibility (EMC) tests the first time,
                according to at least one leading industry expert. These realities make pre- certification testing
                with the benefit of improved <span class="read-more-text">read more</span></p>
        </div>
        <div class="days-stepper row w-100">
            <!-- STEP-1 -->
            <div class="step col-xl-4 col-12 d-flex justify-content-center align-items-center">
                <div class="dashed-border d-flex justify-content-center align-items-center">
                    <div class="circle-shape d-flex justify-content-center align-items-center">
                        <img src="{{ Vite::asset('public/assets/Tick.svg') }}" alt="Nietzsche" />
                    </div>
                </div>
                <div class="content text-center">
                    <h5>Day 1</h5>
                    <b>Make Booking</b>
                    <p>Direct booking with selection of test items from www.testlabhub.com</p>
                </div>
            </div>
            <!-- <div class="wave-line position-absolute">
                <svg viewBox="0 0 600 100" preserveAspectRatio="none">
                    <path d="M0,0 C200,100 400,100 600,0" stroke="#990000" stroke-dasharray="4" fill="none" stroke-width="2" />
                </svg>
            </div> -->

            <!-- STEP-2 -->
            <div class="step col-xl-4 col-12 d-flex justify-content-center align-items-center">
                <div class="dashed-border d-flex justify-content-center align-items-center">
                    <div class="circle-shape d-flex justify-content-center align-items-center">
                        <img src="{{ Vite::asset('public/assets/Tick.svg') }}" alt="Nietzsche" />
                    </div>
                </div>
                <div class="content text-center">
                    <h5>Day 2</h5>
                    <b>Plan Review</b>
                    <p>Activities including testing, documentation, filings, to meet go-to-market requirements</p>
                </div>
            </div>
            <!-- <div class="wave-line position-absolute">
                <svg viewBox="0 0 600 100" preserveAspectRatio="none">
                    <path d="M0,100 C200,0 400,0 600,100" stroke="#990000" stroke-dasharray="4" fill="none" stroke-width="2" />
                </svg>
            </div> -->

            <!-- STEP-3 -->
            <div class="step col-xl-4 col-12 d-flex justify-content-center align-items-center">
                <div class="dashed-border d-flex justify-content-center align-items-center">
                    <div class="circle-shape d-flex justify-content-center align-items-center">
                        <img src="{{ Vite::asset('public/assets/Tick.svg') }}" alt="Nietzsche" />
                    </div>
                </div>
                <div class="content text-center">
                    <h5>Day 3</h5>
                    <b>Start Project</b>
                    <p>Project start @ test lab. Status viewable in WorkZone, Standard viewable in TechStreet</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection