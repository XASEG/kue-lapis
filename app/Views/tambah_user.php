<main id="main" class="main">
    <div class="pagetitle">
        <nav>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tambah User</h5>

                        <!-- General Form Elements -->
                        <form action="<?= base_url('home/aksi_t_user') ?>" method="POST">
                            <div class="form-group row mb-4">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="pw" id="password" placeholder="Masukkan Password">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="level" class="col-sm-3 col-form-label">Level</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="level" id="level">
                                        <option value="1">Admin</option>
                                        <option value="2">Karyawan</option>
                                      <!--   <option value="3">User</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary col-sm-4">Submit Form</button>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
