<?php include_once('layouts/head.php') ?>   
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/pilihmenu.css">
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
                            <thead>
                                <tr class="namacolom">
                                <th colspan="5" scope="col">Deskripsi Menu</th>
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
                                    <form>
                                        <div class="d-grid gap-2 col-3">
                                            <label for="jumlahmenu" class="form-label">Jumlah</label>
                                            <input class="form-control" id="inputjumlahmenu" type="username" name="jumlahmenu"/>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <div class="d-grid gap-2 col-3">
                                        <button class="btn btn-primary" type="button">Pilih</button>
                                        <button class="btn btn-secondary" type="button">Batal</button>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
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
                        <!-- btn pesan dan kembali -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-secondary" href="" role="button">Kembali</a>
                        <button class="btn btn-primary" type="submit">Pesan</button>
                    </div>
                </main>
            </div>
        </div>

        <?php 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php')
        ?>