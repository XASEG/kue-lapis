<?php if (isset($transaksi)): ?>
    <?php foreach ($transaksi as $item): ?>
        <p>Nama Kue: <?= $item['nama_kue'] ?></p>
        <p>Jumlah: <?= $item['jumlah'] ?></p>
        <p>Total Harga: <?= number_format($item['total_harga'], 2, ',', '.') ?></p>
        <!-- Form atau input untuk mengedit data -->
    <?php endforeach; ?>
<?php else: ?>
    <p>Transaksi tidak ditemukan.</p>
<?php endif; ?>
