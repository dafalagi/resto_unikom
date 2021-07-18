<?php include_once('layouts/head.php') ?>   
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/kelolamenu.css">
</head>
    <body class="sb-nav-fixed">
        
        <?php 
            include_once('components/navbar.php');
            include_once('components/sidenav.php');
        ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <!--atas tabel-->
                    <nav class="navbar">
                            <div class="container-fluid">
                                <button class="btn btn-dark me-2" type="button" data-bs-toggle="modal" data-bs-target="#tambahmenu">Tambah</button>
                                <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                                <button class="btn btn-dark" type="cari">Cari</button>
                                </form>
                            </div>
                        </nav>
                    <!--close--> 

                        <!-- tabel -->
                        <table class="table table-hover table-dark">
                            <thead>
                                <tr class="namacolom">
                                <th colspan="4" scope="col">Deskripsi Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td><img src="assets/img/thumb/thumb-bebekbakar.jpg" alt=""></td>
                                <td> 
                                    <p> Bebek Bakar<br> 
                                        Bebek Bakar dengan bumbu cabe yang membara siap menggempur bibir anda
                                    </p>
                                </td>
                                <td>
                                    <div class="d-grid gap-2 col-3">
                                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editmenu">Edit</button>
                                        <button class="btn btn-secondary" type="button">Hapus</button>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--close-->
                        
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
                    </div>
                </main>
            </div>
        </div>

        <?php
            include_once('components/modal/modalkelolamenu.php'); 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php');
        ?>