<?php

    require "config/init.php";
    require_once "config/emailVerification.php";

    class Users {
        public function findUserByEmail($email){
            global $db;
            return $db->selectData(TBL_STUDENT, "*", "email = '$email'");
        }

        public function getAllUsers($token){
            global $db;
            return $db->selectData(TBL_STUDENT, "*", "user_guid ='$token'");
        }

        public function getCourses(){
            global $db;
            return $db->selectData(TBL_CLASS, "*");
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

        public  function  getTotalAmountPurchased($order_id){
            global  $db;
            $rows = [];
            $result = $db->query("SELECT * FROM total_amount
                                    INNER JOIN purchased_courses 
                                    ON total_amount.order_id = purchased_courses.order_id  
                                    WHERE total_amount.order_id = '$order_id'");
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }
        }

        public function purchasedCourse($token){
            global $db;
            return $db->selectData(TBL_PURCHASED_COURSE, "*", "user_guid = '$token'");
        }

        public function allClasses(){
            global $db;
            //return "yES".TBL_CLASS;
            return $db->selectRandLimit(TBL_CLASS, "*", "", "6");
        }

        public function relatedClasses(){
            global $db;
            return $db->selectRandLimit(TBL_CLASS, "*", "", "4");
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

        public  function  getAllContentByJoin($id){
            global  $db;
            $rows = [];
            $result = $db->query("SELECT * FROM ada_contents
                                    INNER JOIN ada_topics
                                    ON ada_contents.topic_id = ada_topics.topic_id
                                    INNER JOIN classes 
                                    ON ada_contents.class_id = classes.id  
                                    WHERE ada_contents.class_id = '$id'");
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }
        }

        public function getAllCourses(){
            global $db;
            return $db->selectLimitAsc(TBL_CLASS, "*", "", "id", "0,12");
        }

        public  function  getAllTrainingSolutionCourses(){
            global  $db;
            $rows = [];
            $result = $db->query("SELECT * FROM classes
                                    INNER JOIN schools
                                    ON classes.schoolid = schools.schoolid
                                    WHERE schools.school = 'Training Solution'");
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }
        }

        public function getContentsByCourseIdLimit($id){
            global $db;
            return $db->selectLimit(TBL_CONTENTS, "*", "class_id = '$id'", "contents", "1");
        }

        public function getTopicByCourseIdLimit($id){
            global $db;
            return $db->selectLimit(TBL_TOPIC, "*", "class_id = '$id'", "topic", "1");
        }

        public function getPurchasedItemsById($id){
            global $db;
            return $db->selectData(TBL_PURCHASED_COURSE, "*", "id = '$id'");
        }

        public function getCartByToken($token){
            global $db;
            return $db->selectData(TBL_CART, "*", "user_guid = '$token'");
        }

        public function getCourseById($id){
            global $db;
            return $db->selectData(TBL_CLASS, "*", "id = '$id'");
        }

        public function checkCourseById($id){
            global $db;
            return $db->selectData(TBL_CLASS, "*", "id = '$id'");
        }

        public function getTitleByTopicId($id){
            global $db;
            return $db->selectData(TBL_CONTENTS, "*", "topic_id = '$id'");
        }

        public function getContentsByTopicId($id){
            global $db;
            return $db->selectData(TBL_CONTENTS, "*", "content_id = '$id'");
        }
    }
    $user = new Users;

?>