<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Home || qbytesoft</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('qbytesoft/qbytefavicon.ico') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('qbytesoft/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbytesoft/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbytesoft/css/main.css') }}">

    <meta name="theme-color" content="#fafafa">
    @stack('css')
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

@yield('nav')
<!-- Main section start -->
<main>
    @yield('content')
</main>
@yield('footer')
<!-- Main section end -->
<script src="{{ asset('qbytesoft/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('qbytesoft/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('qbytesoft/js/plugins.js') }}"></script>
<script src="{{ asset('qbytesoft/js/main.js') }}"></script>
@stack('js')
</body>

</html>
