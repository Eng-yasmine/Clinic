@extends('user.layout.app')

@section('title', 'home')

@section('content')
    <div class="container-fluid bg-blue text-white pt-3">

        <div class="container pb-5">
            <div class="row gap-2">
                <div class="col-sm order-sm-2">
                    <img src="{{asset('user/assets/images/banner.jpg')}}" class="img-fluid banner-img banner-img"
                        alt="banner-image" height="200">
                </div>
                <div class="col-sm order-sm-1">
                    <h1 class="h1">Have a Medical Question?</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                        laborum
                        saepe
                        enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis
                        consequatur
                        cum
                        iure
                        quod facere.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        {{-- @livewire('show-doctors') --}}
        {{-- @livewire('test-action') --}}
        {{-- @livewire('first-event')
        @livewire('second-event')
        @livewire('third-event') --}}
        {{-- @livewire('try-hooks') --}}
        {{-- @livewire('parent-component') --}}

        {{-- @livewire('validation-component') --}}
{{ __('Home') }}

        <h2 class="h1 fw-bold text-center my-4">Majors</h2>


        <section class="splide home__slider__doctors mb-5">
            <div class="splide__track ">
                <ul class="splide__list">
                    @foreach ($doctors as $doctor)
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('user/assets/images/major.jpg')}}"
                                    class="card-img-top rounded-circle card-image-circle" alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">{{ $doctor->major->title }}</h4>
                                    <h6 class="card-title fw-bold text-center">{{ $doctor->name }}</h6>
                                    <a href="{{ route('user.doctors') }}" class="btn btn-outline-primary card-button">details
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </section>


    </div>
    <div class="banner container d-block d-lg-grid d-md-block d-sm-block">
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>
        <div class="bottom--left bottom--content bg-blue text-white">
            <h4 class="title">download the application now</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facere eveniet in id, quod
                explicabo minus ut, sint possimus, fuga voluptas. Eius molestias eveniet labore ullam magnam sequi
                possimus quaerat!</p>
            <div class="app-group">
                <div class="app"><img
                        src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/google-play-logo.svg"
                        alt="">Google Play</div>
                <div class="app"><img
                        src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/apple-logo.svg"
                        alt="">App Store</div>
            </div>
        </div>
        <div class="bottom--right bg-blue text-white">
            <img src="{{asset('user/assets/images/banner.jpg')}}" class="img-fluid banner-img">
        </div>
    </div>
@endsection
