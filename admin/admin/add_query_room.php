<?php
	if(ISSET($_POST['add_room'])){
		$type_room = $_POST['type_room'];
		$price = $_POST['price'];
                $max_people = $_POST['max_people'];
                $area = $_POST['area'];
                $note = $_POST['note'];
		$img = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);              
		move_uploaded_file($_FILES['photo']['tmp_name'],"../Homestay_Images/" . $_FILES['photo']['name']);
                $conn->query("INSERT INTO `room_detail` (type_room,price,max_people,note,image,area) VALUES('$type_room','$price','$max_people','$note','$photo_name','$area')") or die(mysqli_error());
                echo "<script type='text/javascript'> document.location = 'room.php'; </script>";
	}
?>