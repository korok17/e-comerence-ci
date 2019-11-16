<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Data User
        </div>
        <div class="panel-body">

            <?php
            echo form_open_multipart('users/edit', 'role="form" class="form-horizontal"');
            echo form_hidden('id_user',$user['id_user']);
            ?>


            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NAMA LENGKAP
                </label>
                <div class="col-sm-9">
                    <input type="text" name="nama_lengkap" value="<?php echo $user['nama_lengkap'];?>" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    USERNAME
                </label>
                <div class="col-sm-9">
                    <input type="text" name="username" value="<?php echo $user['username'];?>" placeholder="MASUKAN USERNAME" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    PASSWORD
                </label>
                <div class="col-sm-9">
                    <input type="password" name="password" placeholder="MASUKAN PASSWORD" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    LEVEL USER
                </label>
                <div class="col-sm-2">
                    <?php
                    echo cmb_dinamis('id_level_user', 'tbl_level_user', 'nama_level', 'id_level_user',$user['id_level_user']);
                    ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NAMA BIDANG <?php echo $user['nama_bidang'] ?>
                </label>
                <div class="col-sm-2">
                    <select name="nama_bidang" class="form-control" id="nama_bidang">
                        <?php
                        $bulan = array("", "BIDANG PBB", "BIDANG PERENCANAAN", "BIDANG PENAGIHAN", "BIDANG BPHTB", "BIDANG UMUM", "DEFAULT", "KABAN", "OPERATOR");
                        for($a=1;$a<=8;$a++){
                             if($a==$user['nama_bidang']){ 
                                $pilih="selected";
                             }else{
                                $pilih="";
                             }
                            echo("<option value=\"$bulan[$a]\" $pilih>$bulan[$a]</option>"."\n");
                        }
                        ?>
                      </select>
                </div>
                </div>
            <!--
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    Foto
                </label>
                <div class="col-sm-2">
                    <input type="file" name="userfile">
                    <img src="<?php //echo base_url().'uploads/foto_user/'.$user['foto']?>" width="200">
                </div>
            </div>
            -->
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" name="submit" class="btn btn-danger  btn-sm">SIMPAN</button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('users', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>