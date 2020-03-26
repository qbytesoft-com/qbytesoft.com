<!-- The navber -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm">
    <!-- Brand -->
    <a class="navbar-brand p-2 ml-xl-4 text-light d-inline-flex" href="{{ route('qbytesoft.home') }}">
        <img src="{{ asset('qbytesoft/img/logo/qbytsoft_logo.png') }}" alt="brand" class="w-50">
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mt-4 mt-xl-0">
            <li class="nav-item mr-lg-5 pr-xl-5">
                <a class="nav-link active" href="{{ route('qbytesoft.home') }}">Home</a>
            </li>
            <li class="nav-item mr-lg-5 pr-xl-5">
                <a class="nav-link" href="{{ route('qbytesoft.web-development') }}">Web development</a>
            </li>
            <li class="nav-item mr-lg-5 pr-xl-5">
                <a class="nav-link" href="{{ route('qbytesoft.laravel') }}">Laravel</a>
            </li>
            <li class="nav-item mr-lg-5 pr-xl-5">
                <a class="nav-link" href="{{ route('qbytesoft.open-source') }}">Open source</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('qbytesoft.about') }}">About us</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Nav end -->
