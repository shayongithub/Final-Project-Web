<?php

require_once 'database.php';

// (C) SEARCH

//if (isset($_POST['search']) && !empty($_POST['search'])) {
//    $search_data = $_POST['search'];
//} else {
//    $search_data = null;
//}

$sql = "SELECT homestay_id FROM `homestay_info` WHERE `name` LIKE '%" . $search_data. "%' OR `district` LIKE '%".$search_data."%'";

error_log($sql);

$result = $conn->query($sql);
$homestay_id = array();

if ($result->num_rows >0) {
    while($row = $result->fetch_assoc()) {
        error_log("Homestay ID:" . $row['homestay_id']);

//        error_log(print_r($row));

        $homestay_id[] = $row['homestay_id'];

    }
    error_log(print_r($homestay_id, true));
//    error_log(print_r($homestay_id));
//    echo json_encode(array('id'=>$homestay_id));
} else {
    error_log("Pass homestay ID failed");
}

