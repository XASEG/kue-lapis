<!-- detailpesanan.php -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail Pesanan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('home/pesanan') ?>">Pesanan</a></li>
                <li class="breadcrumb-item active">Detail Pesanan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- Detail Table -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Menu</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        $grand_total = 0;
                        foreach ($details as $item): 
                            $total_harga = $item->jumlah * $item->harga;
                            $grand_total += $total_harga;
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $item->nama_kue ?></td>
                            <td><?= $item->jumlah ?></td>
                            <td><?= number_format($item->harga, 2, ',', '.') ?></td>
                            <td><?= number_format($total_harga, 2, ',', '.') ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="4"><strong>Grand Total</strong></td>
                            <td><strong><?= number_format($grand_total, 2, ',', '.') ?></strong></td>
                        </tr>
                    </tbody>
                </table>

                <a href="<?= base_url('home/pesanan') ?>" class="btn btn-primary">Kembali ke Pesanan</a>
            </div>
        </div>
    </section>

</main><!-- End #main -->
