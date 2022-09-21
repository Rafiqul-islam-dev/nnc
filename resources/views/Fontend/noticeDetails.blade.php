@extends('Fontend.Layout.pagelayout')

@section('contend')
    <div class="general about-content">
        <div class="about-slider">
            <div class="flexslider">
                <ul class="slides">

                    <li>
                        <a class="popup-gallery" href=""><img src="{{ URL::to($noticDtls->image) }}" alt="images"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="about-content-text">
            <h4 class="about-content-title">{{ $noticDtls->title }}</h4>

            <p>{!! $noticDtls->descrition !!}</p>

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
