<!DOCTYPE html>
<html lang="en"
>


<head>
    <meta charset="utf-8">
    <title>Z'Burger - Boutique</title>
    <!-- Stylesheets -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('assets/vendors/flat-icon/flaticon.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&amp;family=Open+Sans:wght@400;600;700;800&amp;family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

<div class="page-wrapper">



    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li>Au service de tout Paris</li>
                        <li><a href="mailto:info@wengdo.com"><span class="icon far fa-envelope"></span>
                                contact@zburger.fr </a></li>
                    </ul>
                </div>
                <div class="top-right clearfix">


                    <div class="option-list">
                        <!-- Cart Button -->
                        <div class="cart-btn">
                            <a th:href="@{/panier}" class="icon flaticon-shopping-cart"></a>
                        </div>
                        <!-- Search Btn -->

                    </div>
                    <!--Social Box-->
                    <ul class="social-box" style="padding-left: 20px">
                        <li><a th:href="@{/mes-commandes}"><span class="icon far fa-user"></span></a></li>
                        <li><a th:href="@{/logout}"><span class="fa fa-power-off"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a th:href="@{/}"><img src="{{asset('assets/images/logo.png')}}" alt=""
                                                                 title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light" style="
    padding-right: 167px;
">

                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=""><a th:href="@{/}">Accueil</a>

                                    </li>
                                    <li class="current"><a href="{{route('shop')}}">Boutique</a>

                                    </li>
                                    <li class=""><a th:href="@{/menu}">Menu</a>

                                    </li>
                                    <li class=""><a href="{{route('gallery')}}">Galerie</a></li>

                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box">
                            <div class="order">
                                Commandez Maintenant
                                <span><a href="tel:1800-456-7890">(+33) 609 736 012</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a th:href="@{/}" class="img-responsive"><img src="{{asset('assets/images/logo-small.png')}}" alt=""
                                                                  title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class=""><a th:href="@{/}">Accueil</a>

                                </li>
                                <li class="current"><a href="{{route('shop')}}">Boutique</a>

                                </li>
                                <li class=""><a th:href="@{/menu}">Menu</a>

                                </li>
                                <li class=""><a href="{{route('gallery')}}">Galerie</a></li>


                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!-- End Main Header -->

    <!-- Page Title -->
    <section class="page-title" style="background-image: url('/assets/images/background/11.jpg')">
        <div class="auto-container">
            <h1>Boutique</h1>
            <ul class="bread-crumb clearfix">
                <li><a th:href="@{/}">Accueil</a></li>
                <li>Boutique</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Shop Page Section -->
    <section class="shop-page-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Nos Produits</h2>
            </div>

            <div class="row clearfix">

                <!-- Products Block -->
                @foreach($produitList as $produit)
                    <div class="product-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{URL::to('produits/' . $produit->id)}}"><img
                                        src="{{asset('images/'.$produit->photos)}}" alt="#"></a>
                            </figure>
                            <div class="lower-content">
                                <h4><a href="{{URL::to('produits/' . $produit->id)}}">{{$produit->nom}}</a></h4>
                                <div class="text">
                                    {{$produit->description}}
                                </div>
                                <div class="price">{{$produit->prix}}???</div>
                                <div class="lower-box">
                                    <a href="{{URL::to('produits/' . $produit->id)}}"
                                       class="theme-btn btn-style-five"><span class="txt">Je commande</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
    <!-- End Shop Page Section -->

    <!--Main Footer-->
    <footer class="main-footer" style="background-image: url('/assets/images/background/4.png')">
        <div class="auto-container">

            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Footer Column -->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <!-- Info Widget -->
                        <div class="footer-widget info-widget">
                            <h4>Contact</h4>
                            <a class="number" href="tel:0609736012">(+33) 0609736012</a>
                            <ul class="email-list">
                                <li><a href="mailto:contact@zburger.fr ">contact@zburger.fr</a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="footer-column col-lg-6 col-md-12 col-sm-12">
                        <!-- Logo Widget -->
                        <div class="footer-widget logo-widget">
                            <div class="logo">
                                <a th:href="@{/}"><img src="{{asset('assets/images/footer-logo.png')}}" alt=""/></a>
                            </div>
                            <div class="text">Z'Burgers <br> 24 rue Cristino Garcia <br> Saint-Denis, 93210
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <!-- Info Widget -->
                        <div class="footer-widget timing-widget">
                            <h4>Horaires d'ouvertures</h4>
                            <ul class="timing-list">
                                <li>Mardi - Samedi <span>10:00 - 23:00</span></li>
                                <li>Dimanche <span>10:00 - 00:00</span></li>
                                <li>Lundi <span>Ferm??</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="copyright">&copy; Copyright 2022 Z'Burgers.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- Search Popup -->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="http://designarc.biz/demos/wengdo/index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value=""
                               placeholder="Search Here" required>
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Cake</a></li>
                <li><a href="#">Chocolate</a></li>
                <li><a href="#">Strawberry</a></li>
                <li><a href="#">Vanila</a></li>
                <li><a href="#">Mango Icecream</a></li>
            </ul>

        </div>

    </div>
</div>

<!--Scroll to top-->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/mixitup.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

</body>


</html>
