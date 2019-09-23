<?php 
session_start();
?>
<?php 
require 'elements/header.php';
?>

        <!-- End Header Style -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(images/h3.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">

                                <h2 class="bradcaump-title">Welcome to our blog</h2>
                                <h6 class="bradcaump-title" style="color: white">check out our post down below</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- End Gallery Area -->

        <section class="htc__blog__area bg__gray ptb--120">
            <div class="container">
<?php
if ($_SESSION["user"]=="admin") {
	$text='<div class="col text-center">
      <button class="btn btn-default" style="background-color:green " ><a href="addarticle.php">CREATE POST</a></button>
    </div>';
	echo $text;
}

?>


            	
                <div class="row">

                    <div class="htc__blog__wrap clearfix blog--list">

                    
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


         


         
         $sql = 'SELECT titre,DA,image,idart FROM articles';
         $result = mysqli_query($conn, $sql);
       if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {

               ?>


                 <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__thumb">
                                    <a href="blog-details.php">
                                        <img src=" <?php echo ("images/". $row['image']); ?>"
                                        alt="blog image">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <h2><a href="blog-details.php"> <?php echo $row["titre"];
                                    ?> </a></h2>
                                    <ul class="blog__meta">
                                        <li><a href="blog-details.php?P_ID=<?php echo $row['idart'];?> ">Read More</a></li>
                                        <li><?php echo $row["DA"];?> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

<?php

            }
         }
          else {
            echo "0 results";
         }
         mysqli_close($conn); 
      ?>

            
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="htc__page__container">
                            <ul class="older">
                                <li><a href="#"><i class="icofont icofont-long-arrow-left"></i>Older</a></li>
                            </ul>
                            <ul class="pagenation">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                            </ul>
                            <ul class="new">
                                <li><a href="#">New<i class="icofont icofont-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- footer-->
<?php 
require 'elements/footer.php';
?>
<!-- footer -->
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