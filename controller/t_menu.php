<?php
    include_once('config/mainconfig.php');

    class Menu {
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
        
        public function viewMenu() {
            $sql = "SELECT * FROM t_menu";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function editMenu($post) {
            $id = htmlspecialchars($_POST['edit_id_menu']);
            $nama = htmlspecialchars($_POST['edit_nama_menu']);
            $harga = htmlspecialchars($_POST['edit_harga_menu']);
            $pembuat = htmlspecialchars($_POST['edit_pembuat_menu']);
            $desk = htmlspecialchars($_POST['edit_desk_menu']);
            $stok = htmlspecialchars($_POST['edit_stok_menu']);

            if (isset($_FILES["image"]["name"])) {
                // Get file info 
                $fileName = basename($_FILES["image"]["name"]); 
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                // Allow certain file formats 
                $allowTypes = array('jpg','png','jpeg','gif');

                if (in_array($fileType, $allowTypes)) {
                    $image = $_FILES['image']['tmp_name']; 
                    $imgContent = addslashes(file_get_contents($image));
                }
            }

            $sql = "SELECT nipr FROM t_koki WHERE nama='$pembuat'";
            $result = $this->conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $nipr = $row['nipr'];

                    if (empty($imgContent)) {
                        $sql2 = "UPDATE t_menu
                                SET nama_menu='$nama', harga_menu='$harga', nipr='$nipr',
                                deskripsi_menu='$desk', stok_menu='$stok' 
                                WHERE id_menu='$id'";
                    }else {
                        $sql2 = "UPDATE t_menu
                                SET nama_menu='$nama', harga_menu='$harga', nipr='$nipr',
                                deskripsi_menu='$desk', stok_menu='$stok', gambar_menu='$imgContent' 
                                WHERE id_menu='$id'";
                    }
                    $result2 = $this->conn->query($sql2);

                    return $result2;
            }
        }

        public function tambahMenu($post) {
            $pembuat = htmlspecialchars($_POST['pembuat_menu']);
            $nama = htmlspecialchars($_POST['nama_menu']);
            $desk = htmlspecialchars($_POST['desk_menu']);
            $harga = htmlspecialchars($_POST['harga_menu']);
            $stok = htmlspecialchars($_POST['stok_menu']);

            // Get file info 
            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg','gif');

            $sql = "SELECT nipr FROM t_koki WHERE nama='$pembuat'";
            $result = $this->conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $nipr = $row['nipr'];

                if (in_array($fileType, $allowTypes)) {
                    $image = $_FILES['image']['tmp_name']; 
                    $imgContent = addslashes(file_get_contents($image));

                    $sql2 = "INSERT INTO t_menu (nipr, nama_menu, deskripsi_menu, harga_menu, stok_menu, gambar_menu)
                            VALUES ('$nipr','$nama','$desk','$harga','$stok','$imgContent')";
                    $result2 = $this->conn->query($sql2);
                
                    return $result2;
                }
            }
        }

        public function cariMenu($data) {
            $nama = htmlspecialchars($_POST['nama_menu']);

            $sql = "SELECT * FROM t_menu
                    WHERE nama_menu LIKE '%$nama%'";
            $result = $this->conn->query($sql);

            return $result;

        }

        public function hapusMenu($data) {
            $id = htmlspecialchars($data);

            $sql = "DELETE FROM t_menu WHERE id_menu='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>