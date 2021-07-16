<?php 
    if (isset($_GET['nav'])) {
        if ($_GET['nav'] == "staticnav") {
            include_once('contents/layout-static.php');
        }else if ($_GET['nav'] == "lightsidenav") {
            include_once('contents/layout-sidenav-light.php');
        }else if ($_GET['nav'] == "Charts") {
            include_once('contents/charts.php');
        }else if ($_GET['nav'] == "Tables") {
            include_once('contents/tabel.php');
        }
    }else {
        include_once('contents/beranda.php');
    }
?>