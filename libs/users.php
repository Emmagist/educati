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
            return $db->selectData(TBL_SYSTEM_USERS, "*", "entity_guid ='$token'");
        }

        public  function  getAllClassesBySchoolId($id){
            global  $db;
            $rows = [];
            $result = $db->query("SELECT * FROM classes
                                    INNER JOIN schools 
                                    ON classes.schoolid = schools.schoolid  
                                    WHERE classes.schoolid = '$id'");
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }
        }

        public function purchasedCourse($token){
            global $db;
            return $db->selectData(TBL_PURCHASED_COURSE, "*", "entity_guid = '$token'");
        }

        public function allClasses(){
            global $db;
            //return "yES".TBL_CLASS;
            return $db->selectRandLimit(TBL_CLASS, "*", "", "6");
        }

        public function relatedClasses(){
            global $db;
            return $db->selectRandLimit(TBL_CLASS, "*", "", "15");
        }

        public function courseDetails($id){
            global $db;
            return $db->selectData(TBL_CLASS, "*", "id = '$id'");
        }

        public function getAllSchoolsLimited(){
            global $db;
            return $db->selectRandLimit(TBL_SCHOOL, "*", "", "7");
        }

        // public function getAllSchools(){
        //     global $db;
        //     return $db->selectRandLimit(TBL_SCHOOL, "*", "", "7");
        // }

        public function getSchoolsById($id){
            global $db;
            return $db->selectData(TBL_SCHOOL, "*", "schoolid = '$id'");
        }

        public function getAllSchools(){
            global $db;
            return $db->selectData(TBL_SCHOOL, "*");
        }

        public function getAllFromTopicById($id){
            global $db;
            return $db->selectData(TBL_TOPIC, "*", "class_id = '$id'");
        }
    }
    $user = new Users;

?>