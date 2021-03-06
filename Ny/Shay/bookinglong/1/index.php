<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel | Template</title>

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
                        <span>1525 Boring Lane, Los <br />Angeles, CA</span>
                    </div>
                    <div class="top-info phone-num">
                        <img src="img/phone.png" alt="">
                        <span>+1 (603)535-4592</span>
                    </div>
                </div>
                <div class="container">
                    <nav class="main-menu mobile-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./about-us.html">About</a></li>
                            <li><a href="./rooms.html">Rooms</a></li>
                            <li><a href="#">Facilities</a>
                                <ul class="drop-menu">
                                    <li><a href="#">Junior Suit</a></li>
                                    <li><a href="#">Double Room</a></li>
                                    <li><a href="#">Senior Suit</a></li>
                                    <li><a href="#">Single Room</a></li>
                                </ul>
                            </li>
                            <li><a href="./news.html">News</a></li>
                            <li><a href="./contact.html">Contact</a></li>
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
                                            $homestay_id = 19004;
                                            $conn = new mysqli($server_name, $username, $password, $database);
                        $sql = "SELECT *
                                                    FROM homestay_room 
                                                    INNER JOIN room_detail on homestay_room.room_id = room_detail.room_id
                                                    WHERE available = 1 AND homestay_id = " . $homestay_id;

                
                        $result = $conn->query($sql);
                        while($fetch = $result->fetch_array()){
				    ?>
                        <div class="col-lg-6">
                            <div class="room-pic-slider owl-carousel">
                                <div class="single-room-pic">
                                    <img src = "<?php echo $fetch['img']?>"/>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="room-text">
                                <div class="room-title">
                                    <h2><?php echo $fetch['type_room']?></h2>
                                    
                                    <div class="room-price">
                                            <span>From</span>
                                            <h2><?php echo $fetch['price']?></h2>
                                            <sub></sub>

                                    </div>
                                </div>
                        
                                <div class="room-desc">
                                    <p><?php echo "Note: ".$fetch['note']?></p>
                                </div>
                                <div class="room-features">
                                    <div class="room-info">
                                        <i class="flaticon-019-television"></i>
                                        <span>Smart TV</span>
                                    </div>
                                    <div class="room-info">
                                        <i class="flaticon-029-wifi"></i>
                                        <span>High Wi-fii</span>
                                    </div>
                                    <div class="room-info">
                                        <i class="flaticon-003-air-conditioner"></i>
                                        <span>AC</span>
                                    </div>
                                    <div class="room-info">
                                        <i class="flaticon-036-parking"></i>
                                        <span>Parking</span>
                                    </div>
                                    <div class="room-info last">
                                        <i class="flaticon-007-swimming-pool"></i>
                                        <span>Pool</span>
                                    </div>
                                </div>
                                <a href="add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
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
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Location</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-map-marker"></i>
                            <p>1525 Boring Lane, <br />Los Angeles, CA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Reception</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Shuttle Service</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Restaurant</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://learn0907.myartsonline.com" target="_blank">Homestay</a>
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
    <script src="/homestay/bookinglong/1/js/jquery-3.3.1.min.js"></script>
    <script src="/homestay/bookinglong/1/js/bootstrap.min.js"></script>
    <script src="/homestay/bookinglong/1/js/jquery.magnific-popup.min.js"></script>
    <script src="/homestay/bookinglong/1/js/jquery-ui.min.js"></script>
    <script src="/homestay/bookinglong/1/js/jquery.nice-select.min.js"></script>
    <script src="/homestay/bookinglong/1/js/jquery.slicknav.js"></script>
    <script src="/homestay/bookinglong/1/js/owl.carousel.min.js"></script>
    <script src="/homestay/bookinglong/1/js/main.js"></script>
</body>

</html>