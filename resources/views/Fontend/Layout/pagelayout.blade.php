<!DOCTYPE html>
<html xml:lang="en-US" lang="en-US">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Neuron Nursing Coaching</title>
    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/Fontend/stylesheets/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/Fontend/stylesheets/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/Fontend/stylesheets/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/Fontend/stylesheets/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/Fontend/stylesheets/colors/color1.css') }}"
        id="colors">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/Fontend/stylesheets/animate.css') }}">


    <link href="{{ asset('public/Fontend/images/favicon.png') }}" rel="shortcut icon">

</head>

<body class="header-sticky page-loading">
    {{-- <div class="loading-overlay">
    </div> --}}

    <div class="boxed">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="flat-address">
                            <div class="social-links">
                                <a href="">Admission Now</a>
                            </div>
                            <div class="custom-info">
                                <p>০১৭৩০-৫৭৭২৩৬, ০১৭৩০-৫৭৭২৩৬</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-navigator">
                            <ul>
                                <li><a href="{{ route('login') }}">লগইন</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header id="header" class="header clearfix">
            <div class="header-wrap clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="logo" class="logo">
                                <a href="#">
                                    <img src="{{ asset('public/Fontend/images/logo-nnc.png') }}" alt="images">
                                </a>
                            </div>
                            <div class="btn-menu">
                                <span></span>
                            </div>
                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li><a href="{{ URL::to('/') }}" class="">হোম</a></li>
                                        <li class="home">
                                            <a href="">আমাদের সম্পর্কে</a>
                                            <ul class="submenu">
                                                <li><a href="{{ URL::to('about') }}">আমাদের সম্পর্কে</a></li>
                                                <li><a href="{{ URL::to('guide') }}">গাইড</a></li>
                                                <li><a href="{{ URL::to('/') }}">সাফল্যের নেপথ্যে</a></li>
                                                <li><a href="{{ URL::to('/') }}">উপদেষ্টা সংস্থা</a></li>
                                                <li><a href="{{ URL::to('/') }}">মহাপরিচালকের কথা</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="">শাখাসমূহ </a></li>
                                        <li class="home">
                                            <a href="">প্রোগ্রাম সমূহ</a>
                                            <ul class="submenu">
                                                <li><a href="{{ URL::to('bsc') }}">বিএসসি ইন নার্সিং</a></li>
                                                <li><a href="{{ URL::to('diploma') }}">ডিপ্লোমা ইন নার্সিং সায়েন্স এন্ড
                                                        মিডয়াইফারি</a>
                                                </li>
                                                <li><a href="{{ URL::to('diploma_mid') }}">ডিপ্লোমা ইন মিডয়াইফারি </a>
                                                </li>
                                                <li><a href="{{ URL::to('/') }}">পোস্ট বেসিক বিএসসি ইন নার্সিং</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ URL::to('/') }}">সেবা পরিক্রমা</a></li>
                                        <li><a href="{{ URL::to('/') }}">ভর্তি লিংক</a></li>
                                        <li><a href="{{ URL::to('contact') }}">যোগাযোগ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>


        <!-------Main Contend------>

        <div class="flat-row flat-general sidebar-right">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">

                        {{-- page render --}}
                        @yield('contend')



                        <div class="general-sidebar">
                            <div class="sidebar-wrap">
                                <div class="sidebar">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="slider_notice slider_notice_page">
                                                <h3>নোটিশ</h3>

                                                @foreach ($notice as $kye => $item)
                                                    <article class="latest-post" style="margin: 12px 0px;">
                                                        <div class="entry-wrapper clearfix">
                                                            <div class="entry-cover">
                                                                <a href=""><img
                                                                        src="{{ URL::to($item->image) }}"
                                                                        alt="images"></a>
                                                            </div>
                                                            <div class="entry-content-wrap">
                                                                <a href="{{ route('notice', $item->id) }}">
                                                                    <div class="entry-header">
                                                                        <h2 class="entry-title">
                                                                            {{ $item->title }}
                                                                        </h2>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </article>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget widget_nav_menu">
                                        <ul class="nav_menu">
                                            <li class="menu-item">
                                                <a class="" href="">কেনই বা ফোকাস?</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">কিভাবে ভর্তি হবে?</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="leadership-team.htm">অনলাইনে ভর্তি</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <div class="facebook_page" style="overflow: hidden;">
                                                <h4>ফেইসবুক পেজ</h4>
                                                <a href="https://www.facebook.com/groups/317431248900090/"
                                                    target="_blank"><img
                                                        src="{{ asset('public/Fontend/images/photogallary/ncc1.jpg') }}"
                                                        alt="" style="width: 100%"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-------Main Contend------>



        <!---Footer--------->
        <footer class="footer">
            <div class="content-bottom-widgets">
                <div class="container">
                    <div class="row">
                        <div class="flat-wrapper">
                            <div class="ft-wrapper">
                                <div class="footer-70">
                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <div class="custom-info">

                                                <span><i class="fa fa-reply"></i><a href=""
                                                        class="__cf_email__"
                                                        data-cfemail="681c000d050d1b0e04091c280f05090104460b0705"></a>০১৭৩০-৫৭৭২৩৬</span>
                                                <span><i class="fa fa-map-marker"></i>অরিয়েন্টাল লাটিমী শপিং মল, ৩২/২
                                                    মিরপুর রোড, নিউমার্কেট ঢাকা,
                                                </span>
                                                <span><i class="fa fa-phone"></i>০১৭৩০-৫৭৭২৩৬</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-30">
                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <div class="logo-ft"><img
                                                    src="{{ asset('public/Fontend/images/logo-footer.png') }}"
                                                    alt="logo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <p>একমাত্র আমদের কোচিং-ই নার্সিং ভর্তি কোচিং বিভিন্ন বিভাগের স্বনামধন্য
                                        শিক্ষকমণ্ডলীর তত্ত্বাবধানে একঝাঁক মেধাবী শিক্ষার্থীদের সমম্বয়ে গঠিত পরিচালনা
                                        পর্ষদের মাধ্যমে পরিচালিত হয়। ক্লাসের বাহিরে কোন প্রাইভেট পড়ানো হয় না, ক্লাসেই
                                        সকল পাঠদান সম্পন্ন করা হয়। শিক্ষার্থীদের প্রয়োজনের প্রেক্ষিতে ক্লাস সিডিউলের
                                        বাইরে শিক্ষকদের সাথে সরাসরি যোগাযোগের মাধ্যমে লেকচার সংক্রান্ত সমস্যার সমাধান।
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget widget_nav_menu">
                                <div class="menu-footer-menu-container">
                                    <ul class="ft-menu">
                                        <li><a href="">আমাদের সম্পর্কে</a></li>
                                        <li><a href="">শাখাসমূহ</a></li>
                                        <li><a href="">বিশ্ববিদ্যালয় লিংক</a></li>
                                        <li><a href="">নোটিশ</a></li>
                                        <li><a href="">গাইড</a></li>
                                        <li><a href="">নিউজ</a></li>

                                        <li><a href="">গ্যালারি</a></li>
                                        <li><a href="">সাফল্যের নেপথ্যে</a></li>
                                        <li><a href="">কেনই বা ফোকাস?</a></li>
                                        <li><a href="">কিভাবে ভর্তি হবে?</a></li>
                                        <li><a href="">অনলাইনে ভর্তির ফর্ম</a></li>
                                        <li><a href="">যোগাযোগ</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget widget_mc4wp_form_widget">
                                <form class="ft-form">
                                    <p>
                                        <label>Monthly Tips &amp; strategies for accelerating revenue.</label>
                                        <input type="text" name="EMAIL" placeholder="Your email address">
                                    </p>
                                    <p>
                                        <input type="submit" value="Submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/jquery-countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/switcher.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Fontend/javascript/main.js') }}"></script>
</body>


</html>
