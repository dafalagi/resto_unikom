<?php
    if (isset($_GET['id'])) {
        $idpesanan = base64_url_decode($_GET['id']);
    }

    $nonota = "";
    $nomeja = "";
    $tgl = "";
    $result = $bayarObj->getSum($idpesanan);
    if ($row = $result->fetch_assoc()) {
        $total = $row['total'];
    }
    $result = $bayarObj->insertBayar($idpesanan,$total);
    if ($result == true) {
        $result = $bayarObj->getBayar($idpesanan);
        $row = $result->fetch_assoc();
        $nonota = $row['nomor_pembayaran'];
        $tgl = $row['tanggal_pembayaran'];
        $nomeja = $row['nomor_meja'];
        if ($result->num_rows == 1) {
            $pesananObj->statusDibayar($idpesanan);
            $mejaObj->statusTersedia($nomeja);
        }
    }
?>
<p class="namastruk text-center fs-2">Resto Unikom</p>
        <!-- Keterangan waktu dan tempat(no meja) -->
        <div class="row">
            <div class="col-4">No Pembayaran</div>
            <div class="col-md-auto">: <?php echo $nonota ?></div>
        </div>
        <div class="row">
            <div class="col-4">Tanggal Pembayaran</div>
            <div class="col-md-auto">: <?php echo $tgl ?></div>
        </div>
        <div class="row">
            <div class="col-4">No meja</div>
            <div class="col-md-auto">: <?php echo $nomeja ?></div>
        </div>
        <!-- tabel  -->
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Qty</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $detailObj->getDetail($idpesanan);
                    while ($row = $result->fetch_assoc()) {
                        $jumlah = $row['jumlah'];
                        $menu = $row['nama_menu'];
                        $harga = $row['harga_menu'];
                ?>
                <tr>
                <td>
                    <?php echo $jumlah ?><br>
                </td>
                <td>
                    <?php echo $menu ?><br>
                </td>
                <td><?php echo $harga ?><br>
                </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-8">Total : </div>
            <div class="col-4">Rp. 128.000</div>
        </div>