 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Kategori Barang</h1>
                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <a href="http://" class="card-title float-sm-right btn btn-block btn-outline-primary btn-sm" data-toggle="modal" data-target="#kategori">Tambah</a>
                     </ol>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">

             <div class="card card-info">
                 <div class="card-header">
                     <h3 class="card-title">DataTable with default features</h3>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body">
                     <table id="page_kategori_barang" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Kategori Barang</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                     </table>
                 </div>
             </div>
         </div>
     </section>
 </div>

 <div class="modal fade" id="kategori">
     <form class="saveForm form col s12" method="post" action="#" id="saveForm" name="tambah" enctype="multipart/form-data">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title">Tambah</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <input type="hidden" id="id" name="id">
                 <div class="card-body">
                     <div class="form-group">
                         <input type="text" name="kategori_barang" id="kategori_barang" class="form-control" placeholder="kategori barang">
                     </div>
                 </div>
                 <div class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <input type="submit" class="btn btn-primary submit" name="action" value="save" id="btnok" />
                 </div>
             </div>

         </div>
         <!-- /.modal-content -->
     </form>
 </div>