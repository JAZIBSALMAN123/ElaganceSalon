<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elegance Men Hair Salon">
    <meta name="author" content="">
    <title>Elegance Men Hair Salon</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/elegant-font-icons.css">

    <link rel="stylesheet" href="css/elegant-line-icons.css">

    <link rel="stylesheet" href="css/themify-icons.css">

    <link rel="stylesheet" href="css/barber-icons.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/animate.min.css">

    <link rel="stylesheet" href="css/venobox/venobox.css">

    <link rel="stylesheet" href="css/nice-select.css">

    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/slicknav.min.css">

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <header id="header" class="header-section">
        <div class="container">
            <nav class="navbar ">
                <img src="{{ asset('img/logo (2).png') }}" alt="Logo" style="width: 150px; height: auto; margin-left: 10px">
                <div class="d-flex menu-wrap align-items-center">
                    <div id="mainmenu" class="mainmenu">
                        <ul class="nav">
                            <li><a data-scroll class="nav-link active" href="/">Home<span class="sr-only">(current)</span></a></li>
                            <li><a href="aboutus">About</a>
                                <ul>
                                    <li><a href="aboutus">About Us</a></li>
                                    <li><a href="aboutcompany">About Company</a></li>
                                </ul>
                            </li>
                            <li><a href="service">Services</a></li>
                            <li><a href="feedback">Feedback</a>

                            </li>
                            <li><a href="contact">Contact</a></li>
                            <li><a href="appointment" >Appointment</a></li>
                            @guest
                            @if (Route::has('login'))
                            <div class="header-btn" style="margin-top: 20px;">
                                <a class="menu-btn" href="{{ route('login') }}"
                                   style="display: inline-block;  border-radius: 15px;"
                                   onmouseover="this.style.backgroundColor='#222227'; this.style.color='#857568';"
                                   onmouseout="this.style.backgroundColor='#857568'; this.style.color='white';">
                                    {{ __('Login') }}
                                </a>
                            </div>
                            
                            
                            @endif

                            @if (Route::has('register'))
                                <div class="header-btn" style="margin-top: 20px;">
                                    <a class="menu-btn" href="{{ route('register') }}"style="display: inline-block;  border-radius: 15px;"
                                    onmouseover="this.style.backgroundColor='#222227'; this.style.color='#857568';"
                                    onmouseout="this.style.backgroundColor='#857568'; this.style.color='white';">
                                        {{ __('Register') }}</a>
                                </div>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>

                    </div>
                    
                </div>
            </nav>
        </div>

    </header>

{{-- Header end --}}






    @yield('content')





    {{-- Footer start --}}
    <section class="widget_section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <img class="mb-15" src="img/logo (2).png" alt="Brand" style="margin-top: -50px">
                        <p>Our barbershop is the created for men who appreciate premium quality, time and flawless look.
                        </p>
                        <ul class="widget_social">
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_googleplus"></i></a></li>
                            <li><a href="#"><i class="social_instagram"></i></a></li>
                            <li><a href="#"><i class="social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Headquaters</h3>
                        <p>Aptech Metro Star Gate, Karachi</p>
                        <p><a href="muhammadaffan1445@gmail.com" class="__cf_email__"
                                data-cfemail="1d55787171725d7964737c70747e717c64786f6e33737869">[email&#160;protected]</a>
                            <br>+92 3101259848</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Opening Hours</h3>
                        <ul class="opening_time">
                            <li>Monday - Friday 11:30am - 2:008pm</li>
                            <li>Saturday – Monday: 9am – 8pm</li>
                            <li>Monday - Friday 5:30am - 11:008pm</li>
                            <li>Saturday - Sunday 4:30am - 1:00pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 sm-padding">
                    <div class="footer_widget">
                        <h3>Subscribe to our contents</h3>
                        <div class="subscribe_form">
                            <form action="#" class="subscribe_form">
                                <input type="email" name="email" id="subs-email" class="form_input"
                                    placeholder="Email Address...">
                                <button type="submit" class="submit">SUBSCRIBE</button>
                                <div class="clearfix"></div>
                                <div id="subscribe-result">
                                    <p class="subscription-success"></p>
                                    <p class="subscription-error"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="copyright">&copy;
                        <script type="text/javascript"> document.write(new Date().getFullYear())</script> All Rights Reserved By Elegance

                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <ul class="footer_social">
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Report Problem</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>

    <script src="js/vendor/owl.carousel.min.js"></script>

    <script src="js/vendor/jquery.isotope.v3.0.2.js"></script>

    <script src="js/vendor/smooth-scroll.min.js"></script>

    <script src="js/vendor/venobox.min.js"></script>

    <script src="js/vendor/jquery.ajaxchimp.min.js"></script>

    <script src="js/vendor/jquery.slicknav.min.js"></script>

    <script src="js/vendor/jquery.nice-select.min.js"></script>

    <script src="js/vendor/jquery.mb.YTPlayer.min.js"></script>

    <script src="js/vendor/wow.min.js"></script>

    <script src="js/contact.js"></script>

    <script src="js/appointment.js"></script>

    <script src="js/main.js"></script>
</body>


</html>
{{-- Footer end --}}
