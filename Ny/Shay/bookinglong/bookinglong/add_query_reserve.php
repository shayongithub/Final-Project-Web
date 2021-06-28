<?php
require_once 'connect.php';
if(ISSET($_POST['add_guest'])){
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
    //End random string

    $conn->query("INSERT INTO `guest` (firstname, lastname, address, contactno, reservation_code) VALUES('$firstname', '$lastname', '$address', '$contactno', '$random_key')") or die(mysqli_error());
    $query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$_REQUEST[room_id]' && `status` = 'Pending'") or die(mysqli_error());
    $row = $query2->num_rows;
    if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){
        echo "<script>alert('Must be present date')</script>";
    }else{
        if($row > 0){
            echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
            $q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
            while($f_date = $q_date->fetch_array()){
                echo "<ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</label>	
										</li>
									</ul>";
            }
            "</div>";
        }else{
            if($guest_id = $fetch['guest_id']){
                $room_id = $_REQUEST['room_id'];
                $conn->query("INSERT INTO `transaction`(guest_id, room_id, status, checkin) VALUES('$guest_id', '$room_id', 'Pending', '$checkin')") or die(mysqli_error());
                echo "<script type='text/javascript'> document.location = 'reply_reserve.php'; </script>";


            }else{
                echo "<script>alert('Error Javascript Exception!')</script>";
            }
        }
    }
}
?>