<!DOCTYPE html>
<html lang = "en">
	<head>

		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />

	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Hotel Online Reservation</a>
			</div>
		</div>
	</nav>	

	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A RESERVATION</h3></strong>
				<br />
				<?php 
					$server_name = "fdb21.awardspace.net";
                                            $username = "3849092_heyshay";
                                            $password = "LA@e]eBU1r4O2/3y";
                                            $database = "3849092_heyshay";
                                            $room_id = 20001;
                        
                                            $conn = new mysqli($server_name, $username, $password, $database);
                                                                $sql = "SELECT *
                                                    FROM room_detail 
                                                    WHERE room_id = $_REQUEST[room_id]" or die(mysqli_error()) ;
                                            $result = $conn->query($sql);
                                            $fetch = $result->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "<?php echo $fetch['img']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3><?php echo $fetch['room_type']?></h3>
						<h3 style = "color:#00ff00;"><?php echo " ".$fetch['price'];?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename" required = "required" />
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
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_reserve.php' ?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">

	</div>
</body>
	
</html>