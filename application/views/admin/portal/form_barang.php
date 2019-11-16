<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form col s12" method="post" action="#" id="saveForm" <?php if ($this->uri->segment(2) != "") { ?>name="update" <?php } else { ?> name="tambah" <?php } ?> enctype="multipart/form-data">
                    <div class="card-body">
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                            <select name="kategori" id="kategori" class="form-control">
                                <!-- select -->
                                <option>---</option>
                                <?php foreach ($kategori as $val) {  ?>
                                    <option value="<?= $val->nama_kategori; ?>"><?= $val->nama_kategori; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="jenis_barang">jenis Barang</label>
                            <input type="text" name="jenis_barang" class="form-control" id="jenis_barang">
                        </div>
                        <div class="form-group">
                            <label for="gamabar_barang">Gambar Barang</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="gambar_barang" class="custom-file-input" id="gamabar_barang">
                                    <label class="custom-file-label" for="gamabar_barang">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">Harga Barang</label>
                            <input type="text" name="harga_barang" class="form-control" id="harga_barang">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_barang">jumlah Barang</label>
                            <input type="text" name="jumlah_barang" class="form-control" id="jumlah_barang">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_barang">deskripsi Barang</label>
                            <textarea type="text" name="deskripsi_barang" class="form-control" id="deskripsi_barang"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" name="submit" id="btnBarang" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
    </div>
</div>