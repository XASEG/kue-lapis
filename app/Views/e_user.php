<main id="main" class="main">

    <div class="pagetitle">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/dashboard') ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/logout') ?>">Logout</a>
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
                  <label for="inputEmail" class="col-sm-2 col-form-label">Level</label>
                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" name="level" value="<?= $satu->level ?>"> -->
                    <select  type="select" class="form-control" name="level" id="level" placeholder="Enter Jenis Kelamin" name="level" value="<?= $satu->level ?>" >
                   <option value="volvo">Pilih level</option>
                   <option value="1">Admin</option>
                   <option value="2">Karyawan</option>
                 </select> 
                   
                </div>
                </div>
                 
                 
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>
                    <input type="hidden" name="id" value="<?= $satu->id_user ?>">

              </form><!-- End General Form Elements -->
