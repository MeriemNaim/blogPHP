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
            <div class="container center">
                <div class="row">
                    


                            <?php
//mysqliconect 
require 'DBconect.php';


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
                                // $post_title = $row['titre'];
                                // $post_author = $row['idUser'];
                                // $post_date = $row['DA'];
                                // $post_image = $row['image'];
                                // $post_content = $row['content'];
                                //  $post_date = $row['DA'];
                                ?>
<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                        <div class="blog__details__left">
                            <!-- Start Single SideBar -->
                                <div class="ht__blog__list">
                                    <div class="ht__blog__thumb">
                                        <a href="blog-details.php">
                                            <img src=" <?php echo ("images/". $row['image']); ?>" alt="Blog images">
                                        </a>
                                    </div>
                                    <div class="ht__blog__dtl__inner">
                                        <div class="ht__blog__dtl">
                                            <h2><a href="#"> titre: <?php 
                                            echo $row["titre"];?> There are many variations of this Lorem</a></h2>
                                            <ul class="bl__meta">
                                                <li><i class="icofont icofont-ui-clock"></i><?php 
                                            echo $row["DA"];?></li>
                                               <!--  <li><i class="icofont icofont-open-eye"></i>45 View</li> -->
                                                <!-- 
                                                    <li><a href="#"><i class="icofont icofont-speech-comments"></i>05 Comment </a></li> -->
                                                    <li><a href="EditArt.php"><i class="icofont icofont-speech-comments"></i>Modifier </a></li> 
                                            </ul>
                                        </div>

                                        <div class="ht__bl__dec">
                                          <?php 
                                          echo $row["content"];
                                          ?>

                                      </div>

                                      <?php } // while loop closing bracket?>


                            <div class="ht__bl__admin">
                                <div>Posted By: <span style="color: green"> <?php echo $_SESSION['user']; ?></span>
                                </div>
                            </div>
                            <div class="bl__comment">
                                <h2 class="title__line--5">Comment</h2>
                                <!-- llllllllllllllllllllllllcoment -->

                                <div class="ht__single__comment">
                                    <div class="cmt__thumb">
                                    <?php
//mysqliconect 
require 'DBconect.php';
// echo 'Connected successfully<br>';
                                    $yy = $_GET['P_ID'];
                                    $sql ="SELECT  comment.cmtid,comment.DA,bloguser.username,comment.idart,textcmt FROM comment INNER Join articles ON comment.idart=articles.idart INNER JOIN bloguser ON bloguser.userId = comment.userId WHERE comment.idart=$yy and comment.cmtst=0";

                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <!-- <img src="images/comment/3.jpg" alt="comment images"> -->
                                            <div class="cmt__details">
                                                <h4><a href="#"> <?php echo $row["username"];?> </a></h4>
                                                <span><?php echo $row["DA"];?> </span>
                                                <p><?php echo $row["textcmt"];?></p>
                                            </div>
                                            <?php 
if(isset($_SESSION['statue'])){
    if ($_SESSION['statue']==1) {
        
?> 
                                            <div class="replay__btn">
                                                     <a href="deletecmt.php?CID=<?php echo $row['cmtid']?>&statue=delete&P_ID=<?php echo $row['idart'];?>">Delete</a>
                                            </div>
<?php  }} 
?> 



                                        <?php } } ?>




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

                                            }
                                            ?>
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

        </section>
        <!-- End Blog SideBar -->
<?php 
require 'elements/footer.php';
?>

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