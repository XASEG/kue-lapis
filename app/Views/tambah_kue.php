<main id="main" class="main">

    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard') ?>">Home</a></li>
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
                        <form action="<?= base_url('home/aksi_t_kue') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputNamaKue" class="col-sm-2 col-form-label">Nama Kue</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_kue" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputStok" class="col-sm-2 col-form-label">Stok</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="stok" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputHarga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="harga" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFoto" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" name="foto" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
