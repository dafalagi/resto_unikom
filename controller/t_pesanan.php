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
                    NOT IN (SELECT status_pesanan FROM t_pesanan WHERE status_pesanan='disajikan' OR status_pesanan='dibayar')
                    ORDER BY status_pesanan DESC";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function generatePesanan($meja) {
            $sql = "SELECT * FROM t_pelayan LIMIT 1";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            $nipr = $row['nipr'];

            $sql2 = "INSERT INTO t_pesanan (nipr,nomor_meja)
                    VALUES ('$nipr','$meja')";
            $result2 = $this->conn->query($sql2);

            if ($result2 == true) {
                $sql3 = "SELECT id_pesanan FROM t_pesanan ORDER BY id_pesanan DESC LIMIT 1";
                $result3 = $this->conn->query($sql3);

                if ($result3->num_rows == 1) {
                    return $result3;
                }
            }
        }

        public function getNamaJumlah($id) {
            $sql = "SELECT * 
                    FROM t_menu INNER JOIN t_detail_pesanan INNER JOIN t_pesanan
                    ON t_menu.`id_menu`=t_detail_pesanan.`id_menu` AND t_pesanan.`id_pesanan`=t_detail_pesanan.`id_pesanan`
                    WHERE t_pesanan.`id_pesanan`='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function gantiStatus($id) {
            $sql = "UPDATE t_pesanan
                    SET status_pesanan='disajikan'
                    WHERE id_pesanan=$id";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function konfirmasiTidak() {
            $sql = "SELECT * FROM t_pesanan INNER JOIN t_detail_pesanan
                    ON t_pesanan.id_pesanan=t_detail_pesanan.id_pesanan
                    WHERE konfirmasi='tidak'
                    GROUP BY nomor_meja";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function getTotalHarga($data) {
            $sql = "SELECT SUM(sub_total) AS total_harga FROM t_detail_pesanan
                    WHERE id_pesanan='$data'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();

            return $row['total_harga'];
        }

        public function konfirmasiYa($id) {
            $id = $_POST['id_pesanan'];
            $total = $_POST['total_harga'];
            $user = $_SESSION['user'];
            $sql = "SELECT * FROM t_pelayan WHERE username='$user'";
            $result = $this->conn->query($sql);
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $nipr = $row['nipr'];
                $sql = "UPDATE t_pesanan
                        SET konfirmasi='ya', total_harga='$total', nipr='$nipr'
                        WHERE id_pesanan='$id'";
                $result = $this->conn->query($sql);

                return $result;
            }
        }

        public function statusAntrian() {
            $sql = "SELECT * FROM t_pesanan WHERE status_pesanan='antrian' OR status_pesanan='dibuat'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function statusDibuat($id) {
            $sql = "UPDATE t_pesanan SET status_pesanan='dibuat' WHERE id_pesanan='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function statusSelesai($id) {
            $sql = "UPDATE t_pesanan SET status_pesanan='selesai' WHERE id_pesanan='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function statusDibayar($id) {
            $sql = "UPDATE t_pesanan SET status_pesanan='dibayar' WHERE id_pesanan='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>