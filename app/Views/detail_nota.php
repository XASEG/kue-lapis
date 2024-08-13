<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Nota</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Detail Nota Transaksi</h2>
        <div class="card">
            <div class="card-header">
                <h4>Kode Transaksi: <?= $nota[0]->kode_transaksi ?></h4>
                <p>Tanggal: <?= $nota[0]->tgl_transaksi ?></p>
                <p>Nama User: <?= $nota[0]->nama_user ?></p>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Menu</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $total_harga = 0;
                        foreach($nota as $trans) { 
                            $subtotal = $trans->jumlah * $trans->total_harga;
                            $total_harga += $subtotal;
                        ?>
                            <tr>
                                <td><?= $trans->nama_kue ?></td>
                                <td><?= $trans->jumlah ?></td>
                                <td><?= number_format($trans->total_harga, 2, ',', '.') ?></td>
                                <td><?= number_format($subtotal, 2, ',', '.') ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="3"><strong>Total Harga</strong></td>
                            <td><strong><?= number_format($total_harga, 2, ',', '.') ?></strong></td>
                        </tr>
                        <tr>
                            <td colspan="3">Uang Customer</td>
                            <td><?= number_format($nota[0]->uang_cust, 2, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Kembalian</td>
                            <td><?= number_format($nota[0]->kembalian, 2, ',', '.') ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-right">
                <a href="<?= base_url('home/pesanan') ?>" class="btn btn-secondary">Kembali</a>
                <a href="<?= base_url('home/cetak_nota/'.$nota[0]->kode_transaksi) ?>" class="btn btn-primary" target="_blank">Cetak Nota</a>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
