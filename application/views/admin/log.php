<style>
    #lapIrigasi {
        padding: 10px;
    }

    #lapIrigasi * {
        color: #000;
    }

    hr {
        margin-top: 0px;
        margin-bottom: 1rem;
    }

    .table-responsive * {
        color: #000;
    }

    section {
        margin: 15px;
    }

    .form-group {
        margin-left: 10px;
        margin-right: 10px;
    }

    .modal.fade.modalSkema.show * {
        color: #000;
    }

    .modalSkema .gb {
        height: auto !important;
        padding: 0 !important;
        border: 0 !important;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background: #d3d3d3;
        opacity: 1;
    }

    td strong {
        text-transform: capitalize;
    }
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Log Aktivitas Pengguna</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table student-data-table m-t-20">
                                <thead>
                                    <tr>
                                        <th class="text-center w-5">User ID</th>
                                        <th>Waktu</th>
                                        <th>Aktivitas</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($logs as $log) : ?>
                                        <tr>
                                            <td class="text-center"><?= $log->user_id ?></td>
                                            <td><?= $log->waktu ?></td>
                                            <td><?= $log->activity ?></td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-info btn-sm">
                                                    <span class="icon">
                                                        <i class="fa fa-eye text-white"></i>
                                                    </span>
                                                    <span class="text-white"> Detail</span>
                                                </a>

                                                <a href="#" class="btn btn-primary btn-sm">
                                                    <span class="icon">
                                                        <i class="fa fa-user text-white"></i>
                                                    </span>
                                                    <span class="text-white"> User</span>
                                                </a>
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


<script>
    $(document).ready(function() {
        $('#menulog').last().addClass("active");
    });
</script>
</body>

</html>