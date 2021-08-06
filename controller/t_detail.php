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

        public function pesanMenu($menu, $id_pesanan) {
            $id_menu = $_POST['idmenu'];
            $jumlah = $_POST['jumlahmenu'];
            
            $sql = "SELECT harga_menu FROM t_menu WHERE id_menu='$id_menu'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();

            $subtotal = (int)$jumlah * (int)$row['harga_menu'];

            $sql2 = "INSERT INTO t_detail_pesanan (id_menu, id_pesanan, jumlah, sub_total)
                    VALUES ('$id_menu','$id_pesanan','$jumlah','$subtotal')";
            $result2 = $this->conn->query($sql2);
        }

        public function getDetail($id) {
            $sql = "SELECT * FROM t_detail_pesanan  AS a INNER JOIN t_menu AS b ON a.id_menu=b.id_menu
                    WHERE id_pesanan='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function deleteDetail($id) {
            $sql = "DELETE FROM t_detail_pesanan WHERE id_pesanan='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>