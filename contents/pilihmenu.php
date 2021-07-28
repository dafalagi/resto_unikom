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
                                <th colspan="5" scope="col">Daftar Menu</th>
                                </tr>
                            </thead>
                            <!-- tabel1 -->
                            
                            <?php
                                $menu = $menuObj->viewMenu();
                                $no = 1;
                                while ($row = $menu->fetch_assoc()) {
                            ?>

                            <tbody>
                                <tr>
                                <th scope="row" class="align-middle"><?php echo $no ?></th>
                                <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['gambar_menu']); ?>" /></td>
                                <td> 
                                    <p><?php echo $row['nama_menu'] ?><br> 
                                        <?php echo $row['deskripsi_menu'] ?>
                                    </p>
                                </td>
                                <td> 
                                    <form>
                                        <div class="jumlah col-3">
                                            <label for="jumlahmenu" class="form-label">Jumlah</label>
                                            <input class="form-control" id="inputjumlahmenu" type="username" name="jumlahmenu"/>
                                        </div>
                                    </form>
                                </td>
                                <td class="align-middle">
                                    <div class="d-grid gap-2 col-3">
                                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-targe  t="#modalpilih">Pilih</button>
                                        <button class="btn btn-secondary" type="button">Batal</button>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                            <?php
                                $no++;
                                }
                            ?>
                        </table>
                        <!-- btn pesan dan kembali -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-secondary" href="" role="button">Kembali</a>
                        <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#modalpesan">Pesan</button>
                    </div>
                </main>
            </div>
        </div>

        <?php 
            include_once('components/modal/modalpilihmenu.php'); 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php')
        ?>