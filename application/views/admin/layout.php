<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $title; ?> | SIRIPABAR</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public/focus-theme/images/favicon.png">
    <link href="<?php echo base_url(); ?>public/focus-theme/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?php echo base_url('/') ?>" class="brand-logo">
                <img class="logo-abbr" src="<?php echo base_url(); ?>public/focus-theme/images/logo.png" alt="">
                <img class="logo-compact" src="<?php echo base_url(); ?>public/focus-theme/images/logo-text.png" alt="">
                <img class="brand-title" src="<?php echo base_url(); ?>public/focus-theme/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?php echo base_url(); ?>public/focus-theme/app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>public/focus-theme/email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>public/focus-theme/page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/index.html">Dashboard 1</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/index2.html">Dashboard 2</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Apps</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="<?php echo base_url(); ?>public/focus-theme/email-compose.html">Compose</a></li>
                                    <li><a href="<?php echo base_url(); ?>public/focus-theme/email-inbox.html">Inbox</a></li>
                                    <li><a href="<?php echo base_url(); ?>public/focus-theme/email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/app-calender.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-chart-bar-33"></i><span class="nav-text">Charts</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/chart-flot.html">Flot</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/chart-morris.html">Morris</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/chart-chartjs.html">Chartjs</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/chart-chartist.html">Chartist</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/chart-sparkline.html">Sparkline</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Components</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">Bootstrap</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-accordion.html">Accordion</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-alert.html">Alert</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-badge.html">Badge</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-button.html">Button</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-modal.html">Modal</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-button-group.html">Button Group</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-list-group.html">List Group</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-media-object mr-3.html">Media Object</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-card.html">Cards</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-carousel.html">Carousel</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-dropdown.html">Dropdown</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-popover.html">Popover</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-progressbar.html">Progressbar</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-tab.html">Tab</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-typography.html">Typography</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-pagination.html">Pagination</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/ui-grid.html">Grid</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-plug"></i><span class="nav-text">Plugins</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/uc-select2.html">Select 2</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/uc-nestable.html">Nestedable</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/uc-toastr.html">Toastr</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/map-jqvmap.html">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span class="nav-text">Widget</span></a></li>
                    <li class="nav-label">Forms</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-form"></i><span class="nav-text">Forms</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/form-element.html">Form Elements</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/form-wizard.html">Wizard</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Extra</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/page-register.html">Register</a></li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="<?php echo base_url(); ?>public/focus-theme/page-error-400.html">Error 400</a></li>
                                    <li><a href="<?php echo base_url(); ?>public/focus-theme/page-error-403.html">Error 403</a></li>
                                    <li><a href="<?php echo base_url(); ?>public/focus-theme/page-error-404.html">Error 404</a></li>
                                    <li><a href="<?php echo base_url(); ?>public/focus-theme/page-error-500.html">Error 500</a></li>
                                    <li><a href="<?php echo base_url(); ?>public/focus-theme/page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>public/focus-theme/page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->


        <?php
        if (isset($_view) && $_view)
            $this->load->view($_view);
        ?>


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/quixnav-init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/custom.min.js"></script>

    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/chartist/js/chartist.min.js"></script>

    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="<?php echo base_url(); ?>public/focus-theme/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

</body>

</html>