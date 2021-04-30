<?php

    require "../config/db.php";

    if (isset($_POST['id'], $_POST['token'], $_POST['price'], $_POST['class'], $_POST['full_name'])) {
        $class_id = $db->escape($_POST['id']);
        $class = $db->escape($_POST['class']);
        $price = $db->escape($_POST['price']);
        $token = $db->escape($_POST['token']);
        $full_name = $db->escape($_POST['full_name']);
        $order_id = '#'.mt_rand(10000000, 99999999);
        $date = date("Y-m-d");
        $db->saveData(TBL_PURCHASED_COURSE, "order_id = '$order_id', user_guid = '$token', full_name = '$full_name', class_id = '$class_id', class = '$class', price = '$price', xdate = '$date'");
        // var_dump($r);exit;
    }

?>