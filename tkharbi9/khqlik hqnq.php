<?php
session_start();

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Details || Greenin - Environment & Non-Profit HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

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
                                        <li><a href="service.php">SERVICES</a></li>
                                        <li class="drop"><a href="#">pages</a>
                                            <ul class="dropdown">
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
                                        <li><a href="contact.php">CONTACT</a></li>
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
                                            <li><a href="contact.php">CONTACT</a></li>
                                        </ul>
                                    </nav>
                                </div> 
                            </div>
                            <div class="col-md-3 col-sm-8 col-xs-12">
                                <div class="menu__btn hidden-sm hidden-xs">
                                    <a class="htc__btn" href="logIn.php"> 
                                        <?php 
                                         if(isset($_SESSION['user']) ){
                                            echo "hello " .$_SESSION['user'];

                                        } 

                                        else
                                        {
                                            echo "logIn";

                                        }?>
                                         </a>
                                         <?php 
if (isset($_SESSION['user']))
 {
    $link='<a  class="htc__btn" href="logOut.php">logout</a>';
    echo $link;
}?>
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
        <!-- End Header Style -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(images/h3.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Blog Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Blog SideBar -->
        <section class="htc__blog__sidebar bg__white ptb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                        <div class="blog__details__left">
                            <!-- Start Single SideBar -->


                             <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";
 
         $conn = mysqli_connect($servername, $username,$password ,$dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         // echo 'Connected successfully<br>';


               if(isset($_GET['P_ID'])){
                   $the_post_id = $_GET['P_ID'];
               } 
               else{
                echo "0 results";
                header("location:blog-list.php");
               }
               $query = "SELECT * FROM articles WHERE idart= $the_post_id";
               $result= mysqli_query($conn,$query);
               // print_r($result);
               while($row=mysqli_fetch_assoc($result)){
                   $post_title = $row['titre'];
                   $post_author = $row['idUser'];
                   $post_date = $row['DA'];
                   $post_image = $row['image'];
                   $post_content = $row['content'];
           ?>

                            <div class="ht__blog__list">
                                <div class="ht__blog__thumb">
                                    <a href="blog-details.php">
                                        <img src=" <?php echo ("images/". $row['image']); ?>" alt="Blog images">
                                    </a>
                                </div>
                                <div class="ht__blog__dtl__inner">
                                    <div class="ht__blog__dtl">
                                        <h2><a href="#"> titre: <?php 
                                               echo $row["titre"];
                                               ?> There are many variations of this Lorem</a></h2>
                                        <ul class="bl__meta">
                                            <li><i class="icofont icofont-ui-clock"></i>23 July 2017</li>
                                            <li><i class="icofont icofont-open-eye"></i>45 View</li>
                                            <li><a href="#"><i class="icofont icofont-speech-comments"></i>05 Comment</a></li>
                                        </ul>
                                    </div>
                                    <div class="ht__bl__dec">
                                              <?php 
                                               echo $row["content"];
                                               ?>
                                        
                                    </div>
               
           <?php
               } // while loop closing bracket
           ?>>







                                    <div class="ht__bl__link">
                                        <ul class="bl__social__link">
                                            <li><a href="https://twitter.com/devitemsllc" target="_blank"><i class="icofont icofont-social-twitter"></i></a></li>

                                            <li><a href="https://www.instagram.com/devitems/" target="_blank"><i class="icofont icofont-social-instagram"></i></a></li>

                                            <li><a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>

                                            <li><a href="https://plus.google.com/" target="_blank"><i class="icofont icofont-social-google-plus"></i></a></li>
                                        </ul>
                                        <ul class="page__btn">
                                            <li><a href="#"><i class="icofont icofont-long-arrow-left"></i>Older</a></li>
                                            <li><a href="#">New<i class="icofont icofont-long-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ht__bl__admin">
<div>
Posted 
By: <span style="color: green"> <?php echo $_SESSION['user']; ?></span>
</div></div>
                            <div class="bl__comment">
                                <h2 class="title__line--5">Comment</h2>

                                <!-- llllllllllllllllllllllllcoment -->
                             <div class="ht__single__comment">
<div class="cmt__thumb">
</div>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";
$conn = mysqli_connect($servername, $username,$password ,$dbname);
if(! $conn ) {
die('Could not connect: ' . mysqli_error());
}
// echo 'Connected successfully<br>';
$yy = $_GET['P_ID'];
$sql ="SELECT comment.DA,bloguser.username,comment.idart,textcmt FROM comment INNER Join articles ON comment.idart=articles.idart INNER JOIN bloguser ON bloguser.userId = comment.userId WHERE comment.idart=$yy";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
?>
<!-- <img src="images/comment/3.jpg" alt="comment images"> -->
<div class="cmt__details">
<h4><a href="#"> <?php echo $row["username"];?> </a></h4>
<span><?php echo $row["DA"];?> </span>
<p><?php echo $row["textcmt"];?></p>
<div class="replay__btn">
<!--  <a href="#"><i class="icofont icofont-reply"></i>replay</a> -->
</div>
</div>
</div>
</div>
</div>


<div class="bl__comment__form">

<h2 class="title__line--5">Leave A Comment</h2>
                                
<div class="ht__comment__form__inner">
<a class="htc__btn" href="#"> 
<?php 
if(isset($_SESSION['user']) ){
echo "hello " .$_SESSION['user'];

} 

else
{
echo "logIn";

}?>
</a>
<?php 
if (isset($_SESSION['user']))
{
$link='<a  class="htc__btn" href="logOut.php"> logout</a>';
echo $link;
}?>
                                    <form action="coments.php" method="post" >
                                     <input type="hidden" name="id_article" value="<?php echo $_GET['P_ID']; ?> ">
                                    <div class="ht__single__cmnt__form">
                                        <input type="text" name="comment" placeholder="comment">
                                    </div>
                                    <div class="cmnt__btn">
                                        
                                    <input class="htc__btn"value="comment" type="submit" name="save">
                                        
                                    </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 smt--40 xsmt--40">
                        <div class="ht__sidebar__wrap">
                            Start Search Area
                            <div class="ht__search">
                                <input type="text" placeholder="Search...">
                                <a href="#"><i class="icofont icofont-ui-search"></i></a>
                            </div> -->
                            <!-- End Search Area -->
                            <!-- Start Category Area -->
                            <!-- <div class="ht__cat">
                                <h2 class="title__line--4">Categories</h2>
                                <ul class="cat__list">
                                    <li><a href="#">Garden Care ( 02 )</a></li>
                                    <li><a href="#">About Greein ( 04 )</a></li>
                                    <li><a href="#">Plan Of Design ( 03 )</a></li>
                                    <li><a href="#">Our Honourable Work ( 07 )</a></li>
                                    <li><a href="#">New Work Project ( 05 )</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <!-- End Blog SideBar -->










        <!-- Start Footer Area -->
        <footer class="htc__footer__area bg__dark">
            <div class="footer__container ptb--90">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <div class="footer">
                                <h2 class="ft__title">About Gardenin</h2>
                                <div class="ft__details">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical. Lorem Ipsum is not simply random text.</p>
                                </div>
                                <ul class="team__social__link">
                                    <li><a href="https://twitter.com/devitemsllc" target="_blank"><i class="icofont icofont-social-twitter"></i></a></li>

                                    <li><a href="https://www.instagram.com/devitems/" target="_blank"><i class="icofont icofont-social-instagram"></i></a></li>

                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>

                                    <li><a href="https://plus.google.com/" target="_blank"><i class="icofont icofont-social-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Start Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12 xsmt--40">
                            <div class="footer">
                                <h2 class="ft__title">Latest Blog</h2>
                                <div class="ft__blog__inner">
                                    <div class="ft__blog">
                                        <div class="ft__bl__thumb">
                                            <a href="blog-details.php">
                                                <img src="images/blog/sm-img/1.jpg" alt="blog img">
                                            </a>
                                        </div>
                                        <div class="ft__bl__details">
                                            <h2><a href="blog-details.php">A new experience for a  new hope and future.</a></h2>
                                            <span>08 july 2017</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ft__blog__inner">
                                    <div class="ft__blog">
                                        <div class="ft__bl__thumb">
                                            <a href="blog-details.php">
                                                <img src="images/blog/sm-img/2.jpg" alt="blog img">
                                            </a>
                                        </div>
                                        <div class="ft__bl__details">
                                            <h2><a href="blog-details.php">Don’t make experience for a  new hope and future.</a></h2>
                                            <span>08 july 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="col-md-2 col-lg-3 col-sm-6 col-xs-12 smt--40 xsmt--40">
                            <div class="footer">
                                <h2 class="ft__title">Quick Link</h2>
                                <ul class="ht__link">
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="service.php">Greenin Services</a></li>
                                    <li><a href="#">Client Feedback</a></li>
                                    <li><a href="#">Tearms & Condition</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Start Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 smt--40 xsmt--40">
                            <div class="footer">
                                <h2 class="ft__title">Quick Conatact</h2>
                                <ul class="ht__contact">
                                    <li><a href="#"><i class="icofont icofont-location-pin"></i>10/2 South hils, melborn, Australia</a></li>
                                    <li><a href="#"><i class="icofont icofont-phone"></i>+883467256439</a></li>
                                    <li><a href="#"><i class="icofont icofont-email"></i>gardenin11@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Start Single Widget -->
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="copyright__inner">
                                <p>Copyright<i class="icofont icofont-copyright"></i>2017 Garden ALL Right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>