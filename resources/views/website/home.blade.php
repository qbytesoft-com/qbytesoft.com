@extends('layouts.main')
@section('nav')
    @include('layouts.partials.nav')
@endsection
@section('content')
    <!-- The hero section -->
    <div class="home-hero-section py-5">
        <div class="container pt-5">
            <!-- Hero heading -->
            <h1 class="text-primary-d">No frills,<br>just proven expertise</h1>
            <p class="mt-3 text-primary-d lead">We craft websites & web applications<br>using Laravel, React & Vue</p>
            <!-- LATEST INSIGHTS section -->
            <div class="lts-inst pt-5">
                <div class="row mt-5 d-flex align-items-end">
                    <!-- Instghts items left -->
                    <div class="col-md-6">
                        <div class="inst-left pl-3">
                            <h5 class="font-weight-bold text-primary-d">LATEST INSIGHTS</h5>
                            <h6 class="font-weight-bold text-danger-c">FROM THE TEAM</h6>
                            <!-- LATEST INSIGHTS item -->
                            <div class="inst-item pt-4">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Relationship issues</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Nov 9th 2019</p>
                                    <ul class="m-0">
                                        <li class="link-color"><a href="#" class="p-0 m-0">stitcher.io</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- LATEST INSIGHTS item -->
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
                    <!-- Instghts items right -->
                    <div class="col-md-6">
                        <div class="inst-right pl-3">
                            <!-- LATEST INSIGHTS item -->
                            <div class="inst-item pt-4">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Full Stack Europe 2019 recap</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Nov 6th 2019</p>
                                    <ul class="m-0">
                                        <li class="link-color"><a href="#" class="p-0 m-0">sebastiandedeyne.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- LATEST INSIGHTS item -->
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
            <!-- End LATEST INSIGHTS section -->
        </div>
    </div>
    <!-- End hero section -->
    <!-- Newslatter section start -->
    <div class="c-container py-5">
        <div class="row">
            <!-- newslatter's -->
            <div class="col-md-6 my-5 d-flex justify-content-center justify-content-md-start">
                <a href="#" title="newslatter" class="d-content"><img src="{{ asset('qbytesoft/img/newslatter1.jpg') }}" loading="lazy" alt="newslatter" class="img-size w-75 shadow"></a>
            </div>
            <div class="col-md-6 my-5 d-flex flex-column align-items-center align-items-md-start">
                <h3 class="font-weight-bold text-primary-d text-center text-md-left">Newsletter software and package</h3>
                <h6 class="text-danger-c">WORK <b>IN PROGRESS</b></h6>
                <p class="mt-4 text-primary-d lead-sm pr-lg-5 text-center text-lg-left">
                    Mailcoach is a self-hosted dashboard to setup mailing lists, send out newsletter campaigns and track the success. It can be used as a separate app or integrated in your own Laravel application, and couples with all email services that support SMTP. To be launched before the end of the year!
                </p>
                <p class="lead-sm"><i class="fas fa-chevron-right text-danger-c"></i> <a href="#">mailcoach.app</a></p>
            </div>

            <!-- newslatter's -->
            <div class="col-md-6 my-5 d-flex flex-column align-items-center align-items-md-end order-1 order-md-0">
                <h3 class="font-weight-bold text-primary-d text-center text-md-left">Ignition + Flare</h3>
                <h6 class="text-danger-c"><b>ERROR PAGE + TRACKER</b> FOR LARAVEL</h6>
                <p class="mt-4 text-primary-d lead-sm pl-lg-5 text-center text-lg-right">
                    Ignition is a free and shareable error page that ships with Laravel 6 and up. It's built to keep you focused on finding a solution. It also couples with an online service —Flare— that tracks production errors and lets you work in team to fix them.
                </p>
                <p class="lead-sm"><i class="fas fa-chevron-right text-danger-c"></i> <a href="#">flareapp.io</a></p>
            </div>
            <div class="col-md-6 my-5 d-flex justify-content-center justify-content-md-end order-0 order-md-1">
                <a href="#" title="newslatter" class="d-content"><img src="{{ asset('qbytesoft/img/newslatter2.jpg') }}" loading="lazy" alt="newslatter" class="img-size w-75 shadow"></a>
            </div>
        </div>

        <div class="row">
            <!-- newslatter's -->
            <div class="col-md-6 my-5 d-flex justify-content-center justify-content-md-start">
                <a href="#" title="newslatter" class="d-content"><img src="{{ asset('qbytesoft/img/newslatter3.jpg') }}" loading="lazy" alt="newslatter" class="img-size w-75 shadow"></a>
            </div>
            <div class="col-md-6 my-5 d-flex flex-column align-items-center align-items-md-start">
                <h3 class="font-weight-bold text-primary-d text-center text-md-left">Soundcloud Demo Platform</h3>
                <h6 class="text-danger-c">USING <b>SOUNDCLOUD, LARAVEL, VUE</b></h6>
                <p class="mt-4 text-primary-d lead-sm pr-lg-5 text-center text-lg-left">
                    For Martin Garrix' record label stmpdrcrds.com we made a workflow application to streamline their demo track influx. Crew members can listen and evaluate SoundCloud tracks by upcoming talents, submitted to the application.
                </p>
                <p class="lead-sm"><i class="fas fa-chevron-right text-danger-c"></i> <a href="#">demo.stmpdrcrds.com</a></p>
            </div>

            <!-- newslatter's -->
            <div class="col-md-6 my-5 d-flex flex-column align-items-center align-items-md-end order-1 order-md-0">
                <h3 class="font-weight-bold text-primary-d text-center text-md-left">Art Transaction Platform</h3>
                <h6 class="text-danger-c">USING <b>LARAVEL, VUE, STRIPE</b></h6>
                <p class="mt-4 text-primary-d lead-sm pl-lg-5 text-center text-lg-right">
                    Ignition is a free and shareable error page that ships with Laravel 6 and up. It's built to keep you focused on finding a solution. It also couples with an online service —Flare— that tracks production errors and lets you work in team to fix them.
                </p>
                <p class="lead-sm"><i class="fas fa-chevron-right text-danger-c"></i> <a href="#">my.artassistant.com</a></p>
            </div>
            <div class="col-md-6 my-5 d-flex justify-content-center justify-content-md-end order-0 order-md-1">
                <a href="#" title="newslatter" class="d-content"><img src="{{ asset('qbytesoft/img/newslatter4.jpg') }}" loading="lazy" alt="newslatter" class="img-size w-75 shadow"></a>
            </div>
        </div>
    </div>
    <!-- End newslatter section -->
    <!-- Banner -->
    <div class="banner my-5">
        <div class="container">
            <div class="banner-card p-5 d-flex flex-lg-row flex-column justify-content-lg-between align-items-lg-center">
                <h3 class="text-light">Discuss your idea with us<br>or make us generate one.</h3>
                <h1 class="text-light font-weight-bold text-center text-md-right">See<a href="#" class="text-light"> if we match.</a></h1>
            </div>
        </div>
    </div>
    <!-- End banner -->
    <!-- Start clients section -->
    <div class="client-section py-5">
        <div class="container d-flex flex-column align-items-center">
            <!-- The title -->
            <a href="#" class="text-primary-d d-inline-block"><h5 class="font-weight-bold">CLIENTS WE WORK WITH</h5></a>
            <!-- Clients brand logo -->
            <div class="clients mt-5">
                <div class="row">
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body bg-dark p-5 d-flex justify-content-center align-items-center">
                                <p class="text-light">Client</p>
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body bg-dark p-5 d-flex justify-content-center align-items-center">
                                <p class="text-light">Client</p>
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body bg-dark p-5 d-flex justify-content-center align-items-center">
                                <p class="text-light">Client</p>
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body bg-dark p-5 d-flex justify-content-center align-items-center">
                                <p class="text-light">Client</p>
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body bg-dark p-5 d-flex justify-content-center align-items-center">
                                <p class="text-light">Client</p>
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body bg-dark p-5 d-flex justify-content-center align-items-center">
                                <p class="text-light">Client</p>
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body bg-dark p-5 d-flex justify-content-center align-items-center">
                                <p class="text-light">Client</p>
                            </div>
                        </div>
                    </div>
                    <!-- Client -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="card border-0">
                            <div class="card-body bg-dark p-5 d-flex justify-content-center align-items-center">
                                <p class="text-light">Client</p>
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
