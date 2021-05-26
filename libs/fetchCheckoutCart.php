<?php

    require "../config/db.php";

    if (isset($_POST['token'], $_POST['counter'], $_POST['discount'])) {
        $counter = $db->escape($_POST['counter']);
        $boundle = $db->escape($_POST['discount']);
        $surname = $db->escape($_POST['surname']);
        $items = $_POST['item'];
        $prices = $_POST['price'];
        $token = $db->escape($_POST['token']);
        $order_id = mt_rand(10000000, 99999999);
        $date = date("Y-m-d");
        $subid = $_POST['subid'];

        $sub_count = count($subid);

        for($i=0; $i < $sub_count; $i++){
            $sub_type = $sub_types[$i];
            $subject = $subid[$i];
            $price  = $prices[$i];
            $item = $items[$i];
            if($subject> 0){
                $result = $db->saveData(TBL_PURCHASED_COURSE, "entity_guid = uuid(), user_guid = '$token', order_id = '$order_id', full_name = '$surname', class_id = '$subject', class = '$item', price = '$price', total_items = '$counter', xdate = '$date'"); //var_dump($result);exit;
                
            }
            
        }
        if($result){
            $selects = $db->selectData(TBL_PURCHASED_COURSE, "*", "order_id = '$order_id'");//var_dump($selects);exit;
            foreach ($selects as $select) {
                $order_id = $select['order_id'];
            }
            $db->saveData(TBL_TOTAL_AMOUNT, "order_id = '$order_id', full_name = '$surname', amount = '$boundle', xdate = '$date'"); //var_dump($r);exit;
        }
        echo json_encode("yes");
    }

?>