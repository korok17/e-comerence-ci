<?php
$lvl = $this->session->level;
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="row">
                <div class="col-lg">
                    <a href="<?php echo base_url('menus/add') ?>" class="btn btn-primary mb-3">Add New Menu</a>

                    <table id="mytable" class="table table-hover">
                        <thead>
                            <tr>
                                <!--<th>NO</th>-->
                                <th>NAMA MENU</th>
                                <th>LINK</th>
                                <th>IS MAIN MENU</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<!-- 
<script src="<?php echo base_url() ?>assets/js/jquery-1.12.3.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#mytable').DataTable({
            "processing": true,
            "serverSide": true,
            //"ajax": "data.php"
            "ajax": '<?php echo site_url('menus/data'); ?>'

        });
    });
</script> -->