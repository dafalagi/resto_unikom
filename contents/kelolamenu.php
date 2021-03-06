<?php 
    include_once('layouts/head.php');

    if (isset($_POST['edit_menu'])) {
        $menuObj->editMenu($_POST);
    }

    if (isset($_POST['tambah_menu'])) {
        $menuObj->tambahMenu($_POST);
    }

    if (isset($_GET['hapus'])) {
        $id = base64_url_decode($_GET['hapus']);
        $menuObj->hapusMenu($id);
    }
?>   
    
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
                                <button class="btn btn-dark me-2" type="button" data-bs-toggle="modal" data-bs-target="#tambahmenu">Tambah Menu</button>
                                <form class="d-flex" method="POST">
                                <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search"
                                name="nama_menu">
                                <button class="btn btn-dark" type="submit" name="cari_menu">Cari</button>
                                </form>
                            </div>
                        </nav>
                    <!--close--> 

                        <!-- tabel -->
                        <table class="table table-hover table-dark">
                            <thead>
                                <tr class="namacolom">
                                <th colspan="4" scope="col">Daftar Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    if (isset($_POST['cari_menu'])) {
                                        $menu = $menuObj->cariMenu($_POST);
                                    }else {
                                        $menu = $menuObj->viewMenu();
                                    }
                                    while ($row = $menu->fetch_assoc()) {
                                ?>
                                <tr>
                                <th scope="row"><?php echo $no ?></th>
                                <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['gambar_menu']); ?>" /></td>
                                <td> 
                                    <p><?php echo $row['nama_menu'] ?><br> 
                                        <?php echo $row['deskripsi_menu'] ?>
                                    </p>
                                </td>
                                <td>
                                    <div class="d-grid gap-2 col-3">
                                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" 
                                        data-bs-target="#editmenu<?php echo $row['id_menu'] ?>">Edit</button>
                                        <?php
                                            $kelolamenu = base64_url_encode("kelolamenu");
                                            $id = base64_url_encode($row['id_menu']);
                                        ?>
                                        <a href="home.php?nav=<?php echo $kelolamenu ?>&hapus=<?php echo $id ?>"
                                        class="btn btn-secondary" type="button">Hapus</a>
                                    </div>
                                </td>
                                </tr>
                                <?php
                                    include('components/modal/modalkelolamenu.php');
                                    $no++;
                                    } 
                                ?>
                            </tbody>
                        </table>
                        <!--close-->
                        <button type="button" class="btn btn-secondary" name= "kembali">Kembali</button>
                    </div>
                </main>
            </div>
        </div>

        <?php 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php');
        ?>