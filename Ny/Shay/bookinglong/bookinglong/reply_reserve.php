<?php
    require_once 'database.php';

    error_log("Confirmation: ");
    error_log($_POST['firstname']);
    error_log($_POST['lastname']);
    error_log($_POST['address']);
    error_log($_POST['contactno']);
    error_log($_POST['date']);
    error_log($_POST['date1']);
    error_log($_GET['room_id']);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contactno = $_POST['contactno'];
    $address = $_POST['address'];
?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Confirmation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
    <style>
        .info {
            font-weight: bolder;
        }
    </style>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. This is your reservation. See you soon</p>

        <div class = "row" style = "margin-bottom: 20px">
            <div class ="col-sm-3"></div>
            <div class ="col-sm-6">
                <div class = "container" style="border-width:0.5px;  border-style:dashed;">
                    <div class="row">
                        <div class="col-sm-6 info">
                            <div>Guest Name:</div>
                        </div>

                        <div class="col-sm-6 info">
                            <span><?php echo $_POST['firstname'] . $_POST['lastname'];?></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 info">
                            <div>Contact Number:</div>
                        </div>

                        <div class="col-sm-6">
                            <span><?php echo $_POST['contactno'];?></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 info">
                            <div>Check-in Date:</div>
                        </div>

                        <div class="col-sm-6">
                            <span><?php echo $_POST['date'];?></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 info">
                            <div>Check-out Date:</div>
                        </div>

                        <div class="col-sm-6">
                            <span><?php echo $_POST['date1'];?></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 info">
                            <div>Room:</div>
                        </div>

                        <div class="col-sm-6">
                            <span><?php
                                $sql="SELECT type_room, price, name FROM room_detail
                                    INNER JOIN homestay_room on homestay_room.room_id = room_detail.room_id
                                    INNER JOIN homestay_info on homestay_info.homestay_id = homestay_room.homestay_id
                                    WHERE room_detail.room_id = " . $_GET['room_id'];

                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();

                                echo $row['type_room'] . " Room " . " at " . $row['name']?>
                        </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div>Estimate Price:</div>
                        </div>

                        <div class="col-sm-6">
                            <span><?php
                                $price = (int) filter_var($row['price'], FILTER_SANITIZE_NUMBER_INT);
                                error_log("price: ".$price);

                                $checkin = strtotime($_POST['date']);
                                $checkout = strtotime($_POST['date1']);

                                $subtract = $checkout - $checkin;

                                $time = (int) date('d', $subtract);
                                error_log("Time: ".$time);
                                error_log("Price: ".$price);
                                echo $time * $price . "$";

                                ?></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 info">
                            <div>Reservation code:</div>
                        </div>

                        <div class="col-sm-6">
                            <span><?php

                                //echo $row['reservation_code'];
                                //Random string
                                function random_str(
                                    $length = 64,
                                    $keyspace = '0123456789'
                                ) {
                                    if ($length < 1) {
                                        throw new \RangeException("Length must be a positive integer");
                                    }
                                    $pieces = [];
                                    $max = mb_strlen($keyspace, '8bit') - 1;
                                    for ($i = 0; $i < $length; ++$i) {
                                        $pieces []= $keyspace[random_int(0, $max)];
                                    }
                                    return implode('', $pieces);
                                }

                                $used_key = array();

                                $random_key = random_str(6);

                                while (!in_array($random_key, $used_key)) {
                                    $random_key = random_str(6);

                                    array_push($used_key, $random_key);
                                }

                                error_log("Random key: ".$random_key);

                                echo $random_key;

                                $sql_code = "INSERT INTO `guest` (firstname, lastname, address, contactno, reservation_code)
                                    VALUES('$firstname', '$lastname', '$address', '$contactno', '$random_key')";
                                $result_code = $conn->query($sql_code);
                                error_log("SQL Code; ". $sql_code);
                                $row_code = $result->fetch_assoc();

                                error_log($row_code);
                                ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <a class="btn btn-primary btn-sm" href="http://learn0907.myartsonline.com/homestay/main_page/index.php" role="button" style="color: whitesmoke">Continue to homepage</a>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2014 | All Rights Reserved</p>
	</footer>
</body>
</html>