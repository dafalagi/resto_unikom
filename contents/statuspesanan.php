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
<table class="table table-hover table-dark ">
    <thead>
        <tr class="namacolom">
            <th colspan="4" scope="col">Status Pesanan</th>
        </tr>
    </thead>
    <!-- body tabel -->
        <tbody>
            <tr>
                <td>Nomor Meja 1</td>
                <td> 
                    <p>Bebek Bakar<br>
                        Ayam Bakar</p>
                </td>
                <td> 
                    <p>jumlah</p>
                </td>
                <td>
                    <div class="d-grid gap-2 col-2">
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalstatus">Dibuat</button>
                        <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#modalselesai">Selesai</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Nomor Meja 2</td>
                <td> 
                    <p>Bebek Bakar<br>
                        Ayam Bakar</p>
                </td>
                <td> 
                    <p>jumlah</p>
                </td>
                <td>
                    <div class="d-grid gap-2 col-2">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalstatus">Dibuat</button>
                        <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#modalselesai">Selesai</button>
                    </div>
                </td>
            </tr>
        </tbody>
</table>
<a class="btn btn-secondary" href="#" role="button">Kembali</a>
        <?php 
            include_once('components/modal/modalstatuspesanan.php'); 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php')
        ?>