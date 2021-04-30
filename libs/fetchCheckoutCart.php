<?php

    require "../config/db.php";

    if (isset($_POST['id'], $_POST['token'], $_POST['counter'], $_POST['sub_bundle'], $_POST['id'], $_POST['price'], $_POST['class'])) {
        $counter = $db->escape($_POST['counter']);
        $boundle = $db->escape($_POST['sub_bundle']);
        $class = $db->escape($_POST['class']);
        $price = $db->escape($_POST['price']);
        $token = $db->escape($_POST['token']);
        $order_id = '#'.mt_rand(10000000, 99999999);
        $date = date("Y-m-d");
        $subid = $_POST['subid'];

        $db->saveData(TBL_PURCHASED_COURSE, "order_id = '$order_id', user_guid = '$token', class_id = '$class_id', class = '$class', price = '$price', xdate = '$date'");
        // var_dump($r);exit;
    }

?>