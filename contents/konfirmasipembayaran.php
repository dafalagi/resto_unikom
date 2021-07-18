<?php include_once('layouts/head.php') ?>   
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/konfirmasipembayaran.css">
</head>
    <body class="sb-nav-fixed">
        
        <?php 
            include_once('components/navbar.php');
            include_once('components/sidenav.php');
        ?>

            <div id="layoutSidenav_content">
                <main>
                    <!-- button -->
                    <div class="container-fluid px-4">
                    <div class="tombolatas d-grid col-2">
                        <button type="button" class="btn btn-primary btn-lg">CARD</button>
                    </div>
                    <!-- card -->
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Non-Tunai</h5>
                                    <label for="nim">Nama Pemilik Kartu</label>
                                    <input class="form-control" type="text" placeholder="Nama" aria-label=".form-control-sm example">
                                    <div class="row">
                                        <div class="col">
                                            <label for="nim">Nomor Kartu</label>
                                            <input class="form-control" type="text" placeholder="Nama" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="col">
                                            <label for="nim">Expired</label>
                                            <input class="form-control" type="text" placeholder="Nama" aria-label=".form-control-sm example">
                                        </div>
                                    </div> 
                                    <label for="nim">CVC</label>
                                    <input class="form-control" type="text" placeholder="Nama" aria-label=".form-control-sm example">
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Summary</h5>

                                    <div class="container text-center">
                                        <div class="row">
                                            <div class="col">
                                                Nama <br>
                                                Ayam Bakar <br>
                                                Bebek Bakar
                                            </div>
                                            <div class="col">
                                                Harga <br>
                                                64000 <br>
                                                64000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="tombol">
                        <button class="btn btn-secondary" type="submit">Kembali</button>
                        <button class="btn btn-primary" type="submit">Bayar</button>
                    </div>
                </main>
            </div>
        </div>

        <?php
            include_once('components/modal/modalpembayaran.php'); 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php');
        ?>