@extends('template.layout-home')

@section('home-content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ url('/assets/internal/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Tentang Kami <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Tentang Kami</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url('{{ url('/assets/internal/navbar-icon.png') }}');">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section pl-md-5">
                        <span class="subheading">Tentang Kami</span>
                        <h2 class="mb-4">Darma Sakti Travel</h2>
                        <p>Darma Sakti Travel adalah layanan jasa penyewaan kendaraan untuk memberikan solusi perjalanan
                            yang
                            praktis dan fleksibel yang berfokus pada kemudahan akses dan kepuasan pelanggan.</p>
                        <p>Kami berkomitmen untuk memberikan pengalaman penyewaan yang mudah, kendaraan yang terawat baik,
                            supir
                            yang berpengalaman serta memberikan keamanan dan kenyamanan untuk perjalanan anda.</p>
                        <p><a href="{{ url('/list-mobil') }}" class="btn btn-primary py-3 px-4">Cari Mobil</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('section.services')
    @include('section.car-list')
@endsection
