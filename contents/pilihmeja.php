<?php include_once('layouts/head.php') ?>   
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/pilihmeja.css">
</head>
    <body class="sb-nav-fixed">
        
        <?php 
            include_once('components/navbar.php');
            include_once('components/sidenav.php');
        ?>

        <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
           <!-- list meja -->
        <div class="row mb-4 pt-4">
            <div class="col text-center">
            <h2 class="listmeja">List Meja</h2>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col -md">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">01</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-light pilih">Pilih</button>
                        </div>
                        <p class="jumlahkursi">Jumlah Kursi : 4</p>
                    </div>
                </div>
            </div>
            <div class="col -md">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">02</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-light pilih">Pilih</button>
                        </div>
                        <p class="jumlahkursi">Jumlah Kursi : 4</p>
                    </div>
                </div>
            </div>
            <div class="col -md">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">03</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-light pilih">Pilih</button>
                        </div>
                        <p class="jumlahkursi">Jumlah Kursi : 4</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col -md">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">04</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-light pilih">Pilih</button>
                        </div>
                        <p class="jumlahkursi">Jumlah Kursi : 4</p>
                    </div>
                </div>
            </div>
            <div class="col -md">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">05</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-light pilih">Pilih</button>
                        </div>
                        <p class="jumlahkursi">Jumlah Kursi : 4</p>
                    </div>
                </div>
            </div>
            <div class="col -md">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">06</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-light pilih">Pilih</button>
                        </div>
                        <p class="jumlahkursi">Jumlah Kursi : 4</p>
                    </div>
                </div>
            </div>
        </div>
          </div>
    <!-- akhir list meja -->
    
    <!--awal pagination-->
    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
    <!--akhir pagination-->
          </div>
        </main>


        <?php 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php')
        ?>