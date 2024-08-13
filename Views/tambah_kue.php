<!DOCTYPE HTML>
<main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Kue</h5>

              <!-- General Form Elements -->
              <form action="<?= base_url('home/aksi_t_admin') ?>" method="POST"> 
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                        <label for="first-name-vertical">Nama Barang</label>
                        <select type="text" class="form-control" name="nama">
                        echo "<option>Pilih</option>";

                      <?php
                        foreach($manda as $erwin){
                          ?>
                          <option value="<?=$erwin->id_barang?>"><?=$erwin->
                          nama_barang?></option>
                        <?php }?>
                        </select>

                        </div>
                    </div>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">nama_kue</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">stok</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pw">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
