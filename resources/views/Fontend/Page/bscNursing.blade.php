@extends('Fontend.Layout.pagelayout')

@section('contend')
    <div class="general about-content">
        <div class="about-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <a class="popup-gallery" href="{{ asset('public/Fontend/images/photogallary/ncc2.jpg') }}"><img
                                src="{{ asset('public/Fontend/images/photogallary/ncc2.jpg') }}" alt="images"></a>
                    </li>
                    <li>
                        <a class="popup-gallery" href="{{ asset('public/Fontend/images/photogallary/ncc3.jpg') }}"><img
                                src="{{ asset('public/Fontend/images/photogallary/ncc3.jpg') }}" alt="images"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="general-text">
            <p style="font-size: 20px;"> </p>
            <p><strong>দেশের সর্বপ্রথম এবং অপ্রতিদ্বন্ধী বিশ্ববিদ্যালয় ভর্তি গাইড।</strong></p>

            <ul>
                <li>সুবিন্যস্ত ও সহজ ভাষায় রচিত।</li>
                <li>নতুন সিলেবাসের আলোকে প্রণীত ও পরিমার্জিত।</li>
                <li>সবচেয়ে বেশী ও নির্ভরযোগ্য তথ্য সম্বলিত।</li>
                <li>সর্বাধিক নয়, সর্বোচ্চ গুরুত্বপূর্ণ M.C.Q সন্নিবেশিত।</li>
                <li>ঢাকা বিশ্ববিদ্যালয়ের সম্মানিত শিক্ষকমন্ডলীর সার্বিক তত্ত্বাবধানে এবং একঝাঁক মেধাবী ছাত্রের আন্তরিক
                    প্রচেষ্টায় রচিত।</li>
                <li>বিগত ভর্তি পরীক্ষা সমূহের প্রশ্নোত্তর সম্বলিত।</li>
                <li>বিগত ভর্তি পরীক্ষা সমূহের সর্বাধিক সাফল্যের অধিকারী।</li>
                <li>অন্যান্ন বিশ্ববিদ্যালয়ে ভর্তি প্রক্রিয়ায় পরিপূর্ণ দিক নির্দেশনা।</li>
                <li>নতুন পরীক্ষা পদ্ধতির আলোকে সম্পূর্ণ নতুন সংস্করণ।</li>
                <li>প্রতি বিষয়ে সহজ আয়ত্ব করার গাইড লাইন।</li>
                <li>শিক্ষার্থীদের সময় অর্থ ও মানসিক শ্রম সাশ্রয়ের জন্য স্বল্প পরিসরে অধিক তথ্য সংযোজন।</li>
                <li>এইচ.এস.সি পর্যায়ে সংক্ষিপ্ত উত্তর প্রদনে সহায়ক।</li>
            </ul>
            <p></p>
        </div>

        <div class="details_share_btn">
            <h3>শেয়ার করুন</h3>
            <a class="facebook_bg" href="" title="Share on Facebook"
                onclick="window.open('#'), 'facebook-share-dialog', 'width=626,height=436'); return false;">
                <i class="fa fa-facebook-official"></i>
            </a>
            <a class="twitter_bg" href="" title="Share on Twitter"
                onclick="javascript:window.open('#', 'Twitter-dialog', 'width=626,height=436'); return false;">
                <i class="fa fa-twitter"></i></a>
            <a class="whatsapp_bg" href="#" data-action="" target="_blank"><i class="fa fa-whatsapp"></i></a>

            <a class="linkedin_bg" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
        </div>

    </div>
@endsection
