<?php

use App\Models\Category;
use Carbon\Carbon;

$date = Carbon::now(); // Replace this with your actual date variable

$formattedDate = $date->format('l, F jS');
$categories = Category::all();
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/sinmun/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 05:57:37 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/animate.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/icofont.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/meanmenu.css" />
    <link rel="stylesheet" href="/frontend/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/style.css" />
    <link rel="stylesheet" href="/frontend/assets/css/dark.css" />
    <link rel="stylesheet" href="/frontend/assets/css/responsive.css" />

    <title>Sinmun - News Magazine & Blogging HTML Template</title>
    <link rel="icon" type="image/png" href="/frontend/assets/img/favicon.png" />
</head>

<body>

    <header class="header-area">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="city-temperature">
                            <i class="icofont-ui-weather"></i> <span>28.5<sup>c</sup></span> <b>Dubai</b>
                        </div>
                        <ul class="top-nav">
                            <li><a href="/">Blog</a></li>
                            <li><a href="/">Forums</a></li>
                            <li><a href="/">Contact</a></li>
                            <li><a href="/">Advertisement</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-4 text-end">
                        <ul class="top-social">
                            <li>
                                <a href="#" target="_blank"><i class="icofont-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="icofont-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="icofont-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="icofont-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="icofont-vimeo"></i></a>
                            </li>
                        </ul>
                        <div class="header-date"><i class="icofont-clock-time"></i><?php echo $formattedDate ?></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-area">
            <div class="sinmun-mobile-nav">
                <div class="logo">
                    <a href="/"><img src="/frontend/assets/img/logo.png" alt="logo" /></a>
                </div>
            </div>
            <div class="sinmun-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html"><img src="/frontend/assets/img/logo.png" alt="logo" /></a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/" class="nav-link active">Home</a>
                                </li>
                                @foreach ($categories as $category )
                                <li class="nav-item"><a href="{{ route('category', ['category' => $category]) }}" class="nav-link">{{$category->name}}</a></li>
                                @endforeach

                            </ul>
                            <div class="others-options">



                                @auth
                                <h1><?php
                                    if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('editor')) { ?>
                                        <a href="{{ route('back')}}"><i class="fa-solid fa-user-tie"></i> admin</a>
                                    <?php
                                    }
                                    ?>
                                </h1>

                                <form action="{{ route('logout')}}" method="post">
                                    @csrf
                                    <div class="d-inline-block">
                                        <button><i class="icofont-logout"></i></button>
                                    </div>
                                </form>
                                @else
                                <div class="d-inline-block">
                                    <a href="{{ route('login')}}"><i class="icofont-user-alt-5"></i></a>
                                </div>

                                @endauth


                                <div class="header-search d-inline-block">
                                    <div class="nav-search">
                                        <div class="nav-search-button"><i class="icofont-ui-search"></i></div>
                                        <form>
                                            <span class="nav-search-close-button" tabindex="0">✕</span>
                                            <div class="nav-search-inner"><input name="search" placeholder="Search here...." /></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="breaking-news">
            <div class="container">
                
            </div>
        </div>
    </header>
    {{ $slot}}
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h3>About The Magazine</h3>
                        <div class="contact-info">
                            <p>You can reach us via phone, email and website. Or send us some message through our Contact Page.</p>
                            <ul>
                                <li><i class="icofont-google-map"></i> 27 Division St, New York, NY 10002, USA</li>
                                <li><i class="icofont-phone"></i> <a href="#">+(587) 234-4521</a></li>
                                <li><i class="icofont-envelope"></i> <a href="#"><span class="__cf_email__" data-cfemail="b3daddd5dcf3c0dadddec6dd9dd0dcde">[email&#160;protected]</span></a></li>
                            </ul>
                        </div>
                        <div class="connect-social">
                            <p>We're social, connect with us:</p>
                            <ul>
                                <li>
                                    <a href="#" target="_blank"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="icofont-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="icofont-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="icofont-rss"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Latest News</h3>
                        <div class="footer-latest-news-list">
                            <div class="media latest-news-media align-items-center">
                                <a href="#"> <img src="/frontend/assets/img/small-2.jpg" alt="image" /> </a>
                                <div class="content">
                                    <ul>
                                        <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                        <li>
                                            <a href="#"><i class="icofont-comment"></i> 12</a>
                                        </li>
                                    </ul>
                                    <h3><a href="#">Gloost Better They Are With A Featured</a></h3>
                                </div>
                            </div>
                            <div class="media latest-news-media align-items-center">
                                <a href="#"> <img src="/frontend/assets/img/small-4.jpg" alt="image" /> </a>
                                <div class="content">
                                    <ul>
                                        <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                        <li>
                                            <a href="#"><i class="icofont-comment"></i> 12</a>
                                        </li>
                                    </ul>
                                    <h3><a href="#">Gloost Better They Are With A Featured</a></h3>
                                </div>
                            </div>
                            <div class="media latest-news-media align-items-center">
                                <a href="#"> <img src="/frontend/assets/img/small-3.jpg" alt="image" /> </a>
                                <div class="content">
                                    <ul>
                                        <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                        <li>
                                            <a href="#"><i class="icofont-comment"></i> 12</a>
                                        </li>
                                    </ul>
                                    <h3><a href="#">Gloost Better They Are With A Featured</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-footer-widget">
                        <h3>Twitter Feed</h3>
                        <div class="twitter-tweet-list">
                            <div class="single-tweet">
                                <i class="icofont-twitter"></i> <span>About 2 days ago</span>
                                <p>Conference Event WordPress Theme -> 2 New Home Added <a href="#">https://tt.co/Rn00zM5q7gY70</a></p>
                            </div>
                            <div class="single-tweet">
                                <i class="icofont-twitter"></i> <span>About 2 days ago</span>
                                <p>Conference Event WordPress Theme -> 2 New Home Added <a href="#">https://tt.co/Rn00zM5q7gY70</a></p>
                            </div>
                            <div class="single-tweet">
                                <i class="icofont-twitter"></i> <span>About 2 days ago</span>
                                <p>Conference Event WordPress Theme -> 2 New Home Added #wordpress #event #conference #wordpresstheme <a href="#">https://tt.co/Rn00zM5q7gY70</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <p>© Sinmun is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="footer-nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forums</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Advertisement</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="go-top"><i class="icofont-swoosh-up"></i></div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/frontend/assets/js/jquery.min.js"></script>
    <script src="/frontend/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/frontend/assets/js/jquery.meanmenu.js"></script>
    <script src="/frontend/assets/js/mixitup.min.js"></script>
    <script src="/frontend/assets/js/owl.carousel.min.js"></script>
    <script src="/frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/frontend/assets/js/form-validator.min.js"></script>
    <script src="/frontend/assets/js/contact-form-script.js"></script>
    <script src="/frontend/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/frontend/assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/ecc23a7e0f.js" crossorigin="anonymous"></script>

</body>

<!-- Mirrored from templates.envytheme.com/sinmun/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 05:57:58 GMT -->

</html>