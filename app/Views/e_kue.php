<div class="card-body">

  <!-- General Form Elements -->
  <form action="<?= base_url('home/aksi_e_kue') ?>" method="POST"> 
    <div class="row mb-3">
      <label for="inputText" class="col-sm-2 col-form-label">Nama Kue</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama_kue" value="<?= isset($satu) ? $satu->nama_kue : '' ?>">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail" class="col-sm-2 col-form-label">Stok</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="stok" value="<?= isset($satu) ? $satu->stok : '' ?>">
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputEmail" class="col-sm-2 col-form-label">Harga</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="harga" value="<?= isset($satu) ? $satu->harga : '' ?>">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit Form</button>
      </div>
    </div>
    <input type="hidden" name="id" value="<?= isset($satu) ? $satu->id_menu : '' ?>">

  </form><!-- End General Form Elements -->
</div>
