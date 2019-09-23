<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OUR FIRST BLOG</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel Min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/shortcode/header.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="header" class="htc-header">
            <!-- Start Header Top -->
            <div class="htc__header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo/greenin.png" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 hidden-xs">
                            <ul class="htc__contact">
                                <li><a href="#"><span class="bi bi-envelop"></span>greenin11@gmail.com</a></li>
                                <li><a href="#"><span class="bi bi-phone"></span>+8803478397805</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <ul class="social__icon">
                                <li><a href="https://twitter.com/devitemsllc" target="_blank"><i class="icofont icofont-social-twitter"></i></a></li>

                                <li><a href="https://www.instagram.com/devitems/" target="_blank"><i class="icofont icofont-social-instagram"></i></a></li>

                                <li><a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>

                                <li><a href="https://plus.google.com/" target="_blank"><i class="icofont icofont-social-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-md-9 hidden-sm hidden-xs">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="index.php">HOME</a></li>
                                        <li><a href="about.php">About Us</a></li>
<!-- mmmmmmmmmmmmmmmm -->
<li class="drop"><a href="service.php">category</a>
<ul class="dropdown">
<li><a href="#">flower</a></li>
<li><a href="#">trees</a></li>
<li><a href="#">volunteering</a></li>
<li><a href="#">gardening</a></li>

</ul>
</li>
                                           
<!-- mmmmmmmmmmmmmmmmmmmmmmmmm -->

                                        </li>
                                        
                                        <li class="drop"><a href="#">pages</a>
                                            <ul class="dropdown">
                                                <li><a href="blog-list.php">Blog List</a></li>
                                                <!-- <li><a href="blog-sidebar.php">Blog Sidebar</a></li> -->
                                                
                                                <!-- <li><a href="blog-details.php">Blog Details</a></li> -->
                                                <!-- <li><a href="team.php">Team Page</a></li> -->
                                                <li><a href="service.php">Our category</a></li>
                                                <li><a href="about.php">About Us</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-list.php">Blog</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <!-- <li><a href="contact.php">CONTACT</a></li> -->
                                    </ul>
                                </nav>
                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="service.php">SERVICES</a></li>
                                            <li><a href="#">pages</a>
                                                <ul>
                                                    <li><a href="blog-list.php">Blog List</a></li>
                                                    <li><a href="blog-sidebar.php">Blog Sidebar</a></li>
                                                    <li><a href="blog-details.php">Blog Details</a></li>
                                                    <li><a href="team.php">Team Page</a></li>
                                                    <li><a href="service.php">Our Service</a></li>
                                                    <li><a href="about.php">About Us</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog-list.php">Blog</a></li>
                                            <li><a href="gallery.php">Gallery</a></li>
                                            <!-- <li><a href="contact.php">CONTACT</a></li> -->
                                        </ul>
                                    </nav>
                                </div> 
                            </div>
                            <div class="col-md-3 col-sm-8 col-xs-12">
                                <div class="menu__btn hidden-sm hidden-xs">
                                    
                                   <!--  <a class="htc__btn" href="logIn.php">  -->
<?php 
if(isset($_SESSION['statue'])){
    if ($_SESSION['statue']==1) {
        
?> 

        <div class="col text-center">
<button class="btn btn-success text-white"  >
<a class="text-white" href="admin/index.php">Hello 

<?php echo $_SESSION["user"];?> </a></button>
</div> 

<?php 
 // echo  $text; 
    }

} 

else
{ 
    ?> 
    <div class="col text-center">
<button class="htc__btn"  >
<a  class="text-white" href="logIn.php"> LogIN</a></button> </div>';

<?php

}?>
                                         <!-- </a> -->
<?php 
if (isset($_SESSION['user']))
{
$link='<a  class="htc__btn" href="logOut.php"> logout</a>';
echo $link;
}?>
<!-- <a  class="htc__btn" href="logOut.php"> logout</a> -->







                                </div>
                                <div class="menu__text hidden-md hidden-lg">
                                    <a href="index.php">Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
