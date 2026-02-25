@extends('template.layout-home')

@section('home-content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ url('/') }}assets/internal/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Kontak <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Kontak Kami</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info justify-content-center">
                <div class="col-md-8">
                    <div class="row mb-5">
                        <!-- Address Section -->
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="icon-map-o"></span>
                            </div>
                            <p><span>Address:</span> Jl. Darma Sakti No.33 Mekarwangi, Kec. Bojongloa Kidul, Kota Bandung,
                                Jawa Barat 40236</p>
                        </div>

                        <!-- Phone Section -->
                        <div class="col-md-4 text-center border-height py-4">
                            <div class="icon">
                                <span class="icon-mobile-phone"></span>
                            </div>
                            <p><span>Phone:</span>
                                <a href="https://wa.me/628122346660">+62 812-2346-660</a>
                            </p>
                        </div>

                        <!-- Email and Instagram Section -->
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="icon-envelope-o"></span>
                            </div>
                            <p><span>Email:</span> <a
                                    href="mailto:darmasaktitravel@gmail.com">darmasaktitravel@gmail.com</a></p>
                            <div class="mt-4">
                                <span>Follow us:</span>
                                <ul class="ftco-footer-social list-unstyled mt-3 d-flex justify-content-center">
                                    <li>
                                        <!-- Instagram Icon with Black Color -->
                                        <a href="https://www.instagram.com/darmasaktitravel" style="color: black;">
                                            <span class="icon-instagram"></span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Instagram Username Text -->
                                <p class="mt-2" style="font-weight: bold; color: black;">@darmasaktitravel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-8 mb-md-5">
                    <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
                    <form action="{{ url('/kontak/message') }}" method="POST" class="bg-light p-5 contact-form"
                        target="_blank">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" class="form-control" placeholder="Your Phone">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10" style="width: 80%; margin-left: auto; margin-right: auto;">
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.449142002592!2d107.60004839999999!3d-6.9562268000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e90042f1bd05%3A0x6ccf6f13f0fad28e!2sDarma%20Sakti%20Travel!5e0!3m2!1sen!2sid!4v1770866257778!5m2!1sen!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
