<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-12/css/all.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/js/icheck/skins/square/red.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin/vendors/sweetalert/sweetalert.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<?php
if ($this->uri->segment(1) != 'auth' && $this->uri->segment(1) != 'portal-login' && $this->uri->segment(1) != 'underconstruction' && $title == 'Page Not Found') { ?>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
        <?php } else { ?>

            <body class="hold-transition login-page">

            <?php } ?>
            <!-- BEGIN: Footer-->
            <?php
            if ($this->uri->segment(1) != 'auth' && $this->uri->segment(1) != 'underconstruction' && $title != 'Page Not Found') {
                echo $navbar;
                echo $sidbar;
            }
            echo $content;
            if ($this->uri->segment(1) != 'auth' && $this->uri->segment(1) != 'underconstruction' && $title != 'Page Not Found') {
                echo $footer;
            }
            ?>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url(); ?>assets/admin/vendors/sweetalert2/sweetalert2.all.min.js" type="text/javascript"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- ChartJS -->
        <script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
        <script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- DataTables -->
        <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
        <script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url() ?>assets/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
        <script src="<?= base_url() ?>assets/dist/js/icheck.min.js"></script>
        <script src="<?= base_url() ?>assets/dist/js/zepto.js"></script>
        <script crossorigin="anonymous" src="https://polyfill.io/v3/polyfill.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
        <?php include(APPPATH . 'views/admin/portal/ajax/' . $this->uri->segment(1) . '.php'); ?>
        <!-- <script src="<?= base_url() ?>assets/dist/js/scr.js"></script> -->
        <script type="text/javascript">
            <?php if ($this->session->flashdata('alert')) { ?>
                $(document).ready(function() {
                    Swal.fire({
                        title: 'Gagal!',
                        text: '<?php echo $this->session->flashdata('alert'); ?>',
                        type: 'error',
                        confirmButtonClass: "btn btn-danger",
                        buttonsStyling: false
                    })
                });
            <?php } elseif ($this->session->flashdata('suc')) { ?>
                $(document).ready(function() {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: '<?php echo $this->session->flashdata('suc'); ?>',
                        type: 'success',
                        confirmButtonClass: "btn btn-danger",
                        buttonsStyling: false
                    })
                });
            <?php } elseif ($this->session->flashdata('message')) { ?>
                $(document).ready(function() {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: '<?php echo $this->session->flashdata('message'); ?>',
                        type: 'success',
                        confirmButtonClass: "btn btn-danger",
                        buttonsStyling: false
                    })
                });
            <?php } ?>
        </script>
        <script>
            $(function() {
                $("#slider").DataTable();
                $("#verifikasi").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            });
        </script>
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
    </body>

</html>