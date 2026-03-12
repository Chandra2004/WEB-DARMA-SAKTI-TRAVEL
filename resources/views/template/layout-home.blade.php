<!DOCTYPE html>
<html lang="en">

<head>
    @if (request()->is('list-mobil/*/*'))
        @include('template.meta-detail')
    @else
        @include('template.meta-home')
    @endif
</head>

<body>
    @include('notification.notification-boot')

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar"
        style="z-index: 9998 !important;">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="{{ url('/') }}" style="color: black;">
                <img src="{{ url('/assets/internal/navbar-icon.png') }}" alt="" width="100px">
                <span style="font-size: medium;">DARMA SAKTI TRAVEL</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"
                style="border-color: black;">
                <span class="oi oi-menu" style="color: black;"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/') ? 'onPage' : '' }}"><a href="{{ url('/') }}"
                            class="nav-link">Beranda</a></li>
                    <li class="nav-item {{ request()->is('tentang') ? 'onPage' : '' }}"><a href="{{ url('/tentang') }}"
                            class="nav-link">Tentang</a></li>
                    <li class="nav-item {{ request()->is('list-mobil') ? 'onPage' : '' }}"><a
                            href="{{ url('/list-mobil') }}" class="nav-link">List Mobil</a></li>
                    <li class="nav-item {{ request()->is('galeri') ? 'onPage' : '' }}"><a href="{{ url('/galeri') }}"
                            class="nav-link">Galeri</a></li>
                    <li class="nav-item {{ request()->is('kontak') ? 'onPage' : '' }}"><a href="{{ url('/kontak') }}"
                            class="nav-link">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });
    </script>

    @yield('home-content')

    @php
        $ipFile = storage_path('app/visitor_ips.txt');
        $counterFile = storage_path('app/counter.txt');

        if (!is_dir(storage_path('app'))) {
            mkdir(storage_path('app'), 0755, true);
        }

        if (!file_exists($ipFile)) {
            file_put_contents($ipFile, '');
        }
        if (!file_exists($counterFile)) {
            file_put_contents($counterFile, '0');
        }

        $userIp = request()->ip();

        $ips = file($ipFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if (!in_array($userIp, $ips)) {
            file_put_contents($ipFile, $userIp . PHP_EOL, FILE_APPEND);

            $currentCount = (int) file_get_contents($counterFile);
            $currentCount++;
            file_put_contents($counterFile, $currentCount);
        }

        $counterTotal = (int) file_get_contents($counterFile);
    @endphp

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Tentang Darma Sakti Travel</h2>
                        <p>Dengan Darma Sakti Travel, setiap perjalanan adalah petualangan yang menunggu.</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Informasi</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/tentang') }}" class="py-2 d-block">Tentang</a></li>
                            <li><a href="{{ url('/list-mobil') }}" class="py-2 d-block">Layanan</a></li>
                            <li><a href="{{ url('/terms-and-condition') }}" class="py-2 d-block">Terms and
                                    Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Pelayanan Customer</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/faq') }}" class="py-2 d-block">FAQ</a></li>
                            <li><a href="{{ url('/opsi-pembayaran') }}" class="py-2 d-block">Opsi Pembayaran</a>
                            </li>
                            <li><a href="{{ url('/tips-booking') }}" class="py-2 d-block">Tips Booking</a></li>
                            <li><a href="{{ url('/kontak') }}" class="py-2 d-block">Kontak Kami</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><a href="https://www.instagram.com/darmasaktitravel"><span
                                            class="icon icon-instagram"></span>&nbsp;&nbsp;<span
                                            class="text">@darmasaktitravel</span></a></li>
                                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Darma Sakti
                                        No.33 Mekarwangi, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40236</span>
                                </li>
                                <li><a href="https://wa.me/628122346660" target="_blank"><span
                                            class="icon icon-phone"></span><span class="text">+62
                                            812-2346-660</span></a></li>
                                <li><a href="mailto:darmasaktitravel@gmail.com"><span
                                            class="icon icon-envelope"></span>&nbsp;&nbsp;<span
                                            class="text">darmasaktitravel@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p
                        style="background-color: #2c3e50; padding: 10px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <span id="visitorCountText"
                            style="font-weight: semibold; color: #ecf0f1; font-size: 12px;">Darma Sakti Travel telah
                            dikunjungi oleh:</span>
                        <span id="visitorCount"
                            style="display: inline-block; background-color: #0d6efd; color: #fff; padding: 2px 8px; font-size: 14px; font-family: 'Courier New', monospace; border-radius: 5px; margin: 0 5px;">{{ $counterTotal }}</span>
                        <span id="visitorCountSuffix"
                            style="font-weight: bold; color: #ecf0f1; font-size: 12px;">orang</span>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart color-danger" aria-hidden="true"></i> by <a
                            href="https://www.instagram.com/chandratriantomo.2077" target="_blank">LUMINO</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ url('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('/assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ url('/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ url('/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('/assets/js/jquery.stellar.min.js') }}" defer></script>
    <script src="{{ url('/assets/js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ url('/assets/js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ url('/assets/js/aos.js') }}" defer></script>
    <script src="{{ url('/assets/js/jquery.animateNumber.min.js') }}" defer></script>
    {{-- <script src="{{ url('/assets/js/bootstrap-datepicker.js') }}" defer></script> --}}
    {{-- <script src="{{ url('/assets/js/jquery.timepicker.min.js') }}" defer></script> --}}
    <script src="{{ url('/assets/js/scrollax.min.js') }}" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false" async
        defer></script>
    <script src="{{ url('/assets/js/google-map.js') }}" defer></script>
    <script src="{{ url('/assets/js/main.js') }}" defer></script>

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <style>
        /* 1. Paksa warna teks dan transparansi agar terlihat jelas */
        .flatpickr-input, 
        .form-control, 
        input.custom-datepicker {
            color: #000000 !important; /* Paksa hitam pekat */
            -webkit-text-fill-color: #000000 !important; /* Khusus Safari/iOS */
            opacity: 1 !important; 
            background-color: #ffffff !important;
        }
    
        /* 2. Menghilangkan styling bawaan iOS (Safari) */
        input {
            -webkit-appearance: none;
            appearance: none;
        }
    
        /* 3. Warna teks saat input di-focus */
        .flatpickr-input:focus, 
        .form-control:focus {
            color: #000 !important;
            -webkit-text-fill-color: #000000 !important;
        }
    
        /* 4. Khusus untuk placeholder agar tidak ikut hitam pekat jika ingin dibedakan */
        .form-control::placeholder {
            color: #999 !important;
            -webkit-text-fill-color: #999 !important;
            opacity: 1;
        }
    </style>
    
    <script>
        const dateConfig = {
            dateFormat: "d/m/Y",
            allowInput: true,
            altInput: false,
            disableMobile: "true"
        };

        flatpickr("#book_pick_date", dateConfig);
        flatpickr("#book_off_date", dateConfig);
    </script>
</body>

</html>
