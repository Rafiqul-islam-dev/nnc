<div class="layout">
    <!-- Header START -->
    <div class="header">
        <div class="logo logo-dark">
            <a href="#">
                <img src="{{ asset('public/Fontend/images/logo-nnc.png') }}" height="70px" alt="Logo">
                <img class="logo-fold" src="{{ asset('public/Fontend/images/logo-nnc.png') }}" alt="Logo">
            </a>
        </div>
        <div class="logo logo-white">
            <a href="#">
                <img src="{{ asset('public/Fontend/images/logo-nnc.png') }}" alt="Logo">
                <img class="logo-fold" src="{{ asset('public/Fontend/images/logo-nnc.png') }}" alt="Logo">
            </a>
        </div>
        <div class="nav-wrap">
            <ul class="nav-left">
                <li class="desktop-toggle">
                    <a href="javascript:void(0);">
                        <i class="anticon"></i>
                    </a>
                </li>
                <li class="mobile-toggle">
                    <a href="javascript:void(0);">
                        <i class="anticon"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                        <i class="anticon anticon-search"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">

                <li class="dropdown dropdown-animated scale-left">
                    <div class="pointer" data-toggle="dropdown">
                        <div class="avatar avatar-image  m-h-10 m-r-15">
                            <img src="{{ asset('public/Fontend/images/logo-nnc.png') }}" alt="">
                        </div>
                    </div>
                    <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                        <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                            <div class="d-flex m-r-50">
                                <div class="avatar avatar-lg avatar-image">
                                    <img src="{{ asset('public/Fontend/images/logo-nnc.png') }}" alt="">
                                </div>
                                <div class="m-l-10">
                                    <p class="m-b-0 text-dark font-weight-semibold">{{ Auth::user()->name }}</p>
                                    <p class="m-b-0 opacity-07"></p>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="">

                                    <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                    <span class="m-l-10">Logout</span>
                                </div>
                            </a>
                        </form>

                    </div>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">
                        <i class="anticon anticon-appstore"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Header END -->

    <!-- Side Nav START -->
    <div class="side-nav">
        <div class="side-nav-inner">
            <ul class="side-nav-menu scrollable">
                <li class="nav-item dropdown open">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                            <i class="anticon anticon-dashboard"></i>
                        </span>
                        <span class="title">NNC</span>
                        <span class="arrow">
                            <i class="arrow-icon"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="">
                            <a href="{{ URL::to('viewNotice') }}">Notice</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('viewBanner') }}">Banner</a>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>

</div>
