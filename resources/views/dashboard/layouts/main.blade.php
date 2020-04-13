<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title> Dashboard - Qbytesoft | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('dashboard.layouts.partials.head')
    @stack('css')
</head>
<body class="position-relative">
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="container-fluid px-0">
    <!-- The side bar -->
    @yield('sidebar')
    <!-- Main section -->
    <main class="main-full-body bg-light">

        <!-- Theme changer -->
        @yield('theme-tool')

        <!-- The navbar -->
        @yield('nav')


        <!--Page Body part -->
        @yield('content')
    </main>
</div>

@include('dashboard.layouts.partials.footer-scripts')
@stack('js')


</body>


</html>
