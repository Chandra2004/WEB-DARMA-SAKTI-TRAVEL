<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Primary Meta Tags -->
<meta name="google-site-verification" content="RF83Wz2HkZcrq0kumYyYr4Ja2WNFW2l1mH4-XHIxgnA" />

<title>@yield('meta_title', $title ?? 'Darma Sakti Travel - Jasa Travel Terbaik di Bandung')</title>
<meta name="title" content="@yield('meta_title', $title ?? 'Darma Sakti Travel - Jasa Travel Terbaik di Bandung')">
<meta name="description" content="@yield('meta_description', 'Darma Sakti Travel menawarkan jasa travel terbaik di Bandung. Dapatkan pengalaman perjalanan yang nyaman dan aman dengan berbagai pilihan kendaraan yang kami sediakan.')">
<meta name="keywords" content="@yield('meta_keywords', 'Darma Sakti Travel, jasa travel Bandung, travel Bandung, sewa mobil Bandung, travel aman dan nyaman')">
<meta name="author" content="Chandra Tri Antomo">
<meta name="robots" content="index, follow">
<meta name="language" content="Indonesian">
<meta name="revisit-after" content="7 days">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="@yield('og_type', 'website')">
<meta property="og:url" content="{{ url($_SERVER['REQUEST_URI'] ?? '/') }}">
<meta property="og:title" content="@yield('meta_title', $title ?? 'Darma Sakti Travel - Jasa Travel Terbaik di Bandung')">
<meta property="og:description" content="@yield('meta_description', 'Nikmati perjalanan nyaman dan aman bersama Darma Sakti Travel. Kami menyediakan jasa travel terbaik di Bandung dengan berbagai pilihan kendaraan.')">
<meta property="og:image" content="@yield('og_image', url('/assets/internal/navbar-icon.png'))">
<meta property="og:site_name" content="Darma Sakti Travel" />
<meta property="og:locale" content="id_ID" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url($_SERVER['REQUEST_URI'] ?? '/') }}">
<meta name="twitter:title" content="@yield('meta_title', $title ?? 'Darma Sakti Travel - Jasa Travel Terbaik di Bandung')">
<meta name="twitter:description" content="@yield('meta_description', 'Darma Sakti Travel menawarkan jasa travel terbaik di Bandung. Nyaman dan Aman.')">
<meta name="twitter:image" content="@yield('og_image', url('/assets/internal/navbar-icon.png'))">

<!-- Favicon & Icons -->
<link rel="shortcut icon" href="{{ url('/assets/ico/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ url('/assets/ico/favicon.ico') }}" type="image/x-icon">
<meta name="theme-color" content="#0d6efd">

<!-- Canonical -->
<link rel="canonical" href="{{ url($_SERVER['REQUEST_URI'] ?? '/') }}" />

<!-- Preload & Optimize -->
<link rel="preload" as="image" href="{{ url('/assets/internal/bg_1.jpg') }}">
<link rel="dns-prefetch" href="//maps.googleapis.com">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

<!-- Assets Styles -->
<!-- Assets Styles (Deferred) -->
<link rel="stylesheet" href="{{ url('/assets/css/open-iconic-bootstrap.min.css') }}" media="print"
    onload="this.media='all'">
<link rel="stylesheet" href="{{ url('/assets/css/animate.css') }}" media="print" onload="this.media='all'">
<link rel="stylesheet" href="{{ url('/assets/css/owl.carousel.min.css') }}" media="print" onload="this.media='all'">
<link rel="stylesheet" href="{{ url('/assets/css/owl.theme.default.min.css') }}" media="print"
    onload="this.media='all'">
<link rel="stylesheet" href="{{ url('/assets/css/magnific-popup.css') }}" media="print" onload="this.media='all'">
<link rel="stylesheet" href="{{ url('/assets/css/aos.css') }}" media="print" onload="this.media='all'">
<link rel="stylesheet" href="{{ url('/assets/css/ionicons.min.css') }}" media="print" onload="this.media='all'">
<link rel="stylesheet" href="{{ url('/assets/css/bootstrap-datepicker.css') }}" media="print"
    onload="this.media='all'">
<link rel="stylesheet" href="{{ url('/assets/css/jquery.timepicker.css') }}" media="print"
    onload="this.media='all'">
<link rel="stylesheet" href="{{ url('/assets/css/flaticon.css') }}" media="print" onload="this.media='all'">
<link rel="stylesheet" href="{{ url('/assets/css/icomoon.css') }}" media="print" onload="this.media='all'">

<!-- Main Style (Critical) -->
<link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">

<noscript>
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
</noscript>

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
