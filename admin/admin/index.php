<!DOCTYPE html>
<?php require_once "connect.php"?>
<html lang = "en">
	<head>
		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Login Page</title>
    <link rel="stylesheet" href="public/login.css">
	</head>
<body>
	
	<section action="Form my-4 mx-5" style="margin: 30px">
        <div class="container">
            <div class='row'>
                <div class="col-lg-5" style="padding-left: 0; padding-right: 0;">
                    <img src="/homestay/admin/assets/img/leftpic.jpg" class="container-fluid" style="padding-left: 0; padding-right: 0; border-radius: 30px;">
                </div>

                <div class='col-lg-7 px-5 pt-5'>
                    <h1 class="font-weight-bold py-3" style="color: black; text-align: left">Login</h1>
                    <h4>Sign into your account</h4>
                    
                    <form  method="POST">
                        <div class="form-row" style="margin-bottom: 5px">
                            <div class="col-lg-7">
                                <input type="text" name="username" class = "form-control" required = "required" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" class = "form-control" required = "required" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <button name = "login" type="submit" class="btn1 mt-3 mb-5">Login</button>
                            </div>
                        </div>
                    </form>
                    <?php require_once 'login.php'?>
                    </div>

            </div>            


		</div>

    </section>    	

	
</body>
	
</html>