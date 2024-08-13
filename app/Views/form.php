<head>
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (for the modal functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<main id="main" class="main">

    <div class="pagetitle">
      <h1 align="left">Form Kasir</h1>
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
        <div class="col-lg-12">
 <!-- Table with stripped rows -->
              <a href="<?= base_url('home/tambah_form') ?>">
  <button class="btn btn-success">+ Tambah</button>
</a>


              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Uang Pembayaran</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Catatan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
      <?php

  $no=1;
  foreach($jes as $erwin){
  ?>  

  <tr>
    <td><?= $no++ ?></td>
    <td><?=$erwin->nama_kue?></td>
    <td><?=$erwin->nama?></td>
    <td><?= $erwin ->jumlah?></td>
    <td><?= $erwin ->uang_pembayaran?></td>
    <td><?= $erwin ->alamat?></td>
    <td><?= $erwin ->catatan?></td>
   
      <td>
      <a href="<?= base_url('home/edit_form/' . $erwin ->id_form) ?>">
     <button class=" btn btn-warning">Edit</button>
    </a>

    <a href="<?= base_url('home/hapus_form/' . $erwin ->id_form) ?>">
     <button class=" btn btn-danger">Hapus</button>
      </a>
    </td>

  </tr>
  <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
