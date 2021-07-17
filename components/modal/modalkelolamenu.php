<!-- Modal1 -->
<div class="modal fade" id="tambahmenu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title center" id="modaltitle">Tambah Menu Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3 row">
        <label for="inputnamamenu" class="col-sm-2 col-form-label">Nama Menu :</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="namamenu" name="nama_menu">
            </div>
      </div>
      <div class="mb-3 row">
        <label for="inputhargamenu" class="col-sm-2 col-form-label">Harga Menu :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="hargamenu" name="harga_menu">
            </div>
      </div>
      <div class="mb-3 row">
        <label for="inputpembuatmenu" class="col-sm-2 col-form-label">Pembuat Menu :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pembuatmenu" name="pembuat_menu">
            </div>
      </div>
      <div class="mb-3 row">
        <label for="inputstokmenu" class="col-sm-2 col-form-label">Stok Menu :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="stokmenu" name="stok_menu">
            </div>
      </div>
      <div class="mb-3 row">
        <label for="inputdeskripsi" class="col-sm-2 col-form-label">Deskripsi Menu :</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="deskmenu" name="deks_menu" rows="3"></textarea>
            </div>
      </div>
      <form action="#" method="post" enctype="multipart/form-data">
      <label for="inputfoto" class="col-sm-2 col-form-label">Masukan Foto :</label>
                <input type="file" name="image">
                <input type="submit" name="upload" value="Upload">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-dark" name="tambah">Tambah</button>
      </div>
    </div>
  </div>
</div>
<!--akhirmodal-->
<!-- Modal2 -->
<div class="modal fade" id="editmenu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3 row">
        <label for="inputnamamenu" class="col-sm-2 col-form-label">Nama Menu :</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="namamenu" name="nama_menu">
            </div>
      </div>
      <div class="mb-3 row">
        <label for="inputhargamenu" class="col-sm-2 col-form-label">Harga Menu :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="hargamenu" name="harga_menu">
            </div>
      </div>
      <div class="mb-3 row">
        <label for="inputpembuatmenu" class="col-sm-2 col-form-label">Pembuat Menu :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pembuatmenu" name="pembuat_menu">
            </div>
      </div>
      <div class="mb-3 row">
        <label for="inputstokmenu" class="col-sm-2 col-form-label">Stok Menu :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="stokmenu" name="stok_menu">
            </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<!--akhirmodal-->