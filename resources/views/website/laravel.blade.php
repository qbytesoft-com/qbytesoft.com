@extends('layouts.main')

@section('nav')
    @include('layouts.partials.nav')
@endsection

@section('content')
    <!-- The hero section -->
    <div class="laravel-hero-section py-5">
        <div class="container pt-5">
            <!-- Hero heading -->
            <h1 class="text-primary-d m-0">The Modern </h1>
            <h1 class="text-primary-d m-0">Web Technology</h1>

            <p class="mt-3 text-primary-d lead m-0">Our preferred tools to build</p>
            <p class="text-primary-d lead m-0">using Laravel, React & Vue</p>
            <!-- Start short description -->
            <div class="srt-des pt-5 my-sm-5">
                <div class="row">
                    <!-- Laravel -->
                    <div class="srt-des-item col-sm-6 position-relative text-left text-sm-right">
                        <!-- Laravel icon -->
                        <div class="srt-des-laravel-icon mb-4 mb-sm-0 d-flex justify-content-center shadow">
                            <img src="{{ asset('qbytesoft/img/laravel.svg') }}" alt="laravel">
                        </div>
                        <!-- Description -->
                        <h5 class="text-primary-d font-weight-bold">LARAVEL FRAMEWORK</h5>
                        <p class="text-primary-d lead-sm"><a href="#">Laravel</a> is one of the fastest growing open source PHP frameworks at the moment, letting us set up both simple sites as well as complex applications.</p>
                    </div>
                    <!-- Vue js and react js -->
                    <div class="srt-des-item col-sm-6 position-relative text-left">
                        <!-- Vue js icon -->
                        <div class="srt-des-vueJs-icon mb-4 mb-sm-0 d-flex justify-content-center shadow">
                            <img src="{{ asset('qbytesoft/img/vuejs.svg') }}" alt="laravel" >
                        </div>
                        <!-- React js icon -->
                        <div class="srt-des-reactJs-icon mb-4 mb-sm-0 d-flex justify-content-center shadow">
                            <img src="{{ asset('qbytesoft/img/reactjs.svg') }}" alt="laravel">
                        </div>
                        <!-- Description -->
                        <h5 class="text-primary-d font-weight-bold mt-5 pt-5 mt-sm-0 pt-sm-0">REACT & VUE.JS</h5>
                        <p class="text-primary-d lead-sm w-100"><a href="#">Vue.js</a> shines in Laravel apps that need that extra sprinkle of interactivity, while <a href="#">React</a> is our weapon of choice for highly interactive web and mobile applications.</p>
                    </div>
                </div>
            </div>
            <!-- End short description -->
        </div>
    </div>
    <!-- End hero section -->
    <div class="container">
        <hr>
        <!-- All content -->
        <div class="row">
            <div class="col-6">
                <div class="the-content mt-5 pt-sm-5">
                    <h3 class="text-primary-d font-weight-bold mb-4">Our greenhouse</h3>
                    <p class="text-primary-d lead-sm">We are truly a household name in the community, having contributed over <a href="">269 building blocks.</a> Our packages have been downloaded more than 50 million times by peer developers.</p>
                    <p class="text-primary-d lead-sm">The many contributions, conference talks and top ranking amongst PHP developers are proof of our dedication to the Laravel ecosystem, and even more: to web development in general.</p>


                </div>
            </div>
            <div class="col-6">
                <div class="promo-laravel">
                    <img src="{{ asset('qbytesoft/img/cover/laravel.svg') }}" alt="Promot">
                </div>
            </div>
        </div>
        <!-- Proof section -->
        <div class="learn-more my-5 p-5 d-flex flex-column flex-sm-row justify-content-between align-items-center">
            <h1 class="text-primary-d font-weight-bold">Need <br>proof?</h1>

            <ul class="p-0 m-0 mt-4 mt-sm-0">
                <!-- List item -->
                <li class="list-style-none">
                    <p class="lead-sm">
                        <i class="fas fa-chevron-right text-primary fa-xs"></i>
                        <a href="#" class="text-primary-d">Our open source work</a>
                    </p>
                </li>
                <!-- List item -->
                <li class="list-style-none">
                    <p class="lead-sm">
                        <i class="fas fa-chevron-right text-primary fa-xs"></i>
                        <a href="#" class="text-primary-d">Top ranking on GitHub</a>
                    </p>
                </li>
                <!-- List item -->
                <li class="list-style-none">
                    <p class="lead-sm">
                        <i class="fas fa-chevron-right text-primary fa-xs"></i>
                        <a href="#" class="text-primary-d">A skilled team</a>
                    </p>
                </li>
            </ul>
        </div>
        <!-- End proof section -->
    </div>
    <!-- Our technology -->
    <div class="our-technology py-5">
        <div class="container position-relative">
            <h3 class="text-primary-d font-weight-bold our-technology-heading">Our technology stack</h3>
            <div class="lts-inst">
                <div class="row mt-5">
                    <!-- technology items left -->
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="inst-left pl-3">
                            <h5 class="font-weight-bold text-primary-d mb-4">BACKEND</h5>
                            <!-- technology item -->
                            <div class="technology-item d-flex flex-wrap flex-row justify-content-start">
                                <p class="text-primary-d m-0 mr-5">Laravel</p>
                                <p class="text-primary-d m-0 mr-5">Laravel Spark</p>
                                <p class="text-primary-d m-0 mr-5">Laravel Nova</p>
                                <p class="text-primary-d m-0 mr-5">PHP</p>
                                <p class="text-primary-d m-0 mr-5">MySQL</p>
                                <p class="text-primary-d m-0 mr-5">Redis</p>
                                <p class="text-primary-d m-0 mr-5">Algolia</p>
                                <p class="text-primary-d m-0 mr-5">Elasticsearch</p>
                            </div>

                            <h5 class="font-weight-bold text-primary-d my-4">FRONTEND</h5>
                            <!-- technology item -->
                            <div class="technology-item d-flex flex-wrap flex-row justify-content-start">
                                <p class="text-primary-d m-0 mr-5">Vue.js</p>
                                <p class="text-primary-d m-0 mr-5">React</p>
                                <p class="text-primary-d m-0 mr-5">React Native</p>
                                <p class="text-primary-d m-0 mr-5">Vanilla JS</p>
                                <p class="text-primary-d m-0 mr-5">TypeScript</p>
                                <p class="text-primary-d m-0 mr-5">Tailwind CSS</p>
                                <p class="text-primary-d m-0 mr-5">PostCSS</p>
                                <p class="text-primary-d m-0 mr-5">Laravel Mix</p>
                                <p class="text-primary-d m-0 mr-5">npm</p>
                                <p class="text-primary-d m-0 mr-5">Yarn</p>
                                <p class="text-primary-d m-0 mr-5">Webpack</p>
                            </div>
                        </div>
                    </div>
                    <!-- technology items center -->
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="inst-left pl-3">
                            <h5 class="font-weight-bold text-primary-d mb-4">INTEGRATIONS</h5>
                            <!-- technology item -->
                            <div class="technology-item d-flex flex-wrap flex-row justify-content-start">
                                <p class="text-primary-d m-0 mr-5">Stripe</p>
                                <p class="text-primary-d m-0 mr-5">Ingenico</p>
                                <p class="text-primary-d m-0 mr-5">Mollie</p>
                                <p class="text-primary-d m-0 mr-5">Salesforce</p>
                                <p class="text-primary-d m-0 mr-5">Teamleader</p>
                                <p class="text-primary-d m-0 mr-5">Exact Online</p>
                                <p class="text-primary-d m-0 mr-5"> Urban Airship</p>
                                <p class="text-primary-d m-0 mr-5">MailChimp</p>
                                <p class="text-primary-d m-0 mr-5">Sendgrid</p>
                                <p class="text-primary-d m-0 mr-5"> Google Maps</p>
                                <p class="text-primary-d m-0 mr-5">Google Analytics</p>
                                <p class="text-primary-d m-0 mr-5">Google Tag Manager</p>
                            </div>
                        </div>
                    </div>

                    <!-- technology items end -->
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="inst-left pl-3">
                            <h5 class="font-weight-bold text-primary-d mb-4">SERVER</h5>
                            <!-- technology item -->
                            <div class="technology-item d-flex flex-wrap flex-row justify-content-start">
                                <p class="text-primary-d m-0 mr-5">AWS</p>
                                <p class="text-primary-d m-0 mr-5">Digital Ocean</p>
                                <p class="text-primary-d m-0 mr-5">Laravel Forge</p>
                                <p class="text-primary-d m-0 mr-5">Netlify</p>
                                <p class="text-primary-d m-0 mr-5">NGINX</p>
                                <p class="text-primary-d m-0 mr-5">Docker</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('footer')
    @include('layouts.partials.footer')
@endsection
