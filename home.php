<?php
    session_start();

    include_once('controller/secureUrl.php');
    include_once('controller/t_pegawai.php');
    include_once('controller/t_detail.php');
    include_once('controller/t_kasir.php');
    include_once('controller/t_koki.php');
    include_once('controller/t_meja.php');
    include_once('controller/t_menu.php');
    include_once('controller/t_pelayan.php');
    include_once('controller/t_pembayaran.php');
    include_once('controller/t_pesanan.php');

    $pegawaiObj = new Pegawai();
    $detailObj = new Detail();
    $kasirObj = new Kasir();
    $kokiObj = new Koki();
    $mejaObj = new Meja();
    $menuObj = new Menu();
    $pelayanObj = new Pelayan();
    $bayarObj = new Pembayaran();
    $pesananObj = new Pesanan();

    if (!isset($_SESSION['user'])) {
        header('location:index.php', true, 301);
        exit();
    }
    if (isset($_GET['logout'])) {
        $pegawaiObj->logout();
    }

    if (isset($_GET['nav'])) {
        $nav = base64_url_decode($_GET['nav']);
        if ($nav == "pilihmenu") {
            include_once('contents/pilihmenu.php');
        }else if ($nav == "pilihmeja") {
            include_once('contents/pilihmeja.php');
        }else if ($nav == "kelolamenu") {
            include_once('contents/kelolamenu.php');
        }else if ($nav == "konfirmasi") {
            include_once('contents/konfirmasi.php');
        }else if ($nav == "status") {
            include_once('contents/statuspesanan.php');
        }else if ($nav == "pembayaran") {
            include_once('contents/pembayaran.php');
        }else if ($nav == "buatlaporan") {
            include_once('contents/buatlaporan.php');
        }
    }else {
        include_once('contents/beranda.php');
    }
?>