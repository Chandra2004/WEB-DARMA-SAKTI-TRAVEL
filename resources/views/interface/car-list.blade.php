@extends('template.layout-home')

@section('home-content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ url('/') }}assets/internal/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>List Mobil <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Pilih Mobil Anda</h1>
                </div>
            </div>
        </div>
    </section>

	@include('section.car-list')
@endsection