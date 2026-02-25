@extends('template.layout-home')

@section('home-content')
    <style>
        .car-image {
            width: 100%;
            height: auto;
            background-size: cover;
            background-position: center;
        }

        .gallery {
            column-count: 4;
            column-gap: 1rem;
        }

        .gallery-item {
            break-inside: avoid;
            margin-bottom: 1rem;
        }
    </style>

    <style>
        :root {
            --success: #22c55e;
            --error: #ef4444;
            --background: rgba(255, 255, 255, 0.95);
            --text: #1f2937;
        }

        .toast-container {
            position: fixed;
            top: 1.5rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
            max-width: min(90%, 420px);
            width: 100%;
        }

        .toast {
            position: relative;
            background: var(--background);
            border-radius: 12px;
            padding: 1rem;
            margin-bottom: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            opacity: 0;
            transform: translateY(-20px);
            animation: toast-in 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
        }

        .toast.success {
            border-left: 4px solid var(--success);
        }

        .toast.error {
            border-left: 4px solid var(--error);
        }

        @keyframes toast-in {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .toast-icon {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success .toast-icon {
            background: var(--success);
        }

        .error .toast-icon {
            background: var(--error);
        }

        .toast-icon svg {
            width: 16px;
            height: 16px;
            color: white;
        }

        .toast-content {
            flex: 1;
        }

        .toast-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 0.25rem;
        }

        .toast-title {
            font-weight: 600;
            color: var(--text);
            font-size: 0.925rem;
        }

        .close-btn {
            cursor: pointer;
            background: none;
            border: none;
            padding: 0.25rem;
            margin-left: 0.5rem;
            opacity: 0.7;
            transition: opacity 0.2s;
        }

        .close-btn:hover {
            opacity: 1;
        }

        .close-btn svg {
            width: 16px;
            height: 16px;
            color: var(--text);
        }

        .toast-message {
            color: #6b7280;
            font-size: 0.875rem;
            line-height: 1.4;
        }

        .progress-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            background: rgba(0, 0, 0, 0.05);
            width: 100%;
            border-radius: 0 0 12px 12px;
            overflow: hidden;
        }

        .progress-bar::after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background: var(--success);
            animation: progress 5s linear forwards;
        }

        .error .progress-bar::after {
            background: var(--error);
        }

        @keyframes progress {
            from {
                transform: scaleX(1);
            }

            to {
                transform: scaleX(0);
            }
        }

        @media (hover: hover) {
            .toast:hover .progress-bar::after {
                animation-play-state: paused;
            }
        }
    </style>

    <div class="toast-container">
        @if (isset($_GET['status']) && $_GET['status'] === 'testimonial')
            <div class="toast {{ $_GET['message'] === 'success' ? 'success' : 'error' }}">
                <div class="toast-icon">
                    @if ($_GET['message'] === 'success')
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    @endif
                </div>
                <div class="toast-content">
                    <div class="toast-header">
                        <span class="toast-title">
                            {{ $_GET['message'] === 'success' ? 'Berhasil!' : 'Gagal!' }}
                        </span>
                        <button class="close-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <p class="toast-message">
                        {{ $_GET['message'] === 'success'
                            ? 'Testimonial Anda telah berhasil dikirim.'
                            : 'Gagal mengirim testimonial. Silakan coba beberapa saat lagi.' }}
                    </p>
                </div>
                <div class="progress-bar"></div>
            </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toast = document.querySelector('.toast');
            const closeBtn = document.querySelector('.close-btn');

            if (toast) {
                // Fungsi untuk menyembunyikan dan menghapus toast
                const dismiss = () => {
                    toast.style.opacity = '0';
                    setTimeout(() => toast.remove(), 300);
                };

                // Auto dismiss setelah 5 detik
                setTimeout(dismiss, 5000);

                // Tombol close
                closeBtn.addEventListener('click', dismiss);

                // Pause animasi saat hover
                toast.addEventListener('mouseenter', () => {
                    toast.style.animationPlayState = 'paused';
                });

                toast.addEventListener('mouseleave', () => {
                    toast.style.animationPlayState = 'running';
                });

                // Hapus parameter status dan message dari URL
                if (window.history.replaceState) {
                    const url = new URL(window.location.href);
                    url.searchParams.delete('status');
                    url.searchParams.delete('message');
                    window.history.replaceState(null, null, url.pathname + url.search);
                }
            }
        });
    </script>

    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ url('/file/cars/') . $car['photo'] }}')" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Car details <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-3 bread">{{ $car['nama_mobil'] }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-car-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="car-details">
                        <div class="text text-center">
                            <span class="subheading">{{ $car['merk_mobil'] }}</span>
                            <h2>{{ $car['nama_mobil'] }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                {{-- <div class="col-md-4 d-flex align-self-stretch justify-content-center ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center justify-content-center">
                                <div class="icon">
                                    <span class="flaticon-car-machine"></span>
                                </div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Transmisi
                                        <span>{{ $car['transmisi_mobil'] }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-4 d-flex align-self-stretch justify-content-center ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center justify-content-center">
                                <div class="icon">
                                    <span class="flaticon-car-seat"></span>
                                </div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Kursi
                                        <span>{{ $car['kursi_mobil'] }} Dewasa</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch justify-content-center ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center justify-content-center">
                                <div class="icon">
                                    <span class="flaticon-backpack"></span>
                                </div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Bagasi
                                        <span>{{ $car['bagasi_mobil'] }} Tas</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-gallery-tab" data-toggle="pill"
                                        href="#pills-gallery" role="tab" aria-controls="pills-gallery"
                                        aria-expanded="true">Car Photo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-booknow-tab" data-toggle="pill" href="#pills-booknow"
                                        role="tab" aria-controls="pills-booknow" aria-expanded="false">Book Now</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-description-tab" data-toggle="pill"
                                        href="#pills-description" role="tab" aria-controls="pills-description"
                                        aria-expanded="false">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review"
                                        role="tab" aria-controls="pills-review" aria-expanded="false">Review</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-gallery" role="tabpanel"
                                aria-labelledby="pills-gallery-tab">
                                <div class="container py-4">
                                    <div class="gallery">
                                        @foreach ($allGalleryCar as $galleryCar)
                                            <div class="gallery-item">
                                                <img src="{{ url('/file/car-galleries/' . $galleryCar['photo']) }}"
                                                    class="img-fluid" alt="{{ $car['nama_mobil'] }}" data-toggle="modal"
                                                    data-target="#galleryModal{{ $galleryCar['uid'] }}" loading="lazy">
                                            </div>

                                            <div class="modal fade" id="galleryModal{{ $galleryCar['uid'] }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="galleryModalLabel{{ $galleryCar['uid'] }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title font-weight-bold"
                                                                id="galleryModalLabel{{ $galleryCar['uid'] }}">
                                                                {{ $car['nama_mobil'] }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="justify-content-center align-items-center">
                                                                <img src="{{ url('/file/car-galleries/' . $galleryCar['photo']) }}"
                                                                    class="img-fluid shadow-sm rounded"
                                                                    alt="{{ $car['nama_mobil'] }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-booknow" role="tabpanel"
                                aria-labelledby="pills-booknow-tab">
                                <form action="{{ url('/booking/now') }}" method="POST"
                                    class="request-form w-100 h-100 p-4 p-md-5" style="background: #111; color: #fff;">
                                    @csrf
                                    <h2 class="mb-4" style="color: #fff; font-weight: 700;">Booking Mobil Ini</h2>

                                    <div class="form-group">
                                        <label for="nama" class="label text-white-50">Atas Nama</label>
                                        <input required name="nama" id="nama" type="text"
                                            class="form-control rounded-lg p-3" placeholder="Nama Lengkap Anda"
                                            style="background: #ffffff !important; border: none; color: #333 !important; border-radius: 10px !important;">
                                    </div>

                                    <div class="form-group">
                                        <label for="model_display" class="label text-white-50">Model Mobil</label>
                                        <input type="text" id="model_display" class="form-control rounded-lg p-3"
                                            value="{{ $car['merk_mobil'] }} | {{ $car['nama_mobil'] }}" readonly
                                            style="background: #e9ecef !important; border: none; color: #333 !important; border-radius: 10px !important; cursor: not-allowed;">
                                        <input type="hidden" name="model" value="{{ $car['uid'] }}">
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
                                                    class="form-control rounded-lg p-3" id="book_pick_date"
                                                    placeholder="Tanggal"
                                                    style="background: #ffffff !important; border: none; color: #333 !important; border-radius: 10px !important;">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="book_off_date" class="label text-white-50">Tgl Selesai</label>
                                                <input required name="tanggalAkhir" type="text"
                                                    class="form-control rounded-lg p-3" id="book_off_date"
                                                    placeholder="Tanggal"
                                                    style="background: #ffffff !important; border: none; color: #333 !important; border-radius: 10px !important;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="jamBooking" class="label text-white-50">Jam Penjemputan</label>
                                        <input required name="jamBooking" type="time"
                                            class="form-control rounded-lg p-3" id="jamBooking" value="08:00"
                                            style="background: #ffffff !important; border: none; color: #333 !important; border-radius: 10px !important;">
                                    </div>

                                    <div class="form-group mt-4">
                                        <button type="submit"
                                            class="btn btn-primary btn-block py-3 px-4 font-weight-bold"
                                            style="border-radius: 10px;">
                                            Booking Sekarang
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab">
                                {!! $car['deskripsi_mobil'] !!}
                            </div>

                            <div class="tab-pane fade" id="pills-review" role="tabpanel"
                                aria-labelledby="pills-review-tab">
                                <div class="row" id="review-container">
                                    <div class="col-md-7">
                                        <h3 class="head mb-4">Review Pelanggan</h3>

                                        <div id="testimonial-list">
                                            @foreach ($testimonials as $testi)
                                                @php
                                                    $timestamp = $testi['created_at'];
                                                    $dateObj = date_create($timestamp);
                                                    $date = date_format($dateObj, 'd F Y');
                                                    $time = date_format($dateObj, 'H:i');
                                                @endphp
                                                <div class="review testimonial-item d-none mb-4 border-bottom pb-3">
                                                    <div class="user-img"
                                                        style="background-image: url({{ url('file/dummy/dummy.webp') }})">
                                                    </div>
                                                    <div class="desc">
                                                        <h4>
                                                            <span class="text-left">{{ $testi['nama_testimoni'] }}</span>
                                                            <span class="text-right">{{ $date }}
                                                                {{ $time }}
                                                                WIB</span>
                                                        </h4>
                                                        <p class="star">
                                                            <span>
                                                                @for ($i = 0; $i < $testi['rating_testimoni']; $i++)
                                                                    <i class="ion-ios-star"></i>
                                                                @endfor
                                                                @for ($i = 0; $i < 5 - $testi['rating_testimoni']; $i++)
                                                                    <i class="ion-ios-star-outline"></i>
                                                                @endfor
                                                            </span>
                                                            <span class="text-right"><a href="#" class="reply"><i
                                                                        class="icon-reply"></i></a></span>
                                                        </p>
                                                        <p><strong>{{ $testi['posisi_testimoni'] }}</strong></p>
                                                        <p>{{ $testi['deskripsi_testimoni'] }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <!-- Javascript Pagination Container -->
                                        <div class="row mt-5">
                                            <div class="col text-center">
                                                <div class="block-27">
                                                    <ul id="pagination-container">
                                                        <!-- Buttons generated by JS -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="rating-wrap">
                                            <h3 class="head mb-4">Berikan Testimonial</h3>
                                            <div class="wrap w-100">
                                                <form action="{{ url('/testimonial/submit') }}" method="POST"
                                                    class="p-4 bg-light">
                                                    @csrf
                                                    <input type="hidden" name="redirect_url"
                                                        value="{{ '/list-mobil/' . $car['slug_mobil'] . '/' . $car['uid'] }}">

                                                    <div class="form-group">
                                                        <label for="nama">Nama Lengkap</label>
                                                        <input type="text" class="form-control" name="nama_testimoni">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="posisi">Jabatan / Pekerjaan</label>
                                                        <input type="text" class="form-control" name="posisi_testimoni">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="rating">Rating: <span
                                                                id="ratingOutput">5</span>/5</label>
                                                        <input type="range" class="form-control-range" name="rating_testimoni"
                                                            min="1" max="5" step="1"
                                                            id="ratingInput"
                                                            oninput="document.getElementById('ratingOutput').innerHTML = this.value"
                                                            value="5">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message">Pengalaman Anda</label>
                                                        <textarea name="deskripsi_testimoni" id="message" cols="30" rows="5" class="form-control" ></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="Kirim Testimonial"
                                                            class="btn py-3 px-4 btn-primary">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('.testimonial-item');
            const itemsPerPage = 5;
            const paginationContainer = document.getElementById('pagination-container');
            const totalPages = Math.ceil(items.length / itemsPerPage);
            let currentPage = 1;

            function showPage(page) {
                if (page < 1) page = 1;
                if (page > totalPages) page = totalPages;
                currentPage = page;

                // Hide all items using Bootstrap classes
                items.forEach(item => {
                    item.classList.remove('d-flex');
                    item.classList.add('d-none');
                });

                // Show items for current page
                const start = (page - 1) * itemsPerPage;
                const end = start + itemsPerPage;

                for (let i = start; i < end; i++) {
                    if (items[i]) {
                        items[i].classList.remove('d-none');
                        items[i].classList.add('d-flex');
                    }
                }

                renderPagination();
            }

            function renderPagination() {
                paginationContainer.innerHTML = '';

                // Prev Button
                if (currentPage > 1) {
                    const prevLi = document.createElement('li');
                    prevLi.innerHTML = `<a href="#">&lt;</a>`;
                    prevLi.onclick = (e) => {
                        e.preventDefault();
                        showPage(currentPage - 1);
                    };
                    paginationContainer.appendChild(prevLi);
                }

                // Page Numbers
                for (let i = 1; i <= totalPages; i++) {
                    // Simple pagination logic: show all or just a window
                    // For simplicity in JS-only, let's show all or a small window if needed
                    // Showing window of 5 pages around current
                    if (Math.abs(currentPage - i) <= 2 || i === 1 || i === totalPages) {
                        const li = document.createElement('li');
                        if (i === currentPage) li.className = 'active';

                        // Add ellipsis 
                        if (paginationContainer.lastChild &&
                            paginationContainer.lastChild.innerText !== '...' &&
                            paginationContainer.lastChild.innerText !== '<' &&
                            (i - parseInt(paginationContainer.lastChild.innerText) > 1)) {
                            const dots = document.createElement('li');
                            dots.innerHTML = '<span>...</span>';
                            paginationContainer.appendChild(dots);
                        }

                        li.innerHTML = `<a href="#">${i}</a>`;
                        li.onclick = (e) => {
                            e.preventDefault();
                            showPage(i);
                        };
                        paginationContainer.appendChild(li);
                    }
                }

                // Next Button
                if (currentPage < totalPages) {
                    const nextLi = document.createElement('li');
                    nextLi.innerHTML = `<a href="#">&gt;</a>`;
                    nextLi.onclick = (e) => {
                        e.preventDefault();
                        showPage(currentPage + 1);
                    };
                    paginationContainer.appendChild(nextLi);
                }
            }

            // Initialize
            if (items.length > 0) {
                showPage(1);
            }
        });
    </script>

@endsection
