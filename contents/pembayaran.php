<?php include_once('layouts/head.php') ?>   
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/pembayaran.css">
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
                                    <th class="align-top" style="padding-left: 50px;">
                                    List Menu Yang Dipesan
                                    </th>
                                    <th>Jumlah</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <!-- body tabel -->
                                <?php
                                    $result = $bayarObj->siapBayar();
                                    while ($row = $result->fetch_assoc()) {
                                        $nomeja = $row['nomor_meja'];
                                ?>
                                <tbody>
                                    <tr>
                                        <td class="align-top">Nomor Meja <?php echo $nomeja ?></td>
                                        <td class="align-top" style="padding-left: 50px;"> 
                                        <?php
                                            $data = $bayarObj->getNamaJumlah($nomeja);
                                            while ($row2 = $data->fetch_assoc()) {
                                        ?>
                                            <p><?php echo $row2['nama_menu'] ?><br></p>
                                            <?php } ?>
                                        </td>
                                        <td class="align-top"> 
                                        <?php
                                            $data = $bayarObj->getNamaJumlah($nomeja);
                                            while ($row2 = $data->fetch_assoc()) {
                                        ?>
                                            <p> 
                                                <?php echo $row2['jumlah'] ?> <br>
                                            </p>
                                            <?php } ?>
                                        </td>
                                        <td class="align-middle" style="padding-left: 10px;">
                                            <div class="d-grid gap-2 col-9">
                                                <?php
                                                    $konfirmasibayar = base64_url_encode("konfirmasibayar")
                                                ?>
                                                <a class="btn btn-primary" type="button" href="home.php?nav=<?php echo $konfirmasibayar ?>">Proses</a>
                                            </div>
                                        </td>
                                    </tr> 
                                </tbody>
                                <?php } ?>
                        </table>
                        </div>
                        <!-- bbtn kembali -->
                        <a href="home.php" class="btn btn-secondary" type="submit">Kembali</a>
                    </div>
                    <footer>
                        <div class="text-center p-3">
                             
                        </div>
                    </footer>
                </main>
            </div>
        </div>

        <?php
            include_once('components/modal/modalpembayaran.php'); 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php');
        ?>