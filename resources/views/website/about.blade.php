@extends('layouts.main')

@section('nav')
    @include('layouts.partials.nav')
@endsection

@section('content')
    <!-- The hero section -->
    <div class="about-hero-section py-5">
        <div class="container pt-5">
            <!-- Hero heading -->
            <h1 class="text-primary-d">Glad you found us</h1>
            <!-- Address -->
            <div class="row mt-5">
                <div class="col-12 col-md-4 mt-4">
                    <p class="lead-sm m-0"><a href="#" class="text-decoration-none text-primary-d">info@spatie.be</a></p>
                    <p class="lead-sm m-0"><a href="#" class="text-decoration-none text-primary-d">@spatie_be</a></p>
                    <p class="lead-sm m-0"><a href="#" class="text-decoration-none text-primary-d">+3232925679</a></p>
                </div>
                <div class="col-12 col-md-4 mt-4">
                    <p class="lead-sm m-0"><a href="#" class="text-decoration-none text-primary-d">Samberstraat 69D<br>2060 Antwerp<br>Belgium <i class="fas fa-map-marker-alt text-danger-c"></i></a></p>
                </div>
                <div class="col-12 col-md-4 mt-4">
                    <p class="text-primary-d m-0"><span class="text-gray">VAT</span> BE0809.387.596</p>
                    <p class="text-primary-d m-0"><span class="text-gray">IBAN</span> BE66363127875443</p>
                    <p class="text-primary-d m-0"><span class="text-gray">BIC</span> BBRUBEBB</p>
                </div>
            </div>
            <!-- LATEST INSIGHTS section -->
            <div class="lts-inst pt-5">
                <div class="row mt-5">
                    <!-- Instghts items left -->
                    <div class="col-md-6">
                        <div class="inst-left pl-3">
                            <h5 class="font-weight-bold text-primary-d">VACANCIES AT SPATIE</h5>
                            <h6 class="font-weight-bold text-danger-c">CURRENTLY LOOKING FOR…</h6>
                            <p class="text-primary-d lead-sm my-4">It's rather full-house at the moment, but why don't you try to squeeze your way in?</p>
                            <a href="#" class="link-color lead-sm">Spontaneous application</a>
                            <p class="text-gray">Antwerp / Partially remote</p>
                        </div>
                    </div>
                    <!-- Instghts items right -->
                    <div class="col-md-6">
                        <div class="inst-right pl-3">
                            <h5 class="font-weight-bold text-primary-d">INTERNSHIPS</h5>
                            <h6 class="font-weight-bold text-danger-c">BACKEND OR FRONTEND</h6>
                            <p class="text-primary-d lead-sm my-4">Are you looking to get really good in Laravel, Vue.js, PostCSS or Tailwind? We have slots available for students.</p>
                            <a href="#" class="link-color lead-sm">Apply for an internship</a>
                            <p class="text-gray">Antwerp</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End LATEST INSIGHTS section -->
        </div>
    </div>
    <!-- End hero section -->
    <!-- Start our team section -->
    <div class="our-teams py-5">
        <div class="container position-relative">
            <h3 class="text-primary-d font-weight-bold our-team-heading">Meet the team</h3>
            <div class="row mt-5">
                <!-- Team member -->
                <div class="col-md-6 mt-5">
                    <div class="team-member">
                        <!-- Team member top information -->
                        <div class="member-info d-flex flex-row justify-content-start align-items-center">
                            <div class="avatar">
                                <img src="img/avatar/pexels-photo-262391.jpeg" alt="team_member" class="w-100">
                            </div>
                            <div class="memeber-name-pos ml-3">
                                <h5 class="text-primary-d font-weight-bold text-uppercase">ADRIAAN MARAIN</h5>
                                <h6 class="text-gray font-weight-bold text-uppercase">FRONTEND DEVELOPER</h6>
                            </div>
                        </div>
                        <!-- Team member description -->
                        <div class="team-member-des mt-4 pl-3">
                            <p class="text-secondary">Adriaan's first language is JavaScript. React, Vue, Node.js, anything goes! Rumor has it he was raised by wolves.</p>
                            <a href="#" class="link-color">@adriaanmrn</a>
                        </div>
                    </div>
                </div>
                <!-- Team member -->
                <div class="col-md-6 mt-5">
                    <div class="team-member">
                        <!-- Team member top information -->
                        <div class="member-info d-flex flex-row justify-content-start align-items-center">
                            <div class="avatar">
                                <img src="img/avatar/pexels-photo-415829.jpeg" alt="team_member" class="w-100">
                            </div>
                            <div class="memeber-name-pos ml-3">
                                <h5 class="text-primary-d font-weight-bold text-uppercase">ALEX VANDERBIST</h5>
                                <h6 class="text-gray font-weight-bold text-uppercase">BACKEND DEVELOPER</h6>
                            </div>
                        </div>
                        <!-- Team member description -->
                        <div class="team-member-des mt-4 pl-3">
                            <p class="text-secondary">Alex can throw backend code, servers and hardware in the mix. He's famous for winning the first Laravel blog contest and struggling with Paypal ever since.</p>
                            <a href="#" class="link-color">@alexvanderbist</a>
                            <a href="#" class="link-color">alexvanderbist.com</a>
                        </div>
                    </div>
                </div>
                <!-- Team member -->
                <div class="col-md-6 mt-5">
                    <div class="team-member">
                        <!-- Team member top information -->
                        <div class="member-info d-flex flex-row justify-content-start align-items-center">
                            <div class="avatar">
                                <img src="img/avatar/pexels-photo-542282.jpeg" alt="team_member" class="w-100">
                            </div>
                            <div class="memeber-name-pos ml-3">
                                <h5 class="text-primary-d font-weight-bold text-uppercase">BRENT ROOSE</h5>
                                <h6 class="text-gray font-weight-bold text-uppercase">BACKEND DEVELOPER</h6>
                            </div>
                        </div>
                        <!-- Team member description -->
                        <div class="team-member-des mt-4 pl-3">
                            <p class="text-secondary">Brent has a love for syntax and clean code and showed us how to work in a light theme. Our office has never been so bright.</p>
                            <a href="#" class="link-color">@brendt_gd</a>
                            <a href="#" class="link-color">stitcher.io</a>
                        </div>
                    </div>
                </div>
                <!-- Team member -->
                <div class="col-md-6 mt-5">
                    <div class="team-member">
                        <!-- Team member top information -->
                        <div class="member-info d-flex flex-row justify-content-start align-items-center">
                            <div class="avatar">
                                <img src="img/avatar/pexels-photo-743890.jpeg" alt="team_member" class="w-100">
                            </div>
                            <div class="memeber-name-pos ml-3">
                                <h5 class="text-primary-d font-weight-bold text-uppercase">FREEK VAN DER HERTEN</h5>
                                <h6 class="text-gray font-weight-bold text-uppercase">BACKEND DEVELOPER</h6>
                            </div>
                        </div>
                        <!-- Team member description -->
                        <div class="team-member-des mt-4 pl-3">
                            <p class="text-secondary">Freek is our godfather of backend code. You are not into Laravel if this face doesn't ring a bell to you</p>
                            <a href="#" class="link-color">@freekmurze</a>
                            <a href="#" class="link-color">freek.dev</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End our team section -->
@endsection

@section('footer')
    @include('layouts.partials.footer')
@endsection
