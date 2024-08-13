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
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Transaksi</th>
                            <th scope="col">Nama Menu</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Uang Customer</th>
                            <th scope="col">Kembalian</th>
                            <th scope="col">Aksi</th> <!-- Kolom baru untuk aksi -->
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <?php $no = 1; foreach($grouped_jel as $kode_transaksi => $transactions) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $kode_transaksi ?></td>
                                <td>
                                    <?php foreach($transactions as $trans) { ?>
                                        <?= $trans->nama_kue ?><br>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php foreach($transactions as $trans) { ?>
                                        <?= $trans->jumlah ?><br>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php 
                                    $total_harga = 0;
                                    foreach($transactions as $trans) { 
                                        $total_harga += $trans->total_harga;
                                    }
                                    echo number_format($total_harga, 2, ',', '.');
                                    ?>
                                </td>
                                <td><?= $transactions[0]->tgl_transaksi ?></td>
                                <td><?= $transactions[0]->nama_user ?></td>
                                <td><?= number_format($transactions[0]->uang_cust, 2, ',', '.') ?></td>
                                <td><?= number_format($transactions[0]->kembalian, 2, ',', '.') ?></td>
                                <td>
                                    <!-- Tombol Aksi -->
                                    <a href="<?= base_url('home/detail_nota/'.$kode_transaksi) ?>" class="btn btn-primary">Lihat Nota</a>
                                    <a href="<?= base_url('home/cetak_nota/'.$kode_transaksi) ?>" class="btn btn-secondary" target="_blank">Cetak Nota</a>
                                    <a href="<?= base_url('home/edit_pesanan/'.$kode_transaksi) ?>" class="btn btn-warning">Edit Pesanan</a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
</main>
