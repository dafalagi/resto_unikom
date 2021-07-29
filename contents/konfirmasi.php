<?php
    include_once('layouts/head.php');

    if (isset($_POST['konfirmasi'])) {
        $pesananObj->konfirmasiYa($_POST);
    }
?>   
    
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
                <?php
                    $pesanan = $pesananObj->konfirmasiTidak();
                    while ($row = $pesanan->fetch_assoc()) {
                        $id = $row['id_pesanan'];
                        $nomeja = $row['nomor_meja'];
                        $total = $pesananObj->getTotalHarga($id);
                ?>

                <div class="d-grid gap-4">
                    <div class="card text-white bg-dark">
                        <div class="card-header">
                            No Meja <?php echo $nomeja ?>
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

                                <?php
                                    $pesanan2 = $pesananObj->getNamaJumlah2($nomeja);

                                    while ($row2 = $pesanan2->fetch_assoc()) {
                                        $nama = $row2['nama_menu'];
                                        $jumlah = $row2['jumlah'];
                                        $harga = $row2['harga_menu'];
                                ?>

                                <tbody>
                                    <tr>
                                        <th><?php echo $nama ?></th>
                                        <td><?php echo $jumlah ?></td>
                                        <td><?php echo $harga ?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                            <!-- <a href="#" onclick="$('#modalkonfirmasi').modal({'backdrop': 'static'});" class="btn btn-primary">yourModal</a> -->
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalkonfirmasi<?php echo $id ?>">Konfirmasi</button>
                            Total Harga <?php echo $total ?>
                        </div>
                    </div>
    
        <?php
                include('components/modal/modalkonfirmasi.php'); 
            } 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php')
        ?>