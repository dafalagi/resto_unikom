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

            return $result;
        }

        public function totalMeja() {
            $sql = "SELECT COUNT(nomor_meja) FROM t_meja";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function viewMeja($nomeja) {
            $sql = "SELECT * FROM t_meja WHERE nomor_meja='$nomeja'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function statusTerisi($meja) {
            $sql = "UPDATE t_meja
                    SET status_meja='terisi'
                    WHERE nomor_meja=$meja";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function statusTersedia($meja) {
            $sql = "UPDATE t_meja
                    SET status_meja='tersedia'
                    WHERE nomor_meja=$meja";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>