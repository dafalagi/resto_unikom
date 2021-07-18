<?php include_once('layouts/head.php') ?>   
    
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
                                    <tr>
                                        <td class="align-top">Meja Nomor 1</td>
                                        <td class="align-top"> 
                                            <p>Bebek Bakar<br>
                                                Ayam Bakar</p>
                                        </td>
                                        <td class="align-top"> 
                                            <p> 
                                                2 <br>
                                                2
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Dibuat
                                        </td>
                                        <td class="align-middle" style="padding-left: 10px;">
                                            <div>
                                                <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#">Disajikan</a>
                                            </div>
                                        </td>
                                    </tr> 
                                    <!-- tabel 2 -->
                                    <tr>
                                        <td class="align-top">Meja Nomor 2</td>
                                        <td class="align-top"> 
                                            <p>Bebek Bakar<br>
                                                Ayam Bakar</p>
                                        </td>
                                        <td class="align-top"> 
                                            <p> 
                                                2 <br>
                                                2
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Dibuat
                                        </td>
                                        <td class="align-middle" style="padding-left: 10px;">
                                            <div>
                                                <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#">Disajikan</a>
                                            </div>
                                        </td>
                                    </tr> 
                                </tbody>
                        </table>
                        </div>
                        <!-- pagination -->
                        <nav aria-label="Page navigation example">
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
                        </nav>
                        <!--close pagination-->
                        <!-- bbtn kembali -->
                        <button class="btn btn-secondary" type="submit">Kembali</button>
                    </div>
                </main>
            </div>
        </div>

        <?php
            include_once('layouts/scripts.php');
            include_once('layouts/end.php');
        ?>