@extends('clippino.common')
@section('contact')
    <!-- breadcumb area start -->
    <section class="breadcrumb-area breadcrumb-bg about">
        <div class="contiainer">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-inner">
                        <span class="subtitle">Every Time - Any Time!</span>
                        <h1 class="title">Get In Touch</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcumb area end -->

    <!-- <div class="contact-info-address">
        <div class="container">
            <div class="row">
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="first-address address-font address-top">
                            <i class="fa fa-map-marker contact-icon-one" aria-hidden="true"></i>
                            <h4 class="address-font">ADDRESS</h4>
                            <p class="address-font"><b>4FI, Genie Lamp,Bangladesh IT Inclubator,janata Towr, Software Techonology Park,Kawran Bazar,Dhaka (1215),Bangladesh</b></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="second-address address-font address-top responsive-address">
                            <i class="fa fa-phone contact-icon-two" aria-hidden="true"></i>
                            <h4 class="address-font">PHONE</h4>
                            <p class="address-font"><strong>Genie Iot</strong><br>+88 01916 556804</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="last-address address-font address-top responsive-address">
                           <i class="fa fa-envelope contact-icon-three" aria-hidden="true"></i>
                           <h4 class="address-font">EMAIL</h4>
                           <p class="address-font"><strong>Request for proposal</strong><br>
                            mashud624496@gmail.com
                           </p>
                        </div>
                    </div>
            </div>
        </div>
    </div> -->

<!-- contact form area start -->
    <div class="contact-form-wrapper-area">
        <div class="contact-form-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.880894046487!2d90.39207231498138!3d23.75162638458877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9cb2c91b089%3A0xe8e4a6e2fb308bc7!2sGenie+IoT!5e0!3m2!1sen!2sbd!4v1554182812040!5m2!1sen!2sbd" class="map" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                            <form method="POST" id="contact_form_submit">
                                <div class="contact-form-wrapper">
                                    <!-- contact form wrapper -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-element">
                                                <label for="first_name">Name <span>**</span></label>
                                                <input type="text" id="first_name" class="input-field borderd" placeholder="Type your first name.....">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-element">
                                                <label for="email">Your Email <span>**</span></label>
                                                <input type="email" id="email" class="input-field borderd" placeholder="Type your email.....">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-element">
                                                <label for="subject">Your Subject <span>**</span></label>
                                                <input type="text" id="subject" class="input-field borderd" placeholder="Type your subject.....">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-element">
                                                <label for="message">Your Message <span>**</span></label>
                                                <textarea rows="20" id="message" cols="10" class="input-field borderd textarea" placeholder="Type your message....."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-element">
                                                <button class="btn btn-primary btn-lg btn-block footer-btn"><i class="fa fa-paper-plane-o" aria-hidden="true">&nbsp;&nbsp;</i>Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- //.contact form wrapper -->
                            </form>     
                        </div>
                    </div>
            </div>
        </div><!-- //.contact form inner -->
    </div>
<!-- contact form area end -->

<!-- contact page map area start -->
<!-- <div class="map" id="map"></div> -->

<!-- contact page map area end -->
@endsection

   