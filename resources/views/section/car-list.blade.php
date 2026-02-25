<section class="ftco-section">
    <div class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Apa yang kami punya</span>
                <h2 class="mb-2">Pilih Kendaraan Anda</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($cars as $mobil)
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="position: relative; z-index: 0;">
                            <img src="{{ url('/file/cars/') . $mobil['photo'] }}" class="img-fluid"
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;"
                                loading="lazy" alt="{{ $mobil['nama_mobil'] }}">
                            <div class="price-wrap d-flex">
                                <div class="icon">
                                    <span class="flaticon-car-seat" style="width: 20px;"></span>
                                    <span>Kapasitas &nbsp;</span>
                                </div>
                                <span class="rate">{{ $mobil['kursi_mobil'] }}</span>
                                <p class="from-day">
                                    <span>Kursi</span>
                                    <span>/Dewasa</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0">
                                <a
                                    href="{{ url('/list-mobil/' . $mobil['slug_mobil'] . '/' . $mobil['uid']) }}">{{ $mobil['nama_mobil'] }}</a>
                            </h2>
                            <span>{{ $mobil['merk_mobil'] }}</span>
                            <p class="d-flex mb-0 d-block">
                                @php
                                    $baseUrl = \TheFramework\App\Config::get('BASE_URL');
                                    $detailLink = "{$baseUrl}/list-mobil/{$mobil['slug_mobil']}/{$mobil['uid']}";

                                    $waMessage =
                                        "📌 Tanya Ketersediaan Mobil\n\n" .
                                        "Model Mobil: {$mobil['merk_mobil']} | {$mobil['nama_mobil']}\n\n" .
                                        "Apakah unit ini tersedia untuk disewa?\n\n" .
                                        "Terima kasih Darma Sakti Travel.\n\n\n" .
                                        "{$detailLink}";

                                    $waUrl = 'https://wa.me/628122346660?text=' . urlencode($waMessage);
                                @endphp
                                <a href="{{ $waUrl }}" class="btn btn-black btn-outline-black mr-1">Book now</a>
                                <a href="{{ url('/list-mobil/' . $mobil['slug_mobil'] . '/' . $mobil['uid']) }}"
                                    class="btn btn-black btn-outline-black ml-1">Details</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
