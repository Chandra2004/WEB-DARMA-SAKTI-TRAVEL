@section('meta_title', $car['merk_mobil'] . ' ' . $car['nama_mobil'] . ' | Sewa Mobil Bandung - Darma Sakti Travel')
@section('meta_description', 'Sewa mobil ' . $car['merk_mobil'] . ' ' . $car['nama_mobil'] . ' di Bandung. Kapasitas ' .
    $car['kursi_mobil'] . ' orang, transmisi ' . $car['transmisi_mobil'] . '. Hubungi Darma Sakti Travel untuk harga
    terbaik.')
@section('meta_keywords', 'sewa ' . strtolower($car['nama_mobil']) . ' bandung, rental ' .
    strtolower($car['nama_mobil']) . ' bandung, sewa mobil ' . strtolower($car['merk_mobil']) . ', rental mobil bandung,
    darma sakti travel')
@section('og_image', url('/file/cars/' . $car['photo']))
@section('og_type', 'article')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Primary Meta Tags -->
<title>@yield('meta_title')</title>
<meta name="title" content="@yield('meta_title')">
<meta name="description" content="@yield('meta_description')">
<meta name="keywords" content="@yield('meta_keywords')">
<meta name="author" content="Darma Sakti Travel">
<meta name="robots" content="index, follow">
<meta name="language" content="Indonesian">
<meta name="revisit-after" content="7 days">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="@yield('og_type')">
<meta property="og:url" content="{{ url($_SERVER['REQUEST_URI'] ?? '/') }}">
<meta property="og:title" content="@yield('meta_title')">
<meta property="og:description" content="@yield('meta_description')">
<meta property="og:image" content="@yield('og_image')">
<meta property="og:site_name" content="Darma Sakti Travel" />
<meta property="og:locale" content="id_ID" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url($_SERVER['REQUEST_URI'] ?? '/') }}">
<meta name="twitter:title" content="@yield('meta_title')">
<meta name="twitter:description" content="@yield('meta_description')">
<meta name="twitter:image" content="@yield('og_image')">

<!-- Favicon & Icons -->
<link rel="shortcut icon" href="{{ url('/assets/ico/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ url('/assets/ico/favicon.ico') }}" type="image/x-icon">
<meta name="theme-color" content="#0d6efd">

<!-- Canonical -->
<link rel="canonical" href="{{ url($_SERVER['REQUEST_URI'] ?? '/') }}" />

<!-- Preload & Optimize -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

<!-- Assets Styles -->
<link rel="stylesheet" href="{{ url('/assets/css/open-iconic-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/aos.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/jquery.timepicker.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/icomoon.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">

<style>
    .navbar,
    .navbar-light {
        background-color: white !important;
        border-bottom: 1px solid #ddd;
        top: 0px;
    }

    .navbar .nav-link {
        color: black !important;
    }

    .navbar-toggler {
        border-color: #000 !important;
    }

    .navbar .nav-item.onPage .nav-link {
        color: #0d6efd !important;
    }
</style>
