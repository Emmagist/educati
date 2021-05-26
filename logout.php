<?php
include  "config/init.php";
// $protocol = $_SERVER['SERVER_PROTOCOL'];
//   // echo $protocol;
//   if (strpos($protocol, "HTTPS")) {
//     $protocol = "HTTPS://";
//   }else{
//     $protocol = "HTTP://";
//   }

//   $redirect = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

unset($_SESSION["entity_guid"], $_SESSION["email"]);
session_destroy();
header("Location: index.php?redirect=$redirect");

?>