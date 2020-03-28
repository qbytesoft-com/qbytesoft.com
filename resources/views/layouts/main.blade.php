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
    <meta property="og:title" content="Qbytesoft">
    <meta property="og:author" content="Md. Morshadun Nur">
    <meta property="og:description" content="Build your web application or website by PHP, Javascript, Laravel, Vue, React, MySQL, PostgreSQL.Qbytesoft provides quality UI and Band design for your business.">
    <meta property="og:type" content="article">

    <meta property="og:url" content="https://qbytesoft.com">
    <meta property="og:image" content="https://qbytesoft.com/qbytesoft/img/logo/qbytsoft_logo.png">
    <meta name="twitter:card" content="player">
    <meta name="twitter:site" content="@qbytesoft">
    <meta name="twitter:title" content="Qbytesoft">
    <meta name="twitter:description" content="Build your web application or website by PHP, Javascript, Laravel, Vue, React, MySQL, PostgreSQL.Qbytesoft provides quality UI and Band design for your business.">
    <meta name="twitter:image" content="https://qbytesoft.com/qbytesoft/img/logo/qbytsoft_logo.png">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-77552429-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-77552429-2');
    </script>
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
