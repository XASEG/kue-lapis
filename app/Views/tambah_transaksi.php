<main id="main" class="main">
    <div class="pagetitle">
        <nav>
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
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Transaksi</h5>
                        <form action="<?= base_url('home/aksi_t_transaksi') ?>" method="POST">
                            <div id="kue-container">
                                <div class="kue-group">
                                    <div class="form-group">
                                        <label for="kue">Kue</label>
                                        <select class="form-control kue-select" name="id_menu[]">
                                            <option>Pilih</option>
                                            <?php foreach ($manda as $erwin): ?>
                                                <option value="<?= $erwin->id_menu ?>" data-price="<?= $erwin->harga ?>"><?= $erwin->nama_kue ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control jumlah-input" name="jumlah[]" min="1" value="1">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger hapus-kue">Hapus</button>
                                </div>
                            </div>
                            <button type="button" id="add-kue" class="btn btn-success">Tambah Kue</button>
                            
                            <!-- Tanggal Transaksi -->
                            <div class="row mt-3">
                                <label for="tanggal_transaksi" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_transaksi">
                                </div>
                            </div>

                            <!-- Uang Cust -->
                            <div class="row mt-3">
                                <label for="uang_cust" class="col-sm-2 col-form-label">Uang Cust</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="uang-cust" name="uang_cust">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="nama_user" class="col-sm-2 col-form-label">Nama User</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_user">
                                </div>
                            </div>

                            <!-- Grand Total -->
                            <div class="row mt-3">
                                <label for="grand_total" class="col-sm-2 col-form-label">Total Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="grand-total" name="grand_total" readonly>
                                </div>
                            </div>

                            <!-- Kembalian -->
                            <div class="row mt-3">
                                <label for="kembalian" class="col-sm-2 col-form-label">Kembalian</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kembalian" name="kembalian" readonly>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.getElementById('add-kue').addEventListener('click', function() {
    var kueContainer = document.getElementById('kue-container');
    var kueGroup = document.querySelector('.kue-group');
    var newKueGroup = kueGroup.cloneNode(true);
    
    // Clear the input values in the cloned group
    var inputs = newKueGroup.querySelectorAll('input');
    inputs.forEach(function(input) {
        if (input.type !== 'text') input.value = ''; // Clear all except total price
    });

    kueContainer.appendChild(newKueGroup);
    
    // Reattach event listeners
    attachEventListeners(newKueGroup);
    updateGrandTotal(); // Update the grand total after adding a new Kue
});

function attachEventListeners(kueGroup) {
    var select = kueGroup.querySelector('.kue-select');
    var jumlahInput = kueGroup.querySelector('.jumlah-input');
    var hapusButton = kueGroup.querySelector('.hapus-kue');
    
    // Update grand total on kue or jumlah change
    function updateTotalPrice() {
        updateGrandTotal();
    }
    
    select.addEventListener('change', updateTotalPrice);
    jumlahInput.addEventListener('input', updateTotalPrice);
    
    // Hapus button functionality
    hapusButton.addEventListener('click', function() {
        kueGroup.remove();
        updateGrandTotal(); // Update grand total after removal
    });
}

// Function to update the grand total
function updateGrandTotal() {
    var kueGroups = document.querySelectorAll('.kue-group');
    var grandTotal = 0;
    
    kueGroups.forEach(function(kueGroup) {
        var select = kueGroup.querySelector('.kue-select');
        var jumlahInput = kueGroup.querySelector('.jumlah-input');
        var selectedOption = select.options[select.selectedIndex];
        var price = selectedOption.getAttribute('data-price');
        var jumlah = jumlahInput.value;

        if (price && jumlah) {
            grandTotal += price * jumlah;
        }
    });

    document.getElementById('grand-total').value = grandTotal;
    calculateChange(); // Recalculate change whenever the total price is updated
}

// Listen for changes in the 'uang_cust' field
document.getElementById('uang-cust').addEventListener('input', calculateChange);

function calculateChange() {
    var grandTotal = parseFloat(document.getElementById('grand-total').value) || 0;
    var uangCust = parseFloat(document.getElementById('uang-cust').value) || 0;
    var kembalian = uangCust - grandTotal;

    // Ensure that kembalian is not negative
    if (kembalian < 0) {
        kembalian = 0;
    }

    // Display the kembalian
    document.getElementById('kembalian').value = kembalian;
}

// Initial attach for the first kue-group
document.querySelectorAll('.kue-group').forEach(attachEventListeners);
updateGrandTotal(); // Initial grand total calculation
calculateChange(); // Initial calculation for change
</script>