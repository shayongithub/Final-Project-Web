<?php
    //    require_once 'database.php';

    if (isset($_POST['search']) && !empty($_POST['search'])) {
        $search_data = $_POST['search'];
    } else {
        $search_data = null;
    }

    include 'search.php';

    include 'match_homestay_Ny.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lagom</title>

    <!-- Boostrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="footer.css">

    <!--    UI component -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "input" ).checkboxradio();
            $( "fieldset" ).controlgroup();
        } );
    </script>
</head>

<body>
<header class="header">
    <div class="container">
        <nav class="nav">
            <a href="homestays.php" class="logo-image">
                <img src="./images/logo.png" alt="" class="logo-image">
            </a>
            <div class="hamburger-menu">
                <i class="fas fa-bars open-state"></i>
                <i class="fas fa-times close-state"></i>
            </div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="homestays.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="http://learn0907.myartsonline.com/homestay/Ny/homestays.php?" class="nav-link">Homestay</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="http://learn0907.myartsonline.com/homestay/admin/index.php" class="nav-link">Login</a>
                </li>
            </ul>

        </nav>
    </div>
</header>

<main>
    <div class="hero">
        <div class="container">
            <div class="main-heading">
                <h1 class="title">Lagom</h1>
                <h2 class="sub-title">Cozy Homestay</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid sorting" style="background-color: #222222; padding: 10px 50px 10px 50px">
        <form style="font-family: cursive">
            <span style="color: white; padding-right: 20px">Select your option: </span>
            <label for="radio-1" style="font-family: cursive">increased price</label>
            <input type="radio" name="check" id="radio-1" value="increased" >
            <label for="radio-2" style="font-family: cursive">decreased price</label>
            <input type="radio" name="check" id="radio-2" value="decreased">
        </form>
    </div>>

    <section class="homestays">
        <div class="container">
            <div class="grid homestays-grid">
                <?php

                for($i =0; $i < count($homestay_id); $i++) {
                    echo "<div class='row' style='background-color: #a99282; margin-bottom: 20px;'>";

                    echo "<div class='col-sm-5' style='padding: 0'>
                                    <img class='homestay-image' src='". $image_array[$i] ."'alt='Sleepingwood'>
                                    <span class='price-infor'>". $lowest_price[$i] ."</span>
                                    </div>";

                    echo "<div class='col-sm-7 text-infor' style='padding: 20px 40px 20px 40px; color: white'>
                                    <h2 class='name' style='text-transform: uppercase'>".$homestay_name[$i] ."</h2>
    
                                    <div class='rating'>
                                        <span class='rating-score'>". $rating[$i] ."</span>
                                        <span class='fa fa-star checked' style='color: orange'></span>
                                    </div>
    
                                    <div class='address'>
                                        <i class='fa fa-home' style='margin-right: 5px'></i>
                                        <span>". $address[$i]. ", " . $district[$i] . "</span>
                                    </div>
                                    
                                    <p class='description' style='font-family: cursive'>" . '"' . $description[$i] . '"' . "</p>
                                    
                                    <br>
                                    <a href='Shay/homestay_page.php?homestay_id=". $homestay_id[$i] . "' class='btn btn-gradient'>Explore now
                                        <span class=dots><i class='fas fa-ellipsis-h'></i></span>
                                    </a>
                                </div>";

                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </section>
</main>

<footer style="background-color: #5f7264; color: white;">
    <div class="container-fluid" style="padding: 30px 0 30px 0;">
        <div class='row'>
            <div class='col-sm-4 first-col' style="padding-left: 70px;">
                <p class='first-line'>Phone Support</p>
                <p class="second-line">24 HOURS A DAY</p>
                <p class='third line' style="font-size: medium;">+84 366 374 898</p>
            </div>

            <div class='col-sm-4 second-col' style="padding-left: 70px;">
                <p class='first-line'>Follow Us</p>
                <p class="second-line">SOCIAL MEDIA CHANELS</p>
                <span class='third line'>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-skype"></a>
                    </span>
            </div>

            <div class='col-sm-4 third-col' style="padding-left: 70px;">
                <p class='first-line'>Our Newsletter</p>
                <p class="second-line">SIGN UP FOR SPECIAL OFERS</p>
                <div class='third-line'>
                    <input type='email' placeholder="e-mail">
                    <button style="font-size: medium">SUBSCRIBE</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
    <script src="main.js"></script>
</body>

</html>