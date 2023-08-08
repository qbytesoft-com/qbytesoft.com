@extends('layouts.main')

@section('nav')
    @include('layouts.partials.nav')
@endsection

@section('content')
    <!-- The hero section -->
    <div class="web-dev-hero-section py-5">
        <div class="container pt-5 px-lg-5">
            <!-- Hero heading -->
            <h1 class="banner-slogan text-primary-d m-0">Tailor-made</h1>
            <h1 class="banner-slogan text-primary-d m-0">is achievable</h1>

            <p class="mt-3 text-primary-d lead m-0">let's check our shopify products</p>

            <a href="#contact__us " class="btn btn-info text-white mt-4 btn-lg">Contact us</a>
            
            <!-- Our strength start -->
            <div class="our-strength mt-5 pt-sm-5">
                <!-- <h3 class="text-primary-d font-weight-bold mb-4">Our strength</h3> -->
                <p class="text-primary-d lead-sm">Connect your customer using Facebook Messenger Chat. Good support can help increase product sales.</p>

                <p class="text-primary-d lead-sm">Connect your Facebook Page's Messenger with just a few clicks.</p>
                <p class="text-primary-d lead-sm">Engage with your customers instantly, and address their concerns.</p>
                <p class="text-primary-d lead-sm">Real time Facebook Messenger Bubble customization using native configuration.</p>
            </div>
            <!-- Our strength End -->
        </div>
    </div>
    <!-- End hero section -->
    <div class="container">
        <!-- All content -->
        <div class="the-content mt-5">

            <!-- Start how we work section -->
            <div class="how-we-work">
                <h3 class="text-primary-d font-weight-bold mb-4">How it works</h3>
                <div class="row mt-5">
                    <!-- Working step1 -->
                    <div class="col-sm-6 col-lg-4 mt-3 mt-lg-0">
                        <div class="work-step">
                            <h4 class="text-primary-d font-weight-bold text-uppercase">1. STEP BACK</h4>
                            <p class="text-primary-d">It doesn't hurt to get a second opinion. If we question everything we might be able to re(de)fine your situation.</p>
                        </div>
                    </div>
                    <!-- Process1 -->
                    <div class="col-sm-6 col-md-8 position-relative d-none d-lg-block">
                        <div class="work-process1 position-absolute">
                            <img src="{{ asset('qbytesoft/img/process-01.svg') }}" loading="lazy" alt="process1" class="w-100">
                        </div>
                    </div>
                    <!-- Working step2 -->
                    <div class="col-sm-6 col-lg-4 d-none d-lg-block"></div>
                    <div class="col-sm-6 col-lg-4 mt-3 mt-lg-5">
                        <div class="work-step">
                            <h4 class="text-primary-d font-weight-bold text-uppercase">2. LOOK AROUND</h4>
                            <p class="text-primary-d">A lot has been done before. We really need to look at other examples, opinions & competitors to understand what makes them great.</p>
                        </div>
                    </div>
                    <!-- Process2 -->
                    <div class="col-sm-6 col-lg-4 d-none d-lg-block"></div>
                    <div class="col-sm-6 col-md-8 position-relative d-none d-lg-block">
                        <div class="work-process2 position-absolute">
                            <img src="{{ asset('qbytesoft/img/process-02.svg') }}" alt="process2" class="w-100">
                        </div>
                    </div>
                    <!-- Working step3 -->
                    <div class="col-sm-6 col-lg-4 mt-3 mt-lg-5">
                        <div class="work-step">
                            <h4 class="text-primary-d font-weight-bold text-uppercase">3. TAKE A STAND</h4>
                            <p class="text-primary-d">What will be your unique voice? Let's focus on your content and core functionality first, and start from there.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-none d-lg-block"></div>
                    <!-- Working step4 -->
                    <div class="col-sm-6 col-lg-4 mt-3 mt-lg-5">
                        <div class="work-step">
                            <h4 class="text-primary-d font-weight-bold text-uppercase">4. WRITE IT DOWN</h4>
                            <p class="text-primary-d">We'd have to agree on what to build exactly. We blueprint every screen and propose our technical solution. Your feedback only makes these better.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-none d-lg-block"></div>
                    <!-- Working step5 -->
                    <div class="col-sm-6 col-lg-4 mt-3 mt-lg-5">
                        <div class="work-step">
                            <h4 class="text-primary-d font-weight-bold text-uppercase">5. BUILD WITH SENSE</h4>
                            <p class="text-primary-d">With the plans laid out, we design a tasteful but functional interface. In the back, we code with modern best practices in PHP development.</p>
                        </div>
                    </div>
                    <!-- Process3 -->
                    <div class="col-sm-6 col-md-8 position-relative d-none d-lg-block">
                        <div class="work-process3 position-absolute">
                            <img src="{{ asset('qbytesoft/img/process-03.svg') }}" loading="lazy" alt="process3" class="w-100">
                        </div>
                    </div>
                    <!-- Process4 -->
                    <div class="col-sm-6 col-lg-4 position-relative d-none d-lg-block">
                        <div class="work-process4 position-absolute">
                            <img src="{{ asset('qbytesoft/img/process-04.svg') }}" loading="lazy" alt="process4" class="w-100">
                        </div>
                    </div>
                    <!-- Working step6 -->
                    <div class="col-sm-6 col-lg-4 mt-3 mt-lg-5">
                        <div class="work-step">
                            <h4 class="text-primary-d font-weight-bold text-uppercase">6. TEST IT THROUGH</h4>
                            <p class="text-primary-d">Things are starting to come together. Let's make sure that nothing breaks or slows down. Let's check all devices and circumstances.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-none d-lg-block"></div>
                    <!-- Working step7 -->
                    <div class="col-sm-6 col-lg-4 mt-3 mt-lg-5 position-relative">
                        <div class="work-process6 position-absolute d-none d-lg-block">
                            <img src="{{ asset('qbytesoft/img/process-06.svg') }}" loading="lazy" alt="process6" class="w-100">
                        </div>
                        <div class="work-step">
                            <h4 class="text-primary-d font-weight-bold text-uppercase">7. FOLLOW UP</h4>
                            <p class="text-primary-d">Accuse us of job protection, but our most successful projects are never finished. Maintenance and further improvements are key for any online project.</p>
                        </div>
                    </div>
                    <!-- Process5 -->
                    <div class="col-sm-6 col-md-8 position-relative d-none d-lg-block">
                        <div class="work-process5 position-absolute">
                            <img src="{{ asset('qbytesoft/img/process-05.svg') }}" loading="lazy" alt="process5" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End how we work section -->

            <!-- Banner start -->
            <div class="banner-card my-5 p-5 d-flex flex-lg-row flex-column justify-content-lg-between align-items-lg-center">
                <h4 class="text-light">Do you think this approach<br>would fit you?</h4>
                <h1 class="text-light font-weight-bold">It's <a href="#" class="text-light">time to talk</a></h1>
            </div>
            <!-- Banner end -->
        <!-- contact us section START  -->
        <div id="contact__us" class=" row d-flex align-items-center">
            <div class="col-md-7">
                <div class="contact__us">
                    <h3 class="text-primary-d font-weight-bold mb-4">Looking for the right solution for a new business?</h3>
               

                    <p> <strong>Laravel</strong> is built on a component-based system and composer-driven approach. It is suitable for both monolithic and micro-services apps (Lumen). <strong>Laravel</strong> is highly suitable for any kind of business application from <strong>eCommerce</strong> to <strong>CRM software</strong> , from CMS to <strong>SaaS-based</strong> apps. Loads of packages are inbuilt in the core of <strong>Laravel</strong> that makes development lighting fast and easy to scale.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title text-primary-d font-weight-bold mb-4 text-center text-monospace font-weight-bold">Let us engage in a discussion regarding your project</h5>
                        
                        <form>
                            <div class="form-group">
                                <label for="full-name">Your Name </label>
                                <input type="text" class="form-control" id="full-name" aria-describedby="name" placeholder="Enter your Nname">
                            </div>
                            <div class="form-group">
                                <label for="phone-number">Your Phone Number</label>
                                <input type="tel" class="form-control" id="phone-number"  placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Email address</label>
                                <input type="email" class="form-control" id="emailAddress" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="messageArea">Your message</label>
                                <textarea class="form-control" placeholder="Message" id="messageArea" rows="3"></textarea>
                            </div>
                            
                                <button type="submit" class="btn btn-info text-white">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact us section END  -->

        </div>
    </div>
    <!-- Our clients -->
    <div class="our-clients py-5">
        <div class="container position-relative">
            <h3 class="text-primary-d font-weight-bold our-clients-heading">Some of our clients</h3>
            <div class="lts-inst">
                <div class="row mt-5">
                    <!-- CORPORATE clients -->
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="inst-left pl-3">
                            <h5 class="font-weight-bold text-primary-d mb-4">CORPORATE</h5>
                            <!-- Client -->
                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Agrafa</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Onsite apps for banner distribution</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>ArtAssistant</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Art transaction platform</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Bodart Service House</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Webshop for kitchen appliances</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>HP Engineers</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Portfolio of engineering company</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Krauthammer</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Tools for management trainings</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Mutsy</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Site for high-end Dutch strollers</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- PUBLIC Clients -->
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="inst-left pl-3">
                            <h5 class="font-weight-bold text-primary-d mb-4">PUBLIC</h5>
                            <!-- Client -->
                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Court of Brussels</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Daily status board and notifications for lawyers</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>City of Hemiksem</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Communal website</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Flux50</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Smart energy consortium</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Vluchtelingenwerk Vlaanderen</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Interactive exhibition timeline</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Vrijwilligerswerk Vlaanderen  </h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Job platform for volunteers</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- CREATIVE Clients -->
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="inst-left pl-3">
                            <h5 class="font-weight-bold text-primary-d mb-4">CREATIVE</h5>
                            <!-- Client -->
                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Bulk architects</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Portfolio site</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Martin Garrix</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Workflow tool for the DJ himself</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>META architects</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Portfolio site/p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Overleg Kunstenorganisaties</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Portfolio site</p>
                                </div>
                            </div>

                            <div class="inst-item mt-3">
                                <a href="#" class="text-decoration-none text-primary-d"><h5>Wim Delvoye</h5></a>
                                <div class="d-flex flex-row justify-content-start">
                                    <p class="text-gray m-0">Famous artist's portfolio</p>
                                </div>
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
