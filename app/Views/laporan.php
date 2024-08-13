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
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row mb-4">
                <!-- Combined Form -->
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Laporan</h5>
                        </div>
                        <div class="card-body">
                            <form id="report_form" method="post">
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Start Date:</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">End Date:</label>
                                    <input type="date" id="end_date" name="end_date" class="form-control" required>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" name="action" value="pdf" formaction="<?= base_url('home/generate_pdf') ?>" class="btn btn-primary">Generate PDF</button>
                                    <button type="submit" name="action" value="excel" formaction="<?= base_url('home/generate_excel') ?>" class="btn btn-success">Generate Excel</button>
                                    <button type="submit" name="action" value="windows" formaction="<?= base_url('home/generate_window_result') ?>" class="btn btn-info">Generate Windows</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
