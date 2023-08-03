<!-- The navber -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm p-0 py-3">
    <div class="c-container">
      <!-- Brand -->
      <a class="navbar-brand text-light d-inline-flex float-lg-left" href="{{ route('qbytesoft.home') }}">
        <img src="{{ asset('qbytesoft/img/logo/qbytsoft_logo.png') }}" alt="brand" class="w-50">
      </a>
    
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler mt-4 float-right" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <!-- Navbar links -->
      <div class="container pl-lg-5">
          <div class="collapse navbar-collapse h-100" id="collapsibleNavbar">
          <ul class="navbar-nav mt-4">
            <li class="nav-item mr-lg-5 pr-xl-4">
              <a class="nav-link active" href="{{ route('qbytesoft.home') }}">Home</a>
            </li>
            <li class="nav-item mr-lg-5 pr-xl-4">
              <a class="nav-link" href="{{ route('qbytesoft.web-development') }}">Web development</a>
            </li>
            <li class="nav-item mr-lg-5 pr-xl-4">
              <a class="nav-link" href="{{ route('qbytesoft.laravel') }}">Laravel</a>
            </li>
            <li class="nav-item mr-lg-5 pr-xl-4">
              <a class="nav-link" href="{{ route('qbytesoft.shopify') }}">Shopify</a>
            </li>
            <li class="nav-item mr-lg-5 pr-xl-4">
              <a class="nav-link" href="{{ route('qbytesoft.open-source') }}">Open source</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('qbytesoft.about') }}">About us</a>
            </li>
          </ul>
        </div>
      </div>
      
        

    </div>
    
    
  </nav>
  <!-- Nav end -->
