<!-- View: edit_transaksi.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Edit Transaksi</h2>
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('home/update_transaksi/' . $transaksi->id_transaksi) ?>" method="post">
                    <div class="form-group">
                        <label for="nama_kue">Nama Menu</label>
                        <input type="text" class="form-control" id="nama_kue" name="nama_kue" value="<?= $transaksi->nama_kue ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $transaksi->jumlah ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="total_harga">Total Harga</label>
                        <input type="text" class="form-control" id="total_harga" name="total_harga" value="<?= $transaksi->total_harga ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url('home/transaksi') ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
