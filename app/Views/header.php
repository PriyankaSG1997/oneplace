<!DOCTYPE html>
<html lang="en">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>One-Place</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="<?=base_url(); ?>public/frontend/assets/css/bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="<?=base_url(); ?>public/frontend/assets/css/main.css">
<link rel="stylesheet" href="<?=base_url(); ?>public/frontend/assets/css/blue.css">
<link rel="stylesheet" href="<?=base_url(); ?>public/frontend/assets/css/owl.carousel.css">
<link rel="stylesheet" href="<?=base_url(); ?>public/frontend/assets/css/owl.transitions.css">
<link rel="stylesheet" href="<?=base_url(); ?>public/frontend/assets/css/animate.min.css">
<link rel="stylesheet" href="<?=base_url(); ?>public/frontend/assets/css/rateit.css">
<link rel="stylesheet" href="<?=base_url(); ?>public/frontend/assets/css/bootstrap-select.min.css">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="<?=base_url(); ?>public/frontend/assets/css/font-awesome.css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="icon" href="<?=base_url(); ?>public/assests/images/One-Place1.png" type="image/x-icon">

<style>
  
.slider-container {
        position: relative;
        width: 100%;
        overflow: hidden;
      }
      
      .image-slider {
        display: none;
        transition: opacity 1s ease-in-out;
      }
      
      .image-slider.active {
        display: block;
        opacity: 1;
      }

/* Modal Overlay */
.modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: none; /* Hidden by default */
  justify-content: center; /* Horizontally center */
  align-items: center; /* Vertically center */
}

/* Modal Content */
.modal-content {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  width: 400px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  position: relative;
  top: 30%;
  left: 35%;
}

/* Close Button */
.close-button {
  position: absolute;
  top: 0px;
  right: 27px;
  cursor: pointer;
  font-size: 40px;
}


/* General Styling for Icons */
.icon-img {
    width: 80px; /* Adjust size as needed */
    height: 80px;
    object-fit: contain; /* Ensures the image fits within the dimensions */
    margin-bottom: 10px;
}

.icon-img1 {
    width: 100%; /* Adjust size as needed */
    height: auto;
    object-fit: contain; /* Ensures the image fits within the dimensions */
    margin-bottom: 10px;
}


/* Modal Content Alignment */


.text-center {
    text-align: center;
}
.register-section{
    padding-top:5%;
}
.brand-logos{
    width: 180px; /* Adjust size as needed */
    height: auto;
}
#userLoginButton, #shopLoginButton{
    padding: 5px 9px !important;
}


</style>
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">

        <!-- ============================================== TOP MENU ============================================== -->
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">
                            <li class="myaccount"><a href="<?= base_url() ?>#"><span>My Account</span></a></li>
                            <li class="wishlist"><a href="<?= base_url() ?>#"><span>Wishlist</span></a></li>
                            <li class="header_cart hidden-xs"><a href="<?= base_url() ?>#"><span>Booking</span></a></li>
                            <li class="login"><a  id="loginButton"><span>Login</span></a></li>
                        </ul>
                    </div>
                    <!-- /.cnt-account -->

                    <div class="cnt-block">
                        <ul class="list-unstyled list-inline">
                           
                            <li class="dropdown dropdown-small lang"> <a href="<?= base_url() ?>#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url() ?>#">English</a></li>
                                    <li><a href="<?= base_url() ?>#">Marathi</a></li>
                                    <li><a href="<?= base_url() ?>#">Hindi</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- /.list-unstyled -->
                    </div>
                    <!-- /.cnt-cart -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.header-top-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.header-top -->
        <!-- ============================================== TOP MENU : END ============================================== -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <!-- ============================================================= LOGO ============================================================= -->
                        <div class="logo">
                            <a href="<?= base_url() ?>home"> <img src="<?=base_url() ?>/public/frontend/assets/images/logo.png" alt="logo" width="200" height="88"> </a>
                        </div>
                        <!-- /.logo -->
                        <!-- ============================================================= LOGO : END ============================================================= -->
                    </div>
                    <!-- /.logo-holder -->

                    <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
                        <!-- /.contact-row -->
                        <!-- ============================================================= SEARCH AREA ============================================================= -->
                        <div class="search-area">
                            <form>
                                <div class="control-group">
                                    <ul class="categories-filter animate-dropdown">
                                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url() ?>category.html">Cities <b class="caret"></b></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="menu-header">Kothrud</li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url() ?>category.html">- Pimpri</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url() ?>category.html">- Chinchwad</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url() ?>category.html">- Baner</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url() ?>category.html">- Wakad</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <input class="search-field" placeholder="Search here..." />
                                    <a class="search-button" href="<?= base_url() ?>#"></a>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-area -->
                        <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                    </div>
                    <!-- /.top-search-holder -->

                    
                    <!-- /.top-cart-row -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.main-header -->
         

        <!-- ============================================== NAVBAR ============================================== -->
        <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="active dropdown"> <a href="<?= base_url() ?>home">Home</a> </li>
                                    <li class="dropdown yamm mega-menu"> <a href="<?= base_url() ?>home" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">vehicles</a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Moped</h2>
                                                            <ul class="links">
                                                                <li><a href="<?= base_url() ?>#">Activa</a></li>
                                                                <li><a href="<?= base_url() ?>#">Jupiter</a></li>
                                                                <li><a href="<?= base_url() ?>#">Jackets</a></li>
                                                                <li><a href="<?= base_url() ?>#">Sunglasses</a></li>
                                                                <li><a href="<?= base_url() ?>#">Sport Wear</a></li>
                                                                <li><a href="<?= base_url() ?>#">Blazers</a></li>
                                                                <li><a href="<?= base_url() ?>#">Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Sport Bike</h2>
                                                            <ul class="links">
                                                                <li><a href="<?= base_url() ?>#">KTM</a></li>
                                                                <li><a href="<?= base_url() ?>#">FZ</a></li>
                                                                <li><a href="<?= base_url() ?>#">Swimwear </a></li>
                                                                <li><a href="<?= base_url() ?>#">Tops</a></li>
                                                                <li><a href="<?= base_url() ?>#">Flats</a></li>
                                                                <li><a href="<?= base_url() ?>#">Shoes</a></li>
                                                                <li><a href="<?= base_url() ?>#">Winter Wear</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Tooroer</h2>
                                                            <ul class="links">
                                                                <li><a href="<?= base_url() ?>#">Royal Infeild</a></li>
                                                                <li><a href="<?= base_url() ?>#">Java</a></li>
                                                                <li><a href="<?= base_url() ?>#">Shirts</a></li>
                                                                <li><a href="<?= base_url() ?>#">Shoes</a></li>
                                                                <li><a href="<?= base_url() ?>#">School Bags</a></li>
                                                                <li><a href="<?= base_url() ?>#">Lunch Box</a></li>
                                                                <li><a href="<?= base_url() ?>#">Footwear</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Offeroding</h2>
                                                            <ul class="links">
                                                                <li><a href="<?= base_url() ?>#">Himalaya </a></li>
                                                                <li><a href="<?= base_url() ?>#">BMW 1000RR</a></li>
                                                                <li><a href="<?= base_url() ?>#">Dresses</a></li>
                                                                <li><a href="<?= base_url() ?>#">Jewellery</a></li>

                                                                <li><a href="<?= base_url() ?>#">Bags</a></li>
                                                                <li><a href="<?= base_url() ?>#">Night Dress</a></li>
                                                                <li><a href="<?= base_url() ?>#">Swim Wear</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="<?=base_url() ?>/public/frontend/assets/images/banners/top-menu-banner.jpg" alt=""> </div>
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu">
                                        <a href="<?= base_url() ?>category.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Electronics </a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Laptops</h2>
                                                            <ul class="links">
                                                                <li><a href="<?= base_url() ?>#">Gaming</a></li>
                                                                <li><a href="<?= base_url() ?>#">Laptop Skins</a></li>
                                                                <li><a href="<?= base_url() ?>#">Apple</a></li>
                                                                <li><a href="<?= base_url() ?>#">Dell</a></li>
                                                                <li><a href="<?= base_url() ?>#">Lenovo</a></li>
                                                                <li><a href="<?= base_url() ?>#">Microsoft</a></li>
                                                                <li><a href="<?= base_url() ?>#">Asus</a></li>
                                                                <li><a href="<?= base_url() ?>#">Adapters</a></li>
                                                                <li><a href="<?= base_url() ?>#">Batteries</a></li>
                                                                <li><a href="<?= base_url() ?>#">Cooling Pads</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Desktops</h2>
                                                            <ul class="links">
                                                                <li><a href="<?= base_url() ?>#">Routers & Modems</a></li>
                                                                <li><a href="<?= base_url() ?>#">CPUs, Processors</a></li>
                                                                <li><a href="<?= base_url() ?>#">PC Gaming Store</a></li>
                                                                <li><a href="<?= base_url() ?>#">Graphics Cards</a></li>
                                                                <li><a href="<?= base_url() ?>#">Components</a></li>
                                                                <li><a href="<?= base_url() ?>#">Webcam</a></li>
                                                                <li><a href="<?= base_url() ?>#">Memory (RAM)</a></li>
                                                                <li><a href="<?= base_url() ?>#">Motherboards</a></li>
                                                                <li><a href="<?= base_url() ?>#">Keyboards</a></li>
                                                                <li><a href="<?= base_url() ?>#">Headphones</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Cameras</h2>
                                                            <ul class="links">
                                                                <li><a href="<?= base_url() ?>#">Accessories</a></li>
                                                                <li><a href="<?= base_url() ?>#">Binoculars</a></li>
                                                                <li><a href="<?= base_url() ?>#">Telescopes</a></li>
                                                                <li><a href="<?= base_url() ?>#">Camcorders</a></li>
                                                                <li><a href="<?= base_url() ?>#">Digital</a></li>
                                                                <li><a href="<?= base_url() ?>#">Film Cameras</a></li>
                                                                <li><a href="<?= base_url() ?>#">Flashes</a></li>
                                                                <li><a href="<?= base_url() ?>#">Lenses</a></li>
                                                                <li><a href="<?= base_url() ?>#">Surveillance</a></li>
                                                                <li><a href="<?= base_url() ?>#">Tripods</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Mobile Phones</h2>
                                                            <ul class="links">
                                                                <li><a href="<?= base_url() ?>#">Apple</a></li>
                                                                <li><a href="<?= base_url() ?>#">Samsung</a></li>
                                                                <li><a href="<?= base_url() ?>#">Lenovo</a></li>
                                                                <li><a href="<?= base_url() ?>#">Motorola</a></li>
                                                                <li><a href="<?= base_url() ?>#">LeEco</a></li>
                                                                <li><a href="<?= base_url() ?>#">Asus</a></li>
                                                                <li><a href="<?= base_url() ?>#">Acer</a></li>
                                                                <li><a href="<?= base_url() ?>#">Accessories</a></li>
                                                                <li><a href="<?= base_url() ?>#">Headphones</a></li>
                                                                <li><a href="<?= base_url() ?>#">Memory Cards</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner">
                                                            <a href="<?= base_url() ?>#"><img alt="" src="<?=base_url() ?>/public/frontend/assets/images/banners/top-menu-banner1.jpg"></a>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.yamm-content -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="<?= base_url() ?>contact.html">Watches</a> </li>

                                    <li class="dropdown"> <a href="<?= base_url() ?>contact.html">Jwellary</a> </li>

                                    <li class="dropdown"> <a href="<?= base_url() ?>contact.html">Farniture</a> </li>
                                    <li class="dropdown"> <a href="<?= base_url() ?>contact.html">Home Dekor</a> </li>

                                    <li class="dropdown"> <a href="<?= base_url() ?>contact.html">Bags</a> </li>



                                    <li class="dropdown"> <a href="<?= base_url() ?>#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><b>Emergency</b></a>
                                        <ul class="dropdown-menu pages">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-menu">
                                                            <ul class="links">
                                                                <li><a href="<?= base_url() ?>home">BloodBank</a></li>
                                                                <li><a href="<?= base_url() ?>category.html">Policestation</a></li>
                                                                <li><a href="<?= base_url() ?>detail.html">Hospital</a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown  navbar-right special-menu"> <a href="<?= base_url() ?>#">Get 30% off on selected items</a> </li>
                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="clearfix"></div>
                            </div>
                            <!-- /.nav-outer -->
                        </div>
                        <!-- /.navbar-collapse -->

                    </div>
                    <!-- /.nav-bg-class -->
                </div>
                <!-- /.navbar-default -->
            </div>
            <!-- /.container-class -->

        </div>
        <!-- /.header-nav -->
        <!-- ============================================== NAVBAR : END ============================================== -->

    </header>
    <div id="loginModal" class="modal" style="display: none;">
    <div class="modal-content row">
        <span class="close-button">&times;</span>
            <div class="brand-logo">
                <img src="<?=base_url(); ?>public/assests/images/One-Place.png" alt="logo" class="brand-logos">
           
           
            </div>
          
        <!-- First Section: Shop Login -->
        <div class="login-section col-lg-6 col-md-6 col-12">
            <div class="icon-and-button text-center">
                <img src="<?=base_url(); ?>public/assests/images/store.png" alt="Shop Icon" class="icon-img1" />
                <a id="shopLoginButton" href="<?=base_url();?>shop-register" class="btn btn-primary mt-3">Shop Register</a>
            </div>
        </div>

        <!-- Second Section: User Login -->
        <div class="login-section col-lg-6 col-md-6 col-12">
            <div class="icon-and-button text-center">
                <img src="<?=base_url(); ?>public/assests/images/user.png" alt="User Icon" class="icon-img1" />
                <a id="userLoginButton" href="<?=base_url();?>user-register" class="btn btn-primary mt-3">User Register</a>
            </div>
        </div>

        <!-- Register Link -->
        <div class="register-section col-lg-12 col-md-12 col-12 text-center ">
            <p>If you have an account, <a href="<?=base_url(); ?>login">Login</a>.</p>
        </div>
    </div>
</div>


