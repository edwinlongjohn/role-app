@php
$route = Route::currentRouteName();
@endphp
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from pixner.net/bankio/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Jan 2023 04:55:40 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bankio - HTML Template</title>

    <link rel="shortcut icon" href="/assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="/assets/css/plugin/slick.css">
    <link rel="stylesheet" href="/assets/css/arafat-font.css">
    <link rel="stylesheet" href="/assets/css/plugin/animate.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    @if ($route == 'register')

    <!-- header-section start -->
    <header class="header-section register">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar d-flex justify-content-between navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="index-2.html">
                            <img src="/assets/images/logo.png" class="logo" alt="logo">
                        </a>
                        <div class="d-flex align-items-center justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    Already have account
                                </li>
                            </ul>
                            <div class="right-area header-action d-flex align-items-center">
                                <a href="{{route('login')}}" class="cmn-btn">Login Now</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->
    @elseif($route == 'login')
         <!-- header-section start -->
    <header class="header-section register login">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar d-flex justify-content-between navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="index-2.html">
                            <img src="/assets/images/logo.png" class="logo" alt="logo">
                        </a>
                        <div class="d-flex align-items-center justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    Don't have an account
                                </li>
                            </ul>
                            <div class="right-area header-action d-flex align-items-center">
                                <a href="{{route('register')}}" class="cmn-btn">Register</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->
    @else
    <!-- header-section start -->
    <header class="header-section">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index-2.html">
                            <img src="/assets/images/logo.png" class="logo" alt="logo">
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar-content">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index-2.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="about.html">About Us</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                            <div class="right-area header-action d-flex align-items-center">
                                <a href="{{route('register')}}" class="cmn-btn">Open Account</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->
    @endif


    {{$slot}}

    <!-- Footer Area Start -->
    <div class="footer-section">
        <div class="container pt-120">
            <div class="row cus-mar pt-120 pb-120 justify-content-between wow fadeInUp">
                <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                    <div class="footer-box">
                        <a href="index-2.html" class="logo">
                            <img src="/assets/images/logo.png" alt="logo">
                        </a>
                        <p>A modern, technology-first bank built for you and your growing business.</p>
                        <div class="social-link d-flex align-items-center">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="footer-box">
                        <h5>Company</h5>
                        <ul class="footer-link">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="about.html">Awards</a></li>
                            <li><a href="career-single.html">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="footer-box">
                        <h5>Useful Links</h5>
                        <ul class="footer-link">
                            <li><a href="product.html">Products</a></li>
                            <li><a href="business-loan.html">Business Loan</a></li>
                            <li><a href="affiliate.html">Affiliate Program</a></li>
                            <li><a href="blog-list.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="footer-box">
                        <h5>Support</h5>
                        <ul class="footer-link">
                            <li><a href="https://pixner.net/cdn-cgi/l/email-protection#becdcbceced1cccafedcdfd0d5d7d1"><span
                                        class="__cf_email__"
                                        data-cfemail="d88bada8a8b7aaac98bab9b6b3b1b7">[email&#160;protected]</span></a>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="faqs.html">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-8">
                    <div class="footer-box">
                        <h5>Subscribe</h5>
                        <form>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Your Email address">
                                <button class="cmn-btn">Subscribe</button>
                            </div>
                        </form>
                        <p>Get the latest updates via email. Any time you may unsubscribe</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom">
                        <div class="left">
                            <p> Copyright © <a href="index-2.html">Bankio</a> | Designed by
                                <a href="https://themeforest.net/user/pixelaxis">PIXELAXIS</a>
                            </p>
                        </div>
                        <div class="right">
                            <a href="privacy-policy.html" class="cus-bor">Privacy </a>
                            <a href="terms-conditions.html">Terms &amp; Condition </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-area">
            <img src="/assets/images/footer-Illu-left.png" class="left" alt="Images">
            <img src="/assets/images/footer-Illu-right.png" class="right" alt="Images">
        </div>
    </div>
    <!-- Footer Area End -->

    <!--==================================================================-->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/fontawesome.js"></script>
    <script src="/assets/js/plugin/slick.js"></script>
    <script src="/assets/js/plugin/jquery.nice-select.min.js"></script>
    <script src="/assets/js/plugin/wow.min.js"></script>
    <script src="/assets/js/plugin/plugin.js"></script>
    <script src="/assets/js/main.js"></script>
</body>


<!-- Mirrored from pixner.net/bankio/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Jan 2023 04:56:54 GMT -->

</html>
