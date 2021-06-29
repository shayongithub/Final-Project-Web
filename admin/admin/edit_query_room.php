<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_room'])){
		$type_room = $_POST['type_room'];
                $price = $_POST['price'];
                $available = $_POST['available'];
                $max_people = $_POST['max_people'];
                $note = $_POST['note'];
                $area = $_POST['area'];
		$conn->query("UPDATE `room_detail` 
                SET `type_room` = '$type_room', `price` = '$price' , `max_people` = '$max_people', `note` = '$note', `area` = '$area' WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
               

                echo "<script type='text/javascript'> document.location = 'room.php'; </script>";
                
	}
?>