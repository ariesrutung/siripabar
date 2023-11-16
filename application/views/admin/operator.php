<style>
    th,
    td {
        color: #000;
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
                                                    <a href="#" class="btn btn-primary btnEditOperator" data-backdrop="static" data-user-id="<?php echo $op->id; ?>">
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
                ashdasdhas
            </div>
        </div>
    </div>
</div>

<div id="modalEditOperator" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Operator</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ashdasdhas
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        $(document).ready(function() {
            $('.btnEditOperator').on('click', function() {

                // Buka modal
                $('#modalEditOperator').modal('show');
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
        });
    });
</script>