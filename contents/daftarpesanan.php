<?php 
    include_once('layouts/head.php'); 
    if (isset($_GET['status'])) {
        $nomeja = base64_url_decode($_GET['status']);
        $pesananObj->gantiStatus($nomeja);
    }
?>   
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/daftarpesanan.css">
</head>
    <body class="sb-nav-fixed">
        
        <?php 
            include_once('components/navbar.php');
            include_once('components/sidenav.php');
        ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <!-- tabel -->
                        <div class="table-responsive">
                        <table class="table text-center table-hover table-dark ">
                            <thead>
                                <tr class="namacolom">
                                    <th>no meja</th>
                                    <th class="align-top">
                                    List Menu Yang Dipesan
                                    </th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <!-- body tabel -->
                                <tbody>
                                    <!-- tabel 1 -->

                                    <?php
                                        $pesanan = $pesananObj->viewPesanan();
                                        while ($pRow = $pesanan->fetch_assoc()) {
                                    ?>

                                    <tr>
                                        <td class="align-top">
                                            Meja Nomor <?php echo $pRow['nomor_meja'] ?>
                                        </td>
                                        <?php ?>
                                        <td class="align-top">
                                            <?php
                                                $menu = $pesananObj->getNamaJumlah($pRow['nomor_meja']);
                                                $nomeja = $pRow['nomor_meja'];
                                                while ($mRow = $menu->fetch_assoc()) {
                                                    echo "<p>".$mRow['nama_menu']."</p>";
                                                }
                                            ?>
                                        </td>
                                        <td class="align-top"> 
                                            <?php
                                                $menu = $pesananObj->getNamaJumlah($pRow['nomor_meja']);
                                                while ($mRow = $menu->fetch_assoc()) {
                                                    echo "<p>".$mRow['jumlah']."</p>";
                                                }
                                            ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo $pRow['status_pesanan'] ?>
                                        </td>
                                        <td class="align-middle" style="padding-left: 10px;">
                                            <div>
                                                <?php 
                                                    $daftarpesanan = base64_url_encode("daftarpesanan");
                                                    $nomeja = base64_url_encode($pRow['nomor_meja']);
                                                ?>
                                                <a href="home.php?nav=<?php echo $daftarpesanan ?>
                                                &status=<?php echo $nomeja ?>" 
                                                class="btn btn-primary" type="button">Disajikan</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?> 
                                </tbody>
                        </table>
                        </div>
                        <!-- pagination -->
                        <!-- <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav> -->
                        <!--close pagination-->
                        <!-- bbtn kembali -->
                        <button class="btn btn-secondary" type="submit">Kembali</button>
                    </div>
                </main>
            </div>
        </div>

        <?php   
            include_once('components/modal/modaldaftarp.php');
            include_once('layouts/scripts.php');
            include_once('layouts/end.php');
        ?>