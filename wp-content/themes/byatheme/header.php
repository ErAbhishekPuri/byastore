<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>he</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Baggage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri();?>/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri();?>/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="<?= get_stylesheet_directory_uri();?>/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body <?php body_class(); ?>>
    <div class="main-sec">
        <!-- //header -->
        <header class="py-sm-3 pt-3 pb-2" id="home">
            <div class="container">
                <!-- nav -->
                <div class="top-w3pvt d-flex">
                    <div id="logo">
                        <h1> <a href="index.html"><span class="log-w3pvt">B</span>aggage</a> <label class="sub-des">Online Store</label></h1>
                    </div>

                    <div class="forms ml-auto">
                        <a href="login.html" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
                        <a href="register.html" class="btn"><span class="fa fa-pencil-square-o"></span> Sign Up</a>
                    </div>
                </div>
                <div class="nav-top-wthree">
                    <nav>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                                </label>
                                <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="coming.html" class="drop-text">Services</a></li>
                                    <li><a href="about.html" class="drop-text">Features</a></li>
                                    <li><a href="single.html" class="drop-text">Single Page</a></li>

                                </ul>
                            </li>

                            <li><a href="shop.html">Collections</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                    <div class="search-form ml-auto">
                        <div class="form-w3layouts-grid">
                            <form action="#" method="post" class="newsletter">
                                <input class="search" type="search" placeholder="Search here..." required="">
                                <button class="form-control btn" value=""><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- //header -->
        <!--/banner-->
        <div class="banner-wthree-info container">
            <div class="row">
                <div class="col-lg-5 banner-left-info">
                    <h3>The Largest Range <span>of HandBags</span></h3>
                    <a href="shop.html" class="btn shop">Shop Now</a>
                </div>

                <div class="col-lg-7 banner-img">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/images/bag.png" alt="part image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
<?php wp_head(); ?>
