@extends('layouts.main')

@section('nav')
    @include('layouts.partials.nav')
@endsection

@section('content')
    <!-- The hero section -->
    <div class="about-hero-section py-5">
        <div class="container pt-5 px-lg-5">
            <!-- Hero heading -->
            <h1 class="banner-slogan text-primary-d">Love to hear from you</h1>
            <!-- Address -->
            <div class="row mt-5">
                <div class="col-12 col-md-4 mt-4">
                    <p class="lead-sm m-0"><a target="_blank" href="mailto:info@qbytesoft.com" class="text-decoration-none text-primary-d">info@qbytesoft.com</a></p>
                    <p class="lead-sm m-0"><a target="_blank" href="{{ url('https://twitter.com/intent/tweet?text=Dear+@qbytesoft+...') }}" class="text-decoration-none text-primary-d">@qbytesoft</a></p>
                    <p class="lead-sm m-0"><a href="#" class="text-decoration-none text-primary-d">+8801611032464</a></p>
                </div>
                <div class="col-12 col-md-4 mt-4">
                    <p class="lead-sm m-0"><a href="" class="text-decoration-none text-primary-d">
                            <i class="fas fa-map-marker-alt text-danger-c"></i>
                            218, Shefali Complex, Level-5,<br>3 Begum Rokeya Sarani Shewrapara,<br>Mirpur, Dhaka-1207 </a></p>
                </div>
{{--                <div class="col-12 col-md-4 mt-4">--}}
{{--                    <p class="text-primary-d m-0"><span class="text-gray">VAT</span> BE0809.387.596</p>--}}
{{--                    <p class="text-primary-d m-0"><span class="text-gray">IBAN</span> BE66363127875443</p>--}}
{{--                    <p class="text-primary-d m-0"><span class="text-gray">BIC</span> BBRUBEBB</p>--}}
{{--                </div>--}}
            </div>
            <!-- LATEST INSIGHTS section -->
{{--            <div class="lts-inst pt-5">--}}
{{--                <div class="row mt-5">--}}
{{--                    <!-- Instghts items left -->--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="inst-left pl-3">--}}
{{--                            <h5 class="font-weight-bold text-primary-d">VACANCIES AT SPATIE</h5>--}}
{{--                            <h6 class="font-weight-bold text-danger-c">CURRENTLY LOOKING FOR…</h6>--}}
{{--                            <p class="text-primary-d lead-sm my-4">It's rather full-house at the moment, but why don't you try to squeeze your way in?</p>--}}
{{--                            <a href="#" class="link-color lead-sm">Spontaneous application</a>--}}
{{--                            <p class="text-gray">Antwerp / Partially remote</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Instghts items right -->--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="inst-right pl-3">--}}
{{--                            <h5 class="font-weight-bold text-primary-d">INTERNSHIPS</h5>--}}
{{--                            <h6 class="font-weight-bold text-danger-c">BACKEND OR FRONTEND</h6>--}}
{{--                            <p class="text-primary-d lead-sm my-4">Are you looking to get really good in Laravel, Vue.js, PostCSS or Tailwind? We have slots available for students.</p>--}}
{{--                            <a href="#" class="link-color lead-sm">Apply for an internship</a>--}}
{{--                            <p class="text-gray">Antwerp</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
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
                                <img src="{{ asset('qbytesoft/img/team/profile_shawon.jpg') }}" loading="lazy" alt="team_member" class="w-100">
                            </div>
                            <div class="memeber-name-pos ml-3">
                                <h5 class="text-primary-d font-weight-bold text-uppercase">Md Morshadun Nur</h5>
                                <h6 class="text-gray font-weight-bold text-uppercase">Founder & Shopify Expert</h6>
                                <div class="">

                                    <a target="_blank" href="{{ url('https://twitter.com/morshadun') }}" class="link-color">@morshadun</a>
                                    <a target="_blank" href="{{ url('https://morshadunnur.me') }}" class="link-color">morshadunnur.me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="team-member">
                        <!-- Team member top information -->
                        <div class="member-info d-flex flex-row justify-content-start align-items-center">
                            <div class="avatar">
                                <img src="{{ asset('qbytesoft/img/team/ashik.png') }}" alt="team_member" class="w-100">
                            </div>
                            <div class="memeber-name-pos ml-3">
                                <h5 class="text-primary-d font-weight-bold text-uppercase">Nur Alam Siddik Ashik</h5>
                                <h6 class="text-gray font-weight-bold text-uppercase">Account Manager</h6>
                                </h6>
                            </div>
                        </div>
                        <!-- Team member description -->
                        <div class="team-member-des mt-4 pl-3">

                        </div>
                    </div>
                </div>
                <!-- Team member -->
                <div class="col-md-6 mt-5">
                    <div class="team-member">
                        <!-- Team member top information -->
                        <div class="member-info d-flex flex-row justify-content-start align-items-center">
                            <div class="avatar">
                                <img src="{{ asset('qbytesoft/img/team/sohan.png') }}" loading="lazy"  alt="team_member" class="w-100">
                            </div>
                            <div class="memeber-name-pos ml-3">
                                <h5 class="text-primary-d font-weight-bold text-uppercase">Md Sohanur Rahman</h5>
                                <h6 class="text-gray font-weight-bold text-uppercase">UI Designer</h6>
                            </div>
                        </div>
                        <!-- Team member description -->
                        <div class="team-member-des mt-4 pl-3">
                            <p class="text-secondary"></p>

                        </div>
                    </div>
                </div>
                <!-- Team member -->

                <!-- Team member -->
                <div class="col-md-6 mt-5">
                    <div class="team-member">
                        <!-- Team member top information -->
                        <div class="member-info d-flex flex-row justify-content-start align-items-center">
                            <div class="avatar">
                                <img src="{{ asset('qbytesoft/img/team/masud.png') }}" alt="team_member" class="w-100">
                            </div>
                            <div class="memeber-name-pos ml-3">
                                <h5 class="text-primary-d font-weight-bold text-uppercase">Md. Masudur Rahman</h5>
                                <h6 class="text-gray font-weight-bold text-uppercase">Frontend Developer
                                </h6>
                            </div>
                        </div>
                        <!-- Team member description -->
                        <div class="team-member-des mt-4 pl-3">

                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="team-member">
                        <!-- Team member top information -->
                        <div class="member-info d-flex flex-row justify-content-start align-items-center">
                            <div class="avatar">
                                <img src="{{ asset('qbytesoft/img/team/maruf.png') }}" alt="team_member" class="w-100">
                            </div>
                            <div class="memeber-name-pos ml-3">
                                <h5 class="text-primary-d font-weight-bold text-uppercase">Md. Maruf Ahmed</h5>
                                <h6 class="text-gray font-weight-bold text-uppercase">Shopify Developer
                                </h6>
                            </div>
                        </div>
                        <!-- Team member description -->
                        <div class="team-member-des mt-4 pl-3">

                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="team-member">
                        <!-- Team member top information -->
                        <div class="member-info d-flex flex-row justify-content-start align-items-center">
                            <div class="avatar">
                                <img src="{{ asset('qbytesoft/img/team/profile_millat.jpeg') }}" alt="team_member" class="w-100">
                            </div>
                            <div class="memeber-name-pos ml-3">
                                <h5 class="text-primary-d font-weight-bold text-uppercase">Md. Ahsanul Haque Millat</h5>
                                <h6 class="text-gray font-weight-bold text-uppercase">BACKEND DEVELOPER</h6>
                            </div>
                        </div>
                        <!-- Team member description -->
                        <div class="team-member-des mt-4 pl-3">


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
