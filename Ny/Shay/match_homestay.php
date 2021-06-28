<?php
    require_once('database.php');

//    if (isset($_GET['homestay_id']) && !empty($_GET['homestay_id'])) {
//        $homestay_id = $_GET['homestay_id'];
//    } else {
//        $homestay_id = 19002;
//    }

    $sql = "SELECT DISTINCT path, name FROM homestay_info 
            INNER JOIN slideshow ON homestay_info.homestay_id = slideshow.homestay_id
            INNER JOIN homestay_room ON homestay_info.homestay_id = homestay_room.homestay_id
            WHERE slideshow.homestay_id = " . $_GET['homestay_id'];

    error_log($sql);

    $result = $conn->query($sql);
    error_log(print_r($result, true));
    $image_array = array();
    $homestay_name = '';
    $homestay_id = $_GET['homestay_id'];

    if ($result->num_rows >0 ) {

        while($row = $result->fetch_assoc()) {
            error_log(print_r($row, true));

            $image_array[] = $row['path'];

            $homestay_name = $row['name'];
        }

        error_log(print_r($image_array, true));
    } else {
        error_log("Zero inputs");
    }

    $sql_amenity = "SELECT DISTINCT amenity_name, homestay_room.homestay_id, img FROM amenities
                    INNER JOIN room_amenity ON room_amenity.amenity_id = amenities.amenity_id
                    INNER JOIN homestay_room ON homestay_room.room_id = room_amenity.room_id
                    WHERE homestay_room.homestay_id = " . $_GET['homestay_id'];

    $result_amenity = $conn->query($sql_amenity);

    $amenity_name = array();
    $amenity_img = array();

    if($result_amenity->num_rows >0) {
        while($row_amenity = $result_amenity->fetch_assoc()) {
            $amenity_name[] = $row_amenity['amenity_name'];
            $amenity_img[] = $row_amenity['img'];

            error_log(print_r($row, true));
        }
        error_log(print_r($amenity_img, true));
    } else {
        error_log("No Amenity found");
    }

?>

