<?php include_once('layouts/head.php') ?>   
    
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
            <tbody>
        <!-- tabel 1 -->
                <tr>
                    <td class="align-top">Nomor Meja 1</td>
                    <td class="align-top" style="padding-left: 50px;"> 
                        <p>Bebek Bakar<br>
                            Ayam Bakar</p>
                    </td>
                    <td class="align-top"> 
                        <p> 
                            2 <br>
                            2
                        </p>
                    </td>
                    <td class="align-middle" style="padding-left: 10px;">
                        <div class="d-grid gap-2 col-10">
                            <button class="btn btn-primary" type="submit" name="" onclick="return alert('Permintaan anda berhasil diproses');">Dibuat</button>
                            <button class="btn btn-secondary" type="submit" name="" onclick="return alert('Permintaan anda berhasil diproses');">Selesai</button>
                        </div>
                    </td>
                </tr> 
        <!-- tabel 2 -->
                <tr>
                    <td class="align-top">Nomor Meja 2</td>
                    <td class="align-top" style="padding-left: 50px;"> 
                        <p>Bebek Bakar<br>
                            Ayam Bakar</p>
                    </td>
                    <td class="align-top"> 
                        <p> 
                            2 <br>
                            2
                        </p>
                    </td>
                    <td class="align-middle" style="padding-left: 10px;">
                        <div class="d-grid gap-2 col-10">
                            <a class="btn btn-primary" type="button" onclick="return alert('Permintaan anda berhasil diproses');">Dibuat</a>
                            <a class="btn btn-secondary" type="button" onclick="return alert('Permintaan anda berhasil diproses');">Selesai</a>
                        </div>
            </tbody>
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