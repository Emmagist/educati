<?php
    require_once "constant.php";

    session_start();

    class Database{
        private $con = false; // Check to see if the connection is active
        public $myconn ;// This will be our mysqli object
        private $result = array(); // Any results from a query will be stored here
        private $myQuery = ""; // used for debugging process with SQL return
        private $numResults = ""; // used for returning the number of rows

        function __construct(){
            $this->connect();
        }

        // Function to make connection to database
        public function connect() {
        
                $this->myconn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); // mysql_connect() with variables defined at the start of Database class
                if ($this->myconn->connect_errno) {
                    die("Database connection failed". $this->myconn->connect_error);exit;
                }
        }

        public function query($sql) {
          return $this->myconn->query($sql);
        }

        public function selectData($table, $field = '*', $conditions = "", $column = ''){
            $rows = [];
                $fields = trim($field);
                $where = !empty($conditions) ? "WHERE" : "";
            $result = $this->query("SELECT " . $fields . " FROM " . $table . "  $where " . $conditions);
            //var_dump($result);exit;
            $count = $result->num_rows;
            if ($count > 0) {
              while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
              }
              return $rows;
            }
        }

        public function searchData($table, $field = "*", $conditions = "", $val = '', $limit = ''){
            $rows = [];
                $fields = trim($field);
                $where = !empty($conditions) ? "WHERE" : "";
            $result = $this->query("SELECT " . $fields . " FROM " . $table . "  $where " . $conditions . " LIKE '%".$val."%' LIMIT " . $limit);
            $cout = $result->num_rows; 
            if($cout > 0){
                if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
                }
            }
            else{
                return 0;
            }
        }

        public function saveData($table, $sql){
            return $this->query("INSERT INTO " . $table . "  SET " . $sql);
        }

        public function erase($table, $conditions) {
            return $this->query("DELETE FROM " . $table . "  WHERE " . $conditions);
        }

        public function update($table, $sql, $conditions) {
            return $this->query("UPDATE " . $table . "  SET " . $sql . " WHERE " . $conditions);
        }
    
        // to generate a token
        public function entityGuid(){
            return strtolower(hash_hmac("sha256", uniqid(), bin2hex(openssl_random_pseudo_bytes(22))));   
        }

        //real_escape_string
        public function escape($data) {
            return strtolower(trim(addslashes($this->myconn->real_escape_string($data))));
        }

        public function set($key, $val){
            $_SESSION[$key] = $val;
            
        }

        public function getSession($key){
            if (isset($_SESSION[$key])) {
                return $_SESSION[$key];
            } else {
                return false;
            }
        }

        public function getLogin($redirect){
            if ($this->getSession('login') == false) {
                unset($_SESSION["entity_guid"], $_SESSION["email"]);
                session_destroy();
                header("Location: login.php?page_url=$redirect");
                // header("Location: login.php");
            }
        }

        public function getRedirectURI(){
            $protocol = $_SERVER['SERVER_PROTOCOL'];
            // echo $protocol;
            if (strpos($protocol, "HTTPS")) {
                $protocol = "HTTPS://";
            }else{
                $protocol = "HTTP://";
            }

            return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        }

        public function validatePhoneNumber($phone_number){
            // Allow + and - in phone number
            $phoneNumberValidate = filter_var($phone_number, FILTER_SANITIZE_NUMBER_INT);

            //Remove - form phone number
            $checkPhoneNumber = str_replace("-", "", $phoneNumberValidate);

            // check phone number length
            if (strlen($checkPhoneNumber <= 10) && strlen($checkPhoneNumber > 15)) {
                return false;
            }else {
                return true;
            }
        }

        public function validateEmail($email){
            //check if email is invalid
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            }else {
                return false;
            }
        }

        public function dateFormat($date){
            $timestamp = strtotime($date);
            // $timestamp = preg_replace('-', ' ', $timestamp);
            return date('d M Y', $timestamp);
        }

        public function selectRandLimit($table, $field = '*', $conditions = "", $limit = ""){
            $rows = [];
            $fields = trim($field);
            $where = !empty($conditions) ? "WHERE" : "";
            $limits = $limit;
            $result = $this->query("SELECT" . $fields . " FROM " . $table . " $where " . $conditions . " ORDER BY RAND() LIMIT " . $limits);
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                   $rows[] = $row;
                }
                return $rows;
            }
        }

        public function selectAllLimited($table, $field = '*', $conditions = "", $limit = ""){
            $rows = [];
            $fields = trim($field);
            $where = !empty($conditions) ? "WHERE" : "";
            $limits = $limit;
            $result = $this->query("SELECT" . $fields . " FROM " . $table . " $where " . $conditions . " LIMIT " . $limits);
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                   $rows[] = $row;
                }
                return $rows;
            }
        }

        public function selectLimit($table, $field = '*', $conditions = "", $column="", $limit = ""){
            $rows = [];
            $fields = trim($field);
            $where = !empty($conditions) ? "WHERE" : "";
            $limits = $limit;
            $result = $this->query("SELECT" . $fields . " FROM " . $table . " $where " . $conditions . " ORDER BY " . $column . " DESC LIMIT " . $limits);
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                   $rows[] = $row;
                }
                return $rows;
            }
        }

        public function selectLimitAsc($table, $field = '*', $conditions = "", $column="", $limit = ""){
            $rows = [];
            $fields = trim($field);
            $where = !empty($conditions) ? "WHERE" : "";
            $limits = $limit; 
            $result = $this->query("SELECT" . $fields . " FROM " . $table . " $where " . $conditions . " ORDER BY " . $column . " ASC LIMIT " . $limits);
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                   $rows[] = $row;
                }
                return $rows;
            }
        }
    }
    $db = new Database;

?>