<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/datatables/dataTables.bootstrap.css">
<?php
$lvl = $this->session->id_level_user;
?>
<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
   <?php echo anchor('users/rule','RULE USER',array('class'=>'btn btn-danger btn-sm'));?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Tambah Data
			<?php echo anchor('users/add','<i class="fa fa-pencil-square-o" aria-hidden="true"></i>',"title='Tambah Data'");?>
            <!--
            <div class="panel-tools">
                <?php echo anchor('users/add','<i class="fa fa-pencil-square-o" aria-hidden="true"></i>',"title='Dambah Data'");?>
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
            </div>
            -->
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA LENGKAP</th>
                        <th>LEVEL</th>
                        <th>NAMA BIDANG</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>
<script src="<?php echo base_url()?>assets/js/jquery-1.12.3.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/js/dataTables.bootstrap.min.js"></script>
  <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('users/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    {"data": "nama_lengkap"},
                    {"data": "id_level_user"},
                    {"data": "nama_bidang"},
                    {"data": "aksi","width": "100px"},
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>