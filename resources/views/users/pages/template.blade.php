<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elegance Men Hair Salon">
    <meta name="author" content="">
    <title>Elegance Men Hair Salon</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/elegant-font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elegant-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/barber-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/venobox/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- JavaScript -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>

<body>
    <header id="header" class="header-section">
        <div class="container">
            <nav class="navbar">
                <img src="{{ asset('img/logo (2).png') }}" style="height: 150px; width: 150px;" alt="">
                <div class="d-flex menu-wrap align-items-center">
                    <div id="mainmenu" class="mainmenu">
                        <ul class="nav">
                            <li><a data-scroll class="nav-link active" href="/">Home<span
                                        class="sr-only">(current)</span></a></li>
                            @if (Auth::check())
                                <li><a href="/aboutus">About</a>
                                    <ul>
                                        <li><a href="/aboutus">About Us</a></li>
                                        <li><a href="/aboutcompany">About Company</a></li>
                                    </ul>
                                </li>
                                <li><a href="/user/services">Services</a></li>
                                <li><a href="/feedback">Feedback</a>

                                </li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="/user/appointments">Appointment</a></li>
                            @endif

                            @guest
                                @if (Route::has('login'))
                                    <div class="header-btn" style="margin-top: 20px;">
                                        <a class="menu-btn" href="{{ route('login') }}"
                                            style="display: inline-block; border-radius: 15px;"
                                            onmouseover="this.style.backgroundColor='#222227'; this.style.color='#857568';"
                                            onmouseout="this.style.backgroundColor='#857568'; this.style.color='white';">
                                            {{ __('Login') }}
                                        </a>
                                    </div>
                                @endif

                                @if (Route::has('register'))
                                    <div class="header-btn" style="margin-top: 20px;">
                                        <a class="menu-btn" href="{{ route('register') }}"
                                            style="display: inline-block; border-radius: 15px;"
                                            onmouseover="this.style.backgroundColor='#222227'; this.style.color='#857568';"
                                            onmouseout="this.style.backgroundColor='#857568'; this.style.color='white';">
                                            {{ __('Register') }}
                                        </a>
                                    </div>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
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
    <section class="widget_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 ">
                    <div class="footer_widget">
                        <img class="mb-15" src="{{ asset('img/logo (2).png') }}" alt="Brand"
                            style="margin-top: -50px">
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
                <div class="col-md-4 col-lg-4 ">
                    <div class="footer_widget">
                        <h3>Headquaters</h3>
                        <p>Aptech Metro Star Gate Shah Faisal Colony Flyover, Faisal Cantonment, Karachi, Karachi City,
                            Sindh
                        </p>
                        <h3>Phone No.</h3>
                        <p>+92 3324428634</p>
                        <p>+92 3101259848</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 ">
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

            </div>
        </div>
    </section>

    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 ">
                    <div class="copyright">&copy;
                        <script type="text/javascript">
                            document.write(new Date().getFullYear())
                        </script> All Rights Reserved By Elegance

                    </div>
                </div>
                <div class="col-md-4 col-lg-4 ">
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

    <!-- JavaScript Links -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.isotope.v3.0.2.js') }}"></script>
    <script src="{{ asset('js/vendor/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/vendor/venobox.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/appointment.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>


</html>
{{-- Footer end --}}
