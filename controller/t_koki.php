<?php
    include_once('config/mainconfig.php');

    class Koki {
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

        public function namaKoki($nipr) {
            $sql = "SELECT nama FROM t_koki
                    WHERE nipr=$nipr";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>