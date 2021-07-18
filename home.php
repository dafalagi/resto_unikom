<?php
    session_start();
    include_once('controller/t_pegawai.php');

    $pegawaiObj = new Pegawai();

    if (!isset($_SESSION['user'])) {
        header('location:index.php', true, 301);
        exit();
    }
    if (isset($_GET['logout'])) {
        $pegawaiObj->logout();
    }

    if (isset($_GET['nav'])) {
        if ($_GET['nav'] == "pilihmenu") {
            include_once('contents/pilihmenu.php');
        }else if ($_GET['nav'] == "pilihmeja") {
            include_once('contents/pilihmeja.php');
        }else if ($_GET['nav'] == "kelolamenu") {
            include_once('contents/kelolamenu.php');
        }else if ($_GET['nav'] == "konfirmasi") {
            include_once('contents/konfirmasi.php');
        }else if ($_GET['nav'] == "status") {
            include_once('contents/statuspesanan.php');
        }else if ($_GET['nav'] == "pembayaran") {
            include_once('contents/pembayaran.php');
        }else if ($_GET['nav'] == "buatlaporan") {
            include_once('contents/buatlaporan.php');
        }else if ($_GET['nav'] == "daftarpesanan") {
            include_once('contents/daftarpesanan.php');
        }
    }else {
        include_once('contents/beranda.php');
    }
?>