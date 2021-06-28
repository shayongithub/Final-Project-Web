<?php
//    require_once('database.php');

//    if (isset($_POST['ids']) && !empty($_POST['ids'])) {
//        $homestay_id_array = $_POST['ids'];
//    } else {
//        $homestay_id_array = null;
//        error_log("It's null");
//    }
//
//    error_log("Homestay Id Array:" . $homestay_id_array);
    error_log("match_homestay" . print_r($homestay_id, true));

    $image_array = array();
    $homestay_name = array();
    $lowest_price = array();
    $address = array();
    $rating = array();
    $description = array();
    $district = array();

    for($i=0; $i < count($homestay_id); $i++) {
        $sql = "SELECT img, name, lowest_price, address, rating, description, district FROM homestay_info 
            WHERE homestay_id = " . $homestay_id[$i];

        $result = $conn->query($sql);

        error_log("SQL: " . $sql);

        if ($result->num_rows >0 ) {

            while($row = $result->fetch_assoc()) {
                error_log(print_r($row, true));

                $image_array[] = $row['img'];
                $homestay_name[] = $row['name'];
                $lowest_price[] = $row['lowest_price'];
                $address[] = $row['address'];
                $rating[] = $row['rating'];
                $description[] = $row['description'];
                $district[] = $row['district'];
            }

            error_log(print_r($image_array, true));
            error_log(print_r($homestay_name, true));
            error_log(print_r($lowest_price, true));
            error_log(print_r($address, true));


        } else {
            error_log("Zero inputs");
        }
    }

//    error_log('Image:'. print_r($image_array,true));
//    error_log('Name: ' . print_r($homestay_name), true);
//    error_log('Lowest Price:' . print_r($lowest_price), true);
//    error_log('Address:' . print_r($address), true);
//    error_log('Rating:' . print_r($rating, true));
//    error_log('Description:' . print_r($description, true));

?>

