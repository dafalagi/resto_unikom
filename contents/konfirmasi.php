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
                    <div class="card">
                        <div class="card-header">
                            No Meja
                        </div>
                        <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr><th scope="col">Menu yang Dipilih</th>
                                    <th scope="col">Jumlah Menu</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Koaci</th>
                                    <td>2</td>
                                    <td>1000000</td>
                                </tr>
                                <tr>
                                    <th scope="row">pempek</th>
                                    <td>1</td>
                                    <td>50000</td>
                                </tr>
                            </tbody>
                        </table>
                            <a href="#" class="btn btn-primary">Konfirmasi</a>
                        </div>
                    </div>       
    
        <?php 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php')
        ?>