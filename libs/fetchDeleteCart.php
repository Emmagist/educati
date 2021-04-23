<?php

    require "../config/db.php";

    $id = $db->escape($_POST['delete_id']);
    ($db->erase(TBL_CART, "id = '$id'"));


?>