<?php

    require "../config/db.php";

       if (!empty($_POST['formdata'])) {
        echo $class = $db->escape($_POST['class']);exit;
        $price = $db->escape($_POST['price']);
        $token = $db->escape($_POST['token']);
        $order_id = '#'.mt_rand(10000000, 99999999);
        $date = date("Y-m-d");
        $db->saveData(TBL_PURCHASED_COURSE, "order_id = '$order_id', user_guid = '$token', course = '$class', price = '$price', xdate = '$date'");
    }

?>