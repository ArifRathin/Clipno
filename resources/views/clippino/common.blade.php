<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from brotherslab.thesoftking.com/html/clipino/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Apr 2019 16:22:52 GMT -->

<!-- Mirrored from photodesignexpert.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Apr 2019 02:47:17 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Clipino | Clipping Path Business HTML Templates </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{url('assets1/css/bootstrap.min.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{url('assets1/css/fontawesome-all.min.css')}}">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{url('assets1/css/flaticon.css')}}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{url('assets1/css/animate.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{url('assets1/css/owl.carousel.min.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{url('assets1/css/magnific-popup.css')}}">
    <!-- twentytwenty  -->
    <link rel="stylesheet" href="{{url('assets1/css/twentytwenty.css')}}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{url('assets1/css/style.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{url('assets1/css/responsive.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>


    {{-- login modal strat --}}


    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title login-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('login') }}" method="POST" class="form-group">
                         @csrf
                        <label for="">Email:</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <label for="">Password:</label>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Yoru Password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    <button class="btn btn-success btn-block login-submit-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>&nbsp;&nbsp;Sign In</button>
                    </form>
                </div>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
    {{-- login modal end --}}

   

            <!-- support bar area start  -->
    <div class="support-bar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="support-bar-inner">
                        <div class="left-content-area">
                            <ul>
                                <li><a href="mailto:info@webmail.com"><i class="far fa-envelope"></i> info@webmail.com</a></li>
                                <li><a href="tel:990876864576"><i class="fas fa-phone"></i> +9908 768 64576</a></li>
                            </ul>
                        </div>
                        <div class="right-content-area">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- support bar area end -->

    <!-- navbar area start -->
    <div class="navbar-area">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light" id="stickynav">
                <div class="navbar-header">
                    <!-- navbar header -->
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img class="img-logo" src="{{url('assets1/img/logo.png')}}" alt="logo images">
                    </a>
                </div>
                <!-- //.navbar header -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- navbar collapse -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About
                            <span class="sr-only">(current)</span>
                        </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" href="#">Servcies</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="blog.html">Clipping Path</a>
                                <a class="dropdown-item" href="blog-details.html">Image Masking</a>
                                <a class="dropdown-item" href="trial.html">Image optimazation</a>
                                <a class="dropdown-item" href="recent-work.html">Mannequin Remove</a>
                                <a class="dropdown-item" href="login.html">Manneuin Reflection</a>
                                <a class="dropdown-item" href="signup.html">Terms & Conditions</a>
                                <a class="dropdown-item" href="signup.html">Photo Reltouching</a>
                            </div>   
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('how')}}">How Work?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link login-btn" data-toggle="modal" data-target="#login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                        <li class="nav-item btn-wrapper">
                                <button onclick="openskp()"  class="boxed-btn blank btn-bordered btn-rounded"><i class="fab fa-skype">&nbsp;&nbsp;</i>chat now</button>
                        </li>
                        <li class="nav-item btn-wrapper wow flash" data-wow-iteration="infinite" data-wow-duration="5s">
                                <button  class="btn btn-success boxed-btn blank  btn-rounded extra-btn" ></i>Only&nbsp;&nbsp; $ 0.29</button>
                        </li>
                    </ul>
                </div>
                
                <!-- //.navbar collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </nav>
        </div>
        <!-- //.container -->
    </div>
    <!-- navbar area end -->

    @yield('index')
    @yield('about')
    @yield('pricing')
    @yield('how')
    @yield('contact')
    @yield('login')

    <!-- footer area start -->
    <footer class="footer-area">
<div class="footer-top-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="footer-widget blog-feeds">
                    <div class="widget-title">
                        <h4 class="title">Our contact info</h4>
                    </div>
                    <div class="widget-body">
                        <div class="single-blog-feed-item">
                            <div class="thumb">
                                <div>
                                    {{-- <i class="fa fa-map-marker" aria-hidden="true"></i> --}}
                                   <p>4FI, Genie Lamp,Bangladesh IT Inclubator,janata Towr, Software Techonology Park,Kawran Bazar,Dhaka (1215),Bangladesh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="footer-widget instagram">
                    <!-- instagram widget subscribe -->
                    <div class="widget-title">
                        <h4 class="title">Service Images</h4>
                    </div>
                    <div class="widget-body">
                        <ul>
                            <li>
                                <a href="#">
                                    <img style="height: 75px;width: 77px;" src="{{url('assets1/img/service/01.jpg')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img style="height: 77px;width: 75px;" src="{{url('assets1/img/service/02.jpg')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img style="height: 77px;width: 75px;" src="{{url('assets1/img/service/03.jpg')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img style="height: 77px;width: 75px;" src="{{url('assets1/img/service/04.jpg')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img style="height: 77px;width: 75px;" src="{{url('assets1/img/service/05.jpg')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img style="height: 77px;width: 75px;" src="{{url('assets1/img/service/06.jpg')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img style="height: 77px;width: 75px;" src="{{url('assets1/img/service/03.jpg')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img style="height: 77px;width: 75px;" src="{{url('assets1/img/service/01.jpg')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img style="height: 77px;width: 75px;" src="{{url('assets1/img/instagram/02.jpg')}}" alt="instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- //.instagram widget subscribe  -->
            </div>

            <div class="col-xl-2 col-lg-6 col-md-6">
                <div class="footer-widget pages">
                    <!-- instagram widget subscribe -->
                    <div class="widget-title">
                        <h4 class="title">Services</h4>
                    </div>
                    <div class="widget-body">
                        <ul>
                            <li>
                                <a href="about.html">Clipping Path</a>
                            </li>
                            <li>
                                <a href="trial.html">Image Masking</a>
                            </li>
                            <li>
                                <a href="#">Image optimazation</a>
                            </li>
                            <li>
                                <a href="services.html">Mannequin Remove</a>
                            </li>
                            <li>
                                <a href="#">Manneuin Reflection</a>
                            </li>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="contact.html">Photo Reltouching</a>
                            </li> 
                        </ul>
                    </div>
                </div>
                <!-- //.instagram widget subscribe  -->
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="footer-widget subscribe">
                    <!-- footer widget subscribe -->
                    <div class="widget-title">
                        <h4 class="title">Suscribe Now</h4>
                    </div>
                    <div class="widget-body">
                        <form action="http://brotherslab.thesoftking.com/html/clipino/index.html">
                            <div class="form-element">
                                <input type="text" class="input-field" placeholder="Enter your name...">
                            </div>
                            <div class="form-element">
                                <input type="email" class="input-field" placeholder="Enter your email...">
                            </div>
                            <div class="form-element">
                                <textarea name="" class="input-field" id="" cols="30" rows="10" placeholder="Enter your Message..."></textarea>
                            </div>
                            {{-- <input type="submit" class="submit-btn" value="subscribe"> --}}
                            <button class="footer-submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- //.footer widget subscribe  -->
            </div>
        </div>
    </div>
</div>
        <div class="copyright-area">
            <!-- copyright area -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">Made with love - <a href="#">TheSoftKing</a> -2018</div>
                </div>
            </div>
        </div>
        <!-- //.copyright area -->
    </footer>
    <!-- footer area end -->

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="preloader-wrapper">
                <span class="let1">l</span>
                <span class="let2">o</span>
                <span class="let3">a</span>
                <span class="let4">d</span>
                <span class="let5">i</span>
                <span class="let6">n</span>
                <span class="let7">g</span>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <div class="back-to-top">
        <!-- back to top start -->
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->
    <!-- jquery -->
    <script src="{{url('assets1/js/jquery.js')}}"></script>
    <!-- popper -->
    <script src="{{url('assets1/js/popper.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{url('assets1/js/bootstrap.min.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{url('assets1/js/owl.carousel.min.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{url('assets1/js/jquery.magnific-popup.js')}}"></script>
    <!-- way poin js-->
    <script src="{{url('assets1/js/waypoints.min.js')}}"></script>
    <!-- event move js-->
    <script src="{{url('assets1/js/jquery.event.move.js')}}"></script>
    <!-- twentytwenty js-->
    <script src="{{url('assets1/js/jquery.twentytwenty.js')}}"></script>
    <!-- imagesloaded js-->
    <script src="{{url('assets1/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- isotope js-->
    <script src="{{url('assets1/js/isotope.pkgd.min.js')}}"></script>
    <!-- wow js-->
    <script src="{{url('assets1/js/wow.min.js')}}"></script>
    <!-- counterup js-->
    <script src="{{url('assets1/js/jquery.counterup.min.js')}}"></script>
    <!-- nav sticky -->
    <script src="{{url('assets1/js/jquery.sticky.js')}}"></script>
    <!-- main -->
    <script src="{{url('assets1/js/main.js')}}"></script>
    <!-- services -->
    <script src="{{url('assets1/js/anime.min.js')}}"></script>
    <script src="{{url('assets1/js/main1.js')}}"></script>
    <script src="{{url('assets1/js/trialorder.js')}}"></script>

    <script type="text/javascript">
        function openskp()
        {
            
            var skypename = 'live:softwarezon';
            window.location = 'skype:'+skypename+'?chat';
        }
    </script>

    {{-- image upload js --}}


</body>


<!-- Mirrored from brotherslab.thesoftking.com/html/clipino/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Apr 2019 16:24:03 GMT -->

<!-- Mirrored from photodesignexpert.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Apr 2019 02:48:15 GMT -->
</html>