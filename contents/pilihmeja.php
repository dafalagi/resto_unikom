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

        <?php
            $meja = $mejaObj->totalMeja();
            $data = $meja->fetch_array();
            $totalMeja = $data[0];
            $hasil = $totalMeja / 3;

            if ($totalMeja < (((int) $hasil * 3) + 2) and $totalMeja > ((int) $hasil * 3)) {
                $divrow = (int) $hasil + 1;
            }else if ($totalMeja < (((int) $hasil * 3) + 3) and $totalMeja > ((int) $hasil * 3)) {
                $divrow = (int) $hasil + 1;
            }else {
                $divrow = (int) $hasil;
            }

            $i = 1;
            $k = 0;
            while ($i <= $divrow) {
                $i++;
        ?>
        <div class="row mb-4">
            <?php
                $j = 1;
                while ($j < 4 and $k < $totalMeja ) {
                    $k++;
                    $result = $mejaObj->viewMeja($k);
                    $row = $result->fetch_assoc();
                    $j++; 
            ?>
            <div class="col -md">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><?php echo $row['nomor_meja'] ?></p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-light pilih">Pilih</button>
                        </div>
                        <p class="jumlahkursi">Jumlah Kursi : <?php echo $row['jumlah_kursi'] ?></p>
                    </div>
                </div>
            </div>
            <?php    } ?>
        </div> <?php } ?>
          </div>
    <!-- akhir list meja -->
    
          </div>
        </main>


        <?php 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php')
        ?>