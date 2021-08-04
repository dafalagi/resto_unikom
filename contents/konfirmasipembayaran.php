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
                    <!-- Summary -->
                    <div>
                        <!-- Main -->
                        <div class="col-md-6 offset-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title offset-md-2">Summary</h5>
                                    <div class="container text-center">
                                        <br>
                                        <div class="row gx-1 "> 
                                            <div class="col-md-6">
                                                Nama <br>
                                                Ayam Bakar <br>
                                                Bebek Bakar
                                            </div>
                                            <div class="col-md-6">
                                                Harga <br>
                                                64000 <br>
                                                64000
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row gx-1 "> 
                                            <div class="col-md-6">
                                                Total <br>
                                                Total Bayar <br><br>
                                                Kembalian
                                            </div>
                                            <div class="col-md-6">
                                            128.000
                                                <div>
                                                    <input class="field1" type="Number" id="###" class="form-control">
                                                </div>
                                                <br>
                                                <div>
                                                    <input class="field2" type="Number" id="###" class="form-control">
                                                </div>
                                            </div>
                                        </div>          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button -->
                    <br>
                    <div class="col-md-6 offset-md-3">
                        <button class="btn btn-secondary" type="#">Kembali</button>
                        <button class="btn btn-primary" type="submit"  data-bs-toggle="modal" data-bs-target="#modalstruk">Bayar</button>
                    </div>
                </main>
            </div>
        </div>

        <?php
            include_once('components/modal/modalpembayaran.php'); 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php');
        ?>