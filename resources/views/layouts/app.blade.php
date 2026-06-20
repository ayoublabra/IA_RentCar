<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title', 'Ai Esthetique')</title>
      <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}"> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- Chart list Js -->
      <link rel="stylesheet" href="{{ asset('js/chartist/chartist.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
   </head>

   <body class="sidebar-main-active right-column-fixed header-top-bgcolor">
        @stack('scripts')
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">

        @include('layouts.sidebare')
        @include('layouts.header')

        <div id="content-page" class="content-page">
            @yield('content')
        </div>

        @include('layouts.footer')

    </div>


      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- Appear JavaScript -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-appear/0.1/jquery.appear.min.js"></script>

      {{-- <script src="{{ asset('js/jquery.appear.js') }}s"></script> --}}
      <!-- Countdown JavaScript -->
      <script src="{{ asset('js/countdown.min.js') }}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ asset('js/waypoints.min.js') }}"></script>
      <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
      <!-- Wow JavaScript -->
      <script src="{{ asset('js/wow.min.js') }}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ asset('js/apexcharts.js') }}"></script>
      <!-- Slick JavaScript -->
      <script src="{{ asset('js/slick.min.js') }}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ asset('js/select2.min.js') }}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ asset('js/smooth-scrollbar.js') }}"></script>
      <!-- lottie JavaScript -->
      <script src="{{ asset('js/lottie.js') }}"></script>
      <!-- am core JavaScript -->
      <script src="{{ asset('js/core.js') }}"></script>
      <!-- am charts JavaScript -->
      <script src="{{ asset('js/charts.js') }}"></script>
      <!-- am animated JavaScript -->
      <script src="{{ asset('js/animated.js') }}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{ asset('js/kelly.js') }}"></script>
      <!-- Morris JavaScript -->
      <script src="{{ asset('js/morris.js') }}"></script>
      <!-- am maps JavaScript -->
      <script src="{{ asset('js/maps.js') }}"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{ asset('js/worldLow.js') }}"></script>
      <!-- ChartList Js -->
      <script src="{{ asset('js/chartist/chartist.min.js') }}"></script>
      <!-- Chart Custom JavaScript -->
      <script async src="{{ asset('js/chart-custom.js') }}"></script>
      <!-- Custom JavaScript -->
      <script src="{{ asset('js/custom.js') }}"></script>
      <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
   <!-- =========================
        AUTO LOCK SCREEN SYSTEM
    ========================== -->

   {{-- @auth --}}



{{-- @endauth --}}
   </body>
</html>

