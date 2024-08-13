<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

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

        <!-- Main Section -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?= base_url('home/tambah_user') ?>">
                        <button class="btn btn-success">+ Tambah</button>
                    </a>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Level</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="userTableBody">
                            <?php $no = 1; foreach($manda as $erwin) { ?>
                            <tr id="userRow_<?= $erwin->id_user ?>">
                                <td><?= $no++ ?></td>
                                <td><?= $erwin->username ?></td>
                                <td><?= $erwin->pw ?></td>
                                <td><?= $erwin->level ?></td>
                                <td>
                                    <button class="btn btn-warning" onclick="editUserModal(<?= $erwin->id_user ?>, '<?= $erwin->username ?>', '<?= $erwin->pw ?>', '<?= $erwin->level ?>')">Detail</button>
                                    <a href="<?= base_url('home/aksi_reset/' . $erwin->id_user) ?>" class="btn btn-danger">Reset</a>
                                    <a href="<?= base_url('home/edit_user/' . $erwin->id_user) ?>" class="btn btn-danger">Edit</a>
                                    <a href="<?= base_url('home/hapus_user/' . $erwin->id_user) ?>" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

   <!-- Modal for Editing User -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                        <div class="col-lg-9 col-md-8"><?= $erwin->username?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Level</div>
                        <div class="col-lg-9 col-md-8"><?= $erwin->level?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Password</div>
                        <div class="col-lg-9 col-md-8"><?= $erwin->pw?></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
    // Function to open the edit modal with user data
    window.editUserModal = function(id, username, pw, level) {
        // Set the values in the modal form
        $('#id_user').val(id);
        $('#username').val(username);
        $('#level').val(level);
        $('#exampleInputPassword').val(pw);

        // Update the modal title
        $('#editUserModalLabel').text('Edit User: ' + username);

        // Show the modal
        $('#editUserModal').modal('show');
    };

    // Bind the delete button click event
    $('#deleteUserBtn').on('click', function(e) {
        e.preventDefault();
        var deleteUrl = $(this).attr('href');
        window.location.href = deleteUrl;
    });

    // Validate form before submission
    $('form').on('submit', function(e) {
        return validateForm();
    });

    function validateForm() {
        var password = document.getElementById("exampleInputPassword").value;
        if (password.length < 8) {
            alert("Password must be at least 8 characters long.");
            return false; // Prevent form submission
        }
        return true; // Allow form submission
    }
});

</script>
