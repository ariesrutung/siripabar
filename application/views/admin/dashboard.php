<style>
    .countJumlah .card {
        margin-bottom: 1.875rem;
        background-color: #fff;
        transition: all .5s ease-in-out;
        position: relative;
        border: 1px solid #d2d9f9;
        border-radius: 0.25rem;
        box-shadow: 0px 0px 13px 0px rgba(82, 63, 105, 0.05);
        height: 160px;
    }
</style>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Selamat Datang Kembali!</h4>
                </div>
            </div>
            <!-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
                </ol>
            </div> -->
        </div>

        <div class="row countJumlah">
            <div class="col-lg-3 col-sm-3">
                <div class="card">
                    <div class="stat-widget-one card-body">
                        <div class="stat-icon d-inline-block">
                            <i class="ti-money text-success border-success"></i>
                        </div>
                        <div class="stat-content d-inline-block">
                            <div class="stat-text">D. I. Kewenangan Pusat</div>
                            <div class="stat-digit"><?php echo $jumlahPusat; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="card">
                    <div class="stat-widget-one card-body">
                        <div class="stat-icon d-inline-block">
                            <i class="ti-user text-primary border-primary"></i>
                        </div>
                        <div class="stat-content d-inline-block">
                            <div class="stat-text">D. I. Kewenangan Provinsi</div>
                            <div class="stat-digit"><?php echo $jumlahProvinsi; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="card">
                    <div class="stat-widget-one card-body">
                        <div class="stat-icon d-inline-block">
                            <i class="ti-layout-grid2 text-pink border-pink"></i>
                        </div>
                        <div class="stat-content d-inline-block">
                            <div class="stat-text">D. I. Kewenangan Kab/Kota</div>
                            <div class="stat-digit"><?php echo $jumlahKabKota; ?></Php>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="card">
                    <div class="stat-widget-one card-body">
                        <div class="stat-icon d-inline-block">
                            <i class="ti-layout-grid2 text-pink border-pink"></i>
                        </div>
                        <div class="stat-content d-inline-block">
                            <div class="stat-text">D. I. Non Status</div>
                            <div class="stat-digit"><?php echo $jumlahNonStatus; ?></Php>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Kontrak</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="ct-bar-chart mt-5"></div> -->
                        <canvas id="barChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daerah Irigasi per Kab/Kota</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="ct-pie-chart"></div> -->
                        <canvas id="pieChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Exam Result</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table student-data-table m-t-20">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Grade Point</th>
                                        <th>Percent Form</th>
                                        <th>Percent Upto</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>English</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Bangla</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>English</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-6 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Timeline</h4>
                    </div>
                    <div class="card-body">
                        <div class="widget-timeline">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge primary"></div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>10 minutes ago</span>
                                        <h6 class="m-t-5">Youtube, a video-sharing website, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge warning">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>20 minutes ago</span>
                                        <h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge danger">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>30 minutes ago</span>
                                        <h6 class="m-t-5">Google acquires Youtube.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge success">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>15 minutes ago</span>
                                        <h6 class="m-t-5">StumbleUpon is acquired by eBay. </h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge warning">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>20 minutes ago</span>
                                        <h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge dark">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>20 minutes ago</span>
                                        <h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class="timeline-badge info">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>30 minutes ago</span>
                                        <h6 class="m-t-5">Google acquires Youtube.</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-xxl-6 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Notice Board</h4>
                    </div>
                    <div class="card-body">
                        <div class="recent-comment m-t-15">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object mr-3" src="./images/avatar/4.png" alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading text-primary">john doe</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class="comment-date">10 min ago</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object mr-3" src="./images/avatar/2.png" alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading text-success">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class="comment-date">1 hour ago</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object mr-3" src="./images/avatar/3.png" alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading text-danger">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <div class="comment-date">Yesterday</div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object mr-3" src="./images/avatar/4.png" alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading text-primary">john doe</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class="comment-date">10 min ago</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object mr-3" src="./images/avatar/2.png" alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading text-success">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class="comment-date">1 hour ago</p>
                                </div>
                            </div>
                            <div class="media no-border">
                                <div class="media-left">
                                    <a href="#"><img class="media-object mr-3" src="./images/avatar/3.png" alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading text-info">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <div class="comment-date">Yesterday</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Todo</h4>
                    </div>
                    <div class="card-body px-0">
                        <div class="todo-list">
                            <div class="tdl-holder">
                                <div class="tdl-content widget-todo2 mr-4">
                                    <ul id="todo_list">
                                        <li><label><input type="checkbox"><i></i><span>Get up</span><a href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox"><i></i><span>Don't give up the
                                                    fight.</span><a href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox" checked><i></i><span>Do something
                                                    else</span><a href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a href='#' class="ti-trash"></a></label></li>
                                        <li><label><input type="checkbox"><i></i><span>Don't give up the
                                                    fight.</span><a href='#' class="ti-trash"></a></label></li>
                                    </ul>
                                </div>
                                <div class="px-4">
                                    <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-xxl-6 col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-facebook">
                                <span class="s-icon"><i class="fa fa-facebook"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-linkedin">
                                <span class="s-icon"><i class="fa fa-linkedin"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-googleplus">
                                <span class="s-icon"><i class="fa fa-google-plus"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-twitter">
                                <span class="s-icon"><i class="fa fa-twitter"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="year-calendar"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Expense</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table student-data-table m-t-20">
                                <thead>
                                    <tr>
                                        <th>Expense Type</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            $2000
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">Paid</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            $2000
                                        </td>
                                        <td>
                                            <span class="badge badge-warning">Pending</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            $2000
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">Paid</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            $2000
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Due</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            $2000
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">Paid</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Parse data from PHP to JavaScript
    var dataKontrak = <?php echo $dataKontrak; ?>;

    // Prepare data for Chart.js
    var labels = [];
    var data = [];
    var colors = [];

    for (var i = 0; i < dataKontrak.length; i++) {
        labels.push(dataKontrak[i].tahun_sumberdana);
        data.push(dataKontrak[i].jumlah_kontrak);
        // Generate random color for each bar
        colors.push('rgba(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ', 0.7)');
    }

    // Create Bar Chart using Chart.js
    var ctx = document.getElementById('barChart').getContext('2d');
    var barChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Jumlah Kontrak',
                data: data,
                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    min: 0
                }
            }
        }
    });

    var di_kabkota = <?php echo $di_kabkota; ?>;

    // Prepare data for Chart.js
    var labels = [];
    var data = [];
    var colors = [];

    for (var i = 0; i < di_kabkota.length; i++) {
        labels.push(di_kabkota[i].kabupaten);
        data.push(di_kabkota[i].jumlah_daerah_irigasi);
        // Generate random color for each slice
        colors.push('rgba(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ', 0.7)');
    }

    // Create Pie Chart using Chart.js
    var ctx = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: colors
            }]
        }
    });
</script>