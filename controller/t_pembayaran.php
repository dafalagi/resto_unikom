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

        public function getNamaJumlah($id) {
            $sql = "SELECT t_menu.`nama_menu`, t_detail_pesanan.`jumlah` 
                    FROM t_menu INNER JOIN t_detail_pesanan INNER JOIN t_pesanan
                    ON t_menu.`id_menu`=t_detail_pesanan.`id_menu` AND t_pesanan.`id_pesanan`=t_detail_pesanan.`id_pesanan`
                    WHERE t_pesanan.`id_pesanan`=$id AND t_pesanan.status_pesanan='disajikan'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function getSum($id) {
            $sql = "SELECT SUM(sub_total) AS total FROM t_detail_pesanan WHERE id_pesanan='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }
        
        public function getBayar($id) {
            $sql = "SELECT * FROM t_pembayaran AS a INNER JOIN t_pesanan AS b ON a.id_pesanan=b.id_pesanan
                    WHERE b.id_pesanan='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function insertBayar($id,$total) {
            $user = $_SESSION['user'];
            $sql = "SELECT * FROM t_kasir WHERE username='$user'";
            $result = $this->conn->query($sql);
            if ($row = $result->fetch_assoc()) {
                $nipr = $row['nipr'];
                $sql = "INSERT INTO t_pembayaran (nipr,id_pesanan,total_tagihan,tipe_bayar,tanggal_pembayaran)
                    VALUES ('$nipr','$id','$total','tunai',NOW())";
                $result = $this->conn->query($sql);

                return $result;
            }
        }
    }
?>