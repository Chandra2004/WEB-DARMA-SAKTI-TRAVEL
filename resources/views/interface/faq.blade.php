@extends('template.layout-home')

@section('home-content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ url('/') }}assets/internal/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>FAQ <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">FAQ</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="card">
                    <div class="card-header" id="faqHeading1">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse1"
                                aria-expanded="true" aria-controls="faqCollapse1">
                                Paket Sewa Mobil
                            </button>
                        </h2>
                    </div>
                    <div id="faqCollapse1" class="collapse show" aria-labelledby="faqHeading1" data-parent="#faqAccordion">
                        <div class="card-body">
                            Anda dapat memesan paket sewa mobil melalui situs web kami dengan memilih mobil yang diinginkan
                            dengan mengikuti langkah langkah pemesanan yang tersedia. Pembayaran dapat dilakukan dengan cara
                            transfer.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading2">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                Apa kebijakan pembatalan pemesanan?
                            </button>
                        </h2>
                    </div>
                    <div id="faqCollapse2" class="collapse" aria-labelledby="faqHeading2" data-parent="#faqAccordion">
                        <div class="card-body">
                            Pembatalan pemesanan dapat dilakukan dengan memberi tahu kami minimal 48 jam sebelum tanggal
                            keberangkatan. Biaya pembatalan mungkin berlaku sesuai dengan kebijakan kami. Harap hubungi
                            layanan pelanggan kami untuk informasi lebih lanjut.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading3">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                Apakah Darmasakti Travel menyediakan layanan penjemputan bandara?
                            </button>
                        </h2>
                    </div>
                    <div id="faqCollapse3" class="collapse" aria-labelledby="faqHeading3" data-parent="#faqAccordion">
                        <div class="card-body">
                            Ya, kami menyediakan layanan penjemputan dari dan ke bandara.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading4">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                Bagaimana jika saya memiliki permintaan khusus untuk perjalanan saya?
                            </button>
                        </h2>
                    </div>
                    <div id="faqCollapse4" class="collapse" aria-labelledby="faqHeading4" data-parent="#faqAccordion">
                        <div class="card-body">
                            Kami dengan senang hati akan mencoba untuk mengakomodasi permintaan khusus Anda. Silakan hubungi
                            tim layanan pelanggan kami dengan detail permintaan Anda, dan kami akan melakukan yang terbaik
                            untuk memenuhi kebutuhan Anda.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
