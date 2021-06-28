<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/homestay/bookinglong/1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/homestay/bookinglong/1/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/homestay/bookinglong/1/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="/homestay/bookinglong/1/css/linearicons.css" type="text/css">
    <link rel="stylesheet" href="/homestay/bookinglong/1/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/homestay/bookinglong/1/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/homestay/bookinglong/1/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/homestay/bookinglong/1/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/homestay/bookinglong/1/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/homestay/bookinglong/1/css/style.css" type="text/css">

    <!--Flaticon-->
    <style>
        @font-face {
            font-family: "flaticon";
            src: url("1/css/flaticon.ttf?61e8bfe635f9d68b3988e34050961be5") format("truetype"),
            url("1/css/flaticon.woff?61e8bfe635f9d68b3988e34050961be5") format("woff"),
            url("1/css/flaticon.woff2?61e8bfe635f9d68b3988e34050961be5") format("woff2"),
            url("1/css/flaticon.eot?61e8bfe635f9d68b3988e34050961be5#iefix") format("embedded-opentype"),
            url("1/css/flaticon.svg?61e8bfe635f9d68b3988e34050961be5#flaticon") format("svg");
        }

        i[class^="flaticon-"]:before, i[class*=" flaticon-"]:before {
            font-family: flaticon !important;
            font-style: normal;
            font-weight: normal !important;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .flaticon-bed:before {
            content: "\f101";
        }
        .flaticon-air-conditioner:before {
            content: "\f102";
        }
        .flaticon-usb-cable:before {
            content: "\f103";
        }
        .flaticon-fruits:before {
            content: "\f104";
        }
        .flaticon-shower:before {
            content: "\f105";
        }
        .flaticon-wifi-signal:before {
            content: "\f106";
        }
        .flaticon-tv-monitor:before {
            content: "\f107";
        }
        .flaticon-coffee:before {
            content: "\f108";
        }
        .flaticon-coffee-cup:before {
            content: "\f109";
        }
        .flaticon-fridge:before {
            content: "\f10a";
        }
    </style>
    <!--End Flaticon-->

    <!-- Header-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="header.css">

    <style>
        .hero {
            width: 100%;
            height: 100vh;
            background: url("./images/hero_background.jpg") center no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            z-index: 0;
        }

        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: inherit;
            height: inherit;
            background-color: var(--purple-transparent-alt);
            z-index: -1;
        }

        .main-heading {
            color: #fff;
            line-height: 1;
            text-shadow: 1px 1px 1rem rgba(0, 0, 0, .5);
            margin-bottom: 2.5rem;
        }

        .title {
            font-size: 4.8rem;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .sub-title {
            font-size: 3.6rem;
            font-weight: 300;
            font-family: 'Courgette', cursive;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section other-page">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="top-widget">
                    <div class="top-info address">
                        <img src="img/placeholder.png" alt="">
                        <span>Le Loi <br />Da Nang</span>
                    </div>
                    <div class="top-info phone-num">
                        <img src="img/phone.png" alt="">
                        <span>123</span>
                    </div>
                </div>
                <div class="container">
                    <nav class="main-menu mobile-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Rooms</a></li>
                            <li><a href="#">Facilities</a>
                                <ul class="drop-menu">
                                    <li><a href="#">Junior Suit</a></li>
                                    <li><a href="#">Double Room</a></li>
                                    <li><a href="#">Senior Suit</a></li>
                                    <li><a href="#">Single Room</a></li>
                                </ul>
                            </li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/rooms-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Rooms</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="#" class="left-nav"><i class="lnr lnr-arrow-left"></i> Services</a>
                    <a href="#" class="right-nav">News <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Rooms Section Begin -->
    <section class="room-section spad">
        <div class="container">
            <div class="rooms-page-item">
                <div class="row">
                    <?php
                        $server_name = "fdb21.awardspace.net";
                        $username = "3849092_heyshay";
                        $password = "LA@e]eBU1r4O2/3y";
                        $database = "3849092_heyshay";

                        $homestay_id = $_GET['homestay_id'];
                        $conn = new mysqli($server_name, $username, $password, $database);

                        error_log($homestay_id);

                        $sql = "SELECT *
                                FROM homestay_room 
                                INNER JOIN room_detail on homestay_room.room_id = room_detail.room_id
                                
                                WHERE available = 1 AND homestay_id = " . $homestay_id;

                        error_log($sql);

                        $result = $conn->query($sql);
                        while($fetch = $result->fetch_array()){
                            $sql_amenity = "SELECT DISTINCT flaticon, amenity_name
                                            FROM room_amenity
                                            INNER JOIN amenities on room_amenity.amenity_id = amenities.amenity_id
                                            WHERE room_id = ". $fetch['room_id'] ." LIMIT 5";

                            error_log($sql_amenity);
                            $result_amenities = $conn->query($sql_amenity);

                            error_log(print_r($result_amenities, true));
                            $amenities_array = array();
                            $amenities_name = array();

                            while($row=$result_amenities->fetch_assoc()) {
                                $amenities_array[] = $row['flaticon'];
                                $amenities_name[] = $row['amenity_name'];

                                error_log($row['flaticon']);
                                error_log($row['amenity_name']);
                            }
				    ?>
                        <div class="col-lg-6" style="margin-bottom: 10px">
                            <div class="room-pic-slider owl-carousel">
                                <div class="single-room-pic">
                                    <img src = "<?php echo $fetch['image']?>"/>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="room-text">
                                <div class="room-title">
                                    <h2><?php echo $fetch['type_room']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                                    
                                    <div class="room-price">
                                            <span style="margin-right: 5px">From</span>
                                            <h2><?php echo $fetch['price']?></h2>
                                            <sub></sub>

                                    </div>
                                </div>
                        
                                <div class="room-desc">
                                    <p><?php echo "Note: ".$fetch['note']?></p>
                                </div>

                                <div class="room-features">
                                    <?php
                                        for($i = 0; $i < count($amenities_array); $i++) {
                                            if ($i != count($amenities_array) - 1) {
                                                echo '<div class="room-info">
                                                    <i class="'. $amenities_array[$i] .'"></i>
                                                    <span>'. $amenities_name[$i] . '</span>
                                                </div>';
                                            } else {
                                                echo '<div class="room-info last">
                                                    <i class="'. $amenities_array[$i] .'"></i>
                                                    <span>'. $amenities_name[$i] . '</span>
                                                </div>';
                                            }

                                        }
                                    ?>
                                </div>
                                <a href="32.php?room_id=<?php echo $fetch['room_id']?>" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    
                </div>
            </div>
            
                
            
        </div>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="/homestay/bookinglong/img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Location</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-map-marker"></i>
                            <p>Le Loi, <br />Da Nang</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Reception</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>123</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Shuttle Service</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>123</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Restaurant</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>123</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://learn0907.myartsonline.com" target="_blank">Homestay</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                <div class="privacy-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Photo Requests</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="/homestay/bookinglong/js/jquery-3.3.1.min.js"></script>
    <script src="/homestay/bookinglong/js/bootstrap.min.js"></script>
    <script src="/homestay/bookinglong/js/jquery.magnific-popup.min.js"></script>
    <script src="/homestay/bookinglong/js/jquery-ui.min.js"></script>
    <script src="/homestay/bookinglong/js/jquery.nice-select.min.js"></script>
    <script src="/homestay/bookinglong/js/jquery.slicknav.js"></script>
    <script src="/homestay/bookinglong/js/owl.carousel.min.js"></script>
    <script src="/homestay/bookinglong/js/main.js"></script>
    <script src="main_header.js"></script>


</body>

</html>