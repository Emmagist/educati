<?php
include  "config/init.php";

unset($_SESSION["entity_guid"], $_SESSION["email"]);
session_destroy();
header("Location: index.php");

?>