<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ncs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{'css/magnific-popup.css'}}">
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">


    </head>
    <body>

        <header id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="index.html"><img src="{{asset('img/logo.png')}}" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="#home">Acceuil</a></li>
                            <li><a href="#service">Services</a></li>
                            <li><a href="#apropos">A propos</a></li>
                            <li><a href="#produit">Produits</a></li>
                            <li><a href="#contact">Contatc</a></li>
                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header><!-- #header -->

        <!-- start banner Area -->
        <section class="banner-area" id="home">
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-7">
                        <h1>
                            Nous sommmes votre solution numeric
                        </h1>
                        <p class="pt-20 pb-20">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start we-offer Area -->
        <section class="we-offer-area section-gap" id="offer">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Ce que nous offrons</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-offer d-flex flex-row pb-30">
                            <div class="icon">
                                <img src="{{asset('img/s1.png')}}" alt="">
                            </div>
                            <div class="desc">
                                <a href="#"><h4>Unlimited Colors</h4></a>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                                </p>
                            </div>
                        </div>
                        <div class="single-offer d-flex flex-row pb-30">
                            <div class="icon">
                                <img src="{{asset('img/s3.png')}}" alt="">
                            </div>
                            <div class="desc">
                                <a href="#"><h4>Endless Support</h4></a>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-offer d-flex flex-row pb-30">
                            <div class="icon">
                                <img src="{{asset('img/s2.png')}}" alt="">
                            </div>
                            <div class="desc">
                                <a href="#"><h4>Smart Security</h4></a>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                                </p>
                            </div>
                        </div>
                        <div class="single-offer d-flex flex-row pb-30">
                            <div class="icon">
                                <img src="{{asset('img/s4.png')}}" alt="">
                            </div>
                            <div class="desc">
                                <a href="#"><h4>Smart Security</h4></a>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End we-offer Area

          <!-- Start callto-action Area -->
        <section class="callto-action-area relative section-gap">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content col-lg-9">
                        <div class="title text-center">
                            <h1 class="mb-10 text-white">Ce que nous sommes </h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            <a class="primary-btn" href="#">Request Free Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End calto-action Area -->

        <!-- Start latest-blog Area -->
        <section class="latest-blog-area section-gap" id="blog">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Nos prduits sur le marche</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 single-blog">
                        <img class="img-fluid" src="{{asset('img/b1.jpg')}}" alt="">
                        <a href="#"><h4>UZA BINTU </h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                        </p>
                        <p class="post-date">31st January, 2018</p>
                    </div>
                    <div class="col-lg-6 single-blog">
                        <img class="img-fluid" src="img/b2.jpg" alt="">
                        <a href="#"><h4>243 SOS</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                        </p>
                        <p class="post-date">31st January, 2018</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest-blog Area -->

        <div class="whole-wrap">
            <div class="container">
                <div class="section-top-border">
                    <div class="row">
                        <div class="col-lg-2 col-md-2"></div>
                        <div class="col-lg-8 col-md-8">
                            <h3 class="mb-30">Contacter nous</h3>
                            <form action="" method="post">
                                @csrf
                                <div class="mt-10">
                                    <input type="text" name="nomEntite" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom de lEntite'" required class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="email" name="emailEntite" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'adesse mail'" required class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="PhoneEntite" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'phone'" required class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="sujetEntite" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'sujet'" required class="single-input">
                                </div>
                                <div class="mt-10">
                                    <textarea name="contenu" class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre message '" required></textarea>
                                </div>
                                <div class="mt-10">
                                     <input type="submit" class="submit_btn" value="Envorer">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget">
                            <h6>Nos contacts</h6>
                            <p>
                                <a href="mailto:#0">numeric@ncs.com</a><br>
                                <span>+1 (917) 123 456 </span><br>
                                <span>+1 (917) 333 987</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-12">
                        <h3>New Letters</h3>
                        <h4>Restez informe sur nos produits et sevices</h4>
                         <form method="post" action="/newLetter">
                            @csrf
                            <div class="input-group">
                                <input type="email" name="email" class="nw-btn" placeholder="Email" >
                            </div>
                            <div class="mt-10">
                                <input type="submit" class="nw-btn primary-btn" value="Souscrire">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget">
                            <h4>Ou nous trouver</h4>
                            <p class="contact-address">
                                1600 Amphitheatre Parkway<br>
                                Mountain View, CA<br>
                                94043 US
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row footer-bottom d-flex justify-content-between">
                    <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                         Copyright &copy;<script>document.write(new Date().getFullYear());</script> Designed<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">NumericSolution</a>
                     </p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->

        <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{asset('js/easing.min.js')}}"></script>
        <script src="{{asset('js/hoverIntent.js')}}"></script>
        <script src="{{asset('js/superfish.min.js')}}"></script>
        <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('js/parallax.min.js')}}"></script>
        <script src="{{asset('js/mail-script.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
