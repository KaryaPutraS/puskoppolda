<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $judul_browser; ?> - Koperasi Polda Kalsel</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>icon.ico" type="image/x-icon" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url(); ?>assets/theme_admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url(); ?>assets/theme_admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo base_url(); ?>assets/theme_admin/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/theme_admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!-- <?php
            foreach ($css_files as $file) { ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php } ?> -->


    <link href="<?php echo base_url(); ?>assets/theme_admin/css/jquery-ui-1.8.21.custom.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/theme_admin/css/custome.css" rel="stylesheet" type="text/css" />

    <!-- jQuery 2.0.2 -->
    <script src="<?php echo base_url(); ?>assets/theme_admin/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/theme_admin/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/theme_admin/js/jqClock.min.js" type="text/javascript"></script>

    <!-- <?php foreach ($js_files as $file) { ?>
        <script src="<?php echo $file; ?>"></script>
    <?php } ?> -->

    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/theme_admin/js/AdminLTE/app.js" type="text/javascript"></script>

    <!-- <?php foreach ($js_files2 as $file) { ?>
        <script src="<?php echo $file; ?>"></script>
    <?php } ?> -->
    <!-- Waktu -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".jam").clock({
                "format": "24",
                "calendar": "false"
            });
        });
    </script>

</head>

<body class="skin-blue">
    <!-- header logo: style can be found in header.less -->
    <header class="header">
        <a href="<?php echo site_url(); ?>" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            Puskoppolda Kalsel
        </a>
        <!-- Header Navbar: style can be found in header.less -->

    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->


        <!-- Right side column. Contains the navbar and content of the page -->
        <aside>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $judul_utama; ?>
                    <small> <?php echo $judul_sub; ?> </small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-calendar"></i> <?php echo date('d F Y'); ?> &nbsp;
                        <i class="fa fa-clock-o"></i> <span class="jam"></span>
                    </li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <?php
                if (!empty($isi)) {
                    echo $isi;
                }
                ?>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
</body>

</html>