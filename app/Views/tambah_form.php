<main id="main" class="main">

    <div class="pagetitle">
    
       <div class="pagetitle">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/dashboard') ?>">Dashboard</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Form</h5>

              <!-- General Form Elements -->
              <form action="<?= base_url('home/aksi_t_form') ?>" method="POST"> 
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Nama Kue</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_kue">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah">
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Uang Pembayaran</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="uang_pembayaran">
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Catatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="catatan">
                  </div>
                </div>

                
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

         