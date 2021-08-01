<?php
    include_once('layouts/head.php');

    if (isset($_GET['dibuat'])) {
        $id = base64_url_decode($_GET['id']);
        $pesananObj->statusDibuat($id);
    }
    if (isset($_GET['selesai'])) {
        $id = base64_url_decode($_GET['id']);
        $pesananObj->statusSelesai($id);
    }
?>   
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/statuspesanan.css">
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
                <th class="align-top" style="padding-left: 50px;">Nama Menu</th>
                <th>Jumlah</th>
                <th></th>
            </tr>
        </thead>
        <!-- body tabel -->
        <?php
            $result = $pesananObj->statusAntrian();
            while ($row = $result->fetch_assoc()) {
        ?>
        <tbody>
        <!-- tabel 1 -->
                <tr>
                    <td class="align-top">Nomor Meja <?php echo $row['nomor_meja'] ?></td>
                    <td class="align-top" style="padding-left: 50px;">
                    <?php
                        $data = $pesananObj->getNamaJumlah3($row['nomor_meja']);
                        while ($row2 = $data->fetch_assoc()) {
                    ?> 
                        <p><?php echo $row2['nama_menu'] ?><br>
                            </p>
                            <?php } ?>
                    </td>
                    <td class="align-top"> 
                    <?php
                        $data = $pesananObj->getNamaJumlah3($row['nomor_meja']);
                        while ($row2 = $data->fetch_assoc()) {
                    ?> 
                        <p> 
                            <?php echo $row2['jumlah'] ?> <br>
                        </p>
                        <?php } ?>
                    </td>
                    <td class="align-middle" style="padding-left: 10px;">
                        <div class="d-grid gap-2 col-10">
                            <?php
                                $status = base64_url_encode("status");
                                $id = base64_url_encode($row['id_pesanan']);
                            ?>
                            <a href="home.php?nav=<?php echo $status ?>&id=<?php echo $id ?>&dibuat=true" 
                            class="btn btn-primary" type="button" name="" onclick="return alert('Permintaan anda berhasil diproses');">Dibuat</a>
                            <a href="home.php?nav=<?php echo $status ?>&id=<?php echo $id ?>&selesai=true"
                            class="btn btn-secondary" type="button" name="" onclick="return alert('Permintaan anda berhasil diproses');">Selesai</a>
                        </div>
                    </td>
                </tr> 
            </tbody>
            <?php
            }
            ?>
    </table>
</div>
<a class="btn btn-secondary" href="#" role="button">Kembali</a>
        <footer>
            <div class="text-center p-3">
                                      
            </div>
        </footer>


        <?php 
            include_once('components/modal/modalstatuspesanan.php'); 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php')
        ?>