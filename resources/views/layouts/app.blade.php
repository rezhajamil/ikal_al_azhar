<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Favicon Icon ======-->
    <link rel="icon" href="{{ asset('images/logo.png') }}">

    <title>IKAL Al Azhar Kairo - Medan</title>

    {{-- <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
    <!-- Icon -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/LineIcons.2.0.css') }}"> --}}
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <!-- Tiny Slider  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tiny-slider.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">

    <script src="https://kit.fontawesome.com/b2ba1193ce.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script defer src="{{ asset('js/alpine.min.js') }}"></script>
</head>

<body class=" scroll-smooth">
    @include('layouts.navigation')

    @yield('content')
    <!-- Hero Area Start -->
    <!-- Hero Area End -->

    @include('layouts.footer')

    <!-- Go to Top Link -->
    <a href="#"
        class="fixed bottom-0 right-0 z-20 flex items-center justify-center w-10 h-10 mb-5 mr-5 text-lg text-white duration-300 bg-blue-600 rounded-full back-to-top hover:bg-blue-400">
        <i class="lni lni-arrow-up"></i>
    </a>

    <!-- Preloader -->
    <!--     <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div> -->
    <!-- End Preloader -->

    <!-- All js Here -->
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/contact-form.js') }}"></script>
    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
    <script src="{{ asset('js/tiny.js') }}"></script>

    @yield('script')
</body>

</html>
