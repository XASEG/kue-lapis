<div class="card-body">

  <!-- General Form Elements -->
  <form action="<?= base_url('home/aksi_e_kue') ?>" method="POST"> 
    <div class="row mb-3">
      <label for="inputText" class="col-sm-2 col-form-label">Nama Kue</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="id_menu" value="<?= isset($satu) ? $satu->nama_kue : '' ?>">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail" class="col-sm-2 col-form-label">Jumlah</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="jumlah" value="<?= isset($satu) ? $satu->jumlah : '' ?>">
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputEmail" class="col-sm-2 col-form-label">Metode Pembayaran</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="metode_pembayaran" value="<?= isset($satu) ? $satu->metode_pembayaran : '' ?>">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail" class="col-sm-2 col-form-label">Alamat </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="alamat" value="<?= isset($satu) ? $satu->harga : '' ?>">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail" class="col-sm-2 col-form-label">Catatan </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="catatan" value="<?= isset($satu) ? $satu->catatan : '' ?>">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit Form</button>
      </div>
    </div>
    <input type="hidden" name="id" value="<?= isset($satu) ? $satu->id_form : '' ?>">

  </form><!-- End General Form Elements -->
</div>
