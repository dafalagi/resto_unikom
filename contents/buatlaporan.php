<?php include_once('layouts/head.php') ?>   
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/laporanbulanan.css">
</head>
    <body class="sb-nav-fixed">
        
        <?php 
            include_once('components/navbar.php');
            include_once('components/sidenav.php');
        ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header text-center">
                        Laporan Bulanan
                    </div>
                    <div class="card-body">
                    <div class="mb-3 row">
                        <label for="pilihbulan" class="col-sm-2 col-form-label">Bulan </label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example">
                                <option selected>-Pilih-</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                                </select>
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Beban Operasional :</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputagihanlistrik" class="col-sm-2 col-form-label">Tagihan Listrik </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="tagihanlistrik" name="tagihan_listrik">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputtagihanpdam" class="col-sm-2 col-form-label">Tagihan PDAM </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="taggihanpdam" name="tagihan_pdam">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputgajikaryawan" class="col-sm-2 col-form-label">Gaji Karyawan </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="gajikaryawan" name="gaji_karyawan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Pendapatan :</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputtotalpendapatan" class="col-sm-2 col-form-label">Total Pendapatan </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="totalpendapatan" name="total_pendapatan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputpendapatanbersih" class="col-sm-2 col-form-label">Pendapatan Bersih </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="pendapatanbersih" name="pendapatan_bersih">
                        </div>
                    </div>
                    <div class="text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" name="tambah">Buat</button>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                </main>
            </div>
        </div>

        <?php 
            include_once('layouts/scripts.php');
            include_once('layouts/end.php');
        ?>