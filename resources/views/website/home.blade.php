@extends('layouts.main')
@section('nav')
    @include('layouts.partials.nav')
@endsection
@section('content')
    <!-- The hero section -->
    <div class="home-hero-section py-5">
        <div class="container pt-5 px-lg-5">
            <!-- Hero heading -->
            <h1 class="banner-slogan text-primary-d">Got an Idea?<br> We'll make it real.</h1>
            <p class="mt-3 text-primary-d lead">We do design and develop websites & web applications.<br>Expert in Laravel, React & Vue</p>
            <div class="banner-card p-5 d-flex">'<h2 class="text-light font-weight-bold">Get<a href="https://calendly.com/qbytesoft" target="_blank" class="text-light"> <span class="p-2">Free Shopify Store Audit</span></a></h2>
            </div>

            <!-- LATEST INSIGHTS section
            <div class="lts-inst pt-5">
                <div class="row mt-5 d-flex align-items-end">

                    <div class="col-md-6">
                        <div class="inst-left pl-3">
                            <h5 class="font-weight-bold text-primary-d">LATEST INSIGHTS</h5>
                            <h6 class="font-weight-bold text-danger-c">FROM THE TEAM</h6>

                            <div class="inst-item pt-4">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Relationship issues</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Nov 9th 2019</p>
                                    <ul class="m-0">
                                        <li class="link-color"><a href="#" class="p-0 m-0">stitcher.io</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="inst-item pt-4">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Improving Artisan commands</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Nov 7th 2019</p>
                                    <ul class="m-0">
                                        <li class="link-color"><a href="#" class="p-0 m-0">freek.dev</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="inst-right pl-3">

                            <div class="inst-item pt-4">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Full Stack Europe 2019 recap</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Nov 6th 2019</p>
                                    <ul class="m-0">
                                        <li class="link-color"><a href="#" class="p-0 m-0">sebastiandedeyne.com</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="inst-item pt-4">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Storing and retrieving webmentions with Firebase</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Oct 7th 2019</p>
                                    <ul class="m-0">
                                        <li class="link-color"><a href="#" class="p-0 m-0">rias.be</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             End LATEST INSIGHTS section -->
        </div>
    </div>
    <!-- End hero section -->
    <!-- Newslatter section startEnd newslatter section -->

    <div class="c-container py-5">
        <div class="container d-flex flex-column align-items-center">
            <h3 class="font-weight-bold footer-top-title text-primary-d d-inline-block pt-3"> Our &#10084; Products</h3>
        </div>
        <div class="row">

            <div class="col-md-6 my-5 d-flex justify-content-center justify-content-md-start">
                <a href="#" title="newslatter" class="d-content"><img src="{{ asset('qbytesoft/img/products/qchat.png') }}" loading="lazy" alt="Qchat" class="img-size w-75 shadow"></a>
            </div>
            <div class="col-md-6 my-5 d-flex flex-column align-items-center align-items-md-start">
                <h3 class="font-weight-bold text-primary-d text-center text-md-left">Qchat: Facebook Messenger</h3>
                <h6 class="text-success">Published <b>In Shopify Store</b></h6>
                <p class="mt-4 text-primary-d lead-sm pr-lg-5 text-center text-lg-left">
                    Facebook Messenger, designed to revolutionize your customer communication and enhance your online store's performance. Seamlessly integrating power of Facebook Messenger Chat into your store, this app empowers you to engage with your customers in real-time.
                </p>
                <p class="lead-sm"><i class="fas fa-chevron-right text-danger-c"></i> <a href="https://apps.shopify.com/facebook-messenger-bridge" target="_blank">Qchat</a></p>
            </div>


            <div class="col-md-6 my-5 d-flex flex-column align-items-center align-items-md-end order-1 order-md-0">
                <h3 class="font-weight-bold text-primary-d text-center text-md-left">AutoGarage Pro</h3>
                <h6 class="text-danger-c"><b>Car Service management Automation</b> by LARAVEL</h6>
                <p class="mt-4 text-primary-d lead-sm pl-lg-5 text-center text-lg-right">
                    <strong>Autogarage Pro</strong> is a platform that connects car owners, garages, insurers and spares suppliers to transform the automotive service experience. It offers comprehensive and customisable solutions for garage management.
                </p>
                <p class="lead-sm"><i class="fas fa-chevron-right text-danger-c"></i> <a href="https://demo.autogaragepro.com/" target="_blank">autogaragepro.com</a></p>
            </div>
            <div class="col-md-6 my-5 d-flex justify-content-center justify-content-md-end order-0 order-md-1">
                <a href="#" title="newslatter" class="d-content"><img src="{{ asset('qbytesoft/img/products/autogaragepro.png') }}" loading="lazy" alt="Autogarage Pro" class="img-size w-75 shadow"></a>
            </div>
        </div>


    </div>

    <!-- Banner -->
    <div class="banner my-5">
        <div class="container">
            <div class="banner-card p-5 d-flex flex-lg-row flex-column justify-content-lg-between align-items-lg-center">
                <h3 class="text-light">Discuss your idea with us<br>or make us generate one.</h3>
                <h1 class="text-light font-weight-bold text-center text-md-right">Let's<a href="https://calendly.com/qbytesoft" target="_blank" class="text-light"> <span class="border border-1 p-2">Schedule A Call</span></a></h1>
            </div>
        </div>
    </div>
    <!-- End banner -->
    <!-- Start clients section -->
    <div class="client-section py-5">
        <div class="container d-flex flex-column align-items-center">
            <!-- The title -->
            <h3 class="font-weight-bold footer-top-title text-primary-d d-inline-block pt-3"> CLIENTS WE &#10084; WORK WITH</h3>
            <!-- Clients brand logo -->
            <div class="clients mt-5">
                <div class="row">
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height: 200px">
                                <img src="{{asset('/qbytesoft/img/logo/lycheekimono.png')}}" alt="Lychee Kimono" width="100%">
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height: 200px">
                                <img src="{{asset('/qbytesoft/img/logo/ashis-auto.png')}}" alt="Ashis Auto Solution Ltd." width="100%" height="auto">
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height: 200px">
                                <img src="{{asset('/qbytesoft/img/logo/autoxpress.png')}}" alt="Autoxpress Ltd" width="100%">
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height: 200px">
                                <img src="{{asset('/qbytesoft/img/logo/localrydes.png')}}" alt="Localrydes" width="100%">
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height: 200px">
                                <img src="{{asset('/qbytesoft/img/logo/rph-logo.png')}}" alt="RPH Group" width="100%">
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height: 200px">
                                <img src="{{asset('/qbytesoft/img/logo/eurocar.png')}}" alt="Eurocar Solution Ltd" width="100%">
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body bg-dark d-flex justify-content-center align-items-center" style="height: 200px">
                                <img src="{{asset('/qbytesoft/img/logo/unionwealth.png')}}" alt="Union Wealth" width="100%">
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body bg-dark d-flex justify-content-center align-items-center" style="height: 200px">
                                <img src="{{asset('/qbytesoft/img/logo/cloudcompli.png')}}" alt="CloudCompli" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End clients section -->
@endsection

@section('footer')
    @include('layouts.partials.footer')
@endsection
