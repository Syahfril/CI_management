<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets-backend/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets-backend/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Juiter FC Official Site - Admin Page</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets-backend/css/bootstrap.min.css') ?>">
    <link href="<?= base_url('assets-backend/css/light-bootstrap-dashboard.css?v=2.0.0') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets-backend/css/demo.css') ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- <link href="../assets-backend/css/demo.css" rel="stylesheet" /> -->
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color= "blue" data-image="<?= base_url('assets-backend/img/sidebar-5.jpg')?>">

                <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag-->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text">
                        <?php
                            if (session()->has('greeting')) {
                                echo session('greeting');

                            } else {
                                echo "Hallo, User";
                            }
                        ?>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../adm">
                            <!-- <i class="nc-icon nc-chart-pie-35"></i> -->
                            <p>Schedule</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../adm/moveToScore">
                            <p>Score</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../adm/moveToPlayer">
                            <p>Player</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../adm/moveToStaff">
                            <p>Staff</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../finance">
                            <p>Finance</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../image">
                            <p>Image</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../login/logout">
                            <p>Log Out</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">

            <?= $this-> renderSection('content'); ?>

        </div>
    </div>
</body>

<script src="<?= base_url('assets-backend/js/core/jquery.3.2.1.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets-backend/js/core/popper.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets-backend/js/core/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets-backend/js/plugins/bootstrap-switch.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="<?= base_url('assets-backend/js/plugins/chartist.min.js') ?>"></script>
<script src="<?= base_url('assets-backend/js/plugins/bootstrap-notify.js') ?>"></script>
<script src="<?= base_url('assets-backend/js/light-bootstrap-dashboard.js?v=2.0.0') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets-backend/js/demo.js') ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets-backend/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>

</html>