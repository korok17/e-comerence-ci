 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">SLIDER</h1>
                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <a href="http://" class="card-title float-sm-right btn btn-block btn-outline-primary btn-sm" data-toggle="modal" data-target="#modal_lg">Tambah</a>
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
                     <table id="page_slider" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>title</th>
                                 <th>subtitle</th>
                                 <th>slider</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                     </table>
                 </div>
             </div>
         </div>
     </section>
 </div>

 <div class="modal fade modal_lg" id="modal_lg">
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
                         <input type="text" name="title" id="title" class="form-control" placeholder="title">
                     </div>
                     <div class="form-group">
                         <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="subtitle">
                     </div>
                     <div class="form-group">
                         <!-- <div class="input-group">
                             <div class="custom-file"> -->
                         <input type="file" name="slider_gambar" id="slider_gambar" placeholder="gambar slider">
                         <!-- <label class="custom-file-label" for="slider">Choose file</label> -->
                         <!-- </div>
                         </div> -->
                     </div>
                     <p>Slider : Maximum file upload size 2MB. </p>
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