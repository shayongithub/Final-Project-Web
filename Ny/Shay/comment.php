<?php
    require_once 'database.php';

    if (isset($_POST['homestay_id']) && !empty($_POST['homestay_id'])) {
        $homestay_id = $_POST['homestay_id'];
    } else {
        $homestay_id = null;
    }

    if (isset($_POST['time_of_year']) && !empty($_POST['time_of_year'])) {
        $time_of_year = $_POST['time_of_year'];
    } else {
        $time_of_year = null;
    }

    if (isset($_POST['traveler_type']) && !empty($_POST['traveler_type'])) {
        $traveler_type = $_POST['traveler_type'];
    } else {
        $traveler_type = null;
    }

    if (isset($_POST['language']) && !empty($_POST['language'])) {
        $language = $_POST['language'];
    } else {
        $language = null;
    }

    if (isset($_POST['rating']) && !empty($_POST['rating'])) {
        $rating = $_POST['rating'];
    } else {
        $rating = null;
    }

    if (isset($_POST['comment_text']) && !empty($_POST['comment_text'])) {
        $comment_text = $_POST['comment_text'];
    } else {
        $comment_text = null;
    }

    error_log($$homestay_id);
    error_log($comment_text);
    error_log($rating);
    error_log($time_of_year);
    error_log($traveler_type);
    error_log($language);

    if ($time_of_year != null && $traveler_type != null && $language != null && $rating != null && $comment_text != null) {
        $sql = 'INSERT INTO comment VALUES(' . $homestay_id . ',"' . $time_of_year .
            '","' . $traveler_type . '","' . $language . '", ' . $rating . ',"' . $comment_text . '")';

        error_log($sql);

        if ($conn->query($sql) === TRUE) {
            error_log("New record created successfully");
        } else {
            error_log("Error: " . $sql . "<br>" . $conn->error);
        }
    } else {
        error_log('Some of the value is null');
    }

    $conn->close();
?>
