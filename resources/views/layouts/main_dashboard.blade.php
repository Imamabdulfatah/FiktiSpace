<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

        <!-- Favicons -->
    <link href="/images/logo-new.png" rel="icon">
    <link href="/images/logo-new.png" rel="apple-touch-icon">
    
    <link rel="shortcut icon" href="/img/LogoUtama.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/chartjs/Chart.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/quill/quill.snow.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/quill/quill.bubble.css') }}" />
    <style>
        .hidden {
            display: none;
        }
    </style>
    
</head>
<body>
    @if ($sidebar === "sidebar")
        @include('partials.sidebar')
    @else
        @include('partials.sidebar_admin')
    @endif
  

    @yield('container')

    @include('partials.footer_dashboard')

    <script src="{{ asset('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/vendors/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-editor.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="js/script.js"></script>
    <script src="js/label.js"></script>
    
</body>
</html>
