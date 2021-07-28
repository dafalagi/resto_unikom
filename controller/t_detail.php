<?php
    include_once('config/mainconfig.php');

    class Detail {
        public $conn;

        public function __construct()
        {
            $this->conn = new mysqli(dbHost, dbUser, dbPass, dbName);

            if ($this->conn->connect_error) {
                echo "Connection Failed : ". $this->conn->connect_error;
            }else {
                return $this->conn;
            }
        }

        public function viewDetail() {
            $sql = "SELECT * FROM t_detail_pesanan";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>