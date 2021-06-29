<?php
	require_once 'connect.php';
	mysqli_query($conn,"DELETE FROM `room_detail` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
        echo "<script type='text/javascript'> document.location = 'room.php'; </script>";
?>