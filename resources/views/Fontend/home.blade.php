@extends('Fontend.Layout.master')

@section('contend')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="tp-banner-container">
                        <div class="tp-banner">
                            <ul>
                                @foreach ($banner as $kye => $item)
                                    <li class="slider_img" data-transition="random-static" data-slotamount="7"
                                        data-masterspeed="1000" data-saveperformance="on">
                                        <img src="{{ URL::to($item->image) }}"
                                            alt="slider-image" />

                                    </li>
                                @endforeach
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="slider_notice">
                        <h3>নোটিশ</h3>

                        @foreach ($notice as $kye => $item)
                            <article class="latest-post" style="margin: 12px 0px;">
                                <div class="entry-wrapper clearfix">
                                    <div class="entry-cover">
                                        <a href=""><img src="{{ URL::to($item->image) }}" alt="images"></a>
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
                    </article>

                </div>
            </div>
        </div>
    </section>


    <div class="flat-row pad-top40px pad-bottom40px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="no-margin-top no-margin-bottom admission-top f-size16px "> <i class="fa fa-quote-left"></i>
                        ২০২২-২৩ সেশনে
                        এককালীন বিশেষ ছাড়ে ভর্তি চলছে <i class="fa fa-quote-right"></i> </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flat-row pad-top0px">
        <div class="container">
            <div class="row">
                <div class="flat-wrapper">
                    <div class="flat-imagebox clearfix">
                        <div class="item-three-column">
                            <div class="imagebox">
                                <div class="box-wrapper">
                                    <div class="box-image">
                                        <img src="{{ asset('public/Fontend/images/slides/ncc3.jpg') }}" alt="images">
                                    </div>
                                    <div class="box-header">
                                        <h5 class="box-title">
                                            <a href="services-detail.html">আমাদের সম্পর্কে </a>
                                        </h5>
                                    </div>
                                    <div class="box-content">
                                        <div class="box-desc">বিশ্ববিদ্যালয়ের বিভিন্ন বিভাগের স্বনামধন্য শিক্ষকমণ্ডলীর
                                            তত্ত্বাবধানে একঝাঁক মেধাবী শিক্ষার্থীদের সমম্বয়ে গঠিত পরিচালনা পর্ষদের…</div>
                                        <a class="button style1" href="services-detail.html">আরো দেখুন</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column">
                            <div class="imagebox">
                                <div class="box-wrapper">
                                    <div class="box-image">
                                        <img src="{{ asset('public/Fontend/images/slides/ncc2.jpg') }}" alt="images">
                                    </div>
                                    <div class="box-header">
                                        <h5 class="box-title">
                                            <a href="services-detail-v1.html">কেন ভর্তি হবে? </a>
                                        </h5>
                                    </div>
                                    <div class="box-content">
                                        <div class="box-desc">বিশ্ববিদ্যালয়ের বিভিন্ন বিভাগের স্বনামধন্য শিক্ষকমণ্ডলীর
                                            তত্ত্বাবধানে একঝাঁক মেধাবী শিক্ষার্থীদের সমম্বয়ে গঠিত পরিচালনা পর্ষদের…</div>
                                        <a class="button style1" href="services-detail-v1.html">আরো দেখুন</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column">
                            <div class="imagebox">
                                <div class="box-wrapper">
                                    <div class="box-image">
                                        <img src="{{ asset('public/Fontend/images/slides/ncc6.jpg') }}" alt="images">
                                    </div>
                                    <div class="box-header">
                                        <h5 class="box-title">
                                            <a href="services-detail-v2.html">ভর্তির নিয়মাবলী</a>
                                        </h5>
                                    </div>
                                    <div class="box-content">
                                        <div class="box-desc">বিশ্ববিদ্যালয়ের বিভিন্ন বিভাগের স্বনামধন্য শিক্ষকমণ্ডলীর
                                            তত্ত্বাবধানে একঝাঁক মেধাবী শিক্ষার্থীদের সমম্বয়ে গঠিত পরিচালনা পর্ষদের…</div>
                                        <a class="button style1" href="services-detail-v2.html">আরো দেখুন</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="flat-row background-f1f2f8 pad-bottom40px">
        <div class="container">
            <div class="row">
                <div class="flat-wrapper">
                    <div class="flat-title-button">
                        <h3 class="title"><i class="fa fa-line-chart"></i>আমাদের প্রোগ্রাম সমূহ</h3>
                        <p><a class="button sm" href="http://focusbd.info/coaching/pages/organizing_us">আমাদের আয়োজন
                                দেখুন</a></p>
                    </div>
                </div>
                <!-- /.flat-wrapper -->
            </div>
            <!-- /.row -->
            <div class="flat-divider d30px"></div>
            <div class="row">
                <div class="flat-wrapper">
                    <div class="flat-iconbox clearfix">
                        <div class="item-three-column">
                            <div class="course_div">
                                <div class="course_img">
                                    <img src="{{ asset('public/Fontend/images/photogallary/ncc2.jpg') }}" alt="">
                                </div>
                                <div class="course_text">
                                    <h3>বিএসসি ইন নার্সিং </h3>
                                    <ul>
                                        <li><i class="fas fa-circle"></i>মেধাবী ও অভিজ্ঞ শিক্ষক দ্বারা ক্লাস</li>
                                        <li><i class="fas fa-circle"></i>এক্সাম সিস্টেমে সকল পরীক্ষা</li>
                                        <li><i class="fas fa-circle"></i>মানসম্মত সকল স্টাডি ম্যাটেরিয়ালস</li>
                                        <li><i class="fas fa-circle"></i>দেশব্যাপী সকল শাখায় সমান সেবা</li>
                                    </ul>
                                </div>
                                <div class="course_button">
                                    <a href="" class="button_bg_one">Details/Routine</a>
                                    <a href="">Enroll Now</a>
                                </div>
                            </div>
                            <!-- /.iconbox -->
                        </div>
                        <!-- /.item-three-column -->
                        <div class="item-three-column">
                            <div class="course_div">
                                <div class="course_img">
                                    <img src="{{ asset('public/Fontend/images/photogallary/ncc3.jpg') }}" alt="">
                                </div>
                                <div class="course_text">
                                    <h3 class="diplomasize">ডিপ্লোমা ইন নার্সিং সায়েন্স এন্ড মিডয়াইফারি </h3>
                                    <ul>

                                        <li><i class="fas fa-circle"></i>মেধাবী ও অভিজ্ঞ শিক্ষক দ্বারা ক্লাস</li>
                                        <li><i class="fas fa-circle"></i>এক্সাম সিস্টেমে সকল পরীক্ষা</li>
                                        <li><i class="fas fa-circle"></i>মানসম্মত সকল স্টাডি ম্যাটেরিয়ালস</li>
                                        <li><i class="fas fa-circle"></i>দেশব্যাপী সকল শাখায় সমান সেবা</li>
                                    </ul>
                                </div>
                                <div class="course_button">
                                    <a href="" class="button_bg_one">Details/Routine</a>
                                    <a href="">Enroll Now</a>
                                </div>
                            </div>
                            <!-- /.iconbox -->
                        </div>
                        <!-- /.item-three-column -->
                        <div class="item-three-column">
                            <div class="course_div">
                                <div class="course_img">
                                    <img src="{{ asset('public/Fontend/images/photogallary/ncc6.jpg') }}" alt="">
                                </div>
                                <div class="course_text">
                                    <h3> ডিপ্লোমা ইন মিডয়াইফারি </h3>
                                    <ul>

                                        <li><i class="fas fa-circle"></i>মেধাবী ও অভিজ্ঞ শিক্ষক দ্বারা ক্লাস</li>
                                        <li><i class="fas fa-circle"></i>এক্সাম সিস্টেমে সকল পরীক্ষা</li>
                                        <li><i class="fas fa-circle"></i>মানসম্মত সকল স্টাডি ম্যাটেরিয়ালস</li>
                                        <li><i class="fas fa-circle"></i>দেশব্যাপী সকল শাখায় সমান সেবা</li>
                                    </ul>
                                </div>
                                <div class="course_button">
                                    <a href="" class="button_bg_one">Details/Routine</a>
                                    <a href="">Enroll Now</a>
                                </div>
                            </div>
                            <!-- /.iconbox -->
                        </div>
                        <!-- /.item-three-column -->
                        <div class="item-three-column">
                            <div class="course_div">
                                <div class="course_img">
                                    <img src="{{ asset('public/Fontend/images/photogallary/ncc7.jpg') }}" alt="">
                                </div>
                                <div class="course_text">
                                    <h3> পোস্ট বেসিক বিএসসি ইন নার্সিং </h3>
                                    <ul>

                                        <li><i class="fas fa-circle"></i>মেধাবী ও অভিজ্ঞ শিক্ষক দ্বারা ক্লাস</li>
                                        <li><i class="fas fa-circle"></i>এক্সাম সিস্টেমে সকল পরীক্ষা</li>
                                        <li><i class="fas fa-circle"></i>মানসম্মত সকল স্টাডি ম্যাটেরিয়ালস</li>
                                        <li><i class="fas fa-circle"></i>দেশব্যাপী সকল শাখায় সমান সেবা</li>
                                    </ul>
                                </div>
                                <div class="course_button">
                                    <a href="" class="button_bg_one">Details/Routine</a>
                                    <a href="">Enroll Now</a>
                                </div>
                            </div>
                            <!-- /.iconbox -->
                        </div>
                        <!-- /.item-three-column -->
                        <div class="item-three-column">
                            <div class="course_div">
                                <div class="course_img">
                                    <img src="{{ asset('public/Fontend/images/photogallary/ncc8.jpg') }}" alt="">
                                </div>
                                <div class="course_text">
                                    <h3>বিএসসি ইন নার্সিং </h3>
                                    <ul>

                                        <li><i class="fas fa-circle"></i>মেধাবী ও অভিজ্ঞ শিক্ষক দ্বারা ক্লাস</li>
                                        <li><i class="fas fa-circle"></i>এক্সাম সিস্টেমে সকল পরীক্ষা</li>
                                        <li><i class="fas fa-circle"></i>মানসম্মত সকল স্টাডি ম্যাটেরিয়ালস</li>
                                        <li><i class="fas fa-circle"></i>দেশব্যাপী সকল শাখায় সমান সেবা</li>
                                    </ul>
                                </div>
                                <div class="course_button">
                                    <a href="" class="button_bg_one">Details/Routine</a>
                                    <a href="">Enroll Now</a>
                                </div>
                            </div>
                            <!-- /.iconbox -->
                        </div>
                        <!-- /.item-three-column -->
                        <div class="item-three-column">
                            <div class="course_div">
                                <div class="course_img">
                                    <img src="{{ asset('public/Fontend/images/photogallary/ncc1.jpg') }}" alt="">
                                </div>
                                <div class="course_text">
                                    <h3> ডিপ্লোমা ইন মিডয়াইফারি </h3>
                                    <ul>

                                        <li><i class="fas fa-circle"></i>মেধাবী ও অভিজ্ঞ শিক্ষক দ্বারা ক্লাস</li>
                                        <li><i class="fas fa-circle"></i>এক্সাম সিস্টেমে সকল পরীক্ষা</li>
                                        <li><i class="fas fa-circle"></i>মানসম্মত সকল স্টাডি ম্যাটেরিয়ালস</li>
                                        <li><i class="fas fa-circle"></i>দেশব্যাপী সকল শাখায় সমান সেবা</li>
                                    </ul>
                                </div>
                                <div class="course_button">
                                    <a href="" class="button_bg_one">Details/Routine</a>
                                    <a href="">Enroll Now</a>
                                </div>
                            </div>
                            <!-- /.iconbox -->
                        </div>
                        <!-- /.item-three-column -->

                    </div>
                    <!-- /.flat-iconbox -->
                </div>
                <!-- /.flat-wrapper -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>


    <div class="flat-row pad-bottom0px background-20242e">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-section style1">
                        <h3 class="title"><span>আমাদের সময়োচিত পরিকল্পনা </span></h3>
                    </div>

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="list-about" role="tab" id="headingOne">
                                <h4><a role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"
                                        class="collapsed"><span><i class="fa fa-check border"></i>ক্লাস লেকচার</span>
                                    </a></h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                <p><span>প্রতিটি ক্লাস বিস্তৃত তথ্য সমৃদ্ধ Lecture Sheet প্রদানের পর সেই Lecture Sheet এর
                                        ভিত্তিতে লেকচার প্রদান এবং আনুষাঙ্গিক সকল বিষয়ের আলোকপাত। এছাড়া লেকচার সংশ্লিষ্ট
                                        অধ্যায়গুলো থেকে ঢাকা বিশ্ববিদ্যালয় সহ অন্যান্য বিশ্ববিদ্যালয়ের বিগত বছরগুলোর ভর্তি
                                        পরীক্ষার প্রশ্ন আলোচনা ও সমাধান এবং উল্লিখিত অধ্যয়গুলো সামপ্রতিক পরিবর্তন বিশ্লেষণ।
                                    </span></p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="list-about" role="tab" id="headingtwo">
                                <h4><a role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo"
                                        class="collapsed"><span><i class="fa fa-check border"></i>সল্ভ ক্লাস</span>
                                    </a></h4>
                            </div>
                            <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingtwo" aria-expanded="false">
                                <p><span> প্রতিদিনের পরীক্ষা শেষে বিশেষ সমস্যাগুলো যত্নের সাথে সমাধান করে দেওয়া হয়। এছাড়াও
                                        প্রতি ৩ লেকচার পরপর এবং প্রতিটি Subject Final ও Model Test এর পর বিশেষ Solve Class
                                        এর ব্যবস্থা করা হয়। সকল বিষয়ের মৌলিক ধারনা পরিষ্কার করাই এর মূল উদ্দেশ্য। Class Test
                                        প্রতিটি ক্লাস শুরু হওয়ার পূর্বে পূর্ববর্তী Lecture Content এর উপর ভিত্তি করে
                                        বিশ্ববিদ্যালয় ভর্তি পরীক্ষার প্রশ্নের আলোকে ৩০ নম্বরের পরীক্ষা।</span></p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="list-about" role="tab" id="headinghthree">
                                <h4><a role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapsethree" aria-expanded="false" aria-controls="collapsethree"
                                        class="collapsed"><span><i class="fa fa-check border"></i>মডেল টেস্ট</span>
                                    </a></h4>
                            </div>
                            <div id="collapsethree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingthree" aria-expanded="false">
                                <p><span>অন্যান্য কোচিং এর মতো গতানুগতিক মডেল টেস্ট থেকে সম্পূর্ণ ভিন্ন আঙ্গিকে ঢাকা
                                        বিশ্ববিদ্যালয় ভর্তি পরীক্ষার সর্বশেষ প্রশ্ন Pattern এর সাথে সঙ্গতি রেখে প্রতিটি ১২০
                                        মডেল টেস্ট। পরিস্থিতি বিবেচনায় বিশ্ববিদ্যালয় ভর্তি পরীক্ষার পূর্ব পর্যন্ত চলবে।
                                    </span></p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="list-about" role="tab" id="headingfour">
                                <h4><a role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapsefour" aria-expanded="false" aria-controls="collapsefour"
                                        class="collapsed"><span><i class="fa fa-check border"></i>প্রশ্ন পর্যালোচনা</span>
                                    </a></h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingfour" aria-expanded="false">
                                <p><span>লেকচার সংশ্লিষ্ট অধ্যায়গুলো থেকে বিগত বছরগুলোর ভর্তি পরীক্ষার আগত প্রশ্নের ধরণ ও
                                        পরিবর্তন আলোচনা এবং সর্বশেষ প্রশ্ন Pattern এর আলোকে সাম্প্রতিক বিশ্লেষণ। </span></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.list-about -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="title-section style1">
                        <h3 class="title"><span>সফলতার গল্প</span></h3>
                    </div>
                    <div class="flat-divider d30px"></div>
                    <div class="flat-video-fancybox">
                        <a class="fancybox" data-type="iframe" href="https://youtu.be/LiaEycynbck">
                            <img src="{{ asset('public/Fontend/images/photogallary/ncc1.jpg') }}" alt="images">
                        </a>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
            <div class="flat-divider d50px"></div>
            <!-- /.clients-image -->
        </div>
        <!-- /.container -->
    </div>

    <!-----success---------->
    <section class="couter_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="counter_header">
                        <h3>আমাদের সাফল্যে গাঁথা</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="counter_div">
                        <div class="counter_icon counter_bg_one">
                            <img src="http://focusbd.info/front_end_assets/images/bar-chart.png" alt="">
                            <p>২০০৫</p>
                        </div>
                        <div class="couter_number counter">
                            <span class="numb-count" data-to="1520" data-speed="3000"
                                data-waypoint-active="yes">1520</span>+
                        </div>
                        <div class="couter_text">
                            <p>২০০৫ সালে নার্সিং ভর্তি পরীক্ষায় ভর্তি পরীক্ষায় নিউরন নার্সিং কোচিং থেকে প্রথম ১০ এ ০৯ জন সহ
                                সর্বমোট ১৫২০+ শিক্ষার্থীর ঈর্ষণীয় সাফল্য!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="counter_div">
                        <div class="counter_icon counter_bg_two">
                            <img src="http://focusbd.info/front_end_assets/images/bar-chart.png" alt="">
                            <p>২০২১</p>
                        </div>
                        <div class="couter_number counter">
                            <span class="numb-count" data-to="1220" data-speed="3000"
                                data-waypoint-active="yes">1220</span>+
                        </div>
                        <div class="couter_text">
                            <p>২০০৫ সালে নার্সিং ভর্তি পরীক্ষায় ভর্তি পরীক্ষায় নিউরন নার্সিং কোচিং থেকে প্রথম ১০ এ ০৯ জন সহ
                                সর্বমোট ২০২০+ শিক্ষার্থীর ঈর্ষণীয় সাফল্য!২</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="counter_div">
                        <div class="counter_icon counter_bg_three">
                            <img src="http://focusbd.info/front_end_assets/images/bar-chart.png" alt="">
                            <p>২০২২</p>
                        </div>
                        <div class="couter_number counter">
                            <span class="numb-count" data-to="1000" data-speed="3000"
                                data-waypoint-active="yes">1000</span>+
                        </div>
                        <div class="couter_text">
                            <p>২০০৫ সালে নার্সিং ভর্তি পরীক্ষায় ভর্তি পরীক্ষায় নিউরন নার্সিং কোচিং থেকে প্রথম ১০ এ ০৯ জন সহ
                                সর্বমোট ১৯২০+ শিক্ষার্থীর ঈর্ষণীয় সাফল্য!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----animation Slider ------->

    <section id="animated_slider">

        <div class="animated_slider">
            <a class="venobox vbox-item" data-gall="gallery01"
                href="{{ asset('public/Fontend/images/photogallary/ncc.jpg') }}"><img
                    src="{{ asset('public/Fontend/images/photogallary/nnc.jpg') }}" alt=""></a>
            <a class="venobox vbox-item" data-gall="gallery01"
                href="{{ asset('public/Fontend/images/photogallary/ncc1.jpg') }}"><img
                    src="{{ asset('public/Fontend/images/photogallary/ncc1.jpg') }}" alt=""></a>
            <a class="venobox vbox-item" data-gall="gallery01"
                href="{{ asset('public/Fontend/images/photogallary/ncc2.jpg') }}"><img
                    src="{{ asset('public/Fontend/images/photogallary/ncc2.jpg') }}" alt=""></a>
            <a class="venobox vbox-item" data-gall="gallery01"
                href="{{ asset('public/Fontend/images/photogallary/ncc3.jpg') }}"><img
                    src="{{ asset('public/Fontend/images/photogallary/ncc3.jpg') }}" alt=""></a>
            <a class="venobox vbox-item" data-gall="gallery01"
                href="{{ asset('public/Fontend/images/photogallary/ncc4.jpg') }}"><img
                    src="{{ asset('public/Fontend/images/photogallary/ncc4.jpg') }}" alt=""></a>
            <a class="venobox vbox-item" data-gall="gallery01"
                href="{{ asset('public/Fontend/images/photogallary/ncc5.jpg') }}"><img
                    src="{{ asset('public/Fontend/images/photogallary/ncc5.jpg') }}" alt=""></a>
            <a class="venobox vbox-item" data-gall="gallery01"
                href="{{ asset('public/Fontend/images/photogallary/ncc6.jpg') }}"><img
                    src="{{ asset('public/Fontend/images/photogallary/ncc6.jpg') }}" alt=""></a>
            <a class="venobox vbox-item" data-gall="gallery01"
                href="{{ asset('public/Fontend/images/photogallary/ncc7.jpg') }}"><img
                    src="{{ asset('public/Fontend/images/photogallary/ncc7.jpg') }}" alt=""></a>
            <a class="venobox vbox-item" data-gall="gallery01"
                href="{{ asset('public/Fontend/images/photogallary/ncc8.jpg') }}"><img
                    src="{{ asset('public/Fontend/images/photogallary/ncc8.jpg') }}" alt=""></a>
            <a class="venobox vbox-item" data-gall="gallery01"
                href="{{ asset('public/Fontend/images/photogallary/ncc9.jpg') }}"><img
                    src="{{ asset('public/Fontend/images/photogallary/ncc9.jpg') }}" alt=""></a>
            <a class="venobox vbox-item" data-gall="gallery01"
                href="{{ asset('public/Fontend/images/photogallary/ncc1.jpg') }}"><img
                    src="{{ asset('public/Fontend/images/photogallary/ncc1.jpg') }}" alt=""></a>



        </div>

    </section>
@endsection
