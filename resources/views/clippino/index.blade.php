@extends('clippino.common')
@section('index')
<!-- header area start -->
    <header class="header-area header-bg">
        <div class="right-image">
            <!-- right image -->
            <img src="{{url('assets1/img/header-right.png')}}" alt="header right image">
        </div>
        <!-- //.right image -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-header-item">
                        <!-- single header item -->
                        <span class="subtitle">Every Time -Any Time!</span>
                        <h1><span>Perfect Clipping Path</span> &amp; Photoshop Services...</h1>
                        <div class="btn-wrapper">
                            <a href="trial.html" class="boxed-btn btn-rounded">get a trail</a>
                            <a href="recent-work.html" class="boxed-btn btn-rounded blank">portfolio</a>
                        </div>
                    </div>
                    <!-- //.single header item -->
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- call to action area start -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner">
                        <!-- call to action inner -->
                        <div class="left-content-area">
                            <h2 class="title">Let us know what to do with your images </h2>
                        </div>
                        <div class="right-content-area">
                            <div class="btn-wrapper">
                                <a href="{{route('free_trial')}}" id="free-btn" class="boxed-btn btn-rounded">Free Trial</a>
                            </div>
                        </div>
                    </div>
                    <!-- //. call to action inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- call to action area end -->

    

    <!-- how it works area start-->
    <section class="how-it-works">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <!-- section title -->
                        <span class="separator"></span>
                        <h2 class="title">Here's How It Works</h2>
                        <p>We probably operate the best offshore Graphics design studio in Asia. To make sure we keep delivering top quality we only employ the best DTP professionals.</p>
                        <img class="wow fadeInUp" src="{{url('assets1/img/hiw.png')}}" alt="">
                    </div>
                    <!-- //.section title -->
                </div>
            </div>
        </div>
    </section>
    <!-- how it works area end-->

    <!-- our service area start -->
    <section class="service-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <!-- section title -->
                        <span class="separator"></span>
                        <h2 class="title">Our Services</h2>
                        <p>We probably operate the best offshore Graphics design studio in Asia. To make sure we keep delivering top quality we only employ the best DTP professionals.</p>
                    </div>
                    <!-- //.section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-box margin-bottom-30">
                        <!-- single service box -->
                        <div class="thumb" id="service">
                                <img src="{{url('assets1/img/service/01.jpg')}}" alt="editing company image">
                                <img src="{{url('assets1/img/service/011.png')}}" alt="editing company image">
                        </div>
                        <div class="content">
                            <a href="services.html"><h4 class="title">Clipping Path</h4></a>
                            <p>Clipping path is an exceptional choice of quality background removal priority service from Clipping Path Asia.</p>
                        </div>
                    </div>
                    <!-- //.single service box -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-box margin-bottom-30">
                        <!-- single service box -->
                        <div class="thumb" id="service1">
                                <img src="{{url('assets1/img/service/02.jpg')}}" alt="editing company image">
                                <img src="{{url('assets1/img/service/022.png')}}" alt="editing company image">
                        </div>
                        <div class="content">
                            <a href="services.html"><h4 class="title">Drop Shadow</h4></a>
                            <p>Clipping path is an exceptional choice of quality background removal priority service from Clipping Path Asia.</p>
                        </div>
                    </div>
                    <!-- //.single service box -->
                </div>
                <div class="col-lg-4 col-md-6" >
                    <div class="single-service-box margin-bottom-30">
                        <!-- single service box -->
                        <div class="thumb" id="service2">
                                <img src="{{url('assets1/img/service/03.jpg')}}" alt="editing company image">
                                <img src="{{url('assets1/img/service/033.png')}}" alt="editing company image">
                        </div>
                        <div class="content">
                           <a href="services.html"><h4 class="title">Mirror Effect</h4></a>
                            <p>Clipping path is an exceptional choice of quality background removal priority service from Clipping Path Asia.</p>
                        </div>
                    </div>
                    <!-- //.single service box -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-box mobile-margin-bottom-30">
                        <!-- single service box -->
                        <div class="thumb" id="service3">
                                <img src="{{url('assets1/img/service/04.jpg')}}" alt="editing company image">
                                <img src="{{url('assets1/img/service/044.png')}}" alt="editing company image">
                            
                        </div>
                        <div class="content">
                            <a href="services.html"><h4 class="title">Image Manipulation</h4></a>
                            <p>Clipping path is an exceptional choice of quality background removal priority service from Clipping Path Asia.</p>
                        </div>
                    </div>
                    <!-- //.single service box -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-box mobile-margin-bottom-30">
                        <!-- single service box -->
                        <div class="thumb" id="service4">
                                <img src="{{url('assets1/img/service/05.jpg')}}" alt="editing company image">
                                <img src="{{url('assets1/img/service/055.png')}}" alt="editing company image">
                            
                        </div>
                        <div class="content">
                            <a href="services.html"><h4 class="title">Photo Retouching</h4></a>
                            <p>Clipping path is an exceptional choice of quality background removal priority service from Clipping Path Asia.</p>
                        </div>
                    </div>
                    <!-- //.single service box -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-box">
                        <!-- single service box -->
                        <div class="thumb" id="service5">
                                <img src="{{url('assets1/img/service/06.jpg')}}" alt="editing company image">
                                <img src="{{url('assets1/img/service/066.png')}}" alt="editing company image">
                        </div>
                        <div class="content">
                            <a href="services.html"><h4 class="title">Ecommerce Solution</h4></a>
                            <p>Clipping path is an exceptional choice of quality background removal priority service from Clipping Path Asia.</p>
                        </div>
                    </div>
                    <!-- //.single service box -->
                </div>
            </div>
        </div>
    </section>
    <!-- our service area end -->

    <!-- editing company area start -->
    <section class="editing-company-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-content-area" id="twentytwenty-container">
                        <img src="{{url('assets1/img/editing-company-image-2.jpg')}}" alt="editing company image">
                        <img src="{{url('assets1/img/editing-company-image.jpg')}}" alt="editing company image">
                    </div>
                    <!-- //.left content area -->
                </div>
                <div class="col-lg-7">
                    <div class="right-content-are exprience-cont">
                        <!-- right content area -->
                        <span class="subtitle">ClippingCity Is Suitable For</span>
                        <h2 class="title">Anytype Photo Editing Company</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                            to using.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                            to using.</p>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="boxed-btn btn-rounded">contact now</a>
                        </div>
                    </div>
                    <!-- //. right content area -->
                </div>
            </div>
        </div>
    </section>
    <!-- editing company area end -->

    <!-- portfolio area start -->
    <section class="portfolio-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <!-- section title -->
                        <span class="separator"></span>
                        <h2 class="title">Our Portfolio</h2>
                        <p>We probably operate the best offshore Graphics design studio in Asia. To make sure we keep delivering top quality we only employ the best DTP professionals.</p>
                    </div>
                    <!-- //.section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu-wrapper">
                        <!-- portfolio menu wrapper -->
                        <ul>
                            <li class="active" data-filter="*">Clipping Path</li>
                            <li data-filter=".photo">Image Masking</li>
                            <li data-filter=".editing">Image optimazation</li>
                            <li data-filter=".bg-remove">Mannequin Remove</li>
                            <li data-filter=".masking">Manneuin Reflection</li>
                            <li data-filter=".bg-remove">Photo Reltouching</li>
                        </ul>
                    </div>
                    <!-- //.portfolio menu wrapper -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 remove-col-padding">
                    <div class="portfolio-masonary-wrapper" id="portfolio-masonary">
                        <!-- portfolio masonary wrapper -->
                        <div class="col-lg-4  col-md-6 single-portfolio-item margin-bottom-30 photo">
                            <div class="thumb">
                                <img src="{{url('assets1/img/portfolio/01.jpg')}}" alt="portfolio image">
                                <div class="hover">
                                    <a href="{{url('assets1/img/portfolio/01.jpg')}}" class="image-popup">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 single-portfolio-item margin-bottom-30 editing">
                            <div class="thumb">
                                <img src="{{url('assets1/img/portfolio/02.jpg')}}" alt="portfolio image">
                                <div class="hover">
                                    <a href="{{url('assets1/img/portfolio/02.jpg')}}" class="image-popup">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 single-portfolio-item margin-bottom-30 editing">
                            <div class="thumb">
                                <img src="{{url('assets1/img/portfolio/03.jpg')}}" alt="portfolio image">
                                <div class="hover">
                                    <a href="{{url('assets1/img/portfolio/03.jpg')}}" class="image-popup">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 single-portfolio-item margin-bottom-30 photo ">
                            <div class="thumb">
                                <img src="{{url('assets1/img/portfolio/04.jpg')}}" alt="portfolio image">
                                <div class="hover">
                                    <a href="{{url('assets1/img/portfolio/04.jpg')}}" class="image-popup">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 single-portfolio-item margin-bottom-30 masking bg-remove">
                            <div class="thumb">
                                <img src="{{url('assets1/img/portfolio/05.jpg')}}" alt="portfolio image">
                                <div class="hover">
                                    <a href="{{url('assets1/img/portfolio/05.jpg')}}" class="image-popup">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 single-portfolio-item margin-bottom-30 bg-remove">
                            <div class="thumb">
                                <img src="{{url('assets1/img/portfolio/06.jpg')}}" alt="portfolio image">
                                <div class="hover">
                                    <a href="{{url('assets1/img/portfolio/06.jpg')}}" class="image-popup">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 mobile-margin-bottom-30 margin-bottom-30 single-portfolio-item photo bg-remove">
                            <div class="thumb">
                                <img src="{{url('assets1/img/portfolio/07.jpg')}}" alt="portfolio image">
                                <div class="hover">
                                    <a href="{{url('assets1/img/portfolio/07.jpg')}}" class="image-popup">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 mobile-margin-bottom-30 margin-bottom-30 single-portfolio-item masking">
                            <div class="thumb">
                                <img src="{{url('assets1/img/portfolio/08.jpg')}}" alt="portfolio image">
                                <div class="hover">
                                    <a href="{{url('assets1/img/portfolio/08.jpg')}}" class="image-popup">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 margin-bottom-30 single-portfolio-item masking">
                            <div class="thumb">
                                <img src="{{url('assets1/img/portfolio/09.jpg')}}" alt="portfolio image">
                                <div class="hover">
                                    <a href="{{url('assets1/img/portfolio/09.jpg')}}" class="image-popup">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio masonary wrapper -->
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio area end -->
<!-- Counter start -->
<div class="main-counter">
    <div class="container">
        <div class="row">
                    <div class="col-md-6 col-lg-3 col-sm-3">
                       <div class="single-right-item text-center"><!-- single right item -->
                           <div class="icon">
                               <i class="fa fa-thumbs-up " id="counter-icon" aria-hidden="true"></i>
                           </div>   
                           <div class="content">
                               <div class="counter-area">
                                   <span class="count-number">5954</span>
                                   <span class="plus">+</span>
                               </div>
                               <h6 class="title">Happy Clients</h6>
                           </div>
                       </div><!-- //.single right item -->
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-3">
                       <div class="single-right-item text-center"><!-- single right item -->
                           <div class="icon">
                               <i class="fa fa-paper-plane-o" id="counter-icon" aria-hidden="true"></i>
                           </div>   
                           <div class="content">
                               <div class="counter-area">
                                   <span class="count-number">3346</span>
                                   <span class="plus">+</span>
                               </div>
                               <h6 class="title">Product Solds</h6>
                           </div>
                       </div><!-- //.single right item -->
                    </div>

                    <div class="col-md-6 col-lg-3 col-sm-3">
                       <div class="single-right-item text-center"><!-- single right item -->
                           <div class="icon">
                                <i class="fa fa-ticket" id="counter-icon" aria-hidden="true"></i>
                           </div>   
                           <div class="content">
                               <div class="counter-area">
                                   <span class="count-number">9807</span>
                                   <span class="plus">+</span>
                               </div>
                               <h6 class="title">Support Tickets</h6>
                           </div>
                       </div><!-- //.single right item -->
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-3">
                       <div class="single-right-item text-center"><!-- single right item -->
                           <div class="icon">
                               <i class="fa fa-user" id="counter-icon" aria-hidden="true"></i>
                           </div>   
                           <div class="counter-area">
                               <span class="count-number-support">24/7</span>
                               <h6 class="title">Online Support</h6>
                           </div>
                       </div><!-- //.single right item -->
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- Counter end-->

    <!-- testimonial area start -->
    <section class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <!-- section title -->
                        <span class="separator"></span>
                        <h2 class="title">Client Testimonials</h2>
                        <p>We probably operate the best offshore Graphics design studio in Asia. To make sure we keep delivering top quality we only employ the best DTP professionals.</p>
                    </div>
                    <!-- //.section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 remove-col-padding">
                    <div class="testimonail-carousel" id="testimonial-carousel">
                        <div class="single-testimonial-item">
                            <!-- single testimonial carousel item-->
                            <div class="description">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                    opposed to using.</p>
                            </div>
                            <div class="author-details">
                                <!-- author details -->
                                <div class="thumb">
                                    <img src="{{url('assets1/img/testimonial/01.png')}}" alt="tesimonial image">
                                </div>
                                <div class="content">
                                    <h4 class="name">Rosalina Pong</h4>
                                    <span class="post">TheSoftKing Ltd.</span>
                                </div>
                            </div>
                            <!-- //.author details -->
                        </div>
                        <!-- //.single testimonial carousel item-->
                        <div class="single-testimonial-item">
                            <!-- single testimonial carousel item-->
                            <div class="description">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                    opposed to using.</p>
                            </div>
                            <div class="author-details">
                                <!-- author details -->
                                <div class="thumb">
                                    <img src="{{url('assets1/img/testimonial/02.png')}}" alt="tesimonial image">
                                </div>
                                <div class="content">
                                    <h4 class="name">Arlene McCurdy</h4>
                                    <span class="post">TheSoftKing Ltd.</span>
                                </div>
                            </div>
                            <!-- //.author details -->
                        </div>
                        <!-- //.single testimonial carousel item-->
                        <div class="single-testimonial-item">
                            <!-- single testimonial carousel item-->
                            <div class="description">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                    opposed to using.</p>
                            </div>
                            <div class="author-details">
                                <!-- author details -->
                                <div class="thumb">
                                    <img src="{{url('assets1/img/testimonial/03.png')}}" alt="tesimonial image">
                                </div>
                                <div class="content">
                                    <h4 class="name">Betty Foster</h4>
                                    <span class="post">TheSoftKing Ltd.</span>
                                </div>
                            </div>
                            <!-- //.author details -->
                        </div>
                        <!-- //.single testimonial carousel item-->
                        <div class="single-testimonial-item">
                            <!-- single testimonial carousel item-->
                            <div class="description">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                    opposed to using.</p>
                            </div>
                            <div class="author-details">
                                <!-- author details -->
                                <div class="thumb">
                                    <img src="{{url('assets1/img/testimonial/01.png')}}" alt="tesimonial image">
                                </div>
                                <div class="content">
                                    <h4 class="name">Nancy Evans</h4>
                                    <span class="post">TheSoftKing Ltd.</span>
                                </div>
                            </div>
                            <!-- //.author details -->
                        </div>
                        <!-- //.single testimonial carousel item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->
    @endsection