<?php
    include_once('config/mainconfig.php');

    class Pembayaran {
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

        public function siapBayar() {
            $sql = "SELECT * FROM t_pesanan WHERE status_pesanan='disajikan'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function getNamaJumlah($meja) {
            $sql = "SELECT t_menu.`nama_menu`, t_detail_pesanan.`jumlah` 
                    FROM t_menu INNER JOIN t_detail_pesanan INNER JOIN t_pesanan
                    ON t_menu.`id_menu`=t_detail_pesanan.`id_menu` AND t_pesanan.`id_pesanan`=t_detail_pesanan.`id_pesanan`
                    WHERE t_pesanan.`nomor_meja`=$meja AND t_pesanan.status_pesanan='disajikan'";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>