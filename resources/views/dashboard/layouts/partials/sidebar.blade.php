<div class="side-bar side-bar-lg-active" data-theme="purple">
    <!-- Brand details -->
    <div class="side-menu-brand d-flex flex-row justify-content-center clear mt-3">
        <img src="{{ asset('qbytesoft/dashboard/img/QbyteIcon.png') }}" alt="bran_name" class="brand-img">
        <a href="#" class="brand-name mt-2 ml-2 font-weight-bold">Qbytesoft</a>
    </div>
    <!-- Side bar menu -->
    <div class="the_menu mt-5">
        <!-- Heading -->
        <div class="side-menu-heading d-flex">
            <h6 class=" font-weight-bold pb-2 mx-3"> Mr Admin </h6>
            <a href="#" class="font-weight-bold ml-auto px-3">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
        <!-- Menu item -->
        <div id="accordion">
            <ul class="side-menu p-0 m-0 mt-3">
                <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4">Home</a></li>
                <!-- Sub menu parent -->
                <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#sub_menu_1" aria-expanded="false" aria-controls="sub_menu_1">Basic UI Elements</a></li>
                <!-- Sub menu -->
                <div id="sub_menu_1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <ul class="side-sub-menu p-0">
                        <li class="side-sub-menu-item px-3"><a href="" class="w-100 pl-4 small">Alert</a></li>
                        <li class="side-sub-menu-item px-3"><a href="#" class="w-100 pl-4 small">Accordion</a></li>
                    </ul>
                </div>



            </ul>
        </div>
    </div>
</div>
