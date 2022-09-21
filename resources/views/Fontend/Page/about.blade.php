@extends('Fontend.Layout.pagelayout')

@section('contend')
    <div class="general about-content">
        <div class="about-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <a class="popup-gallery" href="{{ asset('public/Fontend/images/photogallary/ncc1.jpg') }}"><img
                                src="{{ asset('public/Fontend/images/photogallary/ncc1.jpg') }}" alt="images"></a>
                    </li>
                    <li>
                        <a class="popup-gallery" href="{{ asset('public/Fontend/images/photogallary/ncc2.jpg') }}"><img
                                src="{{ asset('public/Fontend/images/photogallary/ncc2.jpg') }}" alt="images"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="about-content-text">
            <h4 class="about-content-title">আমাদের সম্পর্কে</h4>
            <p><strong>নিউরন পাবলিকেশন দ্বারা পরিচালিত দেশের একমাত্র নার্সিং কোচিং নিউরন নার্সিং কোচিং</strong>
            </p>
            <p>মানব সেবায় নার্সিং একটি নোভেল প্রফেশন, দিন দিন সারা বিশ্বে এর গুরুত্ব বাড়ছে। বাংলাদেশের নার্সিং বইয়ের
                প্রকাশনা জগতে নিউরন পাবলিকেশন স্বনামধন্য ও গৌরবউজ্জল একটি নাম। এই নিউরন পাবলিকেশন দ্বারা পরিচালিত দেশের
                একমাত্র কোচিং "নিউরন নার্সিং কোচিং"। বর্তমানে দেখা যাচ্ছে নিউরন নামের সাথে কিছু যোগ করে কিংবা সরাসরি নিউরন
                নামে ও বেনামে অনেক কোচিং চালাচ্ছে যাতে নিউরন পাবলিকেশনের ভাবমূর্তি নষ্ট হচ্ছে। প্রিয় নার্সিং শিক্ষার্থী ও
                নার্সিং এর সাথে জড়িত আপনাদের কথা মাথায় রেখেই আমরা নিউরন পাবলিকেশন " নিউরন নার্সিং কোচিং" পরিচালনা করে আসছি ।
                আমাদের কোচিং-এর লোগো এবং পাবলিকেশন এর লোগো দেখে ভর্তি হন যাতে আপনাদের প্রতারিত হতে না হয়। আমাদের নার্সিং
                বিষয়ক একাডেমিক বই ও ভর্তি গাইড গুলো সারা বাংলাদেশে খুবই জনপ্রিয়। তাই প্রতারিত না হয়ে আসল নিউরন নার্সিং কোচিং
                এ ভর্তি হন। "এইচ আল হাসিব" এবং "সাইফুল সাইফ" দ্বারা পরিচালিত নিউরন নার্সিং কোচিং এ ভর্তি হন।</p>

        </div>
        {{-- <div class="about-content-text">
            <h4 class="about-content-title">WHY COSINE?</h4>
            <p>We help the world’s leading companies drive predictable revenue and profitability
                growth by optimizing sales organization performance.</p>
        </div> --}}

        <div class="details_share_btn">
            <h3>শেয়ার করুন</h3>
            <a class="facebook_bg" href="" title="Share on Facebook"
                onclick="window.open('#'), 'facebook-share-dialog', 'width=626,height=436'); return false;">
                <i class="fa fa-facebook-official"></i>
            </a>
            <a class="twitter_bg" href="" title="Share on Twitter"
                onclick="javascript:window.open('#', 'Twitter-dialog', 'width=626,height=436'); return false;">
                <i class="fa fa-twitter"></i></a>
            <a class="whatsapp_bg" href="#" data-action="http://focusbd.info/coaching/pages/about" target="_blank"><i
                    class="fa fa-whatsapp"></i></a>

            <a class="linkedin_bg" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
        </div>

    </div>
@endsection
