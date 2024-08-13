<!DOCTYPE HTML>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
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

              <!-- General Form Elements -->
              <form action="<?= base_url('home/aksi_e_user') ?>" method="POST"> 
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" value="<?= $satu->username ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Password User</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pw" value="<?= $satu->pw ?>">
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" name="level" value="<?= $satu->level ?>"> -->
                    <select  type="select" class="form-control" name="level" id="level" placeholder="Enter Jenis Kelamin" name="level" value="<?= $satu->level ?>" >
                   <option value="volvo">Pilih status</option>
                   <option value="laki-laki">Laki-Laki</option>
                   <option value="perempuan">Perempuan</option>
                 </select> 
                   
                </div>
                </div>
                      <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Level</label>
                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" name="level" value="<?= $satu->level ?>"> -->
                    <select  type="select" class="form-control" name="level" id="level" placeholder="Enter Jenis Kelamin" name="level" value="<?= $satu->level ?>" >
                   <option value="volvo">Pilih level</option>
                   <option value="1">Admin</option>
                   <option value="2">Karyawan</option>
                   <option value="3">User</option>
                 </select> 
                   
                </div>
                </div>
                 
                 
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>
                    <input type="hidden" name="id" value="<?= $satu->id_user ?>">

              </form><!-- End General Form Elements -->