<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cetak Nota</title>
    <style>
        /* Tambahkan style khusus untuk cetak */
        body {
            font-family: Arial, sans-serif;
        }
        .nota {
            width: 80mm;
            margin: auto;
        }
        .nota h2 {
            text-align: center;
        }
        .nota table {
            width: 100%;
            border-collapse: collapse;
        }
        .nota table, .nota th, .nota td {
            border: 1px solid black;
        }
        .nota th, .nota td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body onload="window.print();">
    <div class="nota">
        <h2>Nota Transaksi</h2>
        <p>Kode Transaksi: <?= $nota[0]->kode_transaksi ?></p>
        <p>Tanggal: <?= $nota[0]->tgl_transaksi ?></p>
        <p>Nama User: <?= $nota[0]->nama_user ?></p>
        <table>
            <thead>
                <tr>
                    <th>Nama Menu</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $total_harga = 0; foreach($nota as $trans) { ?>
                    <tr>
                        <td><?= $trans->nama_kue ?></td>
                        <td><?= $trans->jumlah ?></td>
                        <td><?= number_format($trans->total_harga, 2, ',', '.') ?></td>
                    </tr>
                    <?php $total_harga += $trans->total_harga; ?>
                <?php } ?>
                <tr>
                    <td colspan="2">Total</td>
                    <td><?= number_format($total_harga, 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td colspan="2">Uang Customer</td>
                    <td><?= number_format($nota[0]->uang_cust, 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td colspan="2">Kembalian</td>
                    <td><?= number_format($nota[0]->kembalian, 2, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
