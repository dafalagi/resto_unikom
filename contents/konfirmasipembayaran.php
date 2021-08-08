<?php
    include_once('layouts/head.php');

    $idpesanan = "";
    if (isset($_GET['id'])) {
        $idpesanan = base64_url_decode($_GET['id']);
    }

    if (isset($_POST['bayar'])) {
        $idpesanan = $_POST['id_pesanan'];
        $total = $_POST['total'];
        $result = $bayarObj->insertBayar($idpesanan,$total);
        if ($result == true) {
            $result = $bayarObj->getBayar($idpesanan);
            $row = $result->fetch_assoc();
            $nomeja = $row['nomor_meja'];
            if ($result->num_rows == 1) {
                $pesananObj->statusDibayar($idpesanan);
                $mejaObj->statusTersedia($nomeja);
                $detailObj->deleteDetail($idpesanan);
                $pembayaran = base64_url_encode("pembayaran");
                header('Location: home.php?nav='.$pembayaran, true, 301);
                exit();
            }
        }
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
                                                Total <br><br>
                                                Total Bayar <br><br>
                                                Kembalian
                                            </div>
                                            <div class="col-md-6">
                                            <p> <?php echo $total ?> </p>
                                            <input type="hidden" id="tagihan" value="<?php echo $total ?>" >
                                                <div>
                                                    <input class="field1" type="Number" id="bayar" class="form-control">
                                                </div>
                                                <br>
                                                <div>
                                                    <input class="field2" type="Number" id="kembali" class="form-control">
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
                    <form method="POST">
                    <div class="col-md-6 offset-md-3">
                        <?php $pembayaran = base64_url_encode("pembayaran") ?>
                        <a href="home.php?nav=<?php echo $pembayaran ?>" class="btn btn-secondary" type="#">Kembali</a>
                        <input type="hidden" name="id_pesanan" value="<?php echo $idpesanan ?>">
                        <input type="hidden" name="total" value="<?php echo $total ?>">
                        <button class="btn btn-primary" type="submit" name="bayar">Bayar</button>
                    </div>
                    </form>
                </main>
            </div>
        </div>

        <?php
            include_once('components/modal/modalpembayaran.php');
            include_once('layouts/scripts.php');
        ?>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#tagihan, #bayar").keyup(function() {
                    var total_harga  = $("#tagihan").val();
                    var total_bayar = $("#bayar").val();
                
                    var total = parseInt(total_bayar) - parseInt(total_harga);
                    $("#kembali").val(total);
                });
            });
        </script>

        <?php 
            include_once('layouts/end.php')
        ?>