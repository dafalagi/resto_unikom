<!-- Modal Konfirmasi -->
<form method="POST">
<div class="modal fade" id="modalkonfirmasi<?php echo $id ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Konfirmasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      apakah anda yakin ingin mengkonfirmasi pesanan ini?
      <input type="hidden" value="<?php echo $id ?>" name="id_pesanan">
      <input type="hidden" value="<?php echo $total ?>" name="total_harga">
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" name="batal" data-bs-dismiss="modal">Tidak</button>
      <button type="submit" class="btn btn-primary" name="konfirmasi">Ya</button>
      </div>
    </div>
  </div>
</div>
</form>
