@extends('template.layout-home')

@section('home-content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ url('/') }}assets/internal/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Sekarang <span>lebih mudah untuk kamu</span> <span>menyewa mobil</span></h1>
                        <p style="font-size: 18px;">Destinasi Terbaik di Seluruh Indonesia Jelajahi, nikmati, dan temukan
                            pengalaman baru. Tour dan travel antar kota di seluruh Indonesia dengan Darma Sakti Travel.</p>
                        {{-- <a href="https://www.youtube.com/watch?v=r0MIYoDlfp0"
                            class="icon-wrap d-flex align-items-center mt-4 justify-content-center" data-toggle="modal"
                            data-target="#videoModal">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-play"></span>
                            </div>
                            <div class="heading-title ml-5">
                                <span>Cara mudah untuk menyewa mobil</span>
                            </div>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 featured-top" style="margin-top: -120px; z-index: 9; position: relative;">
                    <div class="row no-gutters shadow-lg rounded overflow-hidden">

                        <div class="col-md-4 d-flex align-items-center">
                            <form action="{{ url('/booking/now') }}" method="POST"
                                class="request-form w-100 h-100 p-4 p-md-5" style="background: #111; color: #fff;">
                                @csrf

                                <h2 class="mb-4" style="color: #fff; font-weight: 700;">Booking Sekarang</h2>

                                <div class="form-group">
                                    <label for="nama" class="label text-white-50">Atas Nama</label>
                                    <input required name="nama" id="nama" type="text"
                                        class="form-control rounded-lg p-3" placeholder="Nama Lengkap Anda"
                                        style="background: #ffffff !important; border: none; color: #333 !important; border-radius: 10px !important;">
                                </div>

                                <div class="form-group">
                                    <label for="model" class="label text-white-50">Model Mobil</label>
                                    <select required name="model" id="model" class="form-control rounded-lg p-3"
                                        style="background: #ffffff !important; border: none; color: #333 !important; border-radius: 10px !important;">
                                        <option value="" disabled selected class="text-muted">Pilih Mobil</option>
                                        @foreach ($cars as $mobil)
                                            <option value="{{ $mobil['uid'] }}"
                                                class="text-dark">
                                                {{ $mobil['merk_mobil'] }} | {{ $mobil['nama_mobil'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lokasi" class="label text-white-50">Lokasi Jemput</label>
                                            <input required name="lokasi" id="lokasi" type="text"
                                                class="form-control rounded-lg p-3" placeholder="Lokasi Jemput"
                                                style="background: #ffffff !important; border: none; color: #333 !important; border-radius: 10px !important;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tujuan" class="label text-white-50">Lokasi Tujuan</label>
                                            <input required name="tujuan" id="tujuan" type="text"
                                                class="form-control rounded-lg p-3" placeholder="Tujuan"
                                                style="background: #ffffff !important; border: none; color: #333 !important; border-radius: 10px !important;">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="book_pick_date" class="label text-white-50">Tgl Mulai</label>
                                            <input required name="tanggalAwal" type="text"
                                                class="form-control rounded-lg p-3 custom-datepicker bg-white" id="book_pick_date"
                                                placeholder="DD/MM/YYYY" autocomplete="off"
                                                style="background: #ffffff !important; border: none; color: #333 !important; border-radius: 10px !important;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="book_off_date" class="label text-white-50">Tgl Selesai</label>
                                            <input required name="tanggalAkhir" type="text"
                                                class="form-control rounded-lg p-3 custom-datepicker bg-white" id="book_off_date" 
                                                placeholder="DD/MM/YYYY" autocomplete="off"
                                                style="background: #ffffff !important; border: none; color: #333 !important; border-radius: 10px !important;">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="jamBooking" class="label text-white-50">Jam Penjemputan</label>
                                    <input required name="jamBooking" type="time" class="form-control rounded-lg p-3"
                                        id="jamBooking" value="08:00"
                                        style="background: #ffffff !important; border: none; color: #333 !important; border-radius: 10px !important;">
                                </div>

                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary btn-block py-3 px-4 font-weight-bold"
                                        style="border-radius: 10px;">
                                        Booking Sekarang
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-8 d-flex align-items-center bg-white">
                            <div class="services-wrap rounded-right w-100 p-5">
                                <h3 class="heading-section mb-4 text-dark font-weight-bold" style="font-size: 24px;">
                                    Cara Mudah Menyewa Mobil
                                </h3>

                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div
                                                class="icon d-flex align-items-center justify-content-center shadow-sm mb-3">
                                                <span class="flaticon-route text-primary"></span>
                                            </div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2" style="font-size: 18px;">Pilih Lokasi</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div
                                                class="icon d-flex align-items-center justify-content-center shadow-sm mb-3">
                                                <span class="flaticon-select text-primary"></span>
                                            </div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2" style="font-size: 18px;">Pilih Mobil</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div
                                                class="icon d-flex align-items-center justify-content-center shadow-sm mb-3">
                                                <span class="flaticon-rent text-primary"></span>
                                            </div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2" style="font-size: 18px;">Booking & Jalan!</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>
                                    <a href="{{ url('/list-mobil') }}" class="btn btn-primary py-3 px-4 no-hover-effect">
                                        Lihat Daftar Mobil Kami
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Menghilangkan efek hover pada tombol */
        .btn.no-hover-effect:hover,
        .btn.no-hover-effect:focus,
        .btn.no-hover-effect:active {
            background-color: #007bff !important;
            /* Warna utama Bootstrap */
            border-color: #007bff !important;
            color: white !important;
            text-decoration: none !important;
            box-shadow: none !important;
            transform: none !important;
            opacity: 1 !important;
        }

        /* Style tambahan untuk form yang lebih baik */
        .form-control.p-3 {
            padding: 12px 15px !important;
            border-radius: 10px !important;
            transition: all 0.3s ease;
        }

        .form-control.p-3:focus {
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25) !important;
            outline: none !important;
        }
    </style>

    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel">Cara Menyewa Mobil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/r0MIYoDlfp0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('section.services')
    @include('section.car-list')
    @include('section.works')
    @include('section.testimonials')
@endsection
