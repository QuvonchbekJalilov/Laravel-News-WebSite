<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/sinmun/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 05:58:37 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/animate.min.css">
        <!-- IcoFont Min CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/icofont.min.css">
        <!-- MeanMenu CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/meanmenu.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/owl.carousel.min.css">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/style.css">
        <!-- Dark CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/dark.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/responsive.css">

        <title>Sinmun - News Magazine & Blogging HTML Template</title>

        <link rel="icon" type="image/png" href="/frontend/assets/img/favicon.png">
    </head>

    <body>

        <!-- Start Login Area -->
        <section class="login-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="login-form">
                        <h3>Please Log In, or <a href="signup.html">Sign Up</a></h3>

                        <div class="row">
                            <div class="col-lg-4">
                                <a href="#" class="facebook">Facebook</a>
                            </div>

                            <div class="col-lg-4">
                                <a href="#" class="google">Google</a>
                            </div>

                            <div class="col-lg-4">
                                <a href="#" class="twitter">Twitter</a>
                            </div>
                        </div>

                        <div class="login-or">
                            <hr>
                            <span>or</span>
                        </div>

                        <form method="post" action="{{route('authenticate')}}">
                            @csrf
                            <div class="form-group">
                                <label for="username"><i class="icofont-ui-user"></i></label>
                                <input name="email" type="text" class="form-control" placeholder="Username or Email">
                            </div>

                            <div class="form-group">
                                <label for="password"><i class="icofont-lock"></i></label>
                                <input name= "password"type="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label class="remember-me">
                                    <input type="checkbox">
                                    Remember Me
                                </label>

                                <a href="{{route('register')}}" class="forgot-password">
                                    Do not have account?
                                </a>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Area -->
        
        <!-- Jquery Min JS -->
        <script src="/frontend/assets/js/jquery.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="/frontend/assets/js/bootstrap.bundle.min.js"></script>
        <!-- MeanMenu JS -->
        <script src="/frontend/assets/js/jquery.meanmenu.js"></script>
        <!-- MixItUp Min JS -->
        <script src="/frontend/assets/js/mixitup.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="/frontend/assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="/frontend/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="/frontend/assets/js/form-validator.min.js"></script>
        <!-- Contact Form Script JS -->
        <script src="/frontend/assets/js/contact-form-script.js"></script>
        <!-- ajaxChimp Min JS -->
        <script src="/frontend/assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Main JS -->
        <script src="/frontend/assets/js/main.js"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/sinmun/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 05:58:37 GMT -->
</html>