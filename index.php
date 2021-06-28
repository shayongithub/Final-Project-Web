<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
	<title>Homepage</title>
	<!-- Import Boostrap css, js-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="./css/style.css" rel="stylesheet">
    <link href="images/456.jpg" rel="icon">
    <link rel="stylesheet" href="css/responsive.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Kiwi+Maru:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">

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
<body >
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="index.html" class="logo-image">
                    <img src="./images/logo.png" alt="" class="logo-image">
                </a>
                <div class="hamburger-menu">
                    <i class="fas fa-bars open-state"></i>
                    <i class="fas fa-times close-state"></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Homestay</a>
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

    <div class="hero">
        <div class="container">
            <div class="main-heading">
                <h1 class="title">Lagom</h1>
                <h2 class="sub-title">Cozy Homestay</h2>
            </div>
        </div>
    </div>

<hr>

<div class="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="container booking-form" style="padding-top: 0px">
                <form id="form"  method = "POST"  action = "Ny/template_search.php">
                    <div class="container py-5" style="padding-top: 5px; margin-top:-2%">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="row" >

                                    <div class="col-md-10 offset-md-1">
                                        <span class="anchor" id="formComplex"></span>

                                        <div class="form-row mt-4" >
                                            <div class="col-md-12 col-sm-12 col-xs-12" name="fname" id="name12" style="padding-left: 0">
                                                <label for="exampleAccount">Name of Homestay</label>
                                                <input class="form-control" style="font-size: large" type="text" placeholder="Enter name of the homestay or district" id="name_search" name="search">
                                            </div>


                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-row">
                                                     <label class="col-md col-form-label" for="name" style="font-size: large">Check-in</label>
                                                     <input class="form-control " type="date" required name="check-in" id="firstDate" >
                                                     <label class="col-md col-form-label"  for="name" style="font-size: large">Check-out</label>
                                                     <input class="form-control " type="date" required name="check-out" id = "secondDate">

                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                          
                        </div>
                        
                        
                    </div>

                    <div class ="col-md-7 col-sm-7"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-btn">
                            <button id="submit-btn" class = "btn btn-dark" type = "submit" style="max-width: fit-content; padding: 4% 3%; font-weight: bold">Check Availability</button>
                        </div>
                    </div>

                    <div class="col-md-1 col-sm-1"></div>
                </form>
            </div>
        </div>
    </div>

</div>


<hr> 
<section class="districts1">
    <div class="container">
        <h5 class="section-head">
            <span class="heading">Explore</span>
            <span class="sub-heading">Our city</span>
        </h5>
        <div class="grid">
            <div class="grid-item featured-districts">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/C%E1%BA%A7u_R%E1%BB%93ng.jpg" alt="" class="districts" href="#">
                <h5 class="districts-name">Hai Chau</h5>
                <a href="#" class="btn btn-gradient">See now</a>

            </div>
            <div class="grid-item featured-districts">
                <img src="https://camle.danang.gov.vn/documents/10184/55713/3_cau.jpg/2509cbc6-4ccf-4f7a-9b3e-8141a1246a9b?version=1.1&t=1508904512000&imageThumbnail=0" alt="" class="hotel-image" href="#">
                <h5 class="districts-name">Cam Le</h5>  
                <a href="#" class="btn btn-gradient">See now</a>

            </div>
            <div class="grid-item featured-districts">
                <img src="https://baodanang.vn/dataimages/201610/original/images1303983_DSTK_1.jpg" alt="" class="districts" href="#">
                <h5 class="districts-name">Thanh Khe</h5>
                <a href="#" class="btn btn-gradient">See now</a>

            </div>
            <div class="grid-item featured-districts">
                <img src="https://znews-photo.zadn.vn/w480/Uploaded/jugtzb/2014_12_22/1.jpg" alt="" class="districts" href="#">
                <h5 class="districts-name">Lien Chieu</h5>
                <a href="#" class="btn btn-gradient">See now</a>

            </div>
            <div class="grid-item featured-districts">
                <img src="https://saigonstartravel.com/wp-content/uploads/2018/11/chua-linh-ung.jpg" alt="" class="districts" href="#">
                <h5 class="districts-name">Ngu Hanh Son</h5>
                <a href="#" class="btn btn-gradient">See now</a>

            </div>
            <div class="grid-item featured-districts">
                <img src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/07/bandaosontra1.jpg" alt="" class="hotel-image" href="#">
                <h5 class="districts-name">Son Tra</h5>
                <a href="#" class="btn btn-gradient">See now</a>

            </div>
        </div>
    </div>
</section>

<div class="container-fluid padding">	
    <div class="container">
        <div class="row text-center padding">
            <div class="col-12">
                <h2>Contact us</h2>
            </div>
            <div class="col-12 social padding">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>	
</div>
	
    <footer>
        <div class="container">
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="images/456.jpg" height="55" width="150">
                        <hr class="light">
                        <p>0905123456</p>
                        <p>booking@gmail.com</p>
                        <p>158A Le Loi Da Nang</p>
                    </div>
                    <div class="col-md-4">
                        <hr class="light">
                        <h5>Working hours</h5>
                        <hr class="light">
                        <p>Monday-Friday: 8am - 5pm</p>
                        <p>Weekend: 8am - 12am</p>
                    </div>
                    <div class="col-md-4">
                        <hr class="light">
                        <h5>Services</h5>
                        <hr class="light">
                        <p>Booking</p>
                    </div>
                    <div class="col-12">
                        <hr class="light-100">
                        <h5>&copy; Booking</h5>
                    </div>
                </div>
            </div>

        </div>

    </footer>

<!---->
<!--<script>-->
<!--    document.querySelector('form').addEventListener('submit', function(e) {-->
<!--    e.preventDefault();-->
<!--    let x = document.querySelector('form').elements;-->
<!--    var a1 = new Date(x['check-in'].value);-->
<!--    var a2  = new Date(x['check-out'].value);-->
<!--    a1.toDateString();-->
<!--    a2.toDateString();-->
<!--   -->
<!--    -->
<!--    if (a1 < a2){-->
<!--        console.log("Name of homestay: ", x['name'].value);-->
<!--        console.log("Time check in: ", x['check-in'].value);-->
<!--        console.log("Time check out: ", x['check-out'].value);-->
<!--        console.log("Guests: ", x['guests'].value);-->
<!--        console.log("Children: ", x['children'].value);-->
<!---->
<!--    }else{-->
<!--        alert("Please input valid day");-->
<!---->
<!--    }-->
<!--        -->
<!--});-->
<!--</script>-->

    <script>
        function send_id() {
            var search_capture = $('#name_search').val()

            var search_data = {
                search: search_capture,
            }

            console.log(search_capture)

            $.ajax({
                url: 'search.php',
                type: 'POST',
                data: search_data,
                success: function(json){
                    var homestayIds = []

                    console.log("Data:", json)

                    var object = JSON.parse(json)

                    for(var i=0; i<object.id.length; i++){
                        var homestay_id = object.id[i];

                        homestayIds.push(homestay_id)
                    }

                    console.log(homestayIds)

                    var homestay_id_data = {
                        ids: homestayIds,
                    }

                    $.ajax({
                        url:'Ny/match_homestay.php',
                        type:'POST',
                        data: homestay_id_data,
                        success: function(data) {
                            console.log("Data:", data)
                            console.log("Success", data.status)
                        },
                        error: function(data) {
                            console.log("Failure:", data.status)
                        }
                    })


                },
                error: function (data) {
                    console.log("Failure!", data)
                }
            })
        }

</script>

    <script src="main_header.js"></script>

</body>
</html>	












