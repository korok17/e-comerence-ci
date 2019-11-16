 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Barang</h1>
                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <a href="<?= base_url('form_barang') ?>" class="card-title float-sm-right btn btn-block btn-outline-primary btn-sm">Tambah</a>
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
                     <table id="page_barang" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>nama barang</th>
                                 <th>jenis barang</th>
                                 <th>kategori barang</th>
                                 <th>stok barang</th>
                                 <th>harga barang</th>
                                 <th>gambar barang</th>
                                 <th>action</th>
                             </tr>
                         </thead>
                     </table>
                 </div>
             </div>
         </div>
     </section>
 </div>