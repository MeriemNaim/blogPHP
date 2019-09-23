<?php
session_start();

?>
<?php 
require 'elements/header.php';
?>

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(images/h3.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start ContactA Area -->
        <section class="htc__contact__area ptb--120">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line title__line--3">Contact <span class="text--theme">Info</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="htc__google__map">
                            <div class="map-contacts">
                                <div id="googleMap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="htc__contact__wrap clearfix">
                        <!-- Start Single Contact -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="ht__address">
                                <h2>Phone</h2>
                                <div class="ht__address__info">
                                    <p><a href="#">+881564738</a></p>
                                    <p><a href="#">+881564738</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Contact -->
                        <!-- Start Single Contact -->
                        <div class="col-md-3 col-sm-3 col-xs-12 xsmt--40">
                            <div class="ht__address">
                                <h2>Email</h2>
                                <div class="ht__address__info">
                                    <p><a href="#">Trust11@gmail.com</a></p>
                                    <p><a href="#">Trust11@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Contact -->
                        <!-- Start Single Contact -->
                        <div class="col-md-3 col-sm-3 col-xs-12 xsmt--40">
                            <div class="ht__address">
                                <h2>Our Location</h2>
                                <div class="ht__address__info">
                                    <p>323 / 2 melrone</p>
                                    <p>Sydney, Australiya</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Contact -->
                        <!-- Start Single Contact -->
                        <div class="col-md-3 col-sm-3 col-xs-12 xsmt--40">
                            <div class="ht__address">
                                <h2>Social Feed</h2>
                                <ul class="ct__social__link">
                                    <li><a href="https://twitter.com/devitemsllc" target="_blank"><span class="bi bi-twitter"></span></a></li>

                                    <li><a href="#" target="_blank"><span class="bi bi-twitter-bird"></span></a></li>

                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><span class="bi bi-facebook"></span></a></li>

                                    <li><a href="https://plus.google.com/" target="_blank"><span class="bi bi-google"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Contact -->
                    </div>
                </div>
                <div class="row pt--70">
                    <div class="col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line title__line--3">Contact <span class="text--theme">Form</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                        <div class="htc__contact__form__wrap">
                            <div class="contact-form-wrap">
                                <form id="contact-form" action="mail.php" method="post">
                                    <div class="single-contact-form name">
                                        <div class="contact-box name_email">
                                            <input type="text" name="name" placeholder="Your Name*">
                                            <input type="email" name="email" placeholder="Your Email *">
                                        </div>
                                    </div>
                                    <div class="single-contact-form">
                                        <div class="contact-box subject">
                                            <input type="text" name="subject" placeholder="Subject*">
                                        </div>
                                    </div>
                                    <div class="single-contact-form">
                                        <div class="contact-box message">
                                            <textarea name="message"  placeholder="Message*"></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-btn">
                                        <button type="submit" class="htc__btn border__radi--none">Send Now</button>
                                    </div>
                                </form>
                            </div>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End ContactA Area -->
        <!-- Start Footer Area -->
 <?php 
require 'elements/footer.php';
?>
    <!-- Placed js at the end of the document so the pages load faster -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo "></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.7286, 90.3854), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                 styles: 
[
     {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#66ba62"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            }
        ]
    }
]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.7286, 90.3854),
                map: map,
                title: 'Ramble!',
                icon: 'images/icons/map.png',
                animation:google.maps.Animation.BOUNCE

            });
        }
    </script>


    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>