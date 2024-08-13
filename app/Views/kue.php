<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path_to_your_css_file.css"> <!-- Link to your CSS -->
  <title>Menu Kue</title>
  <!-- Add Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navigation Bar -->
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
  <!-- End of Navigation Bar -->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1 align="center">Menu kue</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <!-- Table with stripped rows -->
          <a href="<?= base_url('home/tambah_kue') ?>">
            <button class="btn btn-success">+ Tambah</button>
          </a>
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kue</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach($manda as $erwin) {
              ?>  
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $erwin->nama_kue ?></td>
                  <td><?= $erwin->stok ?></td>
                  <td><?= $erwin->harga ?></td>
                  <td>
                    <!-- Trigger modal with user data -->
                    <button class="btn btn-warning" data-toggle="modal" data-target="#editKueModal"
                      data-id="<?= $erwin->id_menu ?>"
                      data-nama="<?= $erwin->nama_kue ?>"
                      data-stok="<?= $erwin->stok ?>"
                      data-harga="<?= $erwin->harga ?>">Edit</button>
                        <a href="<?= base_url('home/hapus_menu/' . $erwin ->id_menu) ?>">
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
    </section>
  </main><!-- End #main -->

  <!-- Modal for Editing Kue -->
  <div class="modal fade" id="editKueModal" tabindex="-1" role="dialog" aria-labelledby="editKueModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editKueModalLabel">Edit Kue</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="editKueForm" action="<?= base_url('home/aksi_e_kue') ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="nama_kue">Nama Kue:</label>
              <input type="text" name="nama_kue" id="nama_kue" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="stok">Stok:</label>
              <input type="number" name="stok" id="stok" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="harga">Harga:</label>
              <input type="number" name="harga" id="harga" class="form-control" required>
            </div>
            <input type="hidden" name="id_menu" id="id_menu">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-danger" id="deleteKueBtn">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Add Bootstrap JS (Optional if you need JS functionality) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
$(document).ready(function() {
  // Fill modal with data when edit button is clicked
  $('#editKueModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var id = button.data('id');
    var nama = button.data('nama');
    var stok = button.data('stok');
    var harga = button.data('harga');

    // Update the modal's content
    var modal = $(this);
    modal.find('#id_menu').val(id);
    modal.find('#nama_kue').val(nama);
    modal.find('#stok').val(stok);
    modal.find('#harga').val(harga);
  });

  // Handle delete button click
  $('#deleteKueBtn').on('click', function() {
    var id = $('#id_menu').val();
    if (confirm('Are you sure you want to delete this item?')) {
      window.location.href = '<?= base_url('home/hapus_kue/'. $erwin->id_menu) ?>';
    }
  });
});
</script>


</body>
</html>
