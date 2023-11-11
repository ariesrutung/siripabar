<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah Data</title>
</head>

<body>

    <h2>Form Tambah Data</h2>

    <?php echo form_open_multipart('admin/dtkontrak/proses_tambah_data'); ?>

    <label>Tanggal:</label>
    <input type="date" name="tanggal" required><br><br>

    <label>Gambar:</label>
    <input type="file" name="gambar" required><br><br>

    <label>Text:</label>
    <input type="text" name="text" required><br><br>

    <label>Angka:</label>
    <input type="number" name="angka" required><br><br>

    <input type="submit" value="Tambah Data">
    <?php echo form_close(); ?>

</body>

</html>