<?php include_once('layouts/head.php') ?>   
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/konfirmasi.css">
</head>
    <body class="sb-nav-fixed">
        
        <?php 
            include_once('components/navbar.php');
            include_once('components/sidenav.php');
        ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
    <!-- main -->
    <!-- card1 -->
                <div class="d-grid gap-4">
                    <div class="card text-white bg-dark">
                        <div class="card-header">
                            No Meja ?php?
                        </div>
                        <div class="card-body">
                            <table class="table text-white">
                                <thead>
                                    <tr>
                                        <th>Menu yang Dipilih</th>
                                        <th>Jumlah Menu</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Bebek Tempur</th>
                                        <td>2</td>
                                        <td>62000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalkonfirmasi">Konfirmasi</button>
                            Total Harga ?php?
                        </div>
                    </div>
    <!-- card2 -->
                <div class="d-grid gap-4">
                    <div class="card text-white bg-dark">
                        <div class="card-header">
                            No Meja ?php?
                        </div>
                        <div class="card-body">
                            <table class="table text-white">
                                <thead>
                                    <tr>
                                        <th>Menu yang Dipilih</th>
                                        <th>Jumlah Menu</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Ayam Geprek</th>
                                        <td>2</td>
                                        <td>23000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalkonfirmasi">Konfirmasi</button>
                            Total Harga ?php?
                        </div>
                    </div>       
    
        <?php 
            include_once('components/modal/modalkonfirmasi.php'); 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php')
        ?>