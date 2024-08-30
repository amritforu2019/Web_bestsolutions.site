<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://landkit.goodthemes.co/assets/favicon/favicon.ico" type="image/x-icon">

    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="https://landkit.goodthemes.co/assets/css/libs.bundle.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="https://landkit.goodthemes.co/assets/css/theme.bundle.css">

    <!-- Title -->
    <title>Excel</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-156446909-2");

    </script>
</head>
<body class="pt-10 bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top bg-white border-bottom">
    <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand" href="https://landkit.goodthemes.co/index.html">
            <img src="https://landkit.goodthemes.co/assets/img/brand.svg" class="navbar-brand-img" alt="...">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fe fe-x"></i>
            </button>

            <!-- Navigation -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarAccount" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarAccount">
                        <li class="dropdown-item dropend">
                            <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                Settings
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/account-general.html">
                                    General
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/account-security.html">
                                    Security
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/account-notifications.html">
                                    Notifications
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/billing-plans-and-payment.html">
                                    Plans & Payment
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/billing-users.html">
                                    Users
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-item dropend">
                            <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                Sign In
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/signin-cover.html">
                                    Side Cover
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/signin-illustration.html">
                                    Illustration
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/signin.html">
                                    Basic
                                </a>
                                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSigninHorizontal">
                                    Modal Horizontal
                                </a>
                                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSigninVertical">
                                    Modal Vertical
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-item dropend">
                            <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                Sign Up
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/signup-cover.html">
                                    Side Cover
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/signup-illustration.html">
                                    Illustration
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/signup.html">
                                    Basic
                                </a>
                                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSignupHorizontal">
                                    Modal Horizontal
                                </a>
                                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSignupVertical">
                                    Modal Vertical
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-item dropend">
                            <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                Password Reset
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/password-reset-cover.html">
                                    Side Cover
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/password-reset-illustration.html">
                                    Illustration
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/password-reset.html">
                                    Basic
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-item dropend">
                            <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                Error
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/error-cover.html">
                                    Side Cover
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/error-illustration.html">
                                    Illustration
                                </a>
                                <a class="dropdown-item" href="https://landkit.goodthemes.co/error.html">
                                    Basic
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Button -->
          <!--  <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="https://themes.getbootstrap.com/product/landkit/" target="_blank">
                Buy now
            </a>-->

        </div>

    </div>
</nav>

<!-- WELCOME -->
<section class="pt-8 pt-md-11 pb-10 pb-md-15 bg-primary">

    <!-- Shape -->
    <div class="shape shape-blur-3 text-white">
        <svg viewBox="0 0 1738 487" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h1420.92s713.43 457.505 0 485.868C707.502 514.231 0 0 0 0z" fill="url(#paint0_linear)"/><defs><linearGradient id="paint0_linear" x1="0" y1="0" x2="1049.98" y2="912.68" gradientUnits="userSpaceOnUse"><stop stop-color="currentColor" stop-opacity=".075"/><stop offset="1" stop-color="currentColor" stop-opacity="0"/></linearGradient></defs></svg>      </div>

    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">

                <!-- Heading -->
                <h1 class="display-2 text-white">
                  Excel
                </h1>

                <!-- Text -->
               <!-- <p class="lead text-white text-opacity-80 mb-6 mb-md-8">
                    All types of businesses need access to development resources, so we give you the option to decide how much you need to use.
                </p>-->

                <!-- Form -->

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

</section>

<!-- SHAPE -->
<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
</div>

<!-- PRICING -->

<!-- ENTERPRISE -->
<section class="py-8 py-md-11">
    <div class=".container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12  ">

                <!-- Badge -->
            <!--    <span class="badge rounded-pill text-bg-primary-desat-subtle mb-3">
              <span class="h6 text-uppercase">Enterprise</span>
            </span>-->

                <!-- Heading -->
               <!-- <h2>
                    Business grade quality <span class="fw-bold text-primary-desat">for all plans</span>.
                </h2>


                <p class="fs-lg text-body-secondary mb-7 mb-md-9">
                    Build a beautiful, modern website with our flexible Bootstrap components all built from scratch.
                </p>-->

                <table style="font-size: 20px;" class="table table-sm text-center table-responsive">
                    <thead>
                    <tr class="table-secondary">
                        <th scope="col">Num</th>
                        <th scope="col">Ans</th>
                        <th scope="col">Num</th>
                        <th scope="col">Ans</th>
                        <th scope="col">Num</th>
                        <th scope="col">Ans</th>
                        <th scope="col">Num</th>
                        <th scope="col">Ans</th>
                        <th scope="col">Num</th>
                        <th scope="col">Ans</th>
                        <th scope="col">Num</th>
                        <th scope="col">Ans</th>
                        <th scope="col">Num</th>
                        <th scope="col">Ans</th>
                        <th scope="col">Num</th>
                        <th scope="col">Ans</th>
                        <th scope="col">Num</th>
                        <th scope="col">Ans</th>
                        <th scope="col">Num</th>
                        <th scope="col">Ans</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    function splitter_data($val)
                    {
                        //echo $val.'<br>';
                        if(strlen($val)>6  )
                        {
                            $ary = str_split($val, 3);
                            $ary1 = str_split($val, 3);
                            $ary1_sub = str_split($ary1[1], 1);
                            $ary2 = str_split($val, 4);
                            return $ary[0] . '-' . $ary1_sub[0]. '-' . $ary2[1];
                        }
                        if(strlen($val)<=6 && strlen($val)>3)
                        {
                            $ary = str_split($val, 3);
                            return $ary[0] . '-' . $ary[1];
                        }
                        if(strlen($val)<=3)
                            return $val;
                    }

                    for($x=1;$x<=10;$x++)
                    {
                    for($a=1;$a<=100;$a++)
                    {
                        $calc=$a ;
                     if($x==2)
                         $calc=$a+1000;
                     if($x==3)
                         $calc=$a+2000;
                     if($x==4)
                         $calc=$a+3000;
                     if($x==5)
                         $calc=$a+4000;
                     if($x==6)
                         $calc=$a+5000;
                     if($x==7)
                         $calc=$a+6000;
                     if($x==8)
                         $calc=$a+7000;
                     if($x==9)
                         $calc=$a+8000;
                     if($x==10)
                         $calc=$a+9000;

                        ?>
                    <tr>

                        <th scope="row" style="background: #002f74; color: #ffff1f;"  ><?php echo $calc;?></th>
                        <th style="background: #ffff1f; color: #002f74;"><?php $res=$calc*555;  echo splitter_data($res);?></th>

                        <th scope="row"  style="background: #002f74; color: #ffff1f;"><?php echo $calc+100;?></th>
                        <th style="background: #ffff1f; color: #002f74;"><?php $res= ($calc+10)*555; echo splitter_data($res);?></th>

                        <th scope="row"  style="background: #002f74; color: #ffff1f;"><?php echo $calc+200;?></th>
                        <th style="background: #ffff1f; color: #002f74;"><?php $res=($calc+20)*555; echo splitter_data($res);?></th>

                        <th scope="row"  style="background: #002f74; color: #ffff1f;"><?php echo $calc+300;?></th>
                        <th style="background: #ffff1f; color: #002f74;"><?php $res= ($calc+30)*555; echo splitter_data($res);?></th>

                        <th scope="row"  style="background: #002f74; color: #ffff1f;"><?php echo $calc+400;?></th>
                        <th style="background: #ffff1f; color: #002f74;"><?php $res= ($calc+40)*555; echo splitter_data($res);?></th>

                        <th scope="row"  style="background: #002f74; color: #ffff1f;"><?php echo $calc+500;?></th>
                        <th style="background: #ffff1f; color: #002f74;"><?php $res= ($calc+50)*555; echo splitter_data($res);?></th>

                        <th scope="row"  style="background: #002f74; color: #ffff1f;"><?php echo $calc+600;?></th>
                        <th style="background: #ffff1f; color: #002f74;"><?php $res= ($calc+60)*555; echo splitter_data($res);?></th>

                        <th scope="row"  style="background: #002f74; color: #ffff1f;"><?php echo $calc+700;?></th>
                        <th style="background: #ffff1f; color: #002f74;"><?php $res= ($calc+70)*555; echo splitter_data($res);?></th>

                        <th scope="row"  style="background: #002f74; color: #ffff1f;"><?php echo $calc+800;?></th>
                        <th style="background: #ffff1f; color: #002f74;"><?php $res= ($calc+80)*555; echo splitter_data($res);?></th>

                        <th scope="row"  style="background: #002f74; color: #ffff1f;"><?php echo $calc+900;?></th>
                        <th style="background: #ffff1f; color: #002f74;"><?php $res= ($calc+90)*555; echo splitter_data($res);?></th>

                     </tr>
                        <?php
                        if($a%10==0)
                        {
                            ?>
                            <tr>
                                <th scope="row"  colspan="20" class="table-dark"><br> </th>
                            </tr>
                            <tr>
                                <th scope="row"  colspan="20" class=" "> <br></th>
                            </tr>
                            <?php
                        }
                        ?>
                    <?php   } ?>
                    <!--    <tr>
                            <th scope="row"  colspan="20" class="table-dark"><br> </th>
                        </tr>
                        <tr>
                            <th scope="row"  colspan="20" class=" "> <br></th>
                        </tr>-->
                    <?php   } ?>


                    </tbody>
                </table>

            </div>
        </div> <!-- / .row -->

    </div> <!-- / .container -->
</section>

<!-- SHAPE -->
<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
</div>



<!-- FOOTER -->
<footer class="py-8 py-md-11 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">

                <!-- Brand -->
                <img src="https://landkit.goodthemes.co/assets/img/brand.svg" alt="..." class="footer-brand img-fluid mb-2">

                <!-- Text -->
                <p class="text-gray-700 mb-2">
                    A better way to build.
                </p>

                <!-- Social -->
                <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
                    <li class="list-inline-item list-social-item me-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="https://landkit.goodthemes.co/assets/img/icons/social/instagram.svg" class="list-social-icon" alt="...">
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item me-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="https://landkit.goodthemes.co/assets/img/icons/social/facebook.svg" class="list-social-icon" alt="...">
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item me-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="https://landkit.goodthemes.co/assets/img/icons/social/twitter.svg" class="list-social-icon" alt="...">
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item">
                        <a href="#!" class="text-decoration-none">
                            <img src="https://landkit.goodthemes.co/assets/img/icons/social/pinterest.svg" class="list-social-icon" alt="...">
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Products
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-body-secondary mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Page Builder
                        </a>
                    </li>

                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Services
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-body-secondary mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>

                </ul>

            </div>
            <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Connect
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-body-secondary mb-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Page Builder
                        </a>
                    </li>

                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Legal
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-body-secondary mb-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>

                </ul>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</footer>

<!-- JAVASCRIPT -->
<!-- Map JS -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Vendor JS -->
<script src="https://landkit.goodthemes.co/assets/js/vendor.bundle.js"></script>

<!-- Theme JS -->
<script src="https://landkit.goodthemes.co/assets/js/theme.bundle.js"></script>

</body>
</html>
