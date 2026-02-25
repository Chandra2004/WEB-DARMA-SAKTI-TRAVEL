@extends('template.layout-home')

@section('home-content')
    <style>
        .gallery {
            column-count: 3;
            column-gap: 1rem;
        }

        .gallery-item {
            break-inside: avoid;
            margin-bottom: 1rem;
        }
    </style>

    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ url('/') }}assets/internal/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>List Mobil <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Galeri</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Gallery -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Galeri Foto</h2>
                    <p>Koleksi foto-foto terbaik kami.</p>
                </div>
            </div>
            <div class="container py-4">
                <div class="gallery">
                    @foreach ($galleries['data'] as $index => $image)
                        <div class="gallery-item">
                            <img src="{{ url('/file/galleries/') . $image['photo'] }}" class="img-fluid"
                                alt="{{ $image['uid'] }}" data-toggle="modal" data-target="#galleryModal{{ $index }}"
                                loading="lazy">
                        </div>

                        <div class="modal fade" id="galleryModal{{ $index }}" tabindex="-1" role="dialog"
                            aria-labelledby="galleryModalLabel{{ $index }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold" id="galleryModalLabel{{ $index }}">
                                            Galeri Foto Darma Sakti Travel</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="p-3 d-flex justify-content-center align-items-center">
                                                <img src="{{ url('/file/galleries/') . $image['photo'] }}"
                                                    class="img-fluid shadow-sm rounded" alt="{{ $image['uid'] }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    @php
                        $current = $galleries['current_page'];
                        $last = $galleries['last_page'];
                        $side_pages = 1;
                    @endphp

                    @if ($current > 1)
                        <li class="page-item">
                            <a class="page-link" href="{{ url('/galeri/page/' . ($current - 1)) }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    @endif

                    <li class="page-item {{ $current == 1 ? 'active' : '' }}">
                        <a class="page-link" href="{{ url('/galeri/page/1') }}">1</a>
                    </li>

                    @if ($current > $side_pages + 2)
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                    @endif

                    @for ($i = max(2, $current - $side_pages); $i <= min($last - 1, $current + $side_pages); $i++)
                        <li class="page-item {{ $current == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ url('/galeri/page/' . $i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    @if ($current < $last - $side_pages - 1)
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                    @endif

                    @if ($last > 1)
                        <li class="page-item {{ $current == $last ? 'active' : '' }}">
                            <a class="page-link" href="{{ url('/galeri/page/' . $last) }}">{{ $last }}</a>
                        </li>
                    @endif

                    @if ($current < $last)
                        <li class="page-item">
                            <a class="page-link" href="{{ url('/galeri/page/' . ($current + 1)) }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </section>
@endsection
