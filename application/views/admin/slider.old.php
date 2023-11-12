<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Slider</title>

    <head>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- Bootstrap CSS dan JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Bootstrap Toggle CSS dan JS -->
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    </head>
    <style>
        label.btn.btn-light.btn-sm.toggle-off {
            background-color: #969696;
            color: #fff;
        }
    </style>
</head>

<body>
    <h2>Form Input Slider</h2>

    <?php if (isset($error)) {
        echo $error;
    } ?>

    <?php echo form_open_multipart('admin/slider/add_slider'); ?>
    <label>Judul:</label>
    <input type="text" name="judul" required>
    <br>
    <label>Subjudul:</label>
    <input type="text" name="subjudul" required>
    <label>Gambar:</label>
    <input type="file" name="gambar" accept="image/*" required>
    <br>
    <label>Status:</label>
    <input type="radio" name="status" value="1" checked> Aktif
    <input type="radio" name="status" value="0"> Nonaktif
    <br>
    <input type="submit" value="Simpan">
    <?php echo form_close(); ?>


    <div class="container mt-5">
        <h2>Daftar Slider</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Subjudul</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sliders as $key => $slider) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $slider->judul ?></td>
                        <td><?= $slider->subjudul ?></td>
                        <td><img src="<?= base_url('upload/slider/' . $slider->gambar) ?>" alt="<?= $slider->judul ?>" width="50"></td>
                        <td>
                            <input type="checkbox" data-id="<?= $slider->id ?>" <?= $slider->status == 1 ? 'checked' : '' ?> data-size="sm" class="toggle-status" data-toggle="toggle">
                        </td>
                        <td>
                            <a href="<?= base_url('admin/slider/edit/' . $slider->id) ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?= base_url('admin/slider/hapus/' . $slider->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus slider ini?')">Hapus</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            // Inisialisasi toggle switch
            $('.toggle-status').bootstrapToggle();

            // Toggle Switch untuk mengubah status
            $('.toggle-status').change(function() {
                var sliderId = $(this).data('id');
                var status = $(this).prop('checked') ? 1 : 0;

                // Lakukan AJAX request untuk mengubah status di database
                $.ajax({
                    url: '<?= base_url('admin/slider/ubah_status') ?>',
                    type: 'POST',
                    data: {
                        id: sliderId,
                        status: status
                    },
                    success: function(response) {
                        console.log(response);
                        // Tambahkan logika atau tindakan lain setelah berhasil mengubah status
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>

</body>

</html>