<?php
    include_once('config/mainconfig.php');

    class Pegawai {
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

        public function loginPegawai($post) {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            if (!empty($username || !empty($password))) {
                $sql = "SELECT * FROM t_pegawai WHERE username='$username'";
                $result = $this->conn->query($sql);
                if ($result->num_rows == 1) {
                    while ($row = $result->fetch_assoc()) {
                        if ($username != $row['username'] || $password != $row['password']) {
                            $_SESSION['login'] = "true";
                            $_SESSION['username'] = $username;
                            header('Location:./home.php', true, 301);
                            exit();
                        }else {
                            return $errMsg = "Username or Password is invalid";
                        }
                    }
                }else {
                    return $errMsg = "User not found";
                }
            }else {
                return  $errMsg = "Username and Password is required";
            }
        }

        public function registerPegawai($post) {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password_1']);
            $password2 = htmlspecialchars($_POST['password_2']);
            $nama = htmlspecialchars($_POST['nama']);
            $jamkerja = htmlspecialchars($_POST['jam_kerja']);
            $gaji = htmlspecialchars($_POST['gaji']);


            $sql = "SELECT * FROM t_pegawai WHERE username='$username'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            
            if (empty($username) || empty($nama) || empty($password) || empty($password2) ||
                empty($jamkerja) || empty($gaji)) {
                return $errMsg = "Please fill the blank field";
            }else if ($username == $row['username']){
                return $errMsg = "Username already exists";
            }else if ($password != $password2){
                return $errMsg = "Password does not match";
            }else if (strlen($password) < 6){
                return $errMsg = "Password should be 6 digits";
            }else {
                $sql2 = "INSERT INTO t_pegawai VALUES ('$username','$password','$nama',
                        '$jamkerja','$gaji')";
                $result2 = $this->conn->query($sql2);
                if ($result2 == true){
                    $_SESSION['login'] = "true";
                    $_SESSION['username'] = $username;
                    header('Location:./home.php', true, 301);
                    exit();
                }else {
                    return $errMsg = "You are not registered. Please try again";
                }
            }
        }
    }
?>