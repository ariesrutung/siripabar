<style>
    form.form-horizontal * {
        color: #000;
    }
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Unduh Laporan Pengaduan</h4>
                    </div>
                    <div class="card-body">
                        <div class="horizontal-form">
                            <form class="form-horizontal">
                                <p class="mt-4">Filter data laporan pengaduan yang akan diunduh</p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group px-o py-0 mt-0 mb-0">
                                            <label class="py-0 mt-0 mb-0 control-label">Pilih Kab/Kota</label>
                                            <div class="col-sm-12 px-0">
                                                <select class="form-control" name="kabupaten" id="kabupaten">
                                                    <option value="Semua">- Semua Kabupaten/Kota -</option>
                                                    <option value="92.02">KAB. MANOKWARI</option>
                                                    <option value="92.71">KOTA SORONG</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group px-o py-0 mt-0 mb-0">
                                            <label class="py-0 mt-0 mb-0 control-label">Pilih Tanggal Mulai</label>
                                            <div class="col-sm-12 px-0">
                                                <input type="date" class="form-control" name="startdate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group px-o py-0 mt-0 mb-0">
                                            <label class="py-0 mt-0 mb-0 control-label">Pilih Tanggal Akhir</label>
                                            <div class="col-sm-12 px-0">
                                                <input type="date" class="form-control" name="todate">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <div class="form-group  px-o py-0 mt-0 mb-0">
                                            <label class="py-0 mt-0 mb-2 control-label">Pilih Format Laporan</label><br>
                                            <label class="radio-inline col-sm-4 px-4">
                                                <input class="form-check-input" type="radio" name="formatcetak" id="pilihinfra" value="cetakpdf"> PDF</label>
                                            <label class="radio-inline col-sm-4 px-4">
                                                <input class="form-check-input" type="radio" name="formatcetak" id="pilihinfra" value="cetakexcel"> Excel</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="form-group  px-o py-0 mt-0 mb-0">
                                            <label class="py-0 mt-0 mb-2 control-label">Pilih Status Laporan</label><br>
                                            <label class="radio-inline col-sm-3 px-4">
                                                <input class="form-check-input" type="radio" name="statuslaporan" value="Menunggu"> Menunggu
                                            </label>
                                            <label class="radio-inline col-sm-3 px-4">
                                                <input class="form-check-input" type="radio" name="statuslaporan" value="Diterima"> Diterima</label>
                                            <label class="radio-inline col-sm-3 px-4">
                                                <input class="form-check-input" type="radio" name="statuslaporan" value="Ditolak"> Ditolak</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group  px-o py-0 mt-0 mb-0">
                                            <label class="py-0 mt-0 mb-2 control-label">Gambar Dokumentasi</label><br>
                                            <label class="radio-inline col-sm-3 px-4">
                                                <input class="form-check-input" type="radio" name="pilihangambar" value="1"> Ya
                                            </label>
                                            <label class="radio-inline col-sm-3 px-4">
                                                <input class="form-check-input" type="radio" name="pilihangambar" value="0"> Tidak</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group px-o py-0 mt-0 mb-0">
                                    <div class="col-sm-offset-2 col-sm-10 px-2">
                                        <button type="submit" class="btn btn-default btn-primary text-white">Unduh Laporan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>





<!-- jquery vendor -->
<script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/menubar/sidebar.js"></script>
<script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->
<script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/bootstrap.min.js">


</script>
<!-- bootstrap -->

<script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/morris-chart/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/morris-chart/morris.js"></script>
<script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/morris-chart/morris-init.js"></script>


<script src="<?php echo base_url(); ?>public/focus-theme/assets/js/scripts.js"></script>
<!-- scripit init-->

<script src="<?php echo base_url(); ?>public/focus-theme/vendor/global/global.min.js"></script>
<script src="<?php echo base_url(); ?>public/focus-theme/js/quixnav-init.js"></script>
<script src="<?php echo base_url(); ?>public/focus-theme/js/custom.min.js"></script>

<script src="<?php echo base_url(); ?>public/focus-theme/vendor/global/global.min.js"></script>
<script src="<?php echo base_url(); ?>public/focus-theme/js/quixnav-init.js"></script>
<script src="<?php echo base_url(); ?>public/focus-theme/js/custom.min.js"></script>

<script>
    $(document).ready(function() {
        $('#menuunduhlaporan').last().addClass("active");
    });
</script>
</body>

</html>