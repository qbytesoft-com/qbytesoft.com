@extends('layouts.main')

@section('nav')
    @include('layouts.partials.nav')
@endsection

@section('content')
     <!-- The hero section -->
    <div class="shopify-hero-section py-5">
        <div class="container pt-5 px-lg-5">
            <!-- Hero heading -->
            <h1 class="banner-slogan text-primary-d m-0">We help companies with  </h1>
            <h1 class="banner-slogan text-primary-d m-0">Shopify design and development</h1>

            <p class="mt-3 text-primary-d lead m-0">As a Shopify agency we are working on client projects, </p>
            <p class="text-primary-d lead m-0">official Shopify Templates and cloneables for the Shopify community.</p>
            <a href="#contact__us " class="btn btn-info text-white mt-4 btn-lg">Contact us</a>
            <!-- Start short description -->
            <div class="srt-des pt-5 my-sm-5">
                <div class="row">
                    <!-- Laravel -->
                    <div class="srt-des-item col-sm-6 position-relative text-left text-sm-right">
                        <!-- Laravel icon -->
                        <div class="srt-des-laravel-icon mb-4 mb-sm-0 d-flex justify-content-center shadow">
                            <img src="{{ asset('qbytesoft/img/laravel.svg') }}" loading="lazy" alt="laravel">
                        </div>
                        <!-- Description -->
                        <h5 class="text-primary-d font-weight-bold text-uppercase">shopify</h5>
                        <p class="text-primary-d lead-sm">
                        
                        Discover seamless  <a href="">Shopify</a> solutions with our service. We specialize in expert  <a href="">Shopify</a> customization, offering a vast selection of  <a href="">Shopify</a> templates and themes to elevate your online store. Maximize functionality with our tailored  <a href="">Shopify</a> apps, ensuring a superior shopping experience for your customers. Unlock the true potential of your e-commerce business with our comprehensive  <a href="">Shopify</a> services.

                        </p>
                    </div>
                    <!-- Vue js and react js -->
                    <div class="srt-des-item col-sm-6 position-relative text-left">
                        <!-- Vue js icon -->
                        <div class="srt-des-vueJs-icon mb-4 mb-sm-0 d-flex justify-content-center shadow">
                            <img src="{{ asset('qbytesoft/img/vuejs.svg') }}" loading="lazy" alt="laravel" >
                        </div>
                        <!-- React js icon -->
                        <div class="srt-des-reactJs-icon mb-4 mb-sm-0 d-flex justify-content-center shadow">
                            <img src="{{ asset('qbytesoft/img/reactjs.svg') }}" loading="lazy" alt="laravel">
                        </div>
                        <!-- Description -->
                        <h5 class="text-primary-d font-weight-bold mt-5 pt-5 mt-sm-0 pt-sm-0 text-uppercase">Custom Shopify themes and apps.</h5>
                        <p class="text-primary-d lead-sm w-100">
                            <!-- <a href="#">Vue.js</a> -->
                             Discover the perfect blend of creativity and functionality with our custom store front design services. Leveraging the power of <a href="#">Shopify</a> Headless and <a href="#">React</a>, we create captivating online shopping experiences tailored to your brand's unique identity. Enhance customer engagement, optimize performance, and unlock new possibilities for your e-commerce business with our innovative and responsive designs.
                            
                            </p>
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
        <div class="row d-flex align-items-center ">
            <div class="col-6">
                <div class="the-content mt-5 pt-sm-5">
                    <h3 class="text-primary-d font-weight-bold mb-4">Our Custom Laravel Services!</h3>
                   
                    <ul class="service_list list-group list-group-flush">
                        <li class="list-group-item text-primary-d lead-sm">
                        <span>
                            <svg width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.94966 7.07127L1.76769 3.8893C1.57243 3.69403 1.25585 3.69403 1.06058 3.8893L0.353478 4.5964C0.158216 4.79167 0.158216 5.10825 0.353478 5.30351L4.59612 9.54615C4.79138 9.74141 5.10796 9.74141 5.30323 9.54615L6.01033 8.83904C6.01129 8.83808 6.01225 8.83712 6.0132 8.83615L13.0814 1.76794C13.2767 1.57267 13.2767 1.25609 13.0814 1.06083L12.3743 0.353722C12.179 0.15846 11.8625 0.15846 11.6672 0.353722L4.94966 7.07127Z"></path>
                            </svg>
                        </span>    
                        Shopify store setup</li>
                        <li class="list-group-item text-primary-d lead-sm">
                            <span>
                            <svg width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.94966 7.07127L1.76769 3.8893C1.57243 3.69403 1.25585 3.69403 1.06058 3.8893L0.353478 4.5964C0.158216 4.79167 0.158216 5.10825 0.353478 5.30351L4.59612 9.54615C4.79138 9.74141 5.10796 9.74141 5.30323 9.54615L6.01033 8.83904C6.01129 8.83808 6.01225 8.83712 6.0132 8.83615L13.0814 1.76794C13.2767 1.57267 13.2767 1.25609 13.0814 1.06083L12.3743 0.353722C12.179 0.15846 11.8625 0.15846 11.6672 0.353722L4.94966 7.07127Z"></path>
                            </svg>
                        </span> 
                        
                        Shopify store development</li>
                        <li class="list-group-item text-primary-d lead-sm">
                            <span>
                            <svg width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.94966 7.07127L1.76769 3.8893C1.57243 3.69403 1.25585 3.69403 1.06058 3.8893L0.353478 4.5964C0.158216 4.79167 0.158216 5.10825 0.353478 5.30351L4.59612 9.54615C4.79138 9.74141 5.10796 9.74141 5.30323 9.54615L6.01033 8.83904C6.01129 8.83808 6.01225 8.83712 6.0132 8.83615L13.0814 1.76794C13.2767 1.57267 13.2767 1.25609 13.0814 1.06083L12.3743 0.353722C12.179 0.15846 11.8625 0.15846 11.6672 0.353722L4.94966 7.07127Z"></path>
                            </svg>
                        </span> 
                        
                        Custom shopify app development</li>
                        <li class="list-group-item text-primary-d lead-sm">
                        
                        <span>
                            <svg width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.94966 7.07127L1.76769 3.8893C1.57243 3.69403 1.25585 3.69403 1.06058 3.8893L0.353478 4.5964C0.158216 4.79167 0.158216 5.10825 0.353478 5.30351L4.59612 9.54615C4.79138 9.74141 5.10796 9.74141 5.30323 9.54615L6.01033 8.83904C6.01129 8.83808 6.01225 8.83712 6.0132 8.83615L13.0814 1.76794C13.2767 1.57267 13.2767 1.25609 13.0814 1.06083L12.3743 0.353722C12.179 0.15846 11.8625 0.15846 11.6672 0.353722L4.94966 7.07127Z"></path>
                            </svg>
                        </span> 
                        Custom store front design (Shopify Headless + React)</li>
                        <li class="list-group-item text-primary-d lead-sm">
                            <span>
                            <svg width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.94966 7.07127L1.76769 3.8893C1.57243 3.69403 1.25585 3.69403 1.06058 3.8893L0.353478 4.5964C0.158216 4.79167 0.158216 5.10825 0.353478 5.30351L4.59612 9.54615C4.79138 9.74141 5.10796 9.74141 5.30323 9.54615L6.01033 8.83904C6.01129 8.83808 6.01225 8.83712 6.0132 8.83615L13.0814 1.76794C13.2767 1.57267 13.2767 1.25609 13.0814 1.06083L12.3743 0.353722C12.179 0.15846 11.8625 0.15846 11.6672 0.353722L4.94966 7.07127Z"></path>
                            </svg>
                        </span> 
                        
                        Shopify SEO and speed optimization</li>
                        <li class="list-group-item text-primary-d lead-sm">
                            <span>
                            <svg width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.94966 7.07127L1.76769 3.8893C1.57243 3.69403 1.25585 3.69403 1.06058 3.8893L0.353478 4.5964C0.158216 4.79167 0.158216 5.10825 0.353478 5.30351L4.59612 9.54615C4.79138 9.74141 5.10796 9.74141 5.30323 9.54615L6.01033 8.83904C6.01129 8.83808 6.01225 8.83712 6.0132 8.83615L13.0814 1.76794C13.2767 1.57267 13.2767 1.25609 13.0814 1.06083L12.3743 0.353722C12.179 0.15846 11.8625 0.15846 11.6672 0.353722L4.94966 7.07127Z"></path>
                            </svg>
                        </span> 
                        
                        Figma design to shopify development</li>
                        <li class="list-group-item text-primary-d lead-sm">
                            <span>
                            <svg width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.94966 7.07127L1.76769 3.8893C1.57243 3.69403 1.25585 3.69403 1.06058 3.8893L0.353478 4.5964C0.158216 4.79167 0.158216 5.10825 0.353478 5.30351L4.59612 9.54615C4.79138 9.74141 5.10796 9.74141 5.30323 9.54615L6.01033 8.83904C6.01129 8.83808 6.01225 8.83712 6.0132 8.83615L13.0814 1.76794C13.2767 1.57267 13.2767 1.25609 13.0814 1.06083L12.3743 0.353722C12.179 0.15846 11.8625 0.15846 11.6672 0.353722L4.94966 7.07127Z"></path>
                            </svg>
                        </span> 
                        
                        Shopify Theme Customization</li>
                        <li class="list-group-item text-primary-d lead-sm">
                            <span>
                            <svg width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.94966 7.07127L1.76769 3.8893C1.57243 3.69403 1.25585 3.69403 1.06058 3.8893L0.353478 4.5964C0.158216 4.79167 0.158216 5.10825 0.353478 5.30351L4.59612 9.54615C4.79138 9.74141 5.10796 9.74141 5.30323 9.54615L6.01033 8.83904C6.01129 8.83808 6.01225 8.83712 6.0132 8.83615L13.0814 1.76794C13.2767 1.57267 13.2767 1.25609 13.0814 1.06083L12.3743 0.353722C12.179 0.15846 11.8625 0.15846 11.6672 0.353722L4.94966 7.07127Z"></path>
                            </svg>
                        </span> 
                        
                        Shopify Store Migration</li>
                        <li class="list-group-item text-primary-d lead-sm">
                            <span>
                            <svg width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.94966 7.07127L1.76769 3.8893C1.57243 3.69403 1.25585 3.69403 1.06058 3.8893L0.353478 4.5964C0.158216 4.79167 0.158216 5.10825 0.353478 5.30351L4.59612 9.54615C4.79138 9.74141 5.10796 9.74141 5.30323 9.54615L6.01033 8.83904C6.01129 8.83808 6.01225 8.83712 6.0132 8.83615L13.0814 1.76794C13.2767 1.57267 13.2767 1.25609 13.0814 1.06083L12.3743 0.353722C12.179 0.15846 11.8625 0.15846 11.6672 0.353722L4.94966 7.07127Z"></path>
                            </svg>
                        </span> 
                        
                        Shopify Store Management</li>
                        <li class="list-group-item text-primary-d lead-sm">
                            <span>
                            <svg width="14" height="10" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.94966 7.07127L1.76769 3.8893C1.57243 3.69403 1.25585 3.69403 1.06058 3.8893L0.353478 4.5964C0.158216 4.79167 0.158216 5.10825 0.353478 5.30351L4.59612 9.54615C4.79138 9.74141 5.10796 9.74141 5.30323 9.54615L6.01033 8.83904C6.01129 8.83808 6.01225 8.83712 6.0132 8.83615L13.0814 1.76794C13.2767 1.57267 13.2767 1.25609 13.0814 1.06083L12.3743 0.353722C12.179 0.15846 11.8625 0.15846 11.6672 0.353722L4.94966 7.07127Z"></path>
                            </svg>
                        </span> 
                        
                        Shopify Store Performance Optimization</li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="promo-laravel">
                    <img src="{{ asset('qbytesoft/img/cover/laravel.svg') }}" loading="lazy" alt="Promotion">
                </div>
            </div>
        </div>

        <!-- Proof section -->
        <div class="learn-more my-5 p-5 d-flex flex-column flex-sm-row justify-content-between align-items-center">
            <h1 class="text-primary-d font-weight-bold">Need proof?</h1>

            <ul class="p-0 m-0 mt-4 mt-sm-0">
                <!-- List item -->
                <li class="list-style-none">
                    <p class="lead-sm shopify">
                        <i class="fas fa-chevron-right  fa-xs"></i>
                        <a href="#" class="text-primary-d">Our open source work</a>
                    </p>
                </li>
                <!-- List item -->
                <li class="list-style-none">
                    <p class="lead-sm shopify">
                        <i class="fas fa-chevron-right  fa-xs"></i>
                        <a href="#" class="text-primary-d">Top ranking on GitHub</a>
                    </p>
                </li>
                <!-- List item -->
                <li class="list-style-none">
                    <p class="lead-sm shopify">
                        <i class="fas fa-chevron-right  fa-xs"></i>
                        <a href="#" class="text-primary-d">A skilled team</a>
                    </p>
                </li>
            </ul>

        </div>
        <!-- End proof section -->

        <!-- contact us section START  -->
        <div id="contact__us" class=" row d-flex align-items-center">
            <div class="col-md-7">
                <div class="contact__us">
                    <h3 class="text-primary-d font-weight-bold mb-4">Top-Rated Shopify Plus Development Company</h3>
                    <p>Are you looking for a&nbsp;<strong>Shopify  store development company to build an online store?</strong><br><br>We are a&nbsp;<strong>top Shopify  development agency</strong>&nbsp;with&nbsp;<strong>world-class Shopify  developers.</strong> Our trusted&nbsp;<strong>Shopify  developers</strong>&nbsp;excel in providing client-focused online Shopify stores that can generate large volume eCommerce business for you.</p>
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
                            
                                <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact us section END  -->

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