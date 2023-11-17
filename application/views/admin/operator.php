<style>
    th,
    td {
        color: #000;
    }

    div#swal2-content {
        font-size: 14px;
        color: #f27474;
    }

    .modalTambahOperator LABEL {
        color: #000;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background: #cdcdcd;
        opacity: 1;
    }
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Operator</h4>
                        <a href="#" data-toggle="modal" data-backdrop="static" data-target=".modalTambahOperator" class="btn btn-info btn-sm text-white">
                            <span class="icon text-white-50">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table student-data-table m-t-20">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($operator as $op) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>
                                                <?php echo $op->first_name; ?> <?php echo $op->last_name; ?>
                                            </td>
                                            <td>
                                                <?php echo $op->last_name; ?>
                                            </td>
                                            <td>
                                                <?php echo $op->email; ?>

                                            </td>
                                            <td>
                                                <?php echo $op->username; ?>
                                            </td>
                                            <td class="text-center">

                                                <div class="aksi">
                                                    <a href="#" class="btn btn-primary btnEditOperator" data-toggle="modal" data-target="#modalEditOperator" data-user-id="<?php echo $op->id; ?>">
                                                        <span class="icon text-white-50">
                                                            <i class="fa fa-edit"></i>
                                                        </span>
                                                        <span class="text"> Edit</span>
                                                    </a>

                                                    <a href="#" class="btn btn-danger deleteOperator" data-user-id="<?php echo $op->id; ?>">
                                                        <span class="icon text-white-50">
                                                            <i class="fa fa-trash"></i>
                                                        </span>
                                                        <span class="text"> Hapus</span>
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<div class="modal fade modalTambahOperator" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Operator</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo form_open("admin/operator/buat_user"); ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="first_name">Nama Depan</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo set_value('first_name'); ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="last_name">Nama Belakang</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo set_value('last_name'); ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="identity">Username</label>
                            <input type="text" class="form-control" id="identity" name="identity" value="<?php echo set_value('identity'); ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="company">Nama Kantor/Perusahaan</label>
                            <input type="text" class="form-control" id="company" name="company" value="SIRIPABAR" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo set_value('email'); ?>">
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone">Nomor HP</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo set_value('phone'); ?>">
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="toggle-password">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <?php if (form_error('password')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?php echo form_error('password'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="password_confirm">Konfirmasi Kata Sandi</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password_confirm" name="password_confirm" value="<?php echo set_value('password_confirm'); ?>">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="toggle-password-confirm">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12  d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>

        </div>
    </div>
</div>

<div id="modalEditOperator" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Operator</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <?php if (isset($user_data)) : ?>
                    <!-- Your existing content that uses $user_data goes here -->

                    <?php echo $this->session->flashdata('message'); ?>
                    <?php echo form_open("admin/operator/update_user/{$user_data->id}"); ?>
                    <input type="hidden" name="user_id" value="<?php echo $user_data->id; ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="first_name">Nama Depan</label>
                                <input type="text" class="form-control" name="first_name" value="<?php echo set_value('first_name', $user_data->first_name); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="last_name">Nama Belakang</label>
                                <input type="text" class="form-control" name="last_name" value="<?php echo set_value('last_name', $user_data->last_name); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo set_value('username', $user_data->username); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="company">Nama Kantor/Perusahaan</label>
                                <input type="text" class="form-control" name="company" value="<?php echo set_value('company', 'SIRIPABAR'); ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo set_value('email', $user_data->email); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Nomor HP</label>
                                <input type="text" class="form-control" name="phone" value="<?php echo set_value('phone', $user_data->phone); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <?php if (form_error('password')) : ?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo form_error('password'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="password_confirm">Konfirmasi Kata Sandi</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password_confirm" value="<?php echo set_value('password_confirm'); ?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12  d-flex justify-content-end">
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.btnEditOperator').on('click', function() {
            var userId = $(this).data('user-id');

            // Fetch user data using Ajax
            $.ajax({
                type: 'GET',
                url: 'operator/edit_user/' + userId,
                success: function(response) {
                    // Inject the fetched HTML into the modal body
                    $('#modalEditOperator .modal-body').html(response);
                    // Open the modal
                    $('#modalEditOperator').modal('show');
                },
                error: function() {
                    // Handle error if necessary
                }
            });
        });

        $('.deleteOperator').on('click', function(e) {
            e.preventDefault();

            var userId = $(this).data('user-id');

            // Tampilkan konfirmasi SweetAlert
            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Apakah Anda yakin ingin menghapus pengguna?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                // Jika pengguna menekan tombol "Ya, Hapus!"
                if (result.isConfirmed) {
                    // Kirim permintaan Ajax ke controller
                    $.ajax({
                        type: 'POST',
                        url: 'operator/hapus_user/' + userId,
                        dataType: 'json',
                        success: function(response) {
                            // Tampilkan SweetAlert berdasarkan respons dari server
                            if (response.status === 'success') {
                                Swal.fire('Sukses', response.message, 'success').then(() => {
                                    // Reload tabel pengguna setelah menutup SweetAlert
                                    location.reload();
                                });
                            } else {
                                Swal.fire('Gagal', response.message, 'error');
                            }
                        },
                        error: function() {
                            // Tampilkan SweetAlert jika terjadi kesalahan
                            Swal.fire('Error', 'Terjadi kesalahan saat menghapus pengguna.', 'error');
                        }
                    });
                }
            });
        });

        $('#menuoperator').last().addClass("active");

        // Add an event listener to the form submit button
        $('form').submit(function(event) {
            // Array to store error messages
            var errorMessages = [];
            var email = $('#email').val();




            // Check if any of the required fields are empty
            $(this).find('input[type="text"], input[type="email"], input[type="password"]').each(function() {
                if ($(this).val() === '') {
                    var fieldName = $(this).attr('name');
                    errorMessages.push(capitalizeFirstLetter(fieldName) + ' belum diisi.');
                }
            });

            // Check if the password and password_confirm fields match
            var password = $('#password').val();
            var passwordConfirm = $('#password_confirm').val();

            if (password !== passwordConfirm) {
                errorMessages.push('Password dan konfirmasi password tidak sesuai.');
            }

            // Check password complexity (uppercase, lowercase, number, and special character)
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/;
            if (!passwordRegex.test(password)) {
                errorMessages.push('Password harus mengandung gabungan huruf besar, huruf kecil, angka, dan karakter khusus.');
            }

            // Check password length (minimum 6 characters)
            if (password.length < 6) {
                errorMessages.push('Password harus memiliki minimal 6 karakter.');
            }

            // Display SweetAlert if there are any error messages
            if (errorMessages.length > 0) {
                event.preventDefault(); // prevent form submission
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    html: errorMessages.join('<br>')
                });
            }
        });

        // Function to capitalize the first letter of a string
        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        function togglePasswordVisibility(inputField, toggleButton) {
            var type = inputField.attr('type') === 'password' ? 'text' : 'password';
            inputField.attr('type', type);
            toggleButton.children('i').toggleClass('fa-eye fa-eye-slash');
        }

        // Toggle password visibility for the password field
        $('#toggle-password').on('click', function() {
            var passwordField = $('#password');
            togglePasswordVisibility(passwordField, $(this));
        });

        // Toggle password visibility for the password_confirm field
        $('#toggle-password-confirm').on('click', function() {
            var passwordConfirmField = $('#password_confirm');
            togglePasswordVisibility(passwordConfirmField, $(this));
        });

        // Rest of your existing JavaScript code...
    });
</script>