<?php

    require "config/init.php";
    require_once "config/emailVerification.php";

    class Users {
        public function findUserByEmail($email){
            global $db;
            return $db->selectData(TBL_SYSTEM_USERS, "*", "email = '$email'");
        }

        public function getAllUsers($token){
            global $db;
            return $db->selectData(TBL_SYSTEM_USERS, "*", "entity_guid ='token'");
        }
    }
    $user = new Users;

?>