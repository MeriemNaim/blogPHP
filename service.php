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
                                <h2 class="bradcaump-title">Category</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Service Area -->
        <section class="htc__service__area service--page bg__gray ptb--120">
            <div class="container">
                <div class="row">
                    <div class="htc__service__wrap">
                        <!-- Start Single Service -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="service foo">
                                <div class="service__thumb">
                                    <a href="service.php">
                                        <img style="width:370px height:260px" src="images/test.jpg" alt="service img">
                                    </a>
                                </div>
                                <div class="service__details">
                                    <h2><a href="BlogCatDetail.php?ID=1">gardening</a></h2>
                                    <p>It is a long established fact that a reader will be distracted by readable</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
        
                        <!-- Start Single Service -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="service foo">
                                <div class="service__thumb">
                                    <a href="service.php">
                                        <img style="width:370px height:260px" src="images/eco.jpg" alt="service img">
                                    </a>
                                </div>
                                <div class="service__details">
                                    <h2><a href="BlogCatDetail.php?ID=2">flowers</a></h2>
                                    <p>It is a long established fact that a reader will be distracted by readable</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="service foo">
                                <div class="service__thumb">
                                    <a href="service.php">
                                        <img style="width:370px height:260px" src="images/eco.jpg" alt="service img">
                                    </a>
                                </div>
                                <div class="service__details">
                                    <h2><a href="BlogCatDetail.php?ID=3">trees</a></h2>
                                    <p>It is a long established fact that a reader will be distracted by readable</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="service foo">
                                <div class="service__thumb">
                                    <a href="service.php">
                                        <img style="width:370px height:260px" src="images/test.jpg" alt="service img">
                                    </a>
                                </div>
                                <div class="service__details">
                                    <h2><a href="BlogCatDetail.php?ID=4">volunteering</a></h2>
                                    <p>It is a long established fact that a reader will be distracted by readable</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->

        <!-- Start Footer Area -->
        <?php 
require 'elements/footer.php';
?>
<!-- end Footer Area -->
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