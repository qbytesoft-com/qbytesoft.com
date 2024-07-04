<!-- The navber -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm p-0 py-3">
    <div class="c-container">
        <!-- Brand -->
        <a class="navbar-brand text-light d-inline-flex float-lg-left" href="{{ route('qbytesoft.home') }}">
            <img src="{{ asset('qbytesoft/img/logo/qbytsoft_logo.png') }}" alt="brand" class="w-50">
        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler mt-4 float-right" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="container-fluid">
            <div class="collapse navbar-collapse h-100" id="collapsibleNavbar">
                <ul class="navbar-nav mt-4">
                    <li class="nav-item mr-lg-3 pr-xl-4">
                        <a class="nav-link active" href="{{ route('qbytesoft.home') }}">Home</a>
                    </li>
                    <li class="nav-item mr-lg-3 pr-xl-4 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Shopify
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('qbytesoft.shopify') }}">Shopify Service</a>
                            <a class="dropdown-item" href="{{ route('qbytesoft.products') }}">Shopify Apps</a>


                        </div>
                    </li>
                    <li class="nav-item mr-lg-3 pr-xl-4">
                        <a class="nav-link" href="{{ route('qbytesoft.web-development') }}">Web Development</a>
                    </li>


                    <li class="nav-item mr-lg-3 pr-xl-4">
                        <a class="nav-link" href="{{ route('qbytesoft.open-source') }}">Open Source</a>
                    </li>
                    <li class="nav-item mr-lg-3 pr-xl-4">
                        <a class="nav-link" href="{{ route('qbytesoft.open-source') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('qbytesoft.about') }}">About Us</a>
                    </li>
                </ul>
                <button>Get Free Audit</button>
            </div>

        </div>



    </div>


</nav>
<!-- Nav end -->
