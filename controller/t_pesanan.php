<?php
    include_once('config/mainconfig.php');

    class Pesanan {
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

        public function viewPesanan() {
            $sql = "SELECT * FROM t_pesanan WHERE status_pesanan 
                    NOT IN (SELECT status_pesanan FROM t_pesanan WHERE status_pesanan='disajikan')";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function generatePesanan() {
            $sql = "INSERT INTO t_pesanan (nipr)
                    VALUES (11)";
            $result = $this->conn->query($sql);

            if ($result == true) {
                $sql2 = "SELECT id_pesanan FROM t_pesanan ORDER BY id_pesanan DESC LIMIT 1";
                $result2 = $this->conn->query($sql2);

                if ($result2->num_rows == 1) {
                    return $result2;
                }
            }
        }

        public function getNamaJumlah($meja) {
            $sql = "SELECT t_menu.`nama_menu`, t_detail_pesanan.`jumlah` 
                    FROM t_menu INNER JOIN t_detail_pesanan INNER JOIN t_pesanan
                    ON t_menu.`id_menu`=t_detail_pesanan.`id_menu` AND t_pesanan.`id_pesanan`=t_detail_pesanan.`id_pesanan`
                    WHERE t_pesanan.`nomor_meja`=$meja";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function gantiStatus($meja) {
            $sql = "UPDATE t_pesanan
                    SET status_pesanan='disajikan'
                    WHERE nomor_meja=$meja";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>