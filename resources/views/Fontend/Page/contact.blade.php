@extends('Fontend.Layout.master')

@section('contend')
    <div class="flat-row pad-bottom30px">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="flat-contact-us style1">

                        <h2 class="title no-margin-top"> ভর্তির জন্য অথবা </h2>

                        <h4 class="desc no-margin-top">যে কোনো প্রয়োজনে যোগাযোগ করুন<a class="scheme2" href="18002323485.html">
                                ০১৭৩০-৫৭৭২৩৬, ০১৭৪৩-৯১৩৪৫৫</a></h4>

                    </div>

                </div><!-- /.col-md-12 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </div>

    <div class="flat-row parallax parallax3">

        <div class="overlay bg-f1f2f8"></div>

        <div class="container">

            <div class="row">

                <div class="flat-wrapper">

                    <div class="flat-iconbox clearfix">

                        <div class="item-three-column contact_coloumn">

                            <div class="iconbox">

                                <div class="box-header">

                                    <div class="contact_icon">

                                        {{-- <i class="fa-solid fa-phone"></i> --}}

                                    </div>

                                    <h5 class="box-title contact_title">যোগাযোগের নম্বর</h5>

                                </div>

                                <div class="box-content contact_content">

                                    <p>

                                        <strong>ফোন ১:</strong> ০১৭৩০-৫৭৭২৩৬<br>

                                        <strong>ফোন ২:</strong> ০১৭৪৩-৯১৩৪৫৫<br>

                                        <a class="scheme2" style="font-family: sans-serif;" href="#">ই-ইমেল :
                                            nnc@gmail.com </a>

                                    </p>

                                </div>

                            </div><!-- /.iconbox -->

                        </div><!-- /.item-three-column -->



                        <div class="item-three-column contact_coloumn">

                            <div class="iconbox">

                                <div class="box-header">

                                    <div class="contact_icon">

                                        <i class="fa-solid fa-clock"></i>

                                    </div>

                                    <h5 class="box-title contact_title">সময় সূচি</h5>

                                </div>

                                <div class="box-content contact_content">

                                    <p>

                                        <strong>শনি-বৃহস্পতি:</strong> 8:00AM – 10:00PM<br>

                                        <strong>শুক্রবার: বন্ধ</strong><br>

                                    </p>

                                </div>

                            </div><!-- /.iconbox -->

                        </div><!-- /.item-three-column -->



                        <div class="item-three-column contact_coloumn">

                            <div class="iconbox">

                                <div class="box-header">

                                    <div class="contact_icon">

                                        <i class="fa-solid fa-location-dot"></i>

                                    </div>

                                    <h5 class="box-title contact_title">কোচিংয়ের ঠিকানা</h5>

                                </div>

                                <div class="box-content contact_content">

                                    <p>প্রধান শাখা : অরিয়েন্টাল লাটিমী শপিং মল, ৩২/২ মিরপুর রোড, নিউমার্কেট ঢাকা, </p>



                                </div>

                            </div><!-- /.iconbox -->

                        </div><!-- /.item-three-column -->

                    </div><!-- /.flat-iconbox -->

                </div><!-- /.flat-wrapper -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </div>
    <div class="flat-row pad-bottom20px">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <form id="contactform" method="post"
                        action="http://themesflat.com/html/cosine/contact/contact-process.php">

                        <span><input id="email" name="email" type="email" value="" placeholder="ই-মেইল"
                                required="required"></span>

                        <span><input id="phone" name="phone" type="text" value="" placeholder="ফোন নাম্বার"
                                required="required"></span>

                        <span>
                            <textarea name="message" placeholder="কমেন্ট" required="required"></textarea>
                        </span>

                        <span class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                value="বার্তা পাঠান ">

                        </span>

                    </form>



                    <div class="flat-divider d20px"></div>

                </div><!-- /.col-md-4 -->



                <div class="col-md-6">

                    <!-- <div id="flat-map">  -->
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6142.310473307356!2d90.38054800456868!3d23.738831705833196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c80c9eb74f%3A0x4810d8f1ed12128!2sLatimi%20Shopping%20Mall!5e0!3m2!1sen!2sbd!4v1661442245954!5m2!1sen!2sbd"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>


                    <!-- </div> -->
                    <!-- /#flat-map -->

                </div><!-- /.col-md-8 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </div>
@endsection
