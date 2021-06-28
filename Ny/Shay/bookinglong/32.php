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
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/linearicons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
                    <span>Le Loi, Da <br />Nang</span>
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
<section class="hero-section set-bg" data-setbg="img/contact-bg.jpg">
    <div class="hero-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Reservation</h1>
                </div>
            </div>
            <div class="page-nav">
                <a href="#" class="left-nav"><i class="lnr lnr-arrow-left"></i> News</a>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-left">
                    <div class="contact-information">
                        <h2>Contact Information</h2>
                        <?php
                        $server_name = "fdb21.awardspace.net";
                        $username = "3849092_heyshay";
                        $password = "LA@e]eBU1r4O2/3y";
                        $database = "3849092_heyshay";
                        $room_id = $_GET['room_id'];

                        $conn = new mysqli($server_name, $username, $password, $database);
                        $sql = "SELECT *
                                                    FROM room_detail 
                                                    WHERE room_id = $room_id" or die(mysqli_error()) ;
                        $result = $conn->query($sql);
                        $fetch = $result->fetch_array();
                        ?>
                        <div><img src = "<?php echo $fetch['img']?>" alt=""> </div>
                        <ul>

                            <li><img src="img/phone-copy.png" alt=""> <span>123</span></li>
                            <li><img src="img/envelop.png" alt=""> <span>123@gmail.com</span></li>
                            <li><img src="img/clock-copy.png" alt=""> <span>Everyday: 06:00 -22:00</span></li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <h2>Follow us on:</h2>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h5>Write us ...</h5>
                    <form method = "POST" action="reply_reserve.php?room_id=<?php echo $room_id;?>" enctype = "multipart/form-data">
                        <div class = "form-group">
                            <label>Firstname</label>
                            <input type = "text" class = "form-control" name = "firstname" required = "required" />
                        </div>

                        <div class = "form-group">
                            <label>Lastname</label>
                            <input type = "text" class = "form-control" name = "lastname" required = "required" />
                        </div>
                        <div class = "form-group">
                            <label>Address</label>
                            <input type = "text" class = "form-control" name = "address" required = "required" />
                        </div>
                        <div class = "form-group">
                            <label>Contact No</label>
                            <input type = "text" class = "form-control" name = "contactno" required = "required" />
                        </div>
                        <div class = "form-group">
                            <label>Check in</label>
                            <input type = "date" class = "form-control" name = "date" required = "required" />
                        </div>
                        <div class = "form-group">
                            <label>Check out</label>
                            <input type = "date" class = "form-control" name = "date1" required = "required" />
                        </div>
                        <br />
                        <div class = "form-group">
                            <?php

                            require_once 'connect.php';
                            if (isset($_POST['add_guest'])) {
                                $firstname = $_POST['firstname'];
                                $middlename = $_POST['middlename'];
                                $lastname = $_POST['lastname'];
                                $address = $_POST['address'];
                                $contactno = $_POST['contactno'];
                                $checkin = $_POST['date'];

                                //Random string
                                function random_str(
                                    $length = 64,
                                    $keyspace = '0123456789'
                                )
                                {
                                    if ($length < 1) {
                                        throw new \RangeException("Length must be a positive integer");
                                    }
                                    $pieces = [];
                                    $max = mb_strlen($keyspace, '8bit') - 1;
                                    for ($i = 0; $i < $length; ++$i) {
                                        $pieces [] = $keyspace[random_int(0, $max)];
                                    }
                                    return implode('', $pieces);
                                }

                                $used_key = array();

                                $random_key = random_str(6);

                                while (!in_array($random_key, $used_key)) {
                                    $random_key = random_str(6);

                                    array_push($used_key, $random_key);
                                }

                                error_log("Random key: " . $random_key);
                                //End random string

                                $conn->query("INSERT INTO `guest` (firstname, lastname, address, contactno, reservation_code) VALUES('$firstname', '$lastname', '$address', '$contactno', '$random_key')") or die(mysqli_error());
                                $query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'") or die(mysqli_error());
                                $fetch = $query->fetch_array();
                                $query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$_REQUEST[room_id]' && `status` = 'Pending'") or die(mysqli_error());
                                $row = $query2->num_rows;
                                if ($checkin < date("Y-m-d", strtotime('+8 HOURS'))) {
                                    echo "<script>alert('Must be present date')</script>";
                                } else {
                                    if ($row > 0) {
                                        echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
                                        $q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
                                        while ($f_date = $q_date->fetch_array()) {
                                            echo "<ul>
										<li>	
											<label class = 'alert-danger'>" . date("M d, Y", strtotime($f_date['checkin'] . "+8HOURS")) . "</label>	
										</li>
									</ul>";
                                        }
                                        "</div>";
                                    } else {
                                        if ($guest_id = $fetch['guest_id']) {
                                            $room_id = $_REQUEST['room_id'];
                                            $conn->query("INSERT INTO `transaction`(guest_id, room_id, status, checkin) VALUES('$guest_id', '$room_id', 'Pending', '$checkin')") or die(mysqli_error());
                                            echo "<script type='text/javascript'> document.location = 'reply_reserve.php'; </script>";


                                        } else {
                                            echo "<script>alert('Error Javascript Exception!')</script>";
                                        }
                                    }
                                }
                            }


                            ?>
                            <button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Section Begin -->
<div class="map">
    <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355676389!2d-118.69193052429003!3d34.02073049434915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1568665689853!5m2!1sen!2sbd"
            height="560" style="border:0;" allowfullscreen=""></iframe>
</div>
<!-- Map Section End -->

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
                        <p>Le Loi <br />Da Nang</p>
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
                        <p>+84 123 456 7890</p>
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
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Homestay</a>
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
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>