<?php
    include_once('layouts/head.php');

    if(isset($_POST['pilih'])) {
        if (!isset($_SESSION['idpesanan'])) {
            $data = $pesananObj->generatePesanan($_SESSION['nomeja']);
            $row = $data->fetch_assoc();
            $_SESSION['idpesanan'] = $row['id_pesanan'];
        }

        $detailObj->pesanMenu($_POST,$_SESSION['idpesanan']);
    }
?>   
    
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
<<<<<<< HEAD
                                <form method="POST">
                                <td>
                                        <div class="jumlah col-3">
                                            <label for="jumlahmenu" class="form-label">Jumlah</label>
                                            <input class="form-control" id="inputjumlahmenu" type="username" name="jumlahmenu"/>
                                            <input class="form-control" type="hidden" name="idmenu" 
                                            value="<?php echo $row['id_menu'] ?>"/>
=======
                                <td> 
                                    <form>
                                        <div class="jumlah col-7">
                                            <label for="jumlahmenu" class="form-label">Jumlah</label>
                                            <input class="form-control" id="inputjumlahmenu" type="number" min="0" max="20" name="jumlahmenu"/>
>>>>>>> 948e3549e465b4f8212af1314ab12edaaf26194c
                                        </div>
                                    
                                </td>
                                <td class="align-middle">
                                    <div class="d-grid gap-2 col-3">
                                        <button class="btn btn-primary" type="submit" name="pilih" onclick="return alert('Permintaan anda berhasil diproses');">Pilih</button>
                                        <button class="btn btn-secondary" type="button">Batal</button>
                                    </div>
                                </td>
                                </form>
                                </tr>
                            </tbody>
                            <?php
                                $no++;
                                }
                            ?>
                        </table>
                        <!-- btn pesan dan kembali -->
                    <div class="tombol">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-secondary" href="" role="button">Kembali</a>
                            <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#modalpesan">Pesan</button>
                        </div>
                    </div>
                    <footer>
                        <div class="text-center p-3">
                             
                        </div>
                    </footer>
                </main>
            </div>
        </div>
            </form>

        <?php 
            include_once('components/modal/modalpilihmenu.php'); 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php')
        ?>