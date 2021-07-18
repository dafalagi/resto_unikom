<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"></div>
                                Beranda
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                Pemilihan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <?php $pilihmenu = base64_url_encode("pilihmenu") ?>
                                    <a class="nav-link" href="home.php?nav=<?php echo $pilihmenu ?>">Pilih Menu</a>
                                    <?php $pilihmeja = base64_url_encode("pilihmeja") ?>
                                    <a class="nav-link" href="home.php?nav=<?php echo $pilihmeja ?>">Pilih Meja</a>
                                </nav>
                            </div>
                            <?php $kelolamenu = base64_url_encode("kelolamenu") ?>
                            <a class="nav-link" href="home.php?nav=<?php echo $kelolamenu ?>">
                                <div class="sb-nav-link-icon"></div>
                                Kelola Menu
                            </a>
                            <?php $konfirmasi = base64_url_encode("konfirmasi") ?>
                            <a class="nav-link" href="home.php?nav=<?php echo $konfirmasi ?>">
                                <div class="sb-nav-link-icon"></div>
                                Konfirmasi Pesanan
                            </a>
                            <?php $status = base64_url_encode("status") ?>
                            <a class="nav-link" href="home.php?nav=<?php echo $status ?>">
                                <div class="sb-nav-link-icon"></div>
                                Status Pesanan
                            </a>
                            <?php $pembayaran = base64_url_encode("pembayaran") ?>
                            <a class="nav-link" href="home.php?nav=<?php echo $pembayaran ?>">
                                <div class="sb-nav-link-icon"></div>
                                Pembayaran
                            </a>
                            <?php $laporan = base64_url_encode("buatlaporan") ?>
                            <a class="nav-link" href="home.php?nav=<?php echo $laporan ?>">
                                <div class="sb-nav-link-icon"></div>
                                Buat Laporan
                            </a>
                            <?php $daftarpesanan = base64_url_encode("daftarpesanan") ?>
                            <a class="nav-link" href="home.php?nav=<?php echo $daftarpesanan ?>">
                                <div class="sb-nav-link-icon"></div>
                                Daftar Pesanan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['user'] ?>
                    </div>
                </nav>
            </div>