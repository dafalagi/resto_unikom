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
                        <table class="table table-hover table-dark">
                            <tr>
                                <th>No Meja</th>
                                <th>List Menu</th>
                                <th>Aksi</th>
                            </tr>
                            <!-- tabel 1 -->
                            <tr>
                                <td>No Meja 1</td>
                                <td>
                                    Ayam Bakar <br>
                                    Bebek Baka <br>
                                    Ayam Pristail
                                </td>
                                <td><button class="btn btn-primary" type="submit">Proses</button></td>
                            </tr>
                            <tr>
                                <td>No Meja 2</td>
                                <td>
                                    Ayam Bakar <br>
                                    Bebek Baka <br>
                                    Ayam Pristail
                                </td>
                                <td><button class="btn btn-primary" type="submit">Proses</button></td>
                            </tr>
                            <tr>  
                        </table>
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
            include_once('components/modal/modalkelolamenu.php'); 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php');
        ?>