<main id="main" class="main">
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
    <div class="pagetitle">
        <h1 align="left">Transaksi</h1>
        <nav>
            <ol class="breadcrumb"></ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- Table with stripped rows -->
                <a href="<?= base_url('home/tambah_transaksi') ?>">
                    <button class="btn btn-success">+ Tambah</button>
                </a>
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Menu</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Kode Transaksi</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Uang Customer</th>
                            <th scope="col">Kembalian</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($grouped_jel as $kode_transaksi => $items): 
                            $total_jumlah = 0;
                            $total_harga = 0;
                            $nama_user = $items[0]->nama_user;
                            $uang_cust = $items[0]->uang_cust;
                            $tgl_transaksi = $items[0]->tgl_transaksi;
                            $kembalian = $items[0]->kembalian;

                            foreach ($items as $item) {
                                $total_jumlah += $item->jumlah;
                                $total_harga += $item->total_harga;
                            }
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $items[0]->nama_kue ?></td>
                            <td><?= $total_jumlah ?></td>
                            <td><?= number_format($total_harga, 2, ',', '.') ?></td>
                            <td><?= $tgl_transaksi ?></td>
                            <td><?= $kode_transaksi ?></td>
                            <td><?= $nama_user ?></td>
                            <td><?= $uang_cust ?></td>
                            <td><?= $kembalian ?></td>
                            <td>
                               <a href="<?= base_url('home/edit_transaksi/' . $items[0]->id_transaksi) ?>">
    <button class="btn btn-warning">Edit</button>
</a>
                               <a href="<?= base_url('home/hapus_transaksi/' . $items[0]->kode_transaksi) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus semua transaksi dengan kode ini?');">
        <button class="btn btn-danger">Hapus</button>
    </a>
                            </td>
                        </tr>
                        <?php foreach ($items as $key => $item) {
                            if ($key > 0) { ?>
                        <tr>
                            <td></td>
                            <td><?= $item->nama_kue ?></td>
                            <td><?= $item->jumlah ?></td>
                            <td><?= number_format($item->total_harga, 2, ',', '.') ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?= $item->kembalian ?></td>
                            <td></td>
                        </tr>
                        <?php }
                        } endforeach; ?>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
            </div>
        </div>
    </section>
</main><!-- End #main -->