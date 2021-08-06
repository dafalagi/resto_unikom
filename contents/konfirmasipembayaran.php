<?php
    include_once('layouts/head.php');

    $idpesanan = "";
    if(isset($_GET['id'])) {
        $idpesanan = base64_url_decode($_GET['id']);
    }
?>   
    
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
                                            <?php
                                                $result = $detailObj->getDetail($idpesanan);
                                                while ($row = $result->fetch_assoc()) {
                                                    $menu = $row['nama_menu'];
                                                    $harga = $row['harga_menu'];
                                            ?>
                                            <div class="col-md-6">
                                                <?php echo $menu ?> <br>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo $harga ?> <br>
                                            </div>
                                            <?php
                                                }
                                                $result = $bayarObj->getSum($idpesanan);
                                                if ($row = $result->fetch_assoc()) {
                                                    $total = $row['total'];
                                                }
                                            ?>
                                        </div>
                                        <br>
                                        <div class="row gx-1 "> 
                                            <div class="col-md-6">
                                                Total <br>
                                                Total Bayar <br><br>
                                                Kembalian
                                            </div>
                                            <div class="col-md-6">
                                            <?php echo $total ?>
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
                        <?php
                            $selesaibayar = base64_url_encode("selesaibayar");
                            $id = base64_url_encode($idpesanan);
                        ?>
                        <a href="home.php?nav=<?php echo $selesaibayar ?>&id=<?php echo $id ?>" 
                        class="btn btn-primary" type="button">Bayar</a>
                    </div>
                </main>
            </div>
        </div>

        <?php
            include_once('components/modal/modalpembayaran.php'); 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php');
        ?>