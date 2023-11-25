<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />


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
                            <table class="table datatable m-t-20" id="activityTable">
                                <thead>
                                    <tr>
                                        <th class="text-center w-5">No</th>
                                        <th>Waktu</th>
                                        <th>Aktivitas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($logs as $key => $log) : ?>
                                        <tr>
                                            <td class="text-center"><?= $key + 1 ?></td>
                                            <td><?= $log->waktu ?></td>
                                            <td onclick="filterByUser('<?= $log->user_id ?>')"><?= $log->activity ?></td>
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

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer="defer"></script>

<script>
    $(document).ready(function() {
        $('#menulog').last().addClass("active");
    });
</script>
<script>
    $(document).ready(function() {
        // Inisialisasi DataTable
        var table = $('#activityTable').DataTable();
    });
</script>
</body>

</html>