<?php
    include_once('config/mainconfig.php');

    class Meja {
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

        public function getMeja() {
            $sql = "SELECT * FROM t_meja";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();

            return $row;
        }
    }
?>