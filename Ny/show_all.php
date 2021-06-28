<?php
    require_once('database.php');

//    if (isset($_GET['homestay_id']) && !empty($_GET['homestay_id'])) {
//        $homestay_id = $_GET['homestay_id'];
//    } else {
//        $homestay_id = array(19002, 19004);
//    }
    $homestay_id = $_GET['homestay_id'];

    for($i =0; $i < count($homestay_id); $i++) {
        $sql = "SELECT img, name, lowest_price, address, rating, description FROM homestay_info
                WHERE homestay_id = " . $homestay_id[i];

        $result = $conn->query($sql);

        $image_array = array();
        $homestay_name = '';
        $lowest_price = '';
        $address = '';
        $rating = '';
        $description = '';

        error_log("SQL: " . $sql);

        if ($result->num_rows >0 ) {

            while($row = $result->fetch_assoc()) {
                error_log(print_r($row, true));

                $image_array[] = $row['img'];

                $homestay_name = $row['name'];
                $lowest_price = $row['lowest_price'];
                $address = $row['address'];
                $rating = $row['rating'];
                $description = $row['description'];
            }

            error_log(print_r($image_array, true));
        } else {
            error_log("Zero inputs");
        }

        error_log('Image:'.$image_array);
        error_log('Name: ' .$homestay_name);
        error_log('Lowest Price:' . $lowest_price);
        error_log('Address:' . $address);
    }




