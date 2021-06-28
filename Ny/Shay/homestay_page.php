<?php
require_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php
    include 'header_html.php';
    include 'match_homestay.php';

    $homestay_id = $_GET['homestay_id'];

    error_log("Homestay ID homestay_page" . $homestay_id);
?>
<body>


    <div class="container cta-book">
        <a href="bookinglong/index.php?homestay_id=<?php echo $homestay_id ?>" target="_self">
            <div class="circle-container container">
                <div id="circle">
                        <span style="position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                    font-size: 1.7vw;
                                    font-family: 'Lato', sans-serif;
                                    font-weight: bold;

                            ">Book</span>
                </div>
            </div>
        </a>
    </div>

    <section class="slideshow">
        <div class="container name" style="width:50%">
            <?php
                $name_parts = explode(" ",$homestay_name);

                echo '<span class="name-homestay" id="sunshine">'. $name_parts[0] .'</span><br>';

                for ($i = 1; $i < count($name_parts); $i++) {
                    echo '<span class="name-homestay" id="homestay">'. $name_parts[$i] . ' </span>';
                }
            ?>
        </div>
        <div id="carouselHomestay" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                    for($i = 0; $i < count($image_array); $i++) {
                        if ($i == 0) {
                            echo '<li data-target="#carouselHomestay" data-slide-to="'. $i .'" class="active"></li>';
                        } else {
                            echo '<li data-target="#carouselHomestay" data-slide-to="'. $i .'"></li>';
                        }

                    }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                    for($i = 0; $i < count($image_array); $i++) {
                        if ($i == 2) {
                            echo '<div class="carousel-item active">
                                <img class="image_homestay" alt="homestay-room" src="Homestay_Images/'. $image_array[$i] .'">
                            </div>';
                        } else {
                            echo '<div class="carousel-item">
                                <img class="image_homestay" alt="homestay-room" src="Homestay_Images/'. $image_array[$i] .'">
                            </div>';
                        }
                    }
                ?>
            </div>

            <a class="carousel-control-prev" href="#carouselHomestay" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHomestay" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only" style="z-index: -1;">Next</span>
            </a>
        </div>
    </section>

    <section class="room-amenities-section">
        <div class="vertical-line-top container"></div>

        <div class="amenities-icon">
            <h4 class="amenities-name">In Room Amenities & Features</h4>
        </div>

        <div class="amenities-icon-img container">
            <table>
                <tbody>
                    <?php
                        $length_amenity = count($amenity_name);

                        for($i = 0; $i < 2; $i++) {
                            if ($i == 0) {
                                echo '<tr style="border: solid 1px black">';
                                for($j = 0; $j < 5; $j++) {
                                    echo '<td class="cell">
                                                <div class="image-box">
                                                    <div class="image">
                                                        <img class="d-block mx-auto" alt="'. $amenity_name[$j] . '"
                                                             src="https://'. $amenity_img[$j].'">
                                                    </div>
                        
                                                    <span class="text-muted cap-amenities">'. $amenity_name[$j] .'</span>
                                                </div>
                                            </td>';
                                }
                                echo '</tr>';

                            } else {
                                echo '<tr style="border: solid 1px black">';
                                for($k = 5; $k < $length_amenity; $k++) {
                                    echo '<td class="cell">
                                                <div class="image-box">
                                                    <div class="image">
                                                        <img class="d-block mx-auto" alt="'. $amenity_name[$k] . '"
                                                             src="https://'. $amenity_img[$k].'">
                                                    </div>
                        
                                                    <span class="text-muted cap-amenities">'. $amenity_name[$k] .'</span>
                                                </div>
                                            </td>';
                                }
                                echo '</tr>';
                            }
                        }

                    ?>

                </tbody>
            </table>
        </div>
    </section>

    <section class="reviewing-section">
        <div class="vertical-line-top container"></div>

        <div class="reviewing container-fluid" style="padding-right: 0;">
            <h4 class="reviewing-headline">Feedback</h4>

            <div class="row container-fluid">
                <div class="col-6" style="font-family: 'Lato', sans-serif; font-size: 2.5vw; font-weight: bold">
                    Reviews
                </div>
                <div class="col-2" style="font-family: 'Lato', sans-serif; font-size: 2vw; font-weight: bold">Time of
                    year
                </div>
                <div class="col-2" style="font-family: 'Lato', sans-serif; font-size: 2vw; font-weight: bold">
                    Traveler type
                </div>
                <div class="col-2" style="font-family: 'Lato', sans-serif; font-size: 2vw; font-weight: bold">
                    Language
                </div>
            </div>

            <div class="row container-fluid wrap-row-feedback">
                <div class="col-2 rating-container" style="text-align: left; padding-right:  0;">
                        <span class="rating-feedback">
                            Excellent </span>
                </div>

                <div class="col-3" style="padding: 0 0;">
                        <span class="background-percent">
                            <span class="indicate-percent" style="width: 85%;"></span>
                        </span>
                </div>

                <div class="col-1">
                    <span class="number-reviews">2704</span>
                </div>


                <div class="form-check col-2 month-form container-fluid" style="text-align: left; padding-left: 4%">
                    <input class="form-check-input radio-month radio" type="radio" name="time-year" value="mar-may"
                           id="flexCheckDefault1">
                    <label class="form-check-label month-review-label" for="flexCheckDefault1" style="margin-top: -2%;">
                        Mar-May </label>
                </div>

                <div class="form-check col-2 type-form container-fluid" style="text-align: left; padding-left: 4%">
                    <input class="form-check-input radio travel-type" type="radio" name="travel_type" value=""
                           id="flexCheckDefaultFam">
                    <label class="form-check-label type-review-label" for="flexCheckDefaultFam"
                           style="margin-top: -2%;"> Families </label>
                </div>

                <div class="form-check col-2 container-fluid lang-wrap" style="text-align: left; padding-left: 2%;">
                    <input class="form-check-input radio language-radio" type="radio" name="language"
                           id="radio-lang-all" value="all" checked>
                    <label class="form-check-label lang-review-label" for="radio-lang-all">All
                        Languages</label>
                </div>
            </div>

            <div class="row container-fluid wrap-row-feedback">
                <div class="col-2 rating-container" style="text-align: left; padding-right: 0">
                        <span class="rating-feedback">
                            Very Good </span>
                </div>

                <div class="col-3" style="padding: 0 0;">
                        <span class="background-percent">
                            <span class="indicate-percent" style="width: 7.5%;"></span>
                        </span>
                </div>

                <div class="col-1">
                    <span class="number-reviews">238</span>
                </div>


                <div class="form-check col-2 month-form" style="text-align: left; padding-left: 4%">
                    <input class="form-check-input radio-month radio" type="radio" name="time-year" value="jun-aug"
                           id="flexCheckDefault2">
                    <label class="form-check-label month-review-label" for="flexCheckDefault2" style="margin-top: -2%;">
                        Jun-Aug </label>
                </div>

                <div class="form-check col-2 type-form container-fluid" style="text-align: left; padding-left: 4%">
                    <input class="form-check-input radio travel-type" type="radio" name="travel_type" value="couples"
                           id="flexCheckDefaultCoup">
                    <label class="form-check-label type-review-label" for="flexCheckDefaultCoup"
                           style="margin-top: -2%;"> Couples </label>
                </div>

                <div class="form-check col-2 container-fluid lang-wrap" style="text-align: left; padding-left: 2%;">
                    <input class="form-check-input  radio language-radio" type="radio" name="language"
                           id="radio-lang-eng" value="english">
                    <label class="form-check-label lang-review-label" for="radio-lang-eng">
                        English</label>
                </div>
            </div>

            <div class="row container-fluid wrap-row-feedback">
                <div class="col-2 rating-container" style="text-align: left; padding-right: 0">
                        <span class="rating-feedback">
                            Avarage </span>
                </div>

                <div class="col-3" style="padding: 0 0;">
                        <span class="background-percent">
                            <span class="indicate-percent" style="width: 6%;"></span>
                        </span>
                </div>

                <div class="col-1">
                    <span class="number-reviews">191</span>
                </div>


                <div class="form-check col-2 month-form container-fluid" style="text-align: left; padding-left: 4%">
                    <input class="form-check-input radio-month radio" type="radio" name="time-year" value="sep-nov"
                           id="flexCheckDefault3">
                    <label class="form-check-label month-review-label" for="flexCheckDefault3" style="margin-top: -2%;">
                        Sep-Nov </label>
                </div>

                <div class="form-check col-2 type-form container-fluid" style="text-align: left; padding-left: 4%">
                    <input class="form-check-input radio travel-type" type="radio" name="travel_type" value="solo"
                           id="flexCheckDefaultSolo">
                    <label class="form-check-label type-review-label" for="flexCheckDefaultSolo"
                           style="margin-top: -2%;"> Solo Bolo </label>
                </div>

                <div class="form-check col-2 container-fluid lang-wrap" style="text-align: left; padding-left: 2%;">
                    <input class="form-check-input radio language-radio" type="radio" name="language"
                           id="radio-lang-kor" value="korean">
                    <label class="form-check-label lang-review-label" for="radio-lang-kor">Korean</label>
                </div>
            </div>

            <div class="row container-fluid wrap-row-feedback">
                <div class="col-2 rating-container" style="text-align: left; padding-right: 0">
                        <span class="rating-feedback">
                            Poor </span>
                </div>

                <div class="col-3" style="padding: 0 0;">
                        <span class="background-percent">
                            <span class="indicate-percent" style="width: 2%;"></span>
                        </span>
                </div>

                <div class="col-1">
                    <span class="number-reviews">31</span>
                </div>

                <div class="form-check col-2 month-form" style="text-align: left; padding-left: 4%">
                    <input class="form-check-input radio-month radio" type="radio" name="time-year" value="dec-feb"
                           id="flexCheckDefault4">
                    <label class="form-check-label month-review-label" for="flexCheckDefault4" style="margin-top: -2%;">
                        Dec-Feb </label>
                </div>

                <div class="form-check col-2 type-form container-fluid" style="text-align: left; padding-left: 4%">
                    <input class="form-check-input radio travel-type" type="radio" name="travel_type" value="business"
                           id="flexCheckDefaultBusi">
                    <label class="form-check-label type-review-label" for="flexCheckDefaultBusi"
                           style="margin-top: -2%;"> Business </label>
                </div>

                <div class="form-check col-2 container-fluid lang-wrap" style="text-align: left; padding-left: 2%;">
                    <input class="form-check-input  radio language-radio" type="radio" name="language"
                           id="radio-lang-chi" value="chinese">
                    <label class="form-check-label lang-review-label" for="radio-lang-chi">
                        Chinese</label>
                </div>
            </div>

            <div class="row container-fluid wrap-row-feedback">
                <div class="col-2 rating-container" style="text-align: left; padding-right: 0">
                        <span class="rating-feedback">
                            Terrible </span>
                </div>

                <div class="col-3" style="padding: 0 0;">
                        <span class="background-percent">
                            <span class="indicate-percent" style="width: 1%;"></span>
                        </span>
                </div>

                <div class="col-1">
                    <span class="number-reviews">15</span>
                </div>

                <div class="col-2"></div>

                <div class="form-check col-2 type-form container-fluid" style="text-align: left; padding-left: 4%">
                    <input class="form-check-input radio travel-type" type="radio" name="travel_type" value="friends"
                           id="flexCheckDefaultFri">
                    <label class="form-check-label type-review-label" for="flexCheckDefaultFri"
                           style="margin-top: -2%;"> Friends </label>
                </div>

                <div class="more-link col-2 container-fluid" id="lang-div-pop-up"
                     style="text-align: left; padding-left: 3%;">

                    <!-- Button trigger modal -->
                    <div class="container">
                        <button type="button" id="btn-more" class="btn btn-info" data-toggle="modal"
                                data-target="#languageModal" style="font-weight: bold;">
                            More
                        </button>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="languageModal" tabindex="-1" role="dialog"
                         aria-labelledby="languageModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle"
                                        style="font-family: 'Montserrat', sans-serif;">Other Languages</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-check" style="margin-left: 5%;">
                                        <input class="form-check-input" type="radio" name="language"
                                               id="radio-lang-all-mod" value="all">
                                        <label class="form-check-label lang-model" for="radio-lang-all-mod">All
                                            Languages</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language"
                                               id="radio-lang-eng-mod" value="english">
                                        <label class="form-check-label lang-model"
                                               for="radio-lang-eng-mod">English</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language"
                                               id="radio-lang-kor-mod" value="korean">
                                        <label class="form-check-label lang-model"
                                               for="radio-lang-kor-mod">Korean</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language"
                                               id="radio-lang-chi-mod" value="chinese">
                                        <label class="form-check-label lang-model"
                                               for="radio-lang-chi-mod">Chinese</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language" id="radio-lang-fre"
                                               value="french">
                                        <label class="form-check-label lang-model" for="radio-lang-fre">French</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language" id="radio-lang-ger"
                                               value="germany">
                                        <label class="form-check-label lang-model" for="radio-lang-ger">Germany</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language" id="radio-lang-rus"
                                               value="russian">
                                        <label class="form-check-label lang-model" for="radio-lang-rus">Russian</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language" id="radio-lang-dut"
                                               value="russian">
                                        <label class="form-check-label lang-model" for="radio-lang-dut">Dutch</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language" id="radio-lang-spa"
                                               value="russian">
                                        <label class="form-check-label lang-model" for="radio-lang-spa">Spanish</label>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="languageModalCenterTitle"
                         aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle" style="font-family: Lato;">
                                        Languages</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-check" style="text-align: left; max-width: 100%;">
                                        <input class="form-check-input" type="radio" name="language"
                                               id="radio-lang-all-mod" value="all">
                                        <label class="form-check-label lang-review-label" for="radio-lang-all-mod">All
                                            Languages</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language"
                                               id="radio-lang-eng-mod" value="english">
                                        <label class="form-check-label lang-review-label"
                                               for="radio-lang-eng-mod">English</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language"
                                               id="radio-lang-kor-mod" value="korean">
                                        <label class="form-check-label lang-review-label"
                                               for="radio-lang-kor-mod">Korean</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language"
                                               id="radio-lang-chi-mod" value="chinese">
                                        <label class="form-check-label lang-review-label"
                                               for="radio-lang-chi-mod">Chinese</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language" id="radio-lang-fre"
                                               value="french">
                                        <label class="form-check-label lang-review-label"
                                               for="radio-lang-fre">French</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language" id="radio-lang-ger"
                                               value="germany">
                                        <label class="form-check-label lang-review-label"
                                               for="radio-lang-ger">Germany</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language" id="radio-lang-rus"
                                               value="russian">
                                        <label class="form-check-label lang-review-label"
                                               for="radio-lang-rus">Russian</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language" id="radio-lang-dut"
                                               value="russian">
                                        <label class="form-check-label lang-review-label"
                                               for="radio-lang-dut">Dutch</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="language" id="radio-lang-spa"
                                               value="russian">
                                        <label class="form-check-label lang-review-label"
                                               for="radio-lang-spa">Spanish</label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 3%; margin-top: 3.5%">
                <div class="col-sm-7"></div>
                <div class="col-sm-5" style="text-align: center; padding-right: 5%">
                    <button type="button" class="btn btn-outline-dark" id="show-comment">Write a Review</button>
                </div>
            </div>

            <div class="container-fluid row" id="comment-section" style="display: none;">
                <div class="col-sm-1"></div>

                <div class="col-sm-10">
                    <div class="commenting container-fluid">
                        <div class="comment-div container-fluid">
                            <div class="card" style="margin-top: 3%;">
                                <div class="card-header comment-header"
                                     style="text-align: left; padding: 2% 4%; font-size: 2vw;">

                                    <div class="row">
                                        <div class="col-sm-3" style="padding-right: 0;">
                                            <span id="ratings">Ratings:</span>
                                        </div>

                                        <div class="col-sm-9 star-container" style="width: max-content">
                                            <div class="stars">
                                                <form action="">
                                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                    <label class="star star-5" for="star-5"></label>

                                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                    <label class="star star-4" for="star-4"></label>

                                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                    <label class="star star-3" for="star-3"></label>

                                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                    <label class="star star-2" for="star-2"></label>

                                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                    <label class="star star-1" for="star-1"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-body" style="padding-top: 0; padding-right: 5px;">

                                    <div class = "row">
                                        <div class ="col-sm-4"></div>

                                        <div class="col-sm-4 alert alert-success comment-noti" id="success-message" role="alert">
                                            THANKS FOR YOUR COMMENT !
                                        </div>

                                        <div class="col-sm-4 alert alert-warning comment-noti" id="warning-message" role="alert">
                                            YOU HAVE NOT FILL ALL THE FORM YET! WE WAIT FOR YOU.
                                        </div>

                                        <div class ="col-sm-4"></div>
                                    </div>

                                    <div class="form-group row col-sm-12"
                                         style="margin-top:6%; margin-right: 2%;padding-right: 0;">
                                            <textarea class="form-control" id="comment-text" rows="5"
                                                      placeholder="Leave your comment here"
                                                      style="font-family: 'Lato', sans-serif; font-size: medium; width: 150%;" required></textarea>
                                    </div>

                                    <button type="button" class="btn btn-outline-dark" id="submit-comment"
                                            data-toggle="modal" data-target="#successSubmit">Submit</button>

                                    <!-- Modal -->
<!--                                    <div class="modal fade" id="successSubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">-->
<!--                                        <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--                                            <div class="modal-content">-->
<!--                                                <div class="modal-header">-->
<!--                                                    <h5 class="modal-title" id="exampleModalLongTitle" style = "font-family: 'Kiwi Maru', serif;">Submit Succesfully</h5>-->
<!--                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                                                        <span aria-hidden="true">&times;</span>-->
<!--                                                    </button>-->
<!--                                                </div>-->
<!--                                                <div class="modal-body">-->
<!--                                                    <div class="alert alert-success" role="alert" style="font-family: 'Lato', sans-serif; font-weight: bold">-->
<!--                                                        THANKS FOR YOUR COMMENT !-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="modal-footer">-->
<!--                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <footer style="background-color: #222222; color: white;">
        <div class="container-fluid" style="padding: 30px 0 30px 0;">
            <div class='row'>
                <div class='col first-col' style="padding-left: 70px;">
                    <p class='first-line'>Phone Support</p>
                    <p class="second-line">24 HOURS A DAY</p>
                    <p class='third line' style="font-size: 21px;">+84 366 374 898</p>
                </div>

                <div class='col second-col'>
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

                <div class='col third-col' style="padding-right: 70px;">
                    <p class='first-line'>Our Newsletter</p>
                    <p class="second-line">SIGN UP FOR SPECIAL OFERS</p>
                    <div class='third-line'>
                        <input type='email' placeholder="e-mail">
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>

    <script>
        $(function () {
            //Star Rating js
            $(document).on({
                mouseover: function (event) {
                    $(this).find('.far').addClass('star-over');
                    $(this).prevAll().find('.far').addClass('star-over');
                },
                mouseleave: function (event) {
                    $(this).find('.far').removeClass('star-over');
                    $(this).prevAll().find('.far').removeClass('star-over');
                }
            }, '.rate');

            $(document).on('click', '.rate', function () {
                if (!$(this).find('.star').hasClass('rate-active')) {
                    $(this).siblings().find('.star').addClass('far').removeClass('fas rate-active');
                    $(this).find('.star').addClass('rate-active fas').removeClass('far star-over');
                    $(this).prevAll().find('.star').addClass('fas').removeClass('far star-over');
                } else {
                    console.log('has');
                }
            });

            //Comment show up
            $('#show-comment').click(function () {
                $('#comment-section').toggle(500)
            })

            //Sumbit comment
            $('#submit-comment').click(function () {
                // var rating = $("input[name='rating']:checked").val();
                var travel_type = $("input[name='travel_type']:checked").val();
                var time_year = $("input[name='time-year']:checked").val();
                var comment = $('#comment-text').val()
                var language = $("input[name='language']:checked").val();
                var homestay_id = <?php echo $_GET['homestay_id']; ?>;
                var ratings = 0

                if ($('#star-1').is(":checked")) {
                    ratings = 1
                    console.log("One here")
                } else if ($('#star-2').is(":checked")) {
                    ratings = 2
                    console.log("two here")
                } else if ($('#star-3').is(":checked")) {
                    ratings = 3
                    console.log("three here")
                } else if ($('#star-4').is(":checked")) {
                    ratings = 4
                    console.log("four here")
                } else if ($('#star-5').is(":checked")) {
                    ratings = 5
                    console.log("five here")
                }

                console.log("Language",language)
                console.log("Travel type", travel_type)
                console.log("Time-Year", time_year)
                console.log(comment)
                console.log("Rating:", ratings)
                console.log("Homestay ID", homestay_id)

                var comment_data = {
                    homestay_id: homestay_id,
                    time_of_year: time_year,
                    traveler_type: travel_type,
                    language: language,
                    rating: ratings,
                    comment_text: comment,
                }

                if (typeof travel_type == "undefined" || typeof time_year == "undefined" || comment === '' || ratings === 0) {
                    $('#warning-message').css('display','inline-block')
                } else {
                    $.ajax({
                        type: 'POST',
                        url: 'comment.php',
                        data: comment_data,
                        success: function(json) {
                            console.log("Data: ", json)
                            console.log("Success!", json.status)
                            $('#warning-message').css('display','none')
                            $('#success-message').css('display','inline-block')
                        },
                        error: function (data) {
                            console.log("Failure!", data)
                        }
                    })
                }


            })
        })
    </script>

</body>

</html>