<!-- Start footer section -->
<footer class="clear">
    <div class="footer-top shadow-sm py-5 position-relative">
        <div class="container">
            <div class="row mt-5">
                <!--Left Discription -->
                <div class="col-md-8">
                    <h1 class="font-weight-bold footer-top-title text-primary-d d-inline-block pt-3">We &#10084;<br>(open) source</h1>
                    <p class="text-primary-d lead-sm mt-5">
                        We are open source enthusiasts and love to work Laravel ecosystem. Mostly we use Laravel backend for the custom web application and CRM. Our <a target="_blank" href="{{ url('https://github.com/orgs/qbytesoft-com/people') }}">team members</a> amongst Web Developer on GitHub makes us confident.
                    </p>
                    <div class="learn-more mt-5 p-4">
                        <h5 class="text-primary-d font-weight-bold">LOOK AT THIS</h5>
                        <ul class="p-0 m-0 mt-4">
                            <li class="list-style-none">
                                <p class="lead-sm">
                                    <i class="fas fa-chevron-right text-primary fa-xs"></i>
                                    <a href="{{ route('qbytesoft.web-development') }}" class="text-primary-d">Laravel & Vue Application</a>
                                </p>
                            </li>
                            <li class="list-style-none">
                                <p class="lead-sm">
                                    <i class="fas fa-chevron-right text-primary fa-xs"></i>
                                    <a target="_blank" href="{{ url(config('qbytesoft.github')) }}" class="text-primary-d">Open source Collection</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Post card -->
                <div class="postcard position-absolute d-none d-md-block">
                    <a class="d-inline-block mb-5" title="postcard">
                        <div class="postcard-image shadow px-3 pt-3 pb-5">
                            <img src="{{ asset('qbytesoft/img/p3.jpg') }}" alt="post-card" class="w-50">
                        </div>
                    </a>
                    <!--
                    <div class="d-flex justify-content-start">
                        <p class="mt-5 text-right small">Check out the <a href="#">postcards</a><br>we get from kind users all over the world.</p>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
    <!-- The footer -->
    <div class="the-footer py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <!-- Footer menu -->
                    <div class="footer-menu d-flex flex-column flex-lg-row justify-content-lg-between">
                        <a href="{{ route('qbytesoft.home') }}" class="active text-decoration-none"><p class="lead-sm">Home</p></a>
                        <a href="{{ route('qbytesoft.web-development') }}" class="text-decoration-none"><p class="lead-sm">Web development</p></a>
                        <a href="{{ route('qbytesoft.laravel') }}" class="text-decoration-none"><p class="lead-sm">Laravel</p></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Footer menu -->
                    <div class="footer-menu d-flex flex-column flex-lg-row justify-content-lg-around">
                        <a href="{{ route('qbytesoft.open-source') }}" class="text-decoration-none"><p class="lead-sm">Open source</p></a>
                        <a href="{{ route('qbytesoft.about') }}" class="text-decoration-none"><p class="lead-sm">About us</p></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4 order-1 order-lg-0 d-none d-md-block">
                    <!-- Social links -->
                    <div class="social d-flex flex-column flex-lg-row justify-content-lg-between">
                        <a target="_blank" href="{{ url(config('qbytesoft.github')) }}" class="text-decoration-none"><p>Github</p></a>
                        <a target="_blank" href="{{ url(config('qbytesoft.instagram')) }}" class="text-decoration-none"><p>Instagram</p></a>
                        <a target="_blank" href="{{ url(config('qbytesoft.patreon')) }}" class="text-decoration-none"><p>Patreon</p></a>
                        <a href="{{ url(config('qbytesoft.twitter')) }}" class="text-decoration-none"><p>Twitter</p></a>
                    </div>
                </div>
                <div class="col-md-8 order-0 order-lg-1">
                    <!-- Address and contact information -->
                    <div class="d-flex flex-lg-row flex-column justify-content-lg-end align-items-start">
                        <div class="adr mr-lg-4 text-lg-right">
                            <p class="text-decoration-none">House-06, Road-12/A, Sector-10<br><i class="fas fa-map-marker-alt text-danger-c"></i> Uttara, Dhaka-1230</p>
                        </div>
                        <div class="contact text-lg-right mt-4 mt-lg-0">
                            <a href="mailto:info@qbytesoft.com" class="text-decoration-none">info@qbytesoft.com</a>
                            <br>
                            <p class="text-decoration-none">+8801611 032464</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End the footer -->
    <div class="footer-bootom py-3">
        <div class="container">
            <div class="footer-bootom-menu d-flex flex-row justify-content-start">
                <a href="#" class="mr-3">Privacy</a>
                <a href="#">Disclaimer</a>
            </div>
        </div>
    </div>
</footer>
