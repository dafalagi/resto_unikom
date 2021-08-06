<!-- Modal1 -->
<form action="#" method="post">
<div class="modal fade" id="cetaklaporan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modaltitle">Cetak Laporan Bulanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" value="Bulan" aria-label="bulan">
        </div>
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" aria-label="namabulan" name="cetak_bulan"
            id="hasil_bulan">
        </div>
      </div>
      <div class="mb-3 row">
         <label class="col-sm-2 col-form-label">Beban Operasional :</label>
      </div>
      <div class="row">
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" value="Tagihan Listrik" aria-label="tagihanlistrik">
        </div>
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" aria-label="jumlah" name="cetak_tagihan_listrik"
            id="hasil_listrik">
        </div>
      </div>
      <div class="row">
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" value="Tagihan PDAM" aria-label="tagihanpdam">
        </div>
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" aria-label="jumlah" name="cetak_tagihan_pdam"
            id="hasil_pdam">
        </div>
      </div>
      <div class="row">
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" value="Gaji Karyawan" aria-label="gajikaryawan">
        </div>
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" aria-label="jumlah" name="cetak_gaji"
            id="hasil_gaji">
        </div>
      </div>
      <div class="mb-3 row">
         <label class="col-sm-2 col-form-label">Pendapatan :</label>
      </div>
      <div class="row">
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" value="Total Pendapatan" aria-label="totalpendapatan">
        </div>
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" aria-label="jumlah" name="cetak_total"
            id="hasil_total">
        </div>
      </div>
      <div class="row">
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" value="Pendapatan Bersih" aria-label="pendapatan bersih">
        </div>
        <div class="col">
            <input type="text" readonly class="form-control-plaintext" aria-label="jumlah" name="cetak_pendapatan"
            id="hasil_bersih">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="cetak">Cetak</button>
      </div>
    </div>
  </div>
</div>
</form>